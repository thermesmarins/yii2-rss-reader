Yii2 RSS Reader
===============
RSS reader widget for Yii2.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

    php composer.phar require --prefer-dist thermesmarins/yii2-rss-reader "*"

or add

    "thermesmarins/yii2-rss-reader": "*"

to the require section of your `composer.json` file.

Usage
-----

Once the widget is installed, add it to a view script:

    echo \thermesmarins\RssFeed\RssReader::widget([
        'channel'   => '{source_url}/feed.xml',
        'itemView'  => 'item',
        'pageSize'  => 5,
        'wrapClass' => 'rss-wrap',
        'wrapTag'   => 'div',
    ]);
