<?php

$menu = [
    [ 'name' => 'Home', 'url' => '/' ],
    [ 'name' => 'About', 'url' => '/?view=about' ],
    [ 'name' => 'Services', 'url' => '/?view=services' ],
    [ 'name' => 'Contact', 'url' => '/?view=contact' ],
    [ 'name' => '<i class="fa fa-youtube text-danger" aria-hidden="true"></i> Youtube', 'url' => 'https://www.youtube.com/', 'attr' =>  'target = "__blank" '  ],

];

//define('TEMPLATE_NAME', 'foodies-starter');
define('TEMPLATE_NAME', 'foodies-starter');
define('PATH', 'views/'.TEMPLATE_NAME);
define('BASE', '/'.PATH.'/'); //views/medpill-starter/

$inc = PATH."/inc/".($_GET['view'] ?? "home").'.php'; //views/medpill-starter/inc/services.php
require_once PATH."/index.php"; // views/medpill-starter/index.php
?>
