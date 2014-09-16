# Topi Lib

Library for PHP scripting language to convert Text and images tO PIcture with specific features and characteristics.

http://topilib.hadiabdikhojasteh.ir/
topi@hadiabdikhojasteh.ir

To use Topi Lib, you’ll need to make sure GD library are enabled. All you need is to make your php file with least codes. Just create your TopiPanel and add TopiText and TopiImage objects on it.
The use of topi lib need a panel. Text and images in Topi are placed on the TopiPanel. Each object has properties that all these properties, and the panel properties, makes the final image. TopiPanel can contain multiple TopiText and TopiImage. The Output image can be saved to a file or show in a browser.

## Installation

Install this library with [Composer](http://getcomposer.org). Add this to your `composer.json` file:

    {
        "require": {
            "TopiLib": "~2.0"
        }
    }

Then run `composer install`.

## Usage

Here's a quick demonstration. You can find this full working demo in the main directory.

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


## How to Contribute

* Fork the repo on GitHub and send a pull request
* Find a list of TODOs on the GitHub issue tracker

We have not written any unit tests just yet, but we hope to do that soon.

## Author

[Hadi Abdi Khojasteh](http://hadiabdikhojasteh.ir)

## Copyright

Copyright (c) 2014 Hadi Abdi Khojasteh

## License

MIT