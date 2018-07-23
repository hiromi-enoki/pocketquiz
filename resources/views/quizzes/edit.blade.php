@extends('layouts.app')

@section('content')

    <h1>【{!! nl2br(e($quiz->title)) !!}】の編集ページ</h1>

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'TITLE:') !!}<br>
        {!! Form::textarea('title') !!}<br>
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

<br><br>

        <div class="col-lg-12">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="question-title">QUIZ TITLE: 【{!! nl2br(e($quiz->title)) !!}】の中のQuestion/Answerを編集</p>
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
                                <td>{!! nl2br(e($question->question)) !!}</td>
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