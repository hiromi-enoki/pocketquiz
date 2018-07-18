<?php
 
namespace App\Http\Controllers;
 
use App\Quiz;
use Request;
 
class SearchController extends Controller
{
    public function getIndex(Request $request)
    {
        // 検索するテキスト取得
        $keyword =$request::input('keyword');
        
        $query = Quiz::query();
 
  #もしキーワードがあったら
  if(!empty($keyword))
  {
    $query->where('quiz','%'.$keyword.'%');
  }
 
  #ページネーション
  $data = $query->orderBy('created_at','desc')->paginate(10);
  return view('users.show')

  ->with('keyword',$keyword );
    }
}