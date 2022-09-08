@extends('layout.navbar')
@section('content') <br>

<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>  <h3 class="barrage"> <strong>Construction des barrages</strong></h3> </center>
        </div>
    </div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/barrage.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2">La qualité de nos services</h2>
                        </i></strong>
                        <p>La régulation de cours d'eau, l'irrigation des cultures, l'alimentation en eau des villes, <br>
                         la production d'énergie hydro-électrique son autants de préoccupation que Axel avec son 
                          experience </p>

                </div>
            </div>
        </div>
    
        
        

    
       
                   

@endsection 