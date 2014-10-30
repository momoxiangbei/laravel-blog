@extends('default')
 
@section('main')
 
    <h2>编辑页面</h2>

    {{ Form::model($page, array('method' => 'put', 'route' => array('pages.update', $page->id))) }}

        <div>
            {{ Form::label('title', 'Title') }}
            <div>
                {{ Form::text('title') }}
            </div>
        </div>

        <div>
            {{ Form::label('body', 'Content') }}
            <div class="controls">
                {{ Form::textarea('body') }}
            </div>
        </div>

        <div>
            {{ Form::submit('更新') }}
            <a href="{{ URL::route('pages.index') }}">取消</a>
        </div>

    {{ Form::close() }}
 
@stop