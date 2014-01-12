<?php 
App::uses('AppModel','Model');

class Playlist extends AppModel
{
	public $name='Playlist';
	public $belongsTo='Thanhvien';
	public $hasAndBelongsToMany = array(
		'PlaylistPhim'=>array(
			'className'=>'Phim'
		)
	);
}