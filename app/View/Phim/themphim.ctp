<h1>Thêm mới phim</h1>
<div class="row">
	<div class="col-lg-6">
		<?php echo $this->Form->create('Phim'); ?>
		<div class="form-group">
		<?php
		echo $this->Form->input('ten', array(
			'label' => 'Tên tiếng Việt',
			'class'=>'form-control'
		));
		echo $this->Form->input('name', array(
			'label' => 'Tên tiếng Anh',
			'class'=>'form-control'
		));
		$qgOptions = array();
		foreach ($quocgia as $qg ){
			$qgOptions[ $qg['Quocgia']['id'] ] = $qg['Quocgia']['ten'];
		}
		// echo '<pre>';
		// var_dump($qgOptions);die('</pre>');
		echo $this->Form->input('quocgia_id',array(
			'label'=>'Quốc gia',
			'options' => $qgOptions,
			// 'options' => array('1'=>'aaa', '2'=>'ccc', 3, 4, 5),
			'empty' => '(choose one)'
		));
		echo $this->Form->input('anhbia', array(
			'label' => 'Ảnh bìa',
			'type' => 'file'			
		));
		echo $this->Form->input('name', array(
			'label' => 'Tên tiếng Anh',
			'class'=>'form-control',
			'rows'=>'5'
		));
		echo $this->Form->input('name', array(
			'label' => 'Chất lượng',
			'class'=>'form-control'
		));
		echo $this->Form->input('cam', array(
			'label' => 'Cam Or No',
			'type' => 'checkbox'			
		));
		echo $this->Form->input('phude', array(
			'label' => 'Phụ đề',
			'type' => 'checkbox'			
		));
		echo $this->Form->input('thuyetminh', array(
			'label' => 'Thuyết minh',
			'type' => 'checkbox'			
		));
		echo $this->Form->input('daodien', array(
			'label' => 'Đạo diễn',
			'class'=>'form-control'
		));
		echo $this->Form->input('sanxuat', array(
			'label' => 'Sản xuất',
			'class'=>'form-control'
		));
		echo $this->Form->input('phathanh', array(
			'label' => 'Phát hành',
			'type'=>'year'
		));
		?>	
		</div>
		<?php echo $this->Form->end(array(
			'label' => 'Thêm',
			'class'=>'btn btn-primary'
		)); ?>
	</div>
</div>


