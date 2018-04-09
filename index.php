<?php
 require('core/ini.php');

 $template = new Template('templates/frontpage.php');

 $template->heading = " This is front page ";

 echo $template;
 ?>