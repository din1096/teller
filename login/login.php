<?php>
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = 'localhost';
    $dbemail = 'root';
    $dbpassword = "";
    $dbname = "auth":


    $conn = new mysqli($host, $dbemail, $dbpassword, $dbname);

    if($conn->connect_error){
        die("connection failed:". $conn->connect_error);

    }

    $query = "SELECT *FROM login WHERE email = '$email' AND password='$password'";    
    
    $result = $conn->query($query);
    if($result->num_rows ==1){
        header("location: teller.php");
        exit()
    }
    else{
        exit()
    }
    $conn->close()
}


?>