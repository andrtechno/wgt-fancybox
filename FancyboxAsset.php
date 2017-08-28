<?php
/**
 *
 * TinyMCE renders a tinyMCE js plugin for WYSIWYG editing.
 *
 * @author CORNER CMS <dev@corner-cms.com>
 * @link http://www.corner-cms.com/
 */
namespace panix\ext\fancybox;

use yii\web\AssetBundle;

class FancyboxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/tinymce/tinymce';

    public $js = [
        'tinymce.js'
    ];
}
