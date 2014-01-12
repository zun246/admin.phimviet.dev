
<p><?php echo $this->Html->link('Thêm Phim', array('action' => 'themphim'),array('class' => 'btn btn-success')); ?></p>
<div class="col-lg-12">
  <h2>Danh sách phim</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
      <thead>
        <tr>
          <th class="header">Chọn <i class="fa fa-sort"></i></th>
          <th class="header">Tên Phim <i class="fa fa-sort"></i></th>
          <th class="header">Chuẩn Phim <i class="fa fa-sort"></i></th>
          <th class="header">Thể Loại <i class="fa fa-sort"></i></th>
          <th class="header">Quốc Gia <i class="fa fa-sort"></i></th>
          <th class="header">Độ Tuổi <i class="fa fa-sort"></i></th>
          <th class="header">Hình Ảnh <i class="fa fa-sort"></i></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($phims as $phim): ?>
        <tr>
          <td> <input type="checkbox"></td>
          <td><?php echo $phim['Phim']['ten'] ?>
          </td><td><?php echo $phim['Phim']['chatluong'] ?></td>
          <td><?php 
          if (!empty($phim['Theloai'])) {
            $tlp = array();
            foreach ($phim['Theloai'] as $tl) {
              array_push($tlp, $tl['TheloaiPhim']['theloai_ten']);
            }
            echo implode(',', $tlp);
          }
          ?></td>
          <td><?php    
            if(!empty($phim['Phim']['quocgia_id'])){
              echo $quocgia[ $phim['Phim']['quocgia_id'] ]['Quocgia']['ten'];
            }
          ?></td>
          <td><?php echo $phim['Phim']['dotuoi'] ?></td>
          <td>
            <?php echo $this->Html->image($phim['Phim']['anhbia'], array('alt' => '','width'=>'60')); ?>
          </td>
          
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>