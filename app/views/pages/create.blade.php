@extends('default')
 
@section('main')
 
    <h2>新增一个页面</h2>

    {{ Form::open(array('route' => 'pages.store')) }}

    <p>标题：{{ Form::text('title') }}</p>
    <p>作者：{{ Form::textarea('body') }}</p>
    {{ Form::submit('新增') }}
    <a href="{{ URL::route('pages.index') }}">取消</a>


    {{ Form::close() }}

@stop