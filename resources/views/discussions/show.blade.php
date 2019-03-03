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
@endsection
