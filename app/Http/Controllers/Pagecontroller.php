<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class Pagecontroller extends Controller
{    
	public function AddPage(Request $request){
    	return view("/admin/home/addpage");	
	}

	public function CreatePage(Request $request){
		if($request->isMethod("post")){
			print_r($request->all());
		}

	}
}

// $page = Page::where('page_title','home')->get();
// 	$numrow = count($page);
// 	if ($numrow>0) {
// 		return view('admin.home.addpage',['page'=>$page]);
// 	}else{
// 		$page = new Page();
// 		return view('admin.home.addpage',['page'=>$page]);
// 	}
// 	}

// 	public function CreatePage(Request $request)
// 	{
// 		$pagevalues['title'] = $request->title;
// 		$datavalues = array();
// 			if($request->txt_name){
// 			$field = $request->txt_name;
// 				if($field){
// 				for($j=0;$j<count($field);$j++){
// 					$text = $field[$j];
// 					$tx = $request->$text;
// 					$field_name = Page::where(['section-title'=>$text,'page_title'=>$pagevalues['title']])->get();
// 						if($field_name){
// 						$datavalues[$text] = $tx;
// 						} else{
// 						$newvalues[$text] = $tx;
// 						}
// 					}	
// 				}
// 			}
// 			if(!empty($datavalues)){
// 			foreach($datavalues as $key => $value){
// 				$where = array('section-title'=>$key,'page_title'=>$pagevalues['title']);
// 				$res = Page::where($where)->update(array('data'=>$value));
// 					if($res){
// 						$success = 1;
// 					}
// 				}
// 			}
// 			if(!empty($newvalues)){
// 			foreach($newvalues as $key => $value){
// 			$data = array(
// 				'page_title' => $pagevalues['title'],
// 				'section-title' => $key,
// 				'data' => $newvalues[$key]				
// 			    );
// 			$res = Page::create($data);
// 			}
// 		}
// 		return redirect('/page-add');

?>