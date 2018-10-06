wgt-fancybox
===========
Widget for PIXELION CMS 2.x to use [FancyApps](http://www.fancyapps.com/)

[![Latest Stable Version](https://poser.pugx.org/panix/wgt-fancybox/v/stable)](https://packagist.org/packages/panix/wgt-fancybox) [![Total Downloads](https://poser.pugx.org/panix/wgt-fancybox/downloads)](https://packagist.org/packages/panix/wgt-fancybox) [![Monthly Downloads](https://poser.pugx.org/panix/wgt-fancybox/d/monthly)](https://packagist.org/packages/panix/wgt-fancybox) [![Daily Downloads](https://poser.pugx.org/panix/wgt-fancybox/d/daily)](https://packagist.org/packages/panix/wgt-fancybox) [![Latest Unstable Version](https://poser.pugx.org/panix/wgt-fancybox/v/unstable)](https://packagist.org/packages/panix/wgt-fancybox) [![License](https://poser.pugx.org/panix/wgt-fancybox/license)](https://packagist.org/packages/panix/wgt-fancybox)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist panix/wgt-fancybox "*"
```

or add

```
"panix/wgt-fancybox": "*"
```

to the require section of your `composer.json` file.



Usage
-----

Once the extension is installed, simply use it in your code by :

```php
<?php
echo \panix\ext\fancybox\Fancybox::widget(['target' => '.image a']);
 ?>
```
