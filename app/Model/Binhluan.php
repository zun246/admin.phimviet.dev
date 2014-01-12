<?php 
App::uses('AppModel','Model');

class Binhluan extends AppModel
{
	public $name='Binhluan';
	public $belongsTo=array('Thanhvien','Phim');
}