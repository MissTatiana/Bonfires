<?php

include('model/viewModel.php');
$view = new viewModel();

//including the header
$view->getView('view/header.php');

//including the content for contact page
$view->getView('view/contactContent.php');

$view->getView('view/footer.php');

?>