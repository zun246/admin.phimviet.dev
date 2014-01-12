<?php 
App::uses('AppModel','Model');

class Phim extends AppModel
{

	public $name='Phim';
	public $belongsTo='Quocgia';
	public $useTable='phim';
	// public $hasMany = array(
	// 	'Trichdoan','Binhluan','Tap'
	// );
	// public $hasAndBelongsToMany=array(
	// 	'DienvienPhim'=> array(
	// 		'className'=> 'Dienvien'
	// 	),
	// 	'TagsPhim'=> array(
	// 		'className'=> 'Tags'
	// 	),
	// 	'TheloaiPhim'=> array(
	// 		'className'=> 'Theloai'
	// 	),
	// 	'PlaylistPhim'=>array(
	// 		'className'=>'Playlist'
	// 	),
	// 	'TuyentapPhim'=>array(
	// 		'className'=>'Tuyentap'
	// 	)
	// );
}