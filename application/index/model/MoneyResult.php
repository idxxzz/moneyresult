<?php
namespace app\index\model;
use think\Model;
class MoneyResult extends Model{
	protected $table = "inoutlist";
    // ����������

	public function getAll($page,$size){
	 return $this->page($page,$size)->select();
	}
	public function getOneFromType($type){
	 return $this->where("sType='{$type}'")->select();
	}
}
?>