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
        $name = $_POST['sname'] ?? '';
        $semail = $_POST['semail'] ?? '';
        $address = $_POST['sadd'] ?? '';
        $city = $_POST['inputCity'] ?? '';
        $state = $_POST['state'] ?? '';
        $country = $_POST['country'] ?? '';
        $worktype = $_POST['wtype'] ?? '';
        $workname = $_POST['wname'] ?? '';
        $areaofwork = $_POST['arearsch'] ?? '';
        $visitfreq = $_POST['frqvisit'] ?? '';
        $local_add = $_POST['locadd'] ?? '';
        $local_inst = $_POST['locwork'] ?? '';
        $other_name = $_POST['osname'] ?? '';
        $other_email = $_POST['osemail'] ?? '';
        
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
            echo '<script>alert("Thank You for connecting to us.")</script>';
        } else {
            echo '<script>alert("Failed to save data, Please try again !")</script>';
        }
        header("Refresh:2; url=../enrol-me");
    }

?>