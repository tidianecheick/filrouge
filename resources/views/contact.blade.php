@extends('layout.navbar')
@section('content') <br>


<center>
    <h3><strong> Vous avez une question, un commentaire
            ou une idée à partager ? <br>
            N’hésitez pas à nous contacter.
            Notre équipe sera à votre écoute!</strong></h3>
</center> 

<div class="bouge">
    <form action="" class=" contact   " >
        <fieldset class="uk-fieldset uk-container-large">

            <legend class="uk-legend">FORMULAIRE</legend>

            <div class="uk-margin ">
                <input class="uk-input uk-form-width-large " type="text" placeholder="votre nom et prénom">
            </div>
            <div class="uk-margin ">
                <input class="uk-input uk-form-width-large " type="email" placeholder="Email">
            </div>
            <div class="uk-margin ">
                <input class="uk-input uk-form-width-large " type="number" placeholder="Numero">
            </div>
            <div class="uk-margin ">
                <textarea class="uk-textarea  uk-form-width-large " rows="5" placeholder="Votre message"></textarea>
            </div>
            <div class="uk-margin ">
                <button class="uk-button uk-button-default">Envoyer</button>
             </div>
             <fieldset>
            </form>

</div>

<!-- <div id="rappel">
    <p><strong> RAPPEL IMMEDIAT ET GRATUIT</strong>
    <p>
    <h4><strong>Mr............:Directeur</strong></h4>
    <h4><strong>Email:.......................</strong></h4>
    <h4><strong>Tél:(+226)...................</strong></h4>
    <h4><strong>Mme..............:Chef de projet</strong></h4>
    <h4><strong>Email:........................</strong></h4>
    <h4><strong>Tél:(+226)....................</strong></h4>

    <p><strong> Contactez-nous par mail</strong></p>
    <p><strong> Localisez-nous sur google map</strong></p>

</div> -->

@endsection