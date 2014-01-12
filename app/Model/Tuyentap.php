<?php
/**
* 
*/
class Tuyentap extends AppModel
{
	public $name = 'Tuyentap';

	public $hasAndBelongsToMany = array(
		'TuyentapPhim'=>array(
			'className'=> 'Phim'
		)
	);
}