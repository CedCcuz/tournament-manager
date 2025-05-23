@extends('tournaments.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Tournament Manager</h2>
  <div class="card-body">

        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('tournaments.create') }}"> <i class="fa fa-plus"></i> Create New Tournament</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th width="250px">Actions</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($tournaments as $tournament)
                <tr>
                    <td>{{ $tournament->name }}</td>
                    <td>{{ $tournament->location }}</td>
                    <td>
                        <form action="{{ route('tournaments.destroy',$tournament->id) }}" method="POST">
                            <a class="btn btn-light btn-sm" href="{{ route('tournaments.show',$tournament->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('tournaments.edit',$tournament->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>

        </table>

        {{-- {!! $tournaments->links() !!} --}}

  </div>
</div>
@endsection