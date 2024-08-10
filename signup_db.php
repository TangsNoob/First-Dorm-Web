<?php

    session_start();
    require_once 'config/db.php';


    if(isset($_POST['signup'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'user';

        if(empty($firstname)){
            $_SESSION['error'] = 'Please type your firstname';
            header("location: index.php");
        } else if(empty($lastname)){
            $_SESSION['error'] = 'Please type your lastname';
            header("location: index.php");
        } else if(empty($email)){
            $_SESSION['error'] = 'Please type your email';
            header("location: index.php");
        } else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = 'Your Email is uncorrected';
            header("location: index.php");
        } else if(empty($password)){
            $_SESSION['error'] = 'Please type your password';
            header("location: index.php");
        } else if(strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5){
            $_SESSION['error'] = 'Password must have 5-20 length';
            header("location: index.php");
        } else if(empty($c_password)){
            $_SESSION['error'] = 'Please confirm your password';
            header("location: index.php");
        } else if($password != $c_password){
            $_SESSION['error'] = 'Both of password is not same';
            header("location: index.php");
        } else{
            try{

                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email -> bindParam(":email", $email);
                $check_email -> execute();
                $row = $check_email -> fetch(PDO::FETCH_ASSOC);

                if($row['email'] == $email){
                    $_SESSION['warning'] = "Email already exits <a href='signin.php'>Click </a> to Sign In";
                    header("location: index.php"); 
                } else if(!isset($_SESSION['error'])){
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn -> prepare("INSERT INTO users(firstname, lastname, email, password, urole)
                    VALUES(:firstname, :lastname, :email, :password, :urole)");
                    $stmt ->bindParam(":firstname", $firstname);
                    $stmt ->bindParam(":lastname", $lastname);
                    $stmt ->bindParam(":email", $email);
                    $stmt ->bindParam(":password", $passwordHash);
                    $stmt ->bindParam(":urole", $urole);
                    $stmt ->execute();
                    $_SESSION['success'] = "Sign Up successful <a href='signin.php' class='aleart-link'>Click </a> to Sign In";
                    header("location: index.php");
                } else{
                    $_SESSION['error'] = "Something worng";
                    header("location: index.php");
                }
        

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }


?>