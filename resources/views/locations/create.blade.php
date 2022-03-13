@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('users.locations.store',['user'=>$user->id]) }}">
            @csrf

            <div class="row mb-3">
              <label for="lat" class="col-md-4 col-form-label text-md-end"> lat </label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="lat" value="{{ old('lat') }}" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="lng" class="col-md-4 col-form-label text-md-end"> lng </label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="lng" value="{{ old('lng') }}" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="title" class="col-md-4 col-form-label text-md-end"> info </label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
