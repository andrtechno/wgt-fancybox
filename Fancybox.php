<?php

/**
 *
 * @author CORNER CMS <dev@corner-cms.com>
 * @link http://www.corner-cms.com/
 */

namespace panix\ext\fancybox;

use yii\helpers\Json;


class Fancybox extends \yii\base\Widget {

    public $target;
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run() {
        $js = [];
        $view = $this->getView();

        FancyboxAsset::register($view);
        $options = Json::encode($this->options);
        $js[] = "$('$this->target').fancybox($options);";
        $view->registerJs(implode("\n", $js));
    }

}
