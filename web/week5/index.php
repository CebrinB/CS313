<?php 
  //This is the main controller for this site
  //get the model
  require_once 'model.php';
  
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
  }

  switch ($action) {
    case 'register':
      
    case 'template':
      include 'view/template.php';
      break;
    default;
      include '/week5/view/home.php';

  }


?>