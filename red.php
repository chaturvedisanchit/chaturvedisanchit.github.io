<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

if($detect->isMobile()) {
    header('Location: http://www.chaturvedisanchit.com/about.html');
    exit;
}
