@extends('layout.navbar') 
@section('content')<br>
<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center> <h3 class="collecte"> <strong>  Collecte, traitement et/ou évacuation des eaux usées et excréta</strong></h3> </center>
        </div>
    </div>


<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/collecte.jpg')}}" alt="" uk-cover>
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
        
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid id="conteneur">
            <div class="uk-card-media-left uk-cover-container uk-container ">
                <img src="{{asset('image/evacuer.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="600"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <strong><i>
                            <h2 class="uk-card-title"></h2>
                        </i></strong>

                </div>
            </div>
        </div>
    
@endsection