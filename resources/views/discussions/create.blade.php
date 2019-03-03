@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Discussion</div>

    <div class="card-body">
      <form action="{{ route('discussion.store') }}">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>

          <input type="text" class="form-control" name="title" value="">
        </div>

        <div class="form-group">
          <label for="content">Content</label>

          <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="channel">Channel</label>

          <select name="channel" id="channel" class="form-control">
            @foreach($channels as $channel)
              <option value="{{ $channel->id }}">{{ $channel->name }}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-success">Create Discussion</button>
      </form>
    </div>
</div>
@endsection
