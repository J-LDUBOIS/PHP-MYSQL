<?php

if ($_SESSION['logged'] == true) {
    require('view/manageCustomersFormView.php');
} else {
    require('view/homeView.php');
}
