<?php
class User{
    public function __construct()
    {
        $this->db = new Database();
    }

    function register($data){
        $this->db->query(
            'Insert 
              into users(name,email,avatar,username,password,about,last_activity) 
              values (:name,:email,:avatar,:username,:password,:about,:last_activity)'
        );

        $this->db->bind(":name",$data['name']);
        $this->db->bind(":email",$data['email']);
        $this->db->bind(":avatar",$data['avatar']);
        $this->db->bind(":username",$data['username']);
        $this->db->bind(":password",$data['password']);
        $this->db->bind(":about",$data['about']);
        $this->db->bind(":last_activity",$data['last_activity']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function uploadAvatar(){


        $allowExts = array("gif","jpeg","jpg","png");
        // This explode function split the items using delimiter ('.') and put into array
        $temp = explode(".",$_FILES["avatar"]["name"]);
        //get the last item of array
        $extension = end($temp);

        if((($_FILES["avatar"]["type"] == "image/gif")
                || ($_FILES["avatar"]["type"]=="image/jpeg")
                || ($_FILES["avatar"]["type"]=="image/jpg")
                || ($_FILES["avatar"]["type"]=="image/pjpeg")
                || ($_FILES["avatar"]["type"]=="image/x-png")
                || ($_FILES["avatar"]["type"]=="image/png"))
            && ($_FILES["avatar"]["size"] < 20000)
            &&  (in_array($extension, $allowExts)))  // Check $extension is equal with one of the items of the array '$allowExts"
        {
            if($_FILES["avatar"]["error"]>0){
                redirect("register.php",$_FILES["avatar"]["error"],'error');
            }else{
                if(file_exists("images/avatars/".$_FILES["avatar"]["name"])){
                    redirect("register.php",'File already Exists','error');
                }else{
                    move_uploaded_file($_FILES["avatar"]["tmp_name"],"images/avatars/".$_FILES["avatar"]["name"]);
                    return true;
                }
            }
        }else{
            redirect("register.php","Invalid File Type!",'error');
        }


    }
}