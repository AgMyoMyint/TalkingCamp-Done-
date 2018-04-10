<?php
require('core/ini.php');

$topic  = new Topic();
$validate = new Validator();
if(isset($_POST['submit'])){

    $user = new User();

    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['password2'] = $_POST['password2'];
    $data['about'] = $_POST['about'];
    $data['last_activity'] =  date("Y-m-d H:j:s");

    $field_array =  array('name','email','username','password','password2');

    if($validate->isRequired($field_array)){
        if($validate->isValidEmail($data['email'])){
            if($validate->passwordsMatch($data['password'],$data['password2'])){
                //Upload
                if($user->uploadAvatar()){
                    $data['avatar'] = $_FILES["avatar"]["name"];
                }else{
                    $data["avatar"] = 'noimage.png';
                }

                //for regsisteration
                if($user->register($data)){
                    redirect("index.php","You are registered and now logged in",'success');
                }else{
                    redirect("index.php",'Something went wrong with registeration', 'error');
                }
            }else{
                redirect("register.php","Your Password Did not Matched.","error");
            }
        }else{
            redirect("register.php","Please use Valid email address","error");
        }
    }else{
        redirect("register.php","Please Fill all the form","error");
    }



}

$template = new Template('templates/register.php');

$template->heading = " This is front page ";

echo $template;
