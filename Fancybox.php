<?php

/**
 *
 * @author CORNER CMS <dev@corner-cms.com>
 * @link http://www.corner-cms.com/
 */

namespace panix\ext\fancybox;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class Fancybox extends InputWidget {

    public $target;
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function run() {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }

    /**
     * Registers tinyMCE js plugin
     */
    protected function registerClientScript() {

        $js = [];
        $view = $this->getView();

        FancyboxAsset::register($view);

        $id = $this->options['id'];
        $this->clientOptions['selector'] = "#$id";



        // @codeCoverageIgnoreEnd

        $options = Json::encode($this->clientOptions);

        $js[] = "$('$this->target').fancybox($options);";

        $view->registerJs(implode("\n", $js));
    }

}
