@extends('layout')

@section('title')
    Edit User
@stop

@section('content')
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

    {!! Form::model($book, array('route' => array('book.update', $book->id), 'method' => 'PATCH')) !!}
    <div class="form-group">
        {!! Form::label('', 'Title') !!}
        {!! Form::text('title', Form::old('title'), array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', 'Author') !!}
        {!! Form::text('author', Form::old('author'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('', 'Genre') !!}
        {!! Form::text('genre', Form::old('genre'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('', 'Year') !!}
        {!! Form::text('year', Form::old('year'), array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
@stop