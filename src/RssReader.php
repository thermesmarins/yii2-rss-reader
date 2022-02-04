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
	public $pageSize = 10;
	public $itemsPath = '//item';
	public $itemOptions = [];
	public $options = [];

	public function run() {
		try {
			$items = [];

			if ( empty ( $this->channel ) ) {
				return '';
			}

			$xml = simplexml_load_file( $this->channel ); // suppress errors if feed is invalid

			if ( $xml === false ) {
				return Yii::t( 'rss', 'Error parsing feed source: {channel}', [ 'channel' => $this->channel ] );
			}

			$counter = 1;
			foreach ( $xml->xpath( $this->itemsPath ) as $item ) {
				$item->key = $counter;
				$items[] = $item;
				$counter++;
			}

			// Return data to dataProvider
			return $this->render(
				'wrap',
				[
					'dataProvider' => new \yii\data\ArrayDataProvider( [
						'allModels'  => $items,
						'totalCount' => $this->pageSize,
						'pagination' => [ 'pageSize' => $this->pageSize ],
					] ),
				] );
		} catch ( \Exception $e ) {
			return $e->getMessage();
		}
	}
}
