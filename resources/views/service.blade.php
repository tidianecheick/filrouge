@extends('layout.navbar')
@section('content') <br>
<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center> <div class="public"> <h3 id="coul">  <strong>  BÂTIMENTS ET TRAVAUX PUBLICS</h3> </strong></div> </center>
        </div>
    </div>
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-container-xlarge" uk-grid id="conteneur">
    <div class="uk-card-media-left uk-cover-container">
        <img src="{{asset('image/public.jpg')}}" alt="" uk-cover>
        <canvas width="600" height="300"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
        <strong><i>
            <h2 class="uk-card-title">La qualité de nos services </h2>
        </strong></i>

            <p>En raison de son rôle dans les édifications, il est fortement recommandé
                 de bien choisir un fer d’une excellente qualité pour réaliser vos travaux.
                 Sachant que la durée de vie d’un bâtiment est en moyenne d’un siècle au minimum, alors le fer est un gage de sécurité sur le long terme.
                C'est en se sens que Axel offre un service de qualité a travers les materiaux quelle utilise dans la realisation de vos edifices.</p>
        </div>
    </div>
</div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-container-xlarge  " uk-grid  id="conteneur">
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="{{asset('image/Construction.jpg')}}" alt="" uk-cover>
        <canvas width="400" height="300"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
        <strong><i>
            <h2 class="uk-card-title">La qualité de nos services</h2>
        </strong></i>
    
            <p> Pour ses services Axel utilise du ciment de trés  bonne de qualité suivant les normes international de production.
            Nous restons fidèles aux mêmes principes sur lesquels notre entreprise a été fondée.Offrir un service de qualité à nos clients
            C'est a travers le respect ses principes que nous entretenons de trés bonne relation avec les differents clients. 
            </p>
        </div>
    </div>
</div>
@endsection