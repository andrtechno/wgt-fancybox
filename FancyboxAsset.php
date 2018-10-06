<?php
/**
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 */
namespace panix\ext\fancybox;

use yii\web\AssetBundle;

class FancyboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox/dist';

    public $css = [
        'jquery.fancybox.min.css'
    ];
    
    public $js = [
        'jquery.fancybox.min.js'
    ];
}
