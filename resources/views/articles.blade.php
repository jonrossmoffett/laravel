@extends('template')


@section('content');

@foreach ($articles as $article)

<div id="content">
    <div class="title">
        <h2><a href="articles/{{$article->id}}">{{$article->title}}<a></h2>
    </div>
    <p><img src="{{asset('images/banner.jpg')}}" alt="" class="image image-full" /> </p>
    <p>{{$article->exerpt}}</p>
</div>

@endforeach




@endsection