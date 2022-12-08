<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    <h1>How to Get Current User Location with Laravel</h1>
    <div class="card">
        <div class="card-body">
            @if($UserLocation)
                <h4>IP: {{ $UserLocation->ip }}</h4>
                <h4>Country Name: {{ $UserLocation->countryName }}</h4>
                <h4>Country Code: {{ $UserLocation->countryCode }}</h4>
                <h4>Region Code: {{ $UserLocation->regionCode }}</h4>
                <h4>Region Name: {{ $UserLocation->regionName }}</h4>
                <h4>City Name: {{ $UserLocation->cityName }}</h4>
                <h4>Zip Code: {{ $UserLocation->zipCode }}</h4>
                <h4>Latitude: {{ $UserLocation->latitude }}</h4>
                <h4>Longitude: {{ $UserLocation->longitude }}</h4>
            @endif
        </div>
    </div>
</div>
  
</body>
</html>
{{-- php --}}
{{-- https://www.itsolutionstuff.com/post/how-to-get-current-user-location-in-laravelexample.html --}}
{{-- https://techsolutionstuff.com/post/how-to-get-current-user-location-in-laravel --}}