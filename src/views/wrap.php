<?php

use yii\helpers\Html;
use yii\widgets\ListView;

echo ListView::widget( [
	'dataProvider' => $dataProvider,
	'itemView'     => $this->context->itemView,
	'options'      => $this->context->options,
	'itemOptions'  => $this->context->itemOptions,
	'options'      => [
		'class' => '',
		'tag'   => null,
	],
	'layout'       => "{items}",
] );
