<div class="container-fluid" id="myfooter">
	<div class="row">
		<div class="col-sm-3">
			<h2 class="logo">
				<a href="{{ url('/') }}">Dnvcomp</a>
			</h2>
		</div>
		<div class="col-sm-2">
			<h5>Меню</h5>
			<ul>
				<li><a href="{{ route('index') }}">Главная</a></li>
      			<li><a href="{{ route('notebook') }}">Ноутбук</a></li>
      			<li><a href="{{ route('computer') }}">Компьютер</a></li>
      			<li><a href="{{ route('windows') }}">Windows</a></li>
      			<li><a href="{{ route('about') }}">О сайте</a></li>
		</div>
		<div class="col-sm-2">
			<h5>О сайте</h5>
			<ul>
      			<li><a href="{{ route('about') }}">О нас</a></li>
				<li><a href="{{ route('contacts') }}">Контакты</a></li>
				<li><a href="{{ route('sitemap') }}">Карта сайта</a></li>
			</ul>
		</div>
		<div class="col-sm-2">
			<h5>Поддержка</h5>
			<ul>
				<li><a href="#service">Сервис</a></li>
				<li><a href="#recovery">Восстановление</a></li>
				<li><a href="{{ route('register') }}">Регистрация</a></li>
			</ul>
		</div>
		<div class="col-sm-3">
			<div class="social-icon">
				<a href="https://www.facebook.com/Dnvcomp" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="https://plus.google.com/u/0/113853558230066962899" class="google"><i class="fa fa-google-plus"></i></a>
				<a href="https://www.linkedin.com/in/mikolai-dziamko-292a04147/" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- Copyright -->
<div class="container-fluid copyright">
	<div class="col-lg-4">
		<p>© 2016 - 2018 | <a href="{{ url('/') }}">Dnvcomp</a> Все права защищены</p>
		<p><a href="https://hyperhost.ua/client/aff.php?aff=514">Хостинг Hyperhost</a></p>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-4">
		<p>E-mail:<a href="http://mailto:dnvcomp@hotmail.com">dnvcomp@dnvcomp.com</a></p>
	</div>
	</div>
</div>
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
    <script src="{{ asset('js/jquery.nav.js') }}"></script> 
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script> 
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>