<?php 
App::uses('AppModel','Model');

class Trichdoan extends AppModel
{
	public $name='Trichdoan';
	public $belongsTo = 'Phim';
}