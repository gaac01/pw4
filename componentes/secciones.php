<?php 

$home = [
           'titulo'    => 'home',
           'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.llis ultrices quam imperdiet id. Cras bibendum ultricies ligula quis fringilla. Cras ut magna ut odio hendrerit cursus. Donec luctus odio in quam dapibus elementum. Mauris lacinia, magna porttitor posuere iaculis, eros nisi vulputate nunc, in pulvinar erat diam eget ante. Quisque scelerisque mauris mauris, sed maximus urna posuere et. ',
           'imagen'    => 'https://media.giphy.com/media/p8MOlh7fYxb32/giphy.gif',
];

$blogs = [
           'titulo'    => 'blogs',
           'contenido' => 'Ladipiscing elit. Curabitur pulvinar aliquam lorem, convallis ultrices quam imperdiet id. Cras bibendum ultricies ligula quis fringilla. Cras ut magna ut odio hendrerit cursus. Donec luctus odio in quam dapibus elementum. Mauris lacinia, magna porttitor posuere iaculis, eros nisi vulputate nunc, in pulvinar erat diam eget ante. Quisque scelerisque mauris mauris, sed maximus urna posuere et. ',
           'imagen'    => 'https://media.giphy.com/media/1Bh5bvaUis1R4xKHUD/giphy.gif',
];

$videos = [
            'titulo'    => 'videos',
            'contenido' => ' quam imperdiet id. Cras bibendum ultricies ligula quis fringilla. Cras ut magna ut odio hendrerit cursus. Donec luctus odio in quam dapibus elementum. Mauris lacinia, magna porttitor posuere iaculis, eros nisi vulputate nunc, in pulvinar erat diam eget ante. Quisque scelerisque mauris mauris, sed maximus urna posuere et. ',
            'imagen'    => 'https://media.giphy.com/media/3D46geEKIgh3DzXwiq/giphy.gif',
];

$contact = [
            'titulo'    => 'contact',
            'contenido' => 'ces quam imperdiet id. Cras bibendum ultricies ligula quis fringilla. Cras ut magna ut odio hendrerit cursus. Donec luctus odio in quam dapibus elementum. Mauris lacinia, magna porttitor posuere iaculis, eros nisi vulputate nunc, in pulvinar erat diam eget ante. Quisque scelerisque mauris mauris, sed maximus urna posuere et. ',
            'imagen'    => 'https://media.giphy.com/media/x47m1ORwfKAk5TQyE5/giphy.gif',
];

$about = [
            'titulo'    => 'about',
            'contenido' => ' ipsum dolor sictetur adipiscing quaas ut magna ut odio hendrerit cursus. Donec luctus odio in quam dapibus elementum. Mauris lacinia, magna porttitor posuere iaculis, eros nisi vulputate nunc, in pulvinar erat diam eget ante. Quisque scelerisque mauris mauris, sed maximus urna posuere et. ',
            'imagen'    => 'https://media.giphy.com/media/3o7qE3aBSz8s2zx6x2/giphy.gif',
];

$secciones = [

    'p1' => $home,
    'p2' => $blogs,
    'p3' => $videos,
    'p4' => $contact,
    'p5' => $about,
];

            if (isset($_GET['seccion'])) {
            $seccion = $_GET['seccion'];
}
            if (!isset($_GET['seccion'])) {
            $seccion = 'p1';
}

$titulo         = $secciones    [$seccion]  ['titulo'];
$contenido      = $secciones    [$seccion]  ['contenido'];
$imagen         = $secciones    [$seccion]  ['imagen'];

?>