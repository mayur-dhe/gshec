<?php
    require '../config/connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $query = "SELECT * FROM scholar";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($stmt->rowCount()>0){
            $data = $stmt->fetchAll();
            echo json_encode(['status'=>'200', 'message'=>'success', 'data'=>$data]);
        } else {
            echo json_encode(['status'=>'500', 'message'=>'No data found', 'data'=>'']);
        }
    } 
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

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
        $encodedFileContent = $postData['cv'] ?? '';
        $encodedFileName = $postData['file_name'] ?? '';
        $profile_link = $postData['profile_link'] ?? '';
        $permanent_address = $postData['permanent_address'] ?? '';
        $phone_no = $postData['phone_no'] ?? '';
        $type_of_eng = $postData['type_of_eng'] ?? '';

        $visit_freq = $postData['visit_freq'] ?? '';
        $local_address = $postData['local_address'] ?? '';
        $local_work = $postData['local_work'] ?? '';
        $isRecommendations = $postData['isRecommendations'] ?? '';
        $recommendations = $postData['recommendations'] ?? [];


        if(!is_dir('uploadfile'))
        {
            mkdir ('uploadfile',0777);
        }

        $filename = '';
        if ($encodedFileContent) {
            $decodedFileContent = base64_decode($encodedFileContent); 
            // Save the file to the server
            $filename = 'uploadfile/'.uniqid().$encodedFileName;
            // move_uploaded_file($filename, $decodedFileContent);
            file_put_contents($filename, $decodedFileContent);
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
                    ':cv' => $filename,
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
            echo json_encode(['flag'=>true, 'status'=>'200', 'message'=>'Thank You for connecting us !!']);
        } else {
            echo json_encode(['flag'=>false, 'status'=>'500', 'message'=>'Failed to save data. Please, try again !']);
        }
        return true;
    }
?>