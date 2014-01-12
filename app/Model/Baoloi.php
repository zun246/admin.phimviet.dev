<?php 
App::uses('AppModel','Model');

class Baoloi extends AppModel
{
	public $name='Baoloi';
	public $belongsTo = 'Thanhvien';
}