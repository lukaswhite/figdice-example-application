<?php namespace Sitepoint\Feed;

use figdice\Feed;
use Underscore\Types\Arrays;

class BlogFeed extends Feed
{

	public function run() {
		
		// The Blog posts. The purpose of this app isn't to show how to build a blog or CRUD app, so let's make it REALLY simple.
		$posts = array(
			array(
				'id'			=>	3,
				'slug'		=>	'post-three',
				'title' 	=> 	'Sample Blog Post Three',
				'body'		=>	'<p>Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
				'author'	=>	array(
					'id'		=>	1,
					'name'	=>	'Bob',
				),
				'created'	=>	12345,
			),
			array(
				'id'			=>	2,
				'slug'		=>	'post-two',
				'title' 	=> 	'Sample Blog Post Two',
				'body'		=>	'<p>Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
				'author'	=>	array(
					'id'		=>	2,
					'name'	=>	'Helen',
				),
				'created'	=>	12345,
			),
			array(
				'id'			=>	1,
				'slug'		=>	'post-one',
				'title' 	=> 	'Sample Blog Post One',
				'body'		=>	'<p>Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
				'author'	=>	array(
					'id'		=>	3,
					'name'	=>	'Nigel',
				),
				'created'	=>	12345,
			),
		);

		// Get the slug, if provided
		$slug = $this->getParameterString('post-slug');

		if ($slug) {
			
			// Use a little Underscore magic to retrieve the appropriate post
			$post = Arrays::find($posts, function($post) use ($slug) {
				return ($post['slug'] == $slug);
			});

			return $post;

		} else {

			// No slug, we want the lot.
			return $posts;	

		}

		

	}
}