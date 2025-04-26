@extends('tournaments.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Tournament</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('tournaments.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('tournaments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                id="inputName"
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputLocation" class="form-label"><strong>Location:</strong></label>
            <input
                type="text"
                name="location"
                class="form-control @error('location') is-invalid @enderror"
                id="inputLocation"
                placeholder="Location">
            @error('location')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputType" class="form-label"><strong>Type:</strong></label>
            <select
                name="type"
                class="form-select @error('type') is-invalid @enderror"
                id="inputType">
                <option value="double-elimination">Double Elimination</option>
            </select>
            @error('type')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

  </div>
</div>
@endsection