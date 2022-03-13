@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">locations</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $users as $user )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('users.locations.index',['user'=>$user->id]) }}"> manage</a> </td>
                <td> <a href="{{ route('user.map',['user'=>$user->id])}}">map</a></td>
                {{-- <td><a href="{{ route('userLocations',['user'=>$user->id]) }}"> manage</a> </td> --}}
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
