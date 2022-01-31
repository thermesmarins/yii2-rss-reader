<?php

namespace thermesmarins\RssFeed;

/**
 * This is just an example.
 *
 * @version  0.0.2 Iterated to use with Google Alert RSS feed
 */
class RssReader extends \yii\base\Widget {

	public $channel;
	public $itemView = 'item';
	public $pageSize = 20;
	public $wrapClass = 'rss-wrap';
	public $wrapTag = 'div';
	public $indexName = 'entry';
	public $errorMessage = 'Error parsing feed source';

	public function run() {
		try {
			$items = [];

			if ( empty ( $this->channel ) ) {
				return '';
			}

			$xml = simplexml_load_file( $this->channel ); // suppress errors if feed is invalid

			if ( $xml === false ) {
				return \yii\Helpers\Html::encode( $errorMessage );
			}

			foreach ( $xml->xpath( $this->itemsPath ) as $item ) {
				$items[] = $item;
			}

			// Return data to dataProvider
			return $this->render(
				'wrap',
				[
					'dataProvider' => new \yii\data\ArrayDataProvider( [
						'allModels'  => $items,
						'pagination' => [
							'pageSize' => $this->pageSize,
						],
					] ),
				] );
		} catch ( \Exception $e ) {
			return $e->getMessage();
		}
	}
}
