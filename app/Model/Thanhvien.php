<?php 
App::uses('AppModel','Model');

class Thanhvien extends AppModel
{
	public $name='Thanhvien';

	public $hasMany = array(
		'Baoloi','Binhluan','Playlist','Yeucau'
	);
}