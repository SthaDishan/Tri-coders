<?php
    $fullname = $_POST['fullname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $mobile= $_POST['mobile'];

    // Database connection
    $conn = new mysqli('localhost','root','','bhatbhatte');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO signup(fullname, email,password,cpassword,mobile) values(?,?, ?, ?,?)");
        $stmt->bind_param("ssssi", $fullname,$email, $password, $cpassword, $mobile);
        $execval = $stmt->execute();
        echo $execval;
        header('location:login.html');
        $stmt->close();
        $conn->close();
    }
?>