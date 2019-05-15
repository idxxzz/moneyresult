<?php
namespace app\index\model;
use think\Model;
class Huodong extends Model{
	protected $table = "huodong";
	public function getAll($page,$size){
	 return $this->page($page,$size)->select();
	}
}
?>