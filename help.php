<?php
    $questions = $_POST['questions'];

    // Data Connection
    $conn = new mysqli('localhost', 'root',  '', 'test');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into help(questions) values(?)");
        $stmt->binf_param("s",$questions);
        $stmt->execute();
        echo "Your Question Sended Successfully";
        $stmt->close();
        $conn->close();
    }
?>