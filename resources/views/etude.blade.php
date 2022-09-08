@extends('layout.navbar')
@section('content') <br>
<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>  <h3 class="etude"> <strong>	Etudes, construction et contrôle de projets d’approvisionnement en eau potable et d’assainissement. </strong></h3> </center>
        </div>
    </div>

 <div class="">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/reali.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2"> La qualité de nos services</h2>
                        </i></strong>
                        <p>L’eau est une ressource rare et précieuse. <br> L’assainissement, l’accès à l’eau potable, la pollution <br> de l’eau et ses conséquences, sont des préoccupations <br> majeures.
                             Les solutions d’approvisionnement en eau <br> potable sont donc au centre de ces questions. 
                             C'est dans cette vision que Axel avec son experience s'engage à vous offir un service d'approvisionnement à la hauteur de vos attente.                  </p>
                </div>
            </div>
        </div>
    </div>
 <div class="">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/afrik.png')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2"> La qualité de nos services</h2>
                        </i></strong>
                        <p>Un environnement de vie sain dépend nécessairement d'un assainissement adéquat.
                        Sans systèmes d'assainissement, les déchets humains pénètrent
                         dans les eaux souterraines et les eaux de surface.Axel intervient dans se sens
                        par la mise en place d'un cadre propice pour faciliter la gestion des déchets humains.   </p>
                </div>
            </div>
        </div>
    </div>

 @endsection