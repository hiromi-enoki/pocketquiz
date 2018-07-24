@extends('layouts.app')
@section('content')

    <div class="image text-center">
        <img src="{{ secure_asset("images/myquizlist.jpg") }}" alt="myquizlist pic">
    </div><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="{{ secure_asset("images/newanata.bmp") }}" alt="anata pic">
           
        <div class="row">
            @foreach ($quizzes as $quiz) <?php $user = $quiz->user; ?>
            
             <div class="col-sm-4 col-md-4 col-lg-4">
           
                <div class="panel panel-warning">
                <div class="panel-heading text-center">
                          
                    <h3 class="panel-title">{!! nl2br(e($quiz->title)) !!}</h3>
                            
                    <div class="panel-body">
                                
                        <div class="button-inline">
                         @if (Auth::id() == $quiz->user_id)
                         {!! Form::open(['route' => ['quizzes.edit', $quiz->id], 'method' => 'get']) !!}
                         {!! Form::submit('Edit', ['class' => 'btn btn-success btn-xs']) !!}
                         {!! Form::close() !!}
                         @endif
                                
                         @if (Auth::id() == $quiz->user_id)
                        {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onClick' => 'return deletePost(this);']) !!}
                        {!! Form::close() !!}
                        @endif
                        </div>
                        
                    </div>
                </div>
                </div>
        </div>
    @endforeach
    </div> 
     {!! $quizzes->render() !!}
    
</div>

 <!--ここからDONE一覧機能-->
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="{{ secure_asset("images/favo.jpg") }}" alt="anata pic">
        
        <table class="table table-striped"style="table-layout:fixed;">
        <tr class="success">
        
        <th>Title</th>
        <th>Made by</th>
        
        </tr>
        @foreach ($favoritings as $favoriting)           
        <tr>
             <td><font color="#0000ff"><a href="{{ route('quizzes.show', $favoriting->id) }}">
                 {!! nl2br(e($favoriting->title)) !!}</a>
                 
                 </td>
                 <td>
                 {!! nl2br(e($favoriting->user->nickname)) !!}
                 </td>
        </tr>
        @endforeach
    
</table>
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
        </table>
        {!! $favoritings->render() !!}
        </div>
    </div>

    </div>
        
    

@endsection