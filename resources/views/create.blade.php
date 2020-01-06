@extends('template')

@section('head')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

@endsection

@section('content')

<form method="POST" action="{{url('/articles')}}">

    @csrf


    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input {{$errors->has('title') ? 'is danger' : ''}}" type="text" name="title" placeholder="Text input" value="{{old('title')}}">

            @error('title')
            <p class="help is-danger">{{$errors->first('title')}}</p>
            @enderror

        </div>
    </div>

    <div class="field">
        <label class="label">exerpt</label>
        <div class="control">
            <input class="input" type="text" name="exerpt" placeholder="Text input" value="{{old('exerpt')}}">
            @error('exerpt')
            <p class="help is-danger">{{$message}}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label">body</label>
        <div class="control">
            <textarea class="textarea" name="body" placeholder="Textarea">{{old('body')}}</textarea>
        </div>
        @error('body')
        <p class="help is-danger">{{$message}}</p>
        @enderror
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