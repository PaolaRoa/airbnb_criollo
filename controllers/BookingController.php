<?php ob_start() ?>
<?php
$action = $_GET['action'];

if ($action=='search'){
    echo $action;
    
}



?>
<?php ob_end_flush();?>