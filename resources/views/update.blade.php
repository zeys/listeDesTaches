@extends('layout')
@section('title','mise à jour')
@section('content')
      
                  <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">
                        {{ csrf_field() }}
                <!--   <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}"> -->
                        <textarea class="form-control" name="todo" cols="50" rows="3">{{ $todo->todo }}</textarea>
                        <br>
                        <input type="submit" value="modifier" class="btn btn-info">
                  </form>
@stop