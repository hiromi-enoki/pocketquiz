<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

 
class SearchController extends Controller
{
    public function getIndex(Request $request)
    {
         $user = \Auth::user();
        
        // 検索するテキスト取得
        $keyword =$request->get('keyword');
        $query = Quiz::query()->where('title','like','%'.$keyword.'%'); 

 
        // ページネーション
        $data = $query->orderBy('created_at','desc')->paginate(9);
        $quizzes = $data;
        return view('users.show')
      
        ->with('keyword',$keyword)
        ->with('me', $user)
        ->with('quizzes', $quizzes);
    
    
  }
}