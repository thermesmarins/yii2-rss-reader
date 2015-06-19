Yii2 rss reader
===============
Rss reader widget for Yii2

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