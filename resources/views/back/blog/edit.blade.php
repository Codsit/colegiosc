@extends('back.app')

@section('form')
	{!! Form::model($post, ['route' => ['blog.update', $post->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
@stop
