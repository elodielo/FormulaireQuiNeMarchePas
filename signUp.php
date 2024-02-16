<?php 

include './class/User.php';
include './class/Db.php';
 

if (!empty($_POST) && isset($_POST['username']) 
&& isset($_POST['email']) 
&& isset($_POST['password']) 
&& isset($_POST['passwordConfirm'])
){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    if ($password === $passwordConfirm){
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
       $newUser = new User($username, $email, $hashedPassword);
    //    print_r($newUser); 
       $newDb = new Db('./db.csv');
       if ($newDb->checkIfCsvIsWritable()){
        print_r("checked");
       }
       else{
        print_r("nein");
       }
       
       
       
    }
    else {
        //redirection
    }
}