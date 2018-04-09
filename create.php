<?php
require('core/ini.php');

$template = new Template('templates/create.php');

$template->heading = " This is front page ";

echo $template;
?>