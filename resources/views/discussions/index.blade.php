@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
  <a href="{{ route('discussion.create') }}" class="btn btn-success">Add Discussion</a>
</div>

@foreach($discussions as $discussion)
  <div class="card">
      <div class="card-header">
        {{ $discussion->title }}
      </div>

      <div class="card-body">
        {!! $discussion->content !!}
      </div>
  </div>
@endforeach

{{ $discussions->links() }}

@endsection
