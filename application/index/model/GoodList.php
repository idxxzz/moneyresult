<?php
namespace app\index\model;
use think\Model;
class GoodList extends Model{
	protected $table = "goodlist";
    // 设置主表名

	public function getAll($page,$size){
	 return $this->order("sType asc")->page($page,$size)->select();
	}
	public function getOneFromType($type){
	 return $this->where("sType='{$type}'")->select();
	}
}
?>