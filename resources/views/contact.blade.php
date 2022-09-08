@extends('layout.navbar')
@section('content') <br>

<div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>
    <h3 class=" tex"><strong> Vous avez une question, un commentaire
            ou une idée à partager ? <br>
            N’hésitez pas à nous contacter.
            Notre équipe sera à votre écoute!</strong></h3>
</center> 
        </div>
    </div>


<section class="glob">
    
<div class="" id="laire">
    <h3>Formulaire de contact</h3>
    <form action="{{route('formulaire')}}" method="POST">
        @csrf
      <label for="fname">Nom & prénom</label>
      <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">
  
      <label for="sujet">Sujet</label>
      <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
  
      <label for="emailAddress">Email</label>
      <input id="emailAddress" type="email" name="email" placeholder="Votre email">
  
  
      <label for="subject">Message</label>
      <textarea id="subject" type="text" name="subject" placeholder="Votre message" style="height:200px"></textarea>
  
      <input type="submit" value="Envoyer">
    </form>
    
  </div> <br>
  <div id="rapel">
    <h3> Rappel immediat et gratuit</h3> 
    <P> Mr.....................:Directeur</P>
    <P> .......................@gmail.com</P>
    <P> (+226):..........................</P> <br>
    <P> Mme....................:Chef de projet</P>
    <P> .......................@gmail.com</P>
    <P> (+226)...........................</P> <br>
    <h3>Bureau</h3>
    <P> (+226)...........................</P> 
    </div>
    </section> <br>
    <section> 
    <div class="uk-animation-toggle" tabindex="0">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
        <center>
    <h3 class="moyen">Le google Maps</h3>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15590.141477152916!2d-1.5540652!3d12.347029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x83c88c265cfc6afe!2sAFRIK%20LONNYA!5e0!3m2!1sfr!2sbf!4v1661883705238!5m2!1sfr!2sbf" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>        </div>
    </div>
   
    </section><br>

 
    



@endsection