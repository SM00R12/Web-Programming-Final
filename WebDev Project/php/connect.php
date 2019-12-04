<?php


    $email = filter_input(INPUT_POST, 'email');
    $psw = filter_input(INPUT_POST, 'psw');
    $pswRepeat = filter_input(INPUT_POST, 'psw-repeat');


    if (!empty($email)){
        if (!empty($psw)){
            if ($psw == $pswRepeat){

                $conn = mysqli_connect("localhost", "root", "", "BookStore");
                if ($conn-> connect_error) {
                    die("Connection failed:". $conn-> connect_error);
                }

                $sql = "INSERT INTO Users (email, password) values ('$email','$psw')";
                $conn-> query($sql);
            }
            else{
                echo "Passwords do not match";
                die();
            }
        }
        else{
            echo "Password was ";
            die();
        }
    }
    else{
        echo "Email was incorrect";
        die();
    }
?>