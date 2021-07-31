<?php
/**
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 */

namespace panix\ext\fancybox;

use yii\web\AssetBundle;

/**
 * Class FancyboxAsset
 * @package panix\ext\fancybox
 */
class FancyboxAsset extends AssetBundle
{

    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];

    //public $sourcePath = '@bower/fancybox/dist';


    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__.'/assets';
        parent::init();
        $this->js[] = !YII_DEBUG ? 'jquery.fancybox.js' : 'jquery.fancybox.min.js';
        $this->css[] = !YII_DEBUG ? 'jquery.fancybox.min.css' : 'jquery.fancybox.min.css';
    }
}
