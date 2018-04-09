<?php
 require('core/ini.php');

 $topic = new Topic;

 $template = new Template('templates/frontpage.php');

 $template->topics = $topic->getAll_Topics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalTopics = $topic->getTotalTopics();



 echo $template;
