Yii2 RSS Reader
===============
RSS reader widget for Yii2

Badges
-----

[![Latest Stable Version](https://poser.pugx.org/davidjeddy/yii2-rss-reader/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/yii2-rss-reader/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![License](https://poser.pugx.org/davidjeddy/yii2-rss-reader/license?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Total Downloads](https://poser.pugx.org/davidjeddy/yii2-rss-reader/downloads?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Monthly Downloads](https://poser.pugx.org/davidjeddy/yii2-rss-reader/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/yii2-rss-reader/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![composer.lock](https://poser.pugx.org/davidjeddy/yii2-rss-reader/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist davidjeddy/yii2-rss-reader "*"
```

or add

```
"davidjeddy/yii2-rss-reader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
//To set own viewFile set 'itemView'=>'@frontend/views/site/_rss_item'. Use $model var to access item properties
echo \davidjeddy\RssFeed\RssReader::widget([
	'channel'   => '{source_url}/feed.xml',
	'itemView'  => 'item', 
	'pageSize'  => 5,
	'wrapClass' => 'rss-wrap',
	'wrapTag'   => 'div',
]);
?>
```
