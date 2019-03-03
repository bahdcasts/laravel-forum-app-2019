@extends('layouts.app')

@section('content')
<div class="card">
    @include('partials.discussion-header')

    <div class="card-body">
      <div class="text-center">
        <strong>
            {{ $discussion->title }}
        </strong>
      </div>

      <hr>

      {!! $discussion->content !!}
    </div>
</div>

<div class="card my-5">
  <div class="card-header">
    Add a reply
  </div>

  <div class="card-body">
    @auth
      <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">
        @csrf
        <input type="hidden" name="reply" id="reply">
        <trix-editor input="reploy"></trix-editor>

        <button type="submit" class="btn btn-sm my-2 btn-success">
          Add Reply
        </button>
      </form>
    @else
      <a href="{{ route('login') }}" class="btn btn-info">Sign in to add a reply</a>
    @endauth
  </div>
</div>
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css">
@endsection

@section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script>
@endsection
