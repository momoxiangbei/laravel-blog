@extends('default')


@section('main')
 
    <h2>页面内容</h2>
    <h3>{{ $page->title }}</h3>

    <div>
    	发布于 {{ $page->created_at }} 最后更新 {{ $page->updated_at }}
    </div>

    <div>
        {{ $page->body }}
    </div>

@stop

<div>
     
@include('comments.index',array('id' => $page->id))
</div>

