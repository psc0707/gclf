<?php
use Inc\Model\Categorie;

$categorieList = array();
//Catalogue
$categorieList = Categorie::GetAll();
print_pre(Categorie::get(1));

require 'inc/view/header.php';
require 'inc/view/home.php';
require 'inc/view/footer.php';  