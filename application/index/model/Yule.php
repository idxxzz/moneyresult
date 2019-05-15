<?php
namespace app\index\model;
use think\Model;
class Yule extends Model{
	protected $table = "yule";
	public function getAll($page,$size){
	 return $this->page($page,$size)->select();
	}
}
?>