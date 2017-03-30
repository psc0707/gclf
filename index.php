<?php
//FRONT Controler
require dirname(__FILE__).'/inc/config.php';
//Récupère le paramètre URL section correspondant à la page demandée
/*
$section = isset($_GET['section'])?trim($_GET['section']):'';

//print_r($section);
switch ($section) {
    case 'catalogue':
        require dirname(__FILE__).'/inc/controller/catalogue.php';    
        break;
    
    case 'details':
        require dirname(__FILE__).'/inc/controller/details.php';    
        break;
    
    case 'form_categorie':
        require dirname(__FILE__).'/inc/controller/form_categorie.php';    
        break;
    
    case 'form_film':
        require dirname(__FILE__).'/inc/controller/form_film.php';    
        break;

    default:
        require dirname(__FILE__).'/inc/controller/home.php'; 
        break;
} 
 */

$path = isset($_GET['path'])?trim($_GET['path']):'';

//print_r($section);
if ($path=='catalogue' || $path=='catalogue/') {
        require dirname(__FILE__).'/inc/controller/catalogue.php';
            
}
else if ($path=='details' || $path=='details/') {    
        require dirname(__FILE__).'/inc/controller/details.php';    
            
} else if ($path=='form_categorie' || $path=='form_categorie/') {    
        require dirname(__FILE__).'/inc/controller/form_categorie.php';    
        
} else if ($path=='form_film' || $path=='form_film/') {            
        require dirname(__FILE__).'/inc/controller/form_film.php';    
        
} else {  
        require dirname(__FILE__).'/inc/controller/home.php';
}

