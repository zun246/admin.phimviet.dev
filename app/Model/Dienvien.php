<?php 
App::uses('AppModel','Model');

class Dienvien extends AppModel
{
	public $name='Dienvien';
	public $hasAndBelongsToMany=array(
		'DienvienPhim'=> array(
			'className'=> 'Phim'
		)
	);
}