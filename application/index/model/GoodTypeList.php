<?php
namespace app\index\model;
use think\Model;
class GoodTypeList extends Model{
	protected $table = "goodtypelist"; 
	public function getAll($page,$size){
	 $lst=$this->order("sid asc")->page($page,$size)->select();
	 foreach($lst as $k=>$v){
	  $good=new GoodList();
	  $lst[$k]['goodlist']=$good->getOneFromType($v['sid']);
	 }
	 return $lst;
	}  
}
?>