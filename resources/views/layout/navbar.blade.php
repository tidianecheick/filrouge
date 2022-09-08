<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{('csss/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}">


    <title>AXEL2022</title>
</head>
<div class="menu-bar">
         <img src="{{asset('image/logo/logo.PNG')}}" alt="" class="logo">
        <ul>
            <li><a href="{{url('accueil')}}">ACCUEIL</a></li>
            <li><a href="{{url('service')}}">DOMAINE D'ACTIVITE <i class="fas fa-caret-down"></i></a>

                <div class="dropdown-menu">
                    <ul>
                        <li><a href="{{url('service')}}">BATIMENTS</a></li>
                        <li><a href="{{url('informatique')}}">INFORMATIQUES</a></li>
                        <li><a href="{{url('etude')}}">ETUDES</a></li>
                        <li><a href="{{url('barrage')}}">BARRAGES</a></li>
                        <li><a href="{{url('amenagement')}}">AMENAGEMENTS</a></li>
                        <li><a href="{{url('developpement')}}">ENERGIE<a></li>
                        <li><a href="{{url('collect')}}">COLLECTS</a></li>
                        <li><a href="{{url('formation')}}">FORMATIONS</a></li>
                        <li><a href="{{url('accompagner')}}">ACCOMPAGNEMENTS</a></li>
                        <li><a href="{{url('conseil')}}">CONSEILS</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="{{url('realisation')}}">REALISATION</a>
            </li>
            <li><a href="{{url('contact')}}">CONTACTS</a></li>
        </ul>
    </div>
 @yield('content')


    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Nos Contacts</h4>
  	 			<ul>
  	 				<li><a href="#">(+226):70449598</a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Notre Addresse</h4>
  	 			<ul>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Nos Services</h4>
  	 			<ul>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Suivez-nous</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
            </div>
  	 	</div>
  	 </div>
       
  </footer>






    <script src="{{asset('css/js/uikit.min.js') }}"></script>
    <script src="{{asset('css/js/uikit-icons.min.js') }}"></script>
</body>

</html>