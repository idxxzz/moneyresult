<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\MoneyResult;
class Index extends Controller
{
    public function index()
    {
		$result=new MoneyResult();
	    $result=$result->getAll(1,1000);
	    $lst=array();
		foreach($result as $k=>$v){
		 $item=array($v->actdate,$v->pname,$v->class2,$v->class1,$v->account,$v->inmoney,$v->outmoney,$v->info);
		 $lst[]=$item;
		}

        return view('',["result"=>json_encode($lst)],["__PUBLIC__"=>"/public"]);
    }
}
