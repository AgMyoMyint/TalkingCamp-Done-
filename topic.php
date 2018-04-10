<?php
require ('core/ini.php');

$topic = new Topic;
$template = new Template('templates/topicui.php');

if(isset($_GET['id'])){
    $template->topics = $topic->get_Topics_by_id($_GET['id']);
    $template->topic_ = $topic->get_Topic_by_id($_GET['id']);
}

$template->heading = " This is front page ";



$template->totalCategories = $topic->getTotalCategories();
$template->totalTopics = $topic->getTotalTopics();
echo $template;
