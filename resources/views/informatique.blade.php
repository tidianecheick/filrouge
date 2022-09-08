@extends('layout.navbar')
@section('content') <br>
<div class="uk-animation-toggle" tabindex="0">
    <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>
            <div class="public">
                <h3 id="coul"><strong><i>INGENIEURIE INFORMATIQUE</h3></strong></i>
            </div>
        </center>
    </div>
</div>

<div class="">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
            <img src="{{asset('image/informatique.jpg')}}" alt="" uk-cover>
            <canvas width="100" height="500"></canvas>
        </div>
        <div>
            <div class="uk-card-body ">
                <strong><i>
                        <h2 class="uk-card-title gabarie2">  Genie Logiciel</h2>
                    </i></strong>
                <p>Axel intervient dans differents domaines de l'informatique et accompagne ses partenaires avec des solutions sur mesure
                    fiable, evolutifs en toute sécurité pour vous permettre d'être plus performant.</p>
                    <p>Le développement des applications web ;<br>
                    Le développement des sites web dynamiques ;<br>
                    Le développement d’applications lourdes;<br>
                    Le développement et la mise en place de solution de gestion électronique de documents (GED, ECM, etc. );<br>
                    Le développement de solutions logicielles sur mesure ;<br>
                    L’installation et le paramétrage de progiciels du marché (SAGE, M-Files, etc.);<br>
                    La fourniture et l’installation de matériels et équipements informatiques (microordinateurs, imprimantes, ancres, scanner, onduleur);<br>
                    L’infogérance des systèmes informatiques ; etc.</p>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
            <img src="{{asset('image/telecommunicatio.jpg')}}" alt="" uk-cover>
            <canvas width="100" height="500"></canvas>
        </div>
        <div>
            <div class="uk-card-body ">
                <strong><i>
                        <h2 class="uk-card-title gabarie2">Réseaux, Systèmes et Télécommunications</h2>
                    </i></strong>
                    <p>Axel offre des  solutions poussant les TIC (Couplage Téléphonie/Informatique)  à leurs limites,
                    économiques et stables pour répondre à vos besoins de gestion centralisée,
                    modulable et évolutive des plates-formes de téléphonie, de gain de productivité,
                    d’amélioration de la satisfaction clients et de réduction des coûts dans : </p>
                    <p> -Solution internet VSAT</p>
                    <p> -Solutions de téléphonie</p>
                    <p> -Solutions de visioconférance</p>
                    <p> -Solutions de sécurité </p>
                              

            </div>
        </div>
    </div>
</div>



@endsection