<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
/* @var $model object */
?>
<li class="list-group-item">
	<h4>
		<a href="<?php echo $model->link ?>" target="_new"><?php echo $model->title; ?></a>
	</h4>
	<p class="text-muted">
		<?php echo Yii::$app->formatter->asDatetime( $model->pubDate ); ?>
	</p>
	<div class="description">
		<?php
		$description_html = $model->description;
		echo HTMLPurifier::process($description_html); ?>
	</div>
</li>
