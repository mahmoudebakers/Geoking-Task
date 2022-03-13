@if ($errors->any())
<div class="alert alert-danger">
  @foreach ($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

@if ($errors->register->any())
<div class="alert alert-danger">
  @foreach ($errors->register->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

@if ($error=session('error'))
<div class="alert alert-danger">
  <p>{{ $error }}</p>
</div>
@endif
