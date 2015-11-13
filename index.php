<?php

require_once 'fileOpen.php';
$fileopen = new fileOpen('tes.txt');
$fileopen->openFile();
$fileopen->readFile();
