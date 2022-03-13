@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">

          <a href="{{ route('users.locations.create', ['user'=>$user->id]) }}"> create</a>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">lat</th>
                <th scope="col">lng</th>
                <th scope="col">info</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $locations as $location )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $location->lat }}</td>
                <td>{{ $location->lng }}</td>
                <td>{{ $location->title }}</td>
                <td>
                  <form action="{{ route('users.locations.destroy', ['user' => $user,'location' => $location]) }}"
                    method="post" style="display: inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>
                      delete</button>
                  </form><!-- end of form -->
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
