@extends('layout.navbar')
@section('content') <br>

 <center>  <h3 class="etude"> <strong>	Etudes, construction et contrôle de projets d’approvisionnement en eau potable et d’assainissement. </strong></h3> </center>
 <div class="">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/reali.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="500"></canvas>
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
 <div class="">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/afrik.png')}}" alt="" uk-cover>
                <canvas width="100" height="500"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2"></h2>
                        </i></strong>
                        <p>  </p>
                </div>
            </div>
        </div>
    </div>

 @endsection