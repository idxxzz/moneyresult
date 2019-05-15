<?php
namespace app\index\model;
use think\Model;
class Shouchang extends Model{
	protected $table = "shouchang";
	public function getAll($page,$size){
	 return $this->page($page,$size)->select();
	}
}
?>