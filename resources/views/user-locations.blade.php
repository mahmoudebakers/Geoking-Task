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
                <td><a href=""> delete</a> </td>

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
