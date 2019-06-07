@extends('layout')
@section('title','Liste des tâches')
@section('content')

<div class="row">
            <div class="col-lg-6 offset-md-3"> <!--col-lg-offset-3 not working on bootstrap 4 -->
                  <form action="/create/todo" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="form-control input-lg" name="todo" placeholder="Créer une nouvelle tâche">
                  </form>
            </div>
      </div>
      <br>
      <hr>
      
@foreach ($tasks as $task)
<div style="display:grid;grid-template-columns: 8fr .1fr 0.4fr 2fr;grid-column-gap: 5px;">
{{$task->todo}}
<a href="{{ route('todo.delete', ['id' => $task->id]) }}" class="btn btn-danger"> X </a>
<a href="{{ route('todo.update', ['id' => $task->id]) }}" class="btn btn-info btn-xs"> Modifier </a>
            @if(!$task->completed)
                  <a href="{{ route('todos.completed', [ 'id' => $task->id ]) }}" class="btn btn-xs btn-success"> Marquer comme terminé</a>
            @else
                  <span class="text-success">terminée!</span>
            @endif
</div>            
                    <hr>
@endforeach                 
@stop
