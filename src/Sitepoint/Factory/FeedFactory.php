<?php namespace Sitepoint\Factory;

use Sitepoint\Feed\BlogFeed;
use Sitepoint\Feed\TwitterFeed;

class FeedFactory implements \figdice\FeedFactory
{
	/**
	 * In this simple example, we did not declare additional
	 * arguments for our factory. You can experiment by yourself.
	 */
	public function __construct() {
	}
	
	/**
	 * In this simple example, we did not pass attributes to
	 * the fig:feed invokation.
	 * Had we specify XML attributes (in addition to class and target),
	 * they would be interpreted by the Expression engine, and passed
	 * as the $attribute argument, as key/value pairs. 
	 * @see \figdice\FeedFactory::create()
	 */
	public function create($className, array $attributes) {

		if ($className == 'BlogFeed') {						
			return new BlogFeed();
		}

		if ($className == 'TwitterFeed') {			
			return new TwitterFeed();
		}

		// Explicitly return null when our Factory cannot handle
		// the requested class, so that more Factories can chain
		// the lookup.
		return null;
	} 
}
