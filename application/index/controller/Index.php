<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\MoneyResult;
class Index extends Controller
{
    public function index()
    {
		$result=new MoneyResult();
	    $result=$result->getAll(1,100);
		foreach($result as $k=>$v){
		 $result[$k]->lstno=(1*100)+$k;
		 $result[$k]->actdate=str_replace('-','/',$result[$k]->actdate);
		}
        return view('',["result"=>json_encode($result)],["__PUBLIC__"=>"/moneyresult/public"]);
    }

}
