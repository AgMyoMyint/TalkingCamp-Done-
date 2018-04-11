<?php
require('core/ini.php');

$topic = new Topic;
$user = new User;
$template = new Template('templates/topics.php');
if(isset($_GET['category'])) {


    $template->topics =$topic->getAll_Topics_by_category_id($_GET['category']);

}else if(isset($_GET['user_id'])){
    $template->topics =$topic->getAll_TopicsReplies_by_user_id($_GET['user_id']);
}else if(isset($_GET['user'])){
    $template->topics =$topic->getAll_Topics_by_user_id($_GET['user']);
}else{
    $template->topics = $topic->getAll_Topics();
}




$template->heading = " This is front page ";
$template->totalUsers = $user->getTotalUsers();
$template->totalCategories = $topic->getTotalCategories();
$template->totalTopics = $topic->getTotalTopics();
echo $template;
?>