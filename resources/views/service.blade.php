@extends('layout.navbar')
@section('content') <br>

 <div class="public"> <h3> <strong> <i> BÂTIMENTS ET TRAVAUX PUBLICS</h3></strong></i></div>
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-container-xlarge" uk-grid id="conteneur">
    <div class="uk-card-media-left uk-cover-container">
        <img src="{{asset('image/public.jpg')}}" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Left</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-container-xlarge  " uk-grid  id="conteneur">
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="{{asset('image/Construction.jpg')}}" alt="" uk-cover>
        <canvas width="400" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Right</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>
@endsection