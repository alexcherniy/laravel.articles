@extends('app')

@section('content')
<h1>Изменить: {!! $article->title !!}</h1>


{{--{!! Form::open(array('action' => ['ArticlesController@update', $article->id],'_method' => 'PATH')) !!}--}}
{!! Form::model($article,['method'=> 'PATCH', 'action'=>['ArticlesController@update', $article->id]]) !!}

@include('articles.form', ['submitButtonText'=>'Изменить статью'] )
{!! Form::close() !!}


@include('errors.list')

    @stop