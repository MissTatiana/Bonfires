<?php

include('model/viewModel.php');
$view = new viewModel;

//including the header
$view->getView('view/header.php');

//including the body for the menu
$view->getView('view/menuContent.html');

//includin the footer
$view->getView('view/footer.php');

?>