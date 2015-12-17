@extends('app')

@section('content')

    <h1>Написать новую статью</h1>
    <hr>


    {!! Form::open(['url'=> 'articles']) !!}
    @include('articles.form', ['submitButtonText'=>'Добавить статью'] )
    {!! Form::close() !!}




    @include('errors.list')


    @stop