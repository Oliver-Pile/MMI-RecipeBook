<?php
  $page = $_GET['p'];

  if(!$page){
    $page = "home";
    }

  require_once(__DIR__.'/includes/header.php');
  require_once(__DIR__.'/pages/'.$page.'.php');
  require_once(__DIR__.'/includes/footer.php');
?>