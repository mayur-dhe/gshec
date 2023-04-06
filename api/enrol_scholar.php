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
        $postData = json_decode(file_get_contents("php://input"), true);

        $name = $postData['name'] ?? '';
        $semail = $postData['email'] ?? '';
        $address = $postData['address'] ?? '';
        $city = $postData['inputCity'] ?? '';
        $state = $postData['state'] ?? '';
        $country = $postData['country'] ?? '';
        $worktype = $postData['wtype'] ?? '';
        $workname = $postData['wname'] ?? '';
        $areaofwork = $postData['arearsch'] ?? '';
        $visitfreq = $postData['frqvisit'] ?? '';
        $local_add = $postData['locadd'] ?? '';
        $local_inst = $postData['locwork'] ?? '';
        $other_name = $postData['osname'] ?? '';
        $other_email = $postData['osemail'] ?? '';
        
        $query="INSERT INTO scholar (name, address, city, state, country, worktype, workname, areaofwork, visitfreq, local_add, local_inst, othername, otheremail) 
                VALUES (:name, :address, :city, :state, :country, :worktype, :workname, :areaofwork, :visitfreq, :local_add, :local_inst, :othername, :otheremail)";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute([
                    ':name' => $name,
                    ':address' => $address,
                    ':city' => $city,
                    ':state' => $state,
                    ':country' => $country,
                    ':worktype' => $worktype,
                    ':workname' => $workname,
                    ':areaofwork' => $areaofwork,
                    ':visitfreq' => $visitfreq,
                    ':local_add' => $local_add,
                    ':local_inst' => $local_inst,
                    ':othername' => $other_name,
                    ':otheremail' => $other_email,
                ]);

        if($result)
        {
            echo json_encode(['flag'=>true, 'status'=>'200', 'message'=>'Thank You for connecting us !!']);
        } else {
            echo json_encode(['flag'=>false, 'status'=>'500', 'message'=>'Failed to save data. Please, try again !']);
        }
    }

?>