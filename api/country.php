<?php
    require '../config/connect.php';
    include '../data/countries_list.php';
    // echo $_SERVER['REQUEST_METHOD'];

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $query = "SELECT * FROM country";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($stmt->rowCount()>0){
            $data = $stmt->fetchAll();
            echo json_encode(['code'=>'200', 'status'=>'success', 'data'=>$data]);
        } else {
            echo json_encode(['code'=>'500', 'status'=>'fail', 'data'=>'No data found']);
        }
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $country_len = 0;
        foreach ($countries as $key => $value) {
            $country_len = $key + 1;

            $query="INSERT INTO country (name) VALUES (:name)";
            $stmt = $conn->prepare($query);
            $result = $stmt->execute([
                ':name' => $value,
            ]);
            
            if (count($countries) == $country_len) {
                echo json_encode(['code'=>'200', 'status'=>'success', 'data'=>'Record inserted Successfully']);
            }
        }
    }

?>