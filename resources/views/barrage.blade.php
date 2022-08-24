@extends('layout.navbar')
@section('content') <br>
<center>  <h3 class="barrage"> <strong>Construction des barrages.</strong></h3> </center>

<div class="uk-position-relative" uk-slideshow="animation: fade">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <div class="uk-position-bottom-center uk-position-small">
        <ul class="uk-thumbnav">
            <li uk-slideshow-item="0"><a href="#"><img src="{{asset('image/barrage.jpg')}}" width="100" height="67" alt=""></a></li>
            <li uk-slideshow-item="1"><a href="#"><img src="{{asset('image/slide3.jpg')}}" width="100" height="67" alt=""></a></li>
            <li uk-slideshow-item="2"><a href="#"><img src="{{asset('image/reali0.jpg" width="100" height="67" alt=""></a></li>
        </ul>
    </div>

</div>

@endsection 