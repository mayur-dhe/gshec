<?php
require '../config/connect.php';
require '../config/token.php';

$type = isset($_GET['type']) ? $_GET['type'] : '';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($type == 'token') {
        $d = isset($_GET['d']) ? $_GET['d'] : '';
        if ($d == $stored_tokens['fetch-last-token']) {
            $stmt = $conn->prepare("SELECT token FROM token WHERE status = 1 ORDER BY id DESC LIMIT 1");
            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                if($stmt->rowCount()>0){
                    $data = $stmt->fetch();
                    $token = $data['token'];
                    $message = 'use the token to access site.';
                } else {
                    $token = '';
                    $message = 'No token found';
                }
            } else {
                $token = '';
                $message = 'Error executing query: ' . $stmt->error;
            }

            $response = array("status" => 200, "status_message" => "success", "message" => $message, "data" => $token);
        } else {
            $response = array("status" => 200, "status_message" => "warning", "message" => 'Unauthorize Access!');
        }

    } else if ($type == 'generate-tokens') {
        $d = isset($_GET['d']) ? $_GET['d'] : '';
        if ($d == $stored_tokens['generate-token']) {
            $token = generateToken();
            // Check if the token already exists
            while (tokenExists($conn, $token)) {
                $token = generateToken();
            }
            // Prepare the SQL statement to insert the new record
            $stmt = $conn->prepare("INSERT INTO token (token) VALUES (:token)");
            $result = $stmt->execute([':token' => $token,]);
            // Execute the query and check for success
            if ($result) {
                $message = "Token generated successfully!";
            } else {
                $message = "Error: DB " . $stmt->error;
                $token = '';
            }

            $response = array("status" => 200, "status_message" => "success", "message" => $message, "data" => $token);
        } else {
            $response = array("status" => 200, "status_message" => "warning", "message" => 'Unauthorize Access!');
        }
        
    } else {
        $response = array("status" => 401, "status_message" => "error", "message" => "No data found.");
    }

    echo json_encode($response);
    exit;
}



function generateToken($token_length = 64) {
    return bin2hex(random_bytes($token_length / 2)); // Generates a token of specified length
}

// Function to check if a token exists where status = 1
function tokenExists($conn, $token) {
    $stmt = $conn->prepare("SELECT id FROM token WHERE token = :token AND status = 1");
    $stmt->bindParam(':token', $token, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchColumn() !== false;

}

?>