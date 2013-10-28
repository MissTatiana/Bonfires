<?php

include('model/viewModel.php');
$view = new viewModel();

//including the header
$view->getView('view/header.php');

//including the body for home
$view->getView('view/homeContent.html');

//includin the footer
$view->getView('view/footer.php');


?>