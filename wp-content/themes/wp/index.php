<?php
require get_template_directory().'/core/template.php';

$tempt = new Template([
    'root' => get_template_directory().'/templates'
]);

echo $tempt->render('home');

//var_dump($tempt->getSections());
