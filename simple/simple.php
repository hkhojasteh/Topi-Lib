<?php
require '../topi.lib.min';
// Create panel
$panel = new \TopiLib\TopiPanel('png', 9, 0, 0, 0);
$panel->createBlank(500, 200);

// Add image to panel
$img = new \TopiLib\TopiImage(dirname(__FILE__) . './bg.png', 'png');
$img->position = 'tile';
$panel->addImage($img);

// Add styled text to panel
$txt = new \TopiLib\TopiText('../font.ttf', 'Simple Sample  - Topi Lib  - version 1.3.1  [This is a secend line of TopiText object]', 2, 36, 18, 35);
$txt->startX = 45;
$txt->startY = 50;
$panel->addText($txt);

// Render image
//$panel->renderToImage('./des.png');
$panel->render();
?>