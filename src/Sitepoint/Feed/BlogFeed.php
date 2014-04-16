<?php namespace Sitepoint\Feed;

use figdice\Feed;

class BlogFeed extends Feed
{

	public function run() {
		
		return array(
			array(
				'id'			=>	3,
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
				'title' 	=> 	'Sample Blog Post One',
				'body'		=>	'<p>Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
				'author'	=>	array(
					'id'		=>	3,
					'name'	=>	'Nigel',
				),
				'created'	=>	12345,
			),
		);
	}
}