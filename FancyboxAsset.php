<?php
/**
 *
 * @author CORNER CMS <dev@corner-cms.com>
 * @link http://www.corner-cms.com/
 */
namespace panix\ext\fancybox;

use yii\web\AssetBundle;

class FancyboxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/panix/wgt-fancybox/assets';

    public $css = [
        'jquery.fancybox.min.css'
    ];
    
    public $js = [
        'jquery.fancybox.min.js'
    ];
}
