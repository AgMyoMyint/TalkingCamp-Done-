<?php
 require('core/ini.php');

 $topic = new Topic;
 $user= new User();

 $template = new Template('templates/frontpage.php');

$template->totalUsers = $user->getTotalUsers();
 $template->topics = $topic->getAll_Topics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalTopics = $topic->getTotalTopics();



 echo $template;
