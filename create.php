<?php
require('core/ini.php');

$topic = new Topic();
$template = new Template('templates/create.php');

$template->heading = " This is front page ";
if(isset($_POST['submit'])){

    $data = array();
    $data['title'] = $_POST['title'];
    $data['category'] = $_POST['category'];
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];
    $data['last_activity'] =  date("Y-m-d H:j:s");

    //for regsisteration
    if($topic->createAnTopic($data)){
        redirect("index.php","Your Topic have created successfully.",'success');
    }else{
        redirect("create.php",'Something went wrong with creating topic', 'error');
    }
}

$template->topics = $topic->getAll_Topics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalTopics = $topic->getTotalTopics();
echo $template;
?>