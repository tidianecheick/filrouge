@extends('layout.navbar')
@section('content') <br>
<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>  <h3 class="form"> <strong>Formations</strong></h3> </center>
        </div>
    </div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid id="conteneur">
            <div class="uk-card-media-left uk-cover-container uk-container ">
                <img src="{{asset('image/renfort.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <strong><i>
                            <h2 class="uk-card-title"> Renforcement de capacité</h2>
                        </i></strong>
                    <p>     Nous proposons à nos partenaires, un accompagnement et un suivi dans 
                        le développement de leurs aptitudes à exercer de manière optimale leurs fonctions,
                         à résoudre des problèmes et à atteindre les objectifs visés</p>
                <p>Cette activité relève du registre de l’ingénierie de la formation continue des professionnels.
                     Il s’agit, à la demande du partenaire et en collaboration 
                     avec des experts et d’ingénieurs de haut niveau de : <br>
                     Développer des dispositifs de formation continue certifiant ou attestant de l’acquisition de compétences ; <br>
                     
                     L’accompagner dans l’élaboration et la réalisation de son plan de formation ; <br>
                     </p>
                
                        </div>
            </div>
        </div>
    

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid id="conteneur">
            <div class="uk-card-media-left uk-cover-container uk-container ">
                <img src="{{asset('image/forma.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <strong><i>
                            <h2 class="uk-card-title"> Appuis institutionnels</h2>
                        </i></strong>
                    <p>    L’appui institutionnel constitue à bien des égards, le cœur de métier de Axel.
                         Elle dispose à cet effet d’experts disposant à ce sujet d’une expérience pertinente, en particulier dans les domaines suivants :</p>
                <p> Organisation et modernisation de la gestion documentaire  <br>
                Développement organisationnel et stratégie de changement planifié, <br>
                Appui conseil auprès des décideurs institutionnels</p>
                
                        </div>
            </div>
        </div>
    
@endsection 