@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ secure_asset("images/editpage.jpg") }}" alt="editpage pic">
    </div>


    <h1>You Can Edit【{!! nl2br(e($quiz->title)) !!}】</h1>

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}


     <div id='title'>
            <th scope="col"><h2>Title</h2></th>
            {!! Form::textarea('title') !!}
   
        
            {!! Form::submit('UPDATE this Title', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
        </div>

        <div class="col-lg-12">
            <div class="quiz">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><h2>Question</h2></th>
                            <th scope="col"><h2>Answer</h2></th>
                           
                        </tr>
                    </thead>
                            
                        <tbody>
                            
                            @foreach ($questions as $question)
                            <tr>
                                <td>{!! nl2br(e($question->question)) !!}</td>
                                <div id='title'>
                                <td>{!! nl2br(e($question->answer)) !!}</td>
                                </div>

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
                 <div class='inline-block'><h2>More Q/A?
                          {!! Form::open(['route' => ['quizzes.createquestion', $quiz->id], 'method' => 'get']) !!}
                            {!! Form::submit('ADD More Questions/Answers to this Quiz', ['class' => 'btn btn-primary btn-md btn-block']) !!}
                            {!! Form::close() !!}</h2></div>
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