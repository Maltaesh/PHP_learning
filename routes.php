<?php

//return [
//    '/' => 'controllers/index.php',
//    '/about' => 'controllers/about.php',
//    '/notes' => 'controllers/notes/index.php',
//    '/note' => 'controllers/notes/show.php',
//    '/notes/create' => 'controllers/notes/create.php',
//    '/contact' => 'controllers/contact.php',
//];


// Homepage:
$home = '/';
$router->get($home, controller_path('index'));

// About
$about = '/about';
$router->get($about, controller_path('about'));

// Notes
$notes = '/notes';
$router->get($notes, controller_path('notes/index'));
$router->get('/note', controller_path('notes/show'));
$router->get($notes . '/create', controller_path('notes/create'));
$router->post($notes . '/create', controller_path('notes/create'));
$router->delete('/note', controller_path('notes/destroy'));

// Contact