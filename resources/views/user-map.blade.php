@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card-header"> user map ({{ $user->name }})</div>

      {{-- map container --}}
      <div id="mymap"></div>
    </div>
  </div>
</div>
@endsection



@push('head_styles')
<style type="text/css">
  #mymap {
    border: 1px solid red;
    width: 100%;
    height: 700px;
  }
</style>
@endpush

@push('head_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback" async defer>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
@endpush

@push('footer_js')
<script type="text/javascript">
  $(document).ready(function () {

  let locations = @php  print_r(json_encode($locations)) @endphp ;
  let zommed = @php  print_r(json_encode($zommed)) @endphp ;

    let mymap = new GMaps({
        el: '#mymap',
        lat: zommed.lat,
        lng: zommed.lng,
        zoom:6
    });


    $.each( locations, function( index, value ){
        mymap.addMarker({
          lat: value.lat,
          lng: value.lng,
          title: value.title,
        });
    });
});
</script>
@endpush
