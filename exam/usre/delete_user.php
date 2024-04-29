<?php

    include 'api_config.php';

    header('Access-Control-Allow-Method: POST');
    header('Content-Type: application/json');

    $api = new API_user();

    if($_SERVER['REQUEST_METHOD'] == "DELETE") {

        parse_str(file_get_contents('php://input'),$_DELETE);

        $id = $_DELETE['id'];

        $res = $api->deleteuser($id);

        if($res) {
            $status['status'] = "User Record Deleted Successfully...";

            echo json_encode($status);
        } else {
            $status['status'] = "User Record Deletion Failed...";

            echo json_encode($status);
        }

    } else {
        $status['status'] = "Only DELETE method is allowed.";

        echo json_encode($status);
    }
?>