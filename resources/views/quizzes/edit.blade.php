@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ secure_asset("images/editpage.jpg") }}" alt="editpage pic">
    </div>


    <!--<h1>You Can Edit【{!! nl2br(e($quiz->title)) !!}】</h1>-->
     <!--<hr class="style9">-->

    <!--<div class="col-md-12">-->

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}

    
        <div id='title'>
            <th scope="col"><h4>Quiz Title</h4></th>
            {!! Form::textarea('title') !!}
            {!! Form::submit('UPDATE this Title', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
        </div>

        
            <!--<div class="quiz">-->
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><h4>Question</h4></th>
                            <th scope="col"><h4>Answer</h4></th>
                           
                        </tr>
                    </thead>
                            
                        <tbody>
                            
                            @foreach ($questions as $question)
                            <tr>
                                <td><p>{!! nl2br(e($question->question)) !!}</p></td>
                                <td>{!! nl2br(e($question->answer)) !!}</td>

                                <td>
                                    {!! Form::open(['route' => ['quizzes.editquestion', $question->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-success btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
        
                                <td>
                                    {!! Form::open(['route' => ['quizzes.destroyquestion', $question->id], 'method' => 'delete']) !!}
                                    {!! Form::hidden('quizid', $quiz->id) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onClick' => 'return deletePost(this);']) !!}
                                    {!! Form::close() !!}
                                </td>
                                
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>
                </div>
                        
                        <hr class="style9">
                <div class='inline-block'><h4>More Q & A?
                          {!! Form::open(['route' => ['quizzes.createquestion', $quiz->id], 'method' => 'get']) !!}
                            {!! Form::submit('ADD More Q & A to this Quiz', ['class' => 'btn btn-primary btn-md btn-block']) !!}
                            {!! Form::close() !!}</h4>
                </div>
                <div class="text-center">
                    <div class="logo_position">
                        <a href="{{ route('users.mypage', ['id' => $user->id]) }}" class="pocketquiz_btn2">Back to My Page</a>
                    </div>
                </div>
                
    
    
<script>

function deletePost(e) {
  'use strict';
 
  if (confirm('本当にDeleteしていいですか?\n※問題が一つしかない場合、それを削除すると{!! nl2br(e($quiz->title)) !!}のタイトル自体も削除されます')) {
  document.getElementById('form_' + e.dataset.id).submit();
  }else{ 
return false;
      
  } 
}
</script>


@endsection