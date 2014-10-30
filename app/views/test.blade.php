@extends('default')

@section('main')
{{ 123}}
    {{ Form::model($page) }}

        <div class="control-group">
            {{ Form::label('title', 'Title') }}
            <div class="controls">
                {{ Form::text('title') }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('body', 'Content') }}
            <div class="controls">
                {{ Form::textarea('body') }}
            </div>
        </div>

        <div class="form-actions">
            {{ Form::submit('更新', array('class' => 'btn btn-success btn-save btn-large')) }}
            <a href="#" class="btn btn-large">取消</a>
        </div>

    {{ Form::close() }}

@stop