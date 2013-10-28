<?php

include('model/viewModel.php');
$view = new viewModel();

//including the header
$view->getView('view/header.php');

//including the content for the employment page
$view->getView('view/employmentContent.php');

//including the footer
$view->getView('view/footer.php');

?>