<?php
require __DIR__ . '/../autoload.php';

$template = new Template();    
$forms  = new UserForms();  

$template->navArea($conf);
$template->documentStart($conf);
$template->hero();
$template->formArea($forms);
$template->footer($conf);
