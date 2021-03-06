@extends('layouts.app')

@section('content')



<div class="card">
                <div class="card-header">Add Discussion</div>

                <div class="card-body">
                <form action="{{ route('discussions.store') }}" method="POST">

                    @csrf

                    <div class="form-group">

                        <label for="title">Title</label>

                        <input type="text" class="form-control" name="title" value="">
                    </div>

                    <div class="form-group">

                            <label for="content">Content</label>

                            <input id="content" type="hidden" name="content">
                            <trix-editor input="content"></trix-editor>


                         </div>

                    <div class="form-group">

                        <label for="channel">Channel</label>

                        <select name="channel_id" id="channel" class="form-control">
                            @foreach($channels as $channel)
                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="Submit" class="btn btn-success">Submit Discussion</button>

                    </form>
                </div>
            </div>
@endsection

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script> flatpickr('#created_at', {enableTime: true}) </script>




@endsection
