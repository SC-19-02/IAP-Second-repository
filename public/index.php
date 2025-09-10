<?php
require __DIR__ . '/../autoload.php';

$template = new Template();

$template ->navArea($conf);
$template ->documentStart($conf);
$template ->hero();
$template ->welcomeSection($conf);
$template->footer($conf);
