@extends('layout.navbar')
@section('content')
 


<body>
   
    <span id="marge">
        <!-- slide3 -->
        
        
            <div class="uk-position-relative uk-visible-toggle uk-light uk-container uk-container-large" tabindex="-1" uk-slideshow="autoplay: true">

<ul class="uk-slideshow-items uk-cover-container">
    <li>
        <img src="{{asset('image/slide1.jpg')}} " alt="" uk-cover>
        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
            <h3 class="uk-margin-remove">Bottom</h3>
            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </li>
    <li>
        <img src="{{asset('image/slide2.jpeg')}}" alt="" uk-cover>
        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
            <h3 class="uk-margin-remove">Bottom</h3>
            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </li>
    <li>
        <img src="{{asset('image/slide3.jpg')}}" alt="" uk-cover>
        <div class="uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-right uk-width-medium">
            <h3 class="uk-margin-remove">Left</h3>
            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </li>
</ul>

<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
        </div><br>
    </span>
    <div class="">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s " uk-grid id="conteneur">
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('image/img-droite.png')}}" alt="" uk-cover>
                <canvas width="100" height="500"></canvas>
            </div>
            <div>
                <div class="uk-card-body ">
                    <strong><i>
                            <h2 class="uk-card-title gabarie2">-QUI SOMMES-NOUS?</h2>
                        </i></strong>
                        <p>L’entreprise Axel une société à responsabilité limitée (SARL) du droit Burkinabé avec un capital de 1 000 000 F CFA, <br> créée en 2020, dont le siège social est à Ouagadougou, au Burkina Faso</p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-margin uk-card uk-card-default uk-card-body">
    <div class="gabarie2">
        <strong> <i>
                <h2>-POURQUOI NOUS CHOISIR?</h2>
            </i> </strong>
            
        <p>Notre culture d’entreprise se caractérise par un partage de nos valeurs <br> au quotidien au sein des équipes et
             avec nos clients. <br> Nos professionnels constituent une valeur forte de notre entreprise. <br> Ils possèdent une double compétence, 
             technique et métier et une force de propositions en adoptant une démarche proactive.</p>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid >
            <div class="uk-card-media-left uk-cover-container uk-container ">
                <img src="{{asset('image/activité.jpg')}}" alt="" uk-cover>
                <canvas width="100" height="600"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <strong><i>
                            <h2 class="uk-card-title">-NOS DOMMAINES D'ACTIVITE</h2>
                        </i></strong>
                    <h4>Axel intervient dans les domaines d’activité suivants :</h4>
                    <ul>
                        <ol>Bâtiments et travaux publics </ol>
                        <ol>Ingénierie informatique </ol>
                        <ol>Etudes, construction et contrôle de projets d’approvisionnement en eau potable et d’assainissement </ol>
                        <ol>Construction des barrages </ol>
                        <ol>Aménagements hydro-agricoles </ol>
                        <ol>Développement rural </ol>
                        <ol>Collecte, traitement et/ou évacuation des eaux usées et excréta </ol>
                        <ol>Construction des ouvrages d’assainissement des eaux usées et excréta </ol>
                        <ol>Formations</ol>
                        <ol>Accompagnement</ol>
                        <ol> Conseil </ol>
                        <ol>Etc</ol>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="gabarie2"> <strong><i>
                <h2>-NOS REALISATIONS</h2>
            </i></strong></div>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center " uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation1.jpg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation2.jpeg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation3.jpg')}}" alt=""></div>
        </div>
    </div>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/afriklonny.jpeg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/afrik.png')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation3.jpg')}}" alt=""></div>
        </div>
    </div>
    <div>
        <div class="gabarie2"><strong><i>
                    <h2>-NOS PARTENAIRES</h2>
                </i></strong></div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light partenaire "uk-slideshow="autoplay: true">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                    <li>
                        <img src="{{asset('image/logo/index1.png')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('image/logo/index2.png')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('image/logo/index3.jpg')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('image/logo/index4.png')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('image/logo/index5.png')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('image/logo/index6.png')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('image/logo/index7.png')}}" width="300" height="300" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1></h1>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        
    </div>
@endsection 