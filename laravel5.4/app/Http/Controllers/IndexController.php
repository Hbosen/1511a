<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
date_default_timezone_set("PRC");
class IndexController extends Controller{

			//添加
		public function add(){
			$input = Input::all();
	        $data['name'] = $input['name'];
	        $data['lm'] = $input['lm'];
            $time=$input['time'];
	         $data['time'] =strtotime($time);
	        $res = DB::table('message')->insert($data);


	        if($res){
	            echo '<script>alert("添加成功");location.href="show";</script>';
	        }else{
	            echo "添加失败";
	     }
    
   
		}

			//展示
		public function show(){

			$list = DB::table('message')->Paginate(5);
			return view('message/show',['list'=>$list]);
			  
        	

		}	     


			//删除
		public function delete(){
			$id=input::get('id');
			$res = DB::table('message')->delete($id);
			if($res){
				echo '<script>alert("删除成功");location.href="show";</script>';
			}
		}


			public function update(){
	        $id = Input::get('id');
			//        print_r($id);die;
	        $row=DB::table('message')->where(['id'=>$id])->get();
				//        print_r($row);die;
	        return view('message/save',['row'=>$row[0]]);
	    	}
	    public function upd(){
	        $post = Input::all();
	        unset($post['_token']);
	        $res=DB::table('message')->where(['id'=>$post['id']])->update($post);
				//        print_r($res);die;
	        if($res){
	            echo '<script>ale+rt("修改成功");location.href="show";</script>';
	        }
    }

}

?>