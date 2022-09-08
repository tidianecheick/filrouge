@extends('layout.navbar')
@section('content') <br>

<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>  <h3 class="hydro"> <strong>Aménagement hydro-agricoles.</strong></h3> </center>
        </div>
    </div>


<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/eau.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2"></h2>
                        </i></strong>
                        <p>  </p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/eau1.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2"></h2>
                        </i></strong>
                        <p>  </p>
                </div>
            </div>
        </div>
    </div>
        @endsection 