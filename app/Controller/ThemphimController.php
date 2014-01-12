<?php 

/**
* 
*/
class ChitietphimController extends AppController
{
	public $uses = array('Phim','Tap');

	function index($id){
		$phim = $this->Phim->findById($id);
		$tapPhim=$this->Tap->findAllByPhimId($id);

		$this->set('phim',$phim);
		$this->set('tapPhim',$tapPhim);
	}
}2