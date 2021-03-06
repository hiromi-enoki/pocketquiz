<!--mypageから飛ぶクイズ一覧ページ 削除予定0720-->

@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="image text-center">
        <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic"></div>
        <div class="col-lg-12">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="question-title">QUIZ TITLE: {!! nl2br(e($quiz->title)) !!}</p>
                    </div>
                </div>
                    <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Question</th>
                              <th scope="col">Answer</th>
                            </tr>
                          </thead>
                          
                          
                          <tbody>
                            
                        
                            @foreach ($questions as $question)
                            <tr>
                              <td>
                                {!! nl2br(e($question->question)) !!}
                                </td>
                                 <td>
                                {!! nl2br(e($question->answer)) !!}
                                </td>
                                <td>
                                    <div class="btn btn-success btn-xs"><a href="{{ route('quizzes.editquestion', ['id' => $question->id]) }}">Edit</a></div>
                                </td>
                                <td>
                                    <div class="btn btn-success btn-xs"><a href="{{ route('quizzes.editquestion', ['id' => $question->id]) }}">Edit</a></div>
                                </td>
                                
                                <td>
                                    {!! Form::open(['route' => ['quizzes.destroyquestion', $question->id], 'method' => 'delete']) !!}
                                        {!! Form::hidden('quizid', $quiz->id) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onClick' => 'return deletePost(this);']) !!}
                                    {!! Form::close() !!}
                                    
                                    
                                </td>
                            </tr>
                            @endforeach
                    </table>
                      
                </div>
            </div>
            </div>
        </div>
            <script>

function deletePost(e) {
  'use strict';
 
  if (confirm('本当にDeleteしていいですか?')) {
  document.getElementById('form_' + e.dataset.id).submit();
  }else{ 
return false;
      
  } 
}
</script>
    @endsection
       
        