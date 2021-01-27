@extends('layouts.article')
@section('main')

<h1 class="font-thin text-4x1">{{$article->title}}</h1>   
<h1 class="font-thin text-4x1">{{$article->content}}</h1>

@if ($errors->any())
<div class="error p-3 bg-red-500 text-red-100 font-thin rounded">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
    
@endif
<form action="{{route('comment.store')}}" method="post">
    @csrf
    <div class='field my-2'>
        <label for="">留言</label>
        <textarea name="comment" cols="10" rows="1" class="vorder border-gray-300 p-2">{{old('content')}}</textarea>
    </div>

    <div class='action'>
        <button type="submit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">送出留言</button>
    </div>
</form>
<div>
    <a href="{{route('articles.index')}}">回文章列表</a>
    </div>
<div>
    {{-- @foreach ($comments as $comment)
    <div class="border-t border-gray-300 my-1 p-2">
        <h2 class="font-bold text-lg">
            <a href="{{route('articles.show', $comment)}}">
            {{$comment->comment}}</a>
        </h2>
        <p>
            {{$comment->created_at}} 由 {{$comment->user->name}} 分享
        </p> --}}
        
    {{-- @endforeach --}}
@endsection







