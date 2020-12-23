@extends('layouts.app')

@section('content')



<div class="card">
            
            @include('partials.discussion-header')

            <div class="card-body">
                <div class="text-center">
                <strong>{!! $discussion->title !!}</strong>
                </div>
                <hr>

                {!! $discussion->content !!}
            </div>

 </div>

<div class="card my-5">

    <div class="card-header">

    Add a Reply
    </div>

    <div class="card-body">
    @auth
    <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">
        @csrf
        <input type="hidden" name="content" id="content">
        <trix-editor input="content"></trix-editor>

        <button type="submit" class="btn my-3 btn-success">
        Add Reply
        </button>
    </form>
    @else
    <a href="{{ route('login') }}" style="width: 100%, color: #fff" class="btn btn-info">Sign in to Reply</a>
    @endauth
  

    </div>
</div>
@endsection

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css">

@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js">


</script>

@endsection
