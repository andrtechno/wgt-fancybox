Fancybox widget
===========
Widget for Yii2

[![Latest Stable Version](https://poser.pugx.org/panix/wgt-fancybox/v/stable)](https://packagist.org/packages/panix/wgt-fancybox)
[![Total Downloads](https://poser.pugx.org/panix/wgt-fancybox/downloads)](https://packagist.org/packages/panix/wgt-fancybox)
[![Monthly Downloads](https://poser.pugx.org/panix/wgt-fancybox/d/monthly)](https://packagist.org/packages/panix/wgt-fancybox)
[![Daily Downloads](https://poser.pugx.org/panix/wgt-fancybox/d/daily)](https://packagist.org/packages/panix/wgt-fancybox)
[![Latest Unstable Version](https://poser.pugx.org/panix/wgt-fancybox/v/unstable)](https://packagist.org/packages/panix/wgt-fancybox)
[![License](https://poser.pugx.org/panix/wgt-fancybox/license)](https://packagist.org/packages/panix/wgt-fancybox)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist panix/wgt-fancybox
```

or add

```
"panix/wgt-fancybox": "^1.3.0"
```

to the require section of your `composer.json` file.

Usage
-----

Once the extension is installed, simply use it in your code by :

```php
<?php
echo \panix\ext\fancybox\Fancybox::widget(['target' => 'a.fancybox-image']);

// or use options

echo \panix\ext\fancybox\Fancybox::widget([
    'target' => 'a.fancybox-image',
    'options' => [
        //..
        'onInit'=> new \yii\web\JsExpression('function(){
            console.log("Fancybox onInit");
        }')
    ]
]);

?>
```

Links
-----
- [Pixelion](http://pixelion.com.ua/)
- [FancyApps](http://www.fancyapps.com/)
- [FancyApps documentation](https://fancyapps.com/fancybox/3/docs)

