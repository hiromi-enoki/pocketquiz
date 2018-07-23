@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ secure_asset("images/editpage.jpg") }}" alt="login pic">
    </div>


    <h1>【{!! nl2br(e($quiz->title)) !!}】の編集ページ</h1>

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}

     <div id='title'>
            {!! Form::label('title', 'TITLE:') !!}
            {!! Form::textarea('title') !!}
        <!--{!! Form::label('question', 'QUESTION:') !!}-->
        <!--<input name="question" type="text" value = "{{$quiz->questions()->get()->toArray()[0]['question']}}" id="question"><br>-->
        
        <!--{!! Form::label('answer', 'ANSWER:') !!}-->
        <!--<input name="answer" type="text" value = "{{$quiz->questions()->get()->toArray()[0]['answer']}}" id="answer"><br>-->
        
            {!! Form::submit('UPDATE') !!}
            {!! Form::close() !!}
        </div>
                        <!--<div class="btn btn-warning"><a href="{{ route('users.myquestion', $quiz->id) }}">-->
        <div class="col-lg-12">
            <div class="quiz">
                <!--<div class="panel panel-default">-->
                <!--    <div class="panel-heading text-center">-->
                <!--         <p class="question-title">QUIZ TITLE: 【{!! nl2br(e($quiz->title)) !!}】の中のQuestion/Answerを編集</p>-->
                <!--    </div>-->
                <!--</div>-->
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
                                <div id='title'>
                                <td>{!! nl2br(e($question->answer)) !!}</td>
                                </div>
                                <!--<td><div class="btn btn-success btn-xs"><a href="{{ route('quizzes.editquestion', ['id' => $question->id]) }}">Edit</a></div></td>-->
                                
                                <td>
                                    {!! Form::open(['route' => ['quizzes.editquestion', $question->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-success btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
        
                                <td>
                                    {!! Form::open(['route' => ['quizzes.destroyquestion', $question->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection