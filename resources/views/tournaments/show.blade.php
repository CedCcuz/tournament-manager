@extends('tournaments.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Show Tournament</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('tournaments.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong> <br/>
                {{ $tournament->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Location:</strong> <br/>
                {{ $tournament->location }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
            <strong>Categories:</strong>
            <div class="d-flex flex-wrap gap-2">
                @forelse ($tournament->categories as $category)
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-primary btn-sm">
                        {{ $category->name }}
                    </a>
                @empty
                    <span class="text-muted">None</span>
                @endforelse
            </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <form action="{{ route('categories.store') }}" method="POST" class="d-flex align-items-center">
                @csrf
                <div class="form-group me-2">
                    <label for="name" class="form-label"><strong>Add a new category:</strong></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Category name">
                </div>
                <input type="hidden" name="tournament_id" value="{{ $tournament->id }}">
                <button type="submit" class="btn btn-success mt-4"><i class="fa fa-plus"></i></button>
            </form>
        </div>
    </div>

  </div>
</div>
@endsection