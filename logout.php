<?php
include ('core/ini.php');


if(isset($_POST['do_logout'])){

    $user = new User();

    if($user->logout()){
        redirect('index.php','You have logged out.','success');
    }else{
        redirect('index.php','Logout failed.','error');
    }
}else{
    redirect('index.php');
}