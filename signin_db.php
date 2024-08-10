<?php

    session_start();
    require_once 'config/db.php';


    if(isset($_POST['signin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        if(empty($email)){
            $_SESSION['error'] = 'Please type your email';
            header("location: signin.php");
        } else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = 'Your Email is uncorrected';
            header("location: signin.php");
        } else if(empty($password)){
            $_SESSION['error'] = 'Please type your password';
            header("location: signin.php");
        } else if(strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5){
            $_SESSION['error'] = 'Password must have 5-20 length';
            header("location: signin.php");
        } else{
            try{

                $check_data = $conn->prepare("SELECT * FROM users WHERE email = :email");
                $check_data -> bindParam(":email", $email);
                $check_data -> execute();
                $row = $check_data -> fetch(PDO::FETCH_ASSOC);

                if($check_data->rowCount() > 0){

                    if($email == $row['email']){
                        if(password_verify($password, $row['password'])){
                            if($row['urole']== 'admin'){
                                $_SESSION['admin_login'] = $row['id'];
                                header("location: admin.php");
                            }else{
                                $_SESSION['user_login'] = $row['id'];
                                header("location: user.php");
                            }
                        }else{
                            $_SESSION['error'] = 'Wrong password';
                            header("location: signin.php");
                        }
                    }else{
                        $_SESSION['error'] = 'Wrong email';
                        header("location: signin.php");
                    }
  
                } else{
                    $_SESSION['error'] = "No data in database";
                    header("location: signin.php");
                }
        

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }


?>