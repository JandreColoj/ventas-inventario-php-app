<?php
date_default_timezone_set('America/Guatemala');
require_once dirname(__FILE__)."/../libs/smarty/Smarty.class.php";
$oSmarty = new Smarty();
$oSmarty->template_dir=dirname(__FILE__)."/../templates/";
$oSmarty->compile_dir =dirname(__FILE__)."/../templates_c/";
?>