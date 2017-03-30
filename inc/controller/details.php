<?php
//FRONT Controler
use Inc\Model\Film;
 
$currentId = 0;
$filmInfos = array();
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['id'])) {
        $currentId = intval($_GET['id']);
}
//Film get
$filmInfos = Film::getId($currentId);
print_pre(Film::get($currentId));

require 'inc/view/header.php';
require 'inc/view/detail.php';
require 'inc/view/footer.php';
