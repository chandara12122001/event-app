@section('css')
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
@endsection
<div>
    {{-- <h1>hello</h1> --}}
    {{-- <h1>{{$event->location}}</h1> --}}
    <div id='map' style='width: 100%; height: 300px;'></div>
</div>
@push('scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY2hhbmRhcmF5aSIsImEiOiJja3F0bmgwOHUyYXZhMm5xcW5qaW1paHR5In0.Zvz6Z-VOdO7-pkX8G1ZrVA';
    const lng = @js($lng);
    const lat = @js($lat);
// console.log(lng);
    // console.log(lng);
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [lat,lng], // starting position [lng, lat]
        zoom: 12, // starting zoom   
    });
    const marker = new mapboxgl.Marker()
    .setLngLat([lat,lng])
    .addTo(map); // add the marker to the map    
</script>
@endpush
{{-- @push('scripts')
@endpush --}}