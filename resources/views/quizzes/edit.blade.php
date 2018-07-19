@extends('layouts.app')

@section('content')

    <h1>{!! nl2br(e($quiz->title)) !!}の編集ページ</h1>

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'TITLE:') !!}
        {!! Form::textarea('title') !!}<br>

        
        {!! Form::submit('タイトルをUPDATE') !!}

    {!! Form::close() !!}
        <div class="col-lg-12">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="question-title">QUIZ TITLE: {!! nl2br(e($quiz->title)) !!}の中のQuestion/Answerを編集</p>
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

                                    {!! Form::open(['route' => ['quizzes.destroyquestion', $question->id], 'method' => 'delete']) !!}
                                    
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                                
                                <td>
                                    <div class="btn btn-success btn-xs"><a href="{{ route('quizzes.editquestion', ['id' => $question->id]) }}">Edit</a></div>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                      
                </div>
            </div>
            </div>
@endsection