<?php
require ('core/ini.php');

$topic = new Topic;
$user = new User;
$template = new Template('templates/topicui.php');

if(isset($_GET['id'])){
    $template->topics = $topic->get_Topics_by_id($_GET['id']);
    $template->topic_ = $topic->get_Topic_by_id($_GET['id']);
}

if(isset($_POST['submit'])){
    $data = array();
    $data['body']=$_POST['body'];
    $data['topic_id']=$_POST['topic_id'];
    $data['user_id']=getUser()['user_id'];


    if($topic->createReply($data)){
        redirect("topic.php?id=".$data['topic_id']."","Your Reply is posted successfully","success");
    }else{
        redirect("topic.php?id=".$data['topic_id']."","Your Reply is not posted.","error");
    }
}

$template->heading = " This is front page ";



$template->totalUsers = $user->getTotalUsers();
$template->totalCategories = $topic->getTotalCategories();
$template->totalTopics = $topic->getTotalTopics();
echo $template;
