<?php 
App::uses('AppModel','Model');

class Yeucau extends AppModel
{
	public $name='Yeucau';
	public $belongsTo = 'Thanhvien';
}