@extends('layout.navbar') 
@section('content')<br>

<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>  <h3 class="deve"> <strong>Energie</strong></h3> </center>
        </div>
    </div>


<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/cable.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="300"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2">Électricité bâtiments</h2>
                        </i></strong>
                            <p> Pour l’installation électrique des bâtiments, nous disposons d’une équipe qualifiée et capable de réaliser 
                                toute installation sécurisée et efficace. </p>
                            <p> Nos axes d’intervention se résument ici : <br>
                            -Au montage du circuit électrique et câblage ;<br>
                            -A l’établissement du bilan de consommation énergétique ;<br>
                            -A l’interconnexion électrique entre bâtiments ;<br>
                            -Courant ondulé et groupe électrogène.</p>
                </div>
            </div>
        </div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/solar.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="200"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2">Énergie solaire</h2>
                        </i></strong>
                            <p>     Axel opère dans plusieurs domaines de lenergie solaire. </p>
                            <p> Nos axes d’intervention se résument ici
                            -Le conseil au choix des plates-formes solaire  ;<br>
                            -La conception des solutions de réduction de coûts de facture d’électricité ;<br>
                            -La construction de centrales solaires ;<br>
                            -La réalisation de raccordements publics et privés ;

                            La réalisation de lignes électriques solaires.</p>
                </div>
            </div>
        </div>
    

@endsection 