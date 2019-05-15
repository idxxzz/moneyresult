<?php
namespace app\index\model;
use think\Model;
class Meishi extends Model{
	protected $table = "meishi";
	public function getAll($page,$size){
	 return $this->page($page,$size)->select();
	}
	public function getOne($sid){
	 return $this->where("sid='{$sid}'")->find();
	}
}
?>