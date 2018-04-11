<?php
    include ('core/ini.php');


    if(isset($_POST['do_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User();

        if($user->login($username,$password)){
            redirect('index.php','You have logged in.','success');
        }else{
            redirect('index.php','Login is invalid.','error');
        }
    }else{
        redirect('index.php');
    }