<?php

header('Content-Type: application/json');

if(!empty($_POST['username']) && !empty($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == 'test' && $password == '123456'){
        
        echo json_encode(['statusCode'=>1,'status'=>'success']);
        exit();
    }
}

echo json_encode(['statusCode'=>0,'status'=>'failure']);
exit();