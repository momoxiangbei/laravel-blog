@extends('default')

@section('main')
    <div class="pages_index_new">
        <button type="button" class="btn btn-default"><a href="{{ URL::route('pages.create') }}">新建</a></button>
    </div>
    
    <div id="pages_index">
        @foreach ($pages as $page)
        <ul class="list-group">
            <li id="li1"><a href="{{ URL::route('pages.show',$page->id) }}" class="list-group-item">{{ $page->title }}</a></li>
            <li id="li2"><a href="{{ URL::route('pages.edit', $page->id) }}" class="list-group-item list-group-item-success">编辑</a></li>
            {{ Form::open(array('route' => array('pages.destroy', $page->id), 'method' => 'delete')) }}
                    <button type="submit" href="{{ URL::route('pages.destroy', $page->id) }}" class="btn btn-danger btn-mini">删除</button>
            {{ Form::close() }}
        </ul>
        @endforeach
        
        <div id="pages_links">
            {{ $pages->links() }}        
        </div>

    </div>


        

@stop