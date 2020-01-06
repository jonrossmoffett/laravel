@extends('template')

@section('head')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

@endsection

@section('content')

<form method="POST" action="{{url('articles', [$article->id])}}">

    @csrf
    @method('PUT')

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" name="title" value="{{ $article->title }}">
        </div>
    </div>

    <div class="field">
        <label class="label">exerpt</label>
        <div class="control">
            <input class="input" type="text" name="exerpt" value="{{ $article->exerpt }}">
        </div>
    </div>

    <div class="field">
        <label class="label">body</label>
        <div class="control">
            <textarea class="textarea" name="body" placeholder="">{{ $article->body }}</textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>

</form>

@endsection