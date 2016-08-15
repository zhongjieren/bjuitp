<?php
namespace Home\Controller;
use Think\Controller;

Class DemoController extends CommonController{
  
  public function _initialize() {
        parent::_initialize();
//        $this->dbname = CONTROLLER_NAME;
        $this->dbname ="Menu";
    }
	
	
  public function _befor_index(){ 
//    $list=cateTree($pid=0,$level=0,$this->dbname);
//    $this->assign('list',$list);
  }

    public function treetable(){
        $list=cateTree($pid=0,$level=0,$this->dbname);
        $this->assign('list',$list);
        $this->display();
    }

  
  
}