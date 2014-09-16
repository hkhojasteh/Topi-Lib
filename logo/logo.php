<?php
require '../topi.lib.min';
// Create panel
$panel = new \TopiLib\TopiPanel('png', 9, 0, 204, 255);
$panel->createBlank(350, 900);
$panel->txtBMagicMagnet = true;

// Add image to panel
$img = new \TopiLib\TopiImage(dirname(__FILE__) . './logo.png', 'png');
$img->startX = 20;
$img->startY = 50;
$panel->addImage($img);

// Add styled text to panel
$txt = new \TopiLib\TopiText('../font.ttf', 'Logo Sample - Topi Lib - version 1.3.1', 3, 43, 12, 36);
$txt->settxtHexColor('#fff');
$txt->align = 'center';
$txt->startY = 600;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Topi Lib', 1, 8, 36, 72);
$txt->settxtHexColor('#fff');
$txt->startX = 60;
$txt->startY = 490;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Find Topi on Github or hadiabdikhojasteh.ir', 2, 20, 16, 20);
$txt->settxtHexColor('#fff');
$txt->align = 'left';
$txt->startY = 572;
$panel->addText($txt);

// Render image
//$panel->renderToImage('./des.png');
$panel->render();
?>