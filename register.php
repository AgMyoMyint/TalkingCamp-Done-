<?php
require('core/ini.php');

$template = new Template('templates/register.php');

$template->heading = " This is front page ";

echo $template;
?>