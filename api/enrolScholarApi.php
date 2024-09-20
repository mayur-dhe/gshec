<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
require '../vendor/autoload.php';
require '../config/connect.php';

$type = isset($_GET['type']) ? $_GET['type'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($type == 'all') {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $rowsPerPage = isset($_GET['rowsPerPage']) ? (int)$_GET['rowsPerPage'] : 10;
        $offset = ($page - 1) * $rowsPerPage;

        // Query to get total number of records
        $totalRecordsQuery = "SELECT COUNT(*) as total FROM scholar";
        $totalRecordsQuery_stmt = $conn->prepare($totalRecordsQuery);
        $totalRecordsQuery_stmt->execute();
        $totalRecords = $totalRecordsQuery_stmt->fetch()['total'];

        // Query to fetch paginated records
        $data = [];
        $query = "SELECT `name`, `email`, `address`, `city`, `state`, `country`, `work_type`, `work_name`, `area_of_work`, `designation`, `cv`, `profile_link`, `permanent_address`, `phone_no`, `type_of_eng`, `visit_freq`, `local_address`, `local_work`, `created_at`
                FROM scholar 
                ORDER BY id DESC
                LIMIT $rowsPerPage OFFSET $offset";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($stmt->rowCount()>0){
            $data = $stmt->fetchAll();
            // Merge the static CV value with the fetched data
            foreach ($data as &$row) {
                if ($row['cv']) {
                    $row['cv'] = $host.$row['cv'];
                }
            }
            $response = array('status'=>'200', 'message'=>'success', 'data'=>$data, "totalRecords" => $totalRecords);
        } else {
            $response = array('status'=>'500', 'message'=>'No data found', 'data'=>'');
        }
        
    
    } else if ($type == 'export') {
        $token = isset($_GET['token']) ? $_GET['token'] : '';
        $stored_token = '';
        $filename = 'Enrollment List';

        $stmt = $conn->prepare("SELECT token FROM token WHERE status = 1 ORDER BY id DESC LIMIT 1");
        if ($stmt->execute()) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0){
                $data = $stmt->fetch();
                $stored_token = $data['token'];
            }
        }
        if ($token == $stored_token) {
            $stmt = $conn->prepare("SELECT `id`, `name`, `email`, `address`, `city`, `state`, `country`, `work_type`, `work_name`, `area_of_work`, `designation`, `cv`, `profile_link`, `permanent_address`, `phone_no`, `type_of_eng`, `visit_freq`, `local_address`, `local_work`, `created_at` FROM scholar WHERE status=1 ");
            $stmt->execute();
            $scholarData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($scholarData as &$scholar) {
                $stmt2 = $conn->prepare("SELECT * FROM scholar_recommendation WHERE scholar_id = :scholar_id");
                $stmt2->bindParam(':scholar_id', $scholar['id'], PDO::PARAM_INT);
                $stmt2->execute();
                $scholar['recommendations'] = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            }
        
            // generate Excel
            $excel_data = [];
            $excel_data[] = ['Sr No', 'Name', 'Email ID', 'Work/Office Address', 'City', 'State', 'Country', 'Work Type', 'Name of Industry/Institution', 'Specify the broad area of industry/research/academics/etc. currently engaged with', 'Designation', 'CV', 'Profile Link', 'Permanent Address', 'Contact No', 'Type of Engagement with students and academic community', 'Frequency of visit to Goa', 'Local Address, if any', 'Name the industry/academic/institution/etc. in Goa to which professionally/academically collaborated, if any', 'Submitted At', 'Recommended Scholar Name', 'Recommended Scholar Email', 'Recommended Scholar Contact No', 'Recommended Scholar Designation', 'Recommended Scholar Affiliation'];
            $sr_no = 0;
            if (isset($scholarData)) {
                foreach ($scholarData as $value) :
                    $sr_no++;
                    $value_cv = '';
                    if ($value['cv']) {
                        $value_cv = $host.$value['cv'];
                    }

                    if ($value['recommendations']) {
                        foreach ($value['recommendations'] as $key => $recommendation) {
                            $isColumn = false;
                            if ($key==0) {
                                $isColumn = true;
                            }
                            
                            $excel_data[] = [
                                                $isColumn ? $sr_no : '',
                                                $isColumn ? $value['name'] : '',
                                                $isColumn ? $value['email'] : '',
                                                $isColumn ? $value['address'] : '',
                                                $isColumn ? $value['city'] : '',
                                                $isColumn ? $value['state'] : '',
                                                $isColumn ? $value['country'] : '',
                                                $isColumn ? $value['work_type'] : '',
                                                $isColumn ? $value['work_name'] : '',
                                                $isColumn ? $value['area_of_work'] : '',
                                                $isColumn ? $value['designation'] : '',
                                                $isColumn ? $value_cv : '',
                                                $isColumn ? $value['profile_link'] : '',
                                                $isColumn ? $value['permanent_address'] : '',
                                                $isColumn ? $value['phone_no'] : '',
                                                $isColumn ? $value['type_of_eng'] : '',
                                                $isColumn ? $value['visit_freq'] : '',
                                                $isColumn ? $value['local_address'] : '',
                                                $isColumn ? $value['local_work'] : '',
                                                $isColumn ? $value['created_at'] : '',
                                                $recommendation['name'],
                                                $recommendation['email'],
                                                $recommendation['phone_no'],
                                                $recommendation['designation'],
                                                $recommendation['affiliation'],
                                            ]; 
                        }
                    } else {
                        $excel_data[] = [
                            $sr_no,
                            $value['name'],
                            $value['email'],
                            $value['address'],
                            $value['city'],
                            $value['state'],
                            $value['country'],
                            $value['work_type'],
                            $value['work_name'],
                            $value['area_of_work'],
                            $value['designation'],
                            $value_cv,
                            $value['profile_link'],
                            $value['permanent_address'],
                            $value['phone_no'],
                            $value['type_of_eng'],
                            $value['visit_freq'],
                            $value['local_address'],
                            $value['local_work'],
                            $value['created_at'],
                            '',
                            '',
                            '',
                            '',
                            '',
                        ]; 
                    }
                endforeach;
            }

            // Create a new spreadsheet
            $spreadsheet = new Spreadsheet();
            // Get the active sheet
            $sheet = $spreadsheet->getActiveSheet();
            // Set cell values for the table headings
            $headings = array_shift($excel_data);
            $column = 'A';
            foreach ($headings as $heading) {
                $sheet->setCellValue($column . '1', $heading);
                $column++;
            }
            // Set cell values for the table content, including hyperlinks
            $row = 2;
            foreach ($excel_data as $rowData) {
                $column = 'A';
                foreach ($rowData as $value) {
                    $sheet->setCellValue($column . $row, $value);
                    $column++;
                }
                $row++;
            }
            // Adjust column widths based on content
            foreach (range('A', $sheet->getHighestColumn()) as $columnID) {
                $sheet->getColumnDimension($columnID)->setAutoSize(true);
            }

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');
            header('Cache-Control: max-age=0');
            header('Cache-Control: max-age=1');
            // Create a writer and save the file to the output stream
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');

            $response = array("status" => 200, "status_message" => "success", "message" => "Data fetched successfully");
        } else {
            $response = array("status" => 402, "status_message" => "failed", "message" => "Invalid Token");
        }
    } else {
        $response = array("status" => '401', "message" => "Error, No data found.");
    } 
    echo json_encode($response);
    exit();
} 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents("php://input"), true);

    $name = $postData['name'] ?? '';
    $email = $postData['email'] ?? '';
    $address = $postData['address'] ?? '';
    $city = $postData['city'] ?? '';
    $state = $postData['state'] ?? '';
    $country = $postData['country'] ?? '';
    $work_type = $postData['work_type'] ?? '';
    $work_name = $postData['work_name'] ?? '';
    $area_of_work = $postData['area_of_work'] ?? '';
    $designation = $postData['designation'] ?? '';
    $encodedFileContent = $postData['file'] ?? '';
    $fileName = $postData['file_name'] ?? '';
    $profile_link = $postData['profile_link'] ?? '';
    $permanent_address = $postData['permanent_address'] ?? '';
    $phone_no = $postData['phone_no'] ?? '';
    $type_of_eng = $postData['type_of_eng'] ?? '';

    $visit_freq = $postData['visit_freq'] ?? '';
    $local_address = $postData['local_address'] ?? '';
    $local_work = $postData['local_work'] ?? '';
    $isRecommendations = $postData['isRecommendations'] ?? '';
    $recommendations = $postData['recommendations'] ?? [];

    $filePath = '';
    if ($encodedFileContent) {
        $decodedFileContent = base64_decode($encodedFileContent);
        // Save the file to the server
        $filePath = 'uploads/'.uniqid().$fileName;
        file_put_contents('../'.$filePath, $decodedFileContent);
    }

    $query="INSERT INTO scholar (name, email, address, city, state, country, designation, cv, profile_link, permanent_address, phone_no, type_of_eng, work_type, work_name, area_of_work, visit_freq, local_address, local_work) 
            VALUES (:name, :email, :address, :city, :state, :country, :designation, :cv, :profile_link, :permanent_address, :phone_no, :type_of_eng, :work_type, :work_name, :area_of_work, :visit_freq, :local_address, :local_work)";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':address' => $address,
                ':city' => $city,
                ':state' => $state,
                ':country' => $country,
                ':designation' => $designation,
                ':cv' => $filePath,
                ':profile_link' => $profile_link,
                ':permanent_address' => $permanent_address,
                ':phone_no' => $phone_no,
                ':type_of_eng' => $type_of_eng,
                ':work_type' => $work_type,
                ':work_name' => $work_name,
                ':area_of_work' => $area_of_work,
                ':visit_freq' => $visit_freq,
                ':local_address' => $local_address,
                ':local_work' => $local_work,
            ]);
            
    if ($isRecommendations && $result) {
        // get last id
        $last_record = $conn->prepare("SELECT id FROM scholar ORDER BY id DESC LIMIT 1");
        $last_record->execute();
        $get_last_record_data = $last_record->fetch();
        $get_last_record_id = (int)$get_last_record_data["id"];
        
        foreach ($recommendations as $key => $value) {
            $query2="INSERT INTO scholar_recommendation (scholar_id, name, email, designation, phone_no, affiliation) 
                        VALUES (:scholar_id, :name, :email, :designation, :phone_no, :affiliation)";
            $stmt2 = $conn->prepare($query2);
            $result2 = $stmt2->execute([
                        ':scholar_id' => $get_last_record_id,
                        ':name' => $value['name'],
                        ':email' => $value['email'],
                        ':phone_no' => $value['contact_no'],
                        ':designation' => $value['designation'],
                        ':affiliation' => $value['affiliation'],
                    ]);
        }
    }

    if($result)
    {
        $response = array('flag'=>true, 'status'=>'200', 'message'=>'Thank You for connecting us !!');
    } else {
        $response = array('flag'=>false, 'status'=>'500', 'message'=>'Failed to save data. Please, try again !');
    }
    echo json_encode($response);
    exit;
}
?>