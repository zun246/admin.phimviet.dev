<?php 
App::uses('AppModel','Model');

class Theloai extends AppModel
{
	public $name='Theloai';
	public $useTable='theloai';
	/*public $hasAndBelongsToMany=array(
		'TheloaiPhim'=> array(
			'className'=> 'Phim'
		)
	);*/
}