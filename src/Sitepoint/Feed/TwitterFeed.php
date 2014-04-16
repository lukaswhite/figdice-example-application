<?php namespace Sitepoint\Feed;

use figdice\Feed;

class TwitterFeed extends Feed
{

	public function run() {
		return array(
			array(
				'body' 			=> 'This is an example of a Tweet, though it isn\'t really a Tweet',				
			),
			array(
				'body' 			=> 'This is another example of a Tweet, though it isn\'t really a Tweet either',				
			),
			array(
				'body' 			=> 'Using REAL Tweets is left as an example, you see',				
			),
		);
	}
}