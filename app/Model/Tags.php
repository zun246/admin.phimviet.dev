<?php 
App::uses('AppModel','Model');

class Tags extends AppModel
{
	public $name='Tags';
	public $hasAndBelongsToMany=array(
		'TagsPhim'=> array(
			'className'=> 'Phim'
		)
	);
}