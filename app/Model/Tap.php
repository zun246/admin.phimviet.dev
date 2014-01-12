<?php 
App::uses('AppModel','Model');

class Tap extends AppModel
{
	public $name='Tap';
	public $belongsTo = 'Phim';
	public $useTable='tap';
	
}