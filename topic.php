<?php
require ('core/ini.php');

$template = new Template('templates/topicui.php');

$template->heading = " This is front page ";

echo $template;
?>