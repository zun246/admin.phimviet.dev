<?php
class PhimController extends AppController {
    public $uses = array ('Phim','TheloaiPhim','Theloai','Quocgia');
    public function index() {
        $tempPhims = $this->Phim->find('all');
        $tempTheloai = $this->Theloai->find('all');
        $tempQuocgia = $this->Quocgia->find('all');

        $quocgia=array();
        foreach ($tempQuocgia as $qg) {
            $quocgia[ $qg['Quocgia']['id'] ] = $qg;
        }

        $theloai = array();
        foreach ($tempTheloai as $tl) {
            $theloai[ $tl['Theloai']['id'] ] = $tl;
        }

        $ids = array();
        $phims = array();
        foreach($tempPhims as $p){
            array_push($ids, $p['Phim']['id']);
            $phims[ $p['Phim']['id'] ] = $p;
        }

        $theloaiPhim = $this->TheloaiPhim->find('all',array('conditions' => array('phim_id' => $ids)));

        foreach ($theloaiPhim as $tlp) {
            if (!isset($phims[ $tlp['TheloaiPhim']['phim_id'] ]['Theloai']))
                $phims[$tlp['TheloaiPhim']['phim_id']]['Theloai'] = array();
            $tlp['TheloaiPhim']['theloai_ten'] = $theloai[ $tlp['TheloaiPhim']['theloai_id'] ]['Theloai']['ten'];
            array_push($phims[$tlp['TheloaiPhim']['phim_id']]['Theloai'], $tlp);
        }

        $this->set('phims',$phims);        
        $this->set('theloai',$theloai);        
        $this->set('theloaiPhim',$theloaiPhim);   
        $this->set('quocgia',$quocgia);     
    }
    public function themphim() {
        $quocgia=$this->Quocgia->find('all');
        $this->set('quocgia',$quocgia);
    }

}




