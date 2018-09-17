@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">
                {{$post['title']}}
            </h1>
            <p>{{$post['content']}}</p>
            <p><a href="{{route('blog.post',['id'=>array_search($post,$posts)])}}">Read more...</a></p>
        </div>
    </div>
    <hr>
    @endforeach






    <div class="row">
        <div class="com-md-12">
            <h1>Control Structures</h1>
            @if(true)
                <p>This only prints if true</p>
            @else
                <p>This prints if false</p>
            @endif

            @for($i=0;$i<5;$i++)
                <p>{{$i + 1}}. Iteration</p>
            @endfor
        </div>
    </div>

    <hr>

    <h2>XSS</h2>
    {{"<script>alert('Hello');</script>"}}
    {{--{!!"<script>alert('Hello');</script>"!!}--}}


@endsection