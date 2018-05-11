@extends('layouts.app')

@section('description', 'Информация о сайте и на каких технологиях он написан.')

@section('keywords', 'Опыт, копирайт, рерайт, технологии, хостинг, информация')

@section('title', 'О сайте')

@section('content')
<div class="container zenbook">
		<div class="row">
			<div class="col-lg-6">
				<a href="http://www.dnvcomp.com" target="_blank">
					<img src="{{ asset('/images/my-site.jpg') }}" class="img-responsive img-rounded zoomIn wow animated" alt=" О сайте">
				</a>
			</div>
			<div class="col-lg-6">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>О сайте</h2>
					<p>
						Все данные предоставленные на сайте взяты из моего личного опыта без копирайта и рерайта. У меня нет команды разработчиков, над своим сайтом работаю один. Мне нравиться писать программный код и видеть свои шедевры в окне браузера. 
					</p>
				</div>
			</div>
			<div class="row zenbook">
				<p>
					Сайт был запущен в сентябре 2016 года, он постоянно обновляется, любой пользователь компьютера сможет выполнить те или иные действия по сборке ремонту или обслуживанию своего компьютера или ноутбука не прибегая к помощи специалистов.
				</p>
				<p>
					Весь проект сайта, текст, код и внешнтй вид в различных браузерах написан с применением технологий HTML-5, CSS-3, Bootstrap-3.3.7, PHP-7.0 Laravel 5.5.
				</p>
				<p>Очень благодарен украинскому хостингу <a href="https://hyperhost.ua/client/aff.php?aff=514">Hyperhost</a> за предоставление хоста, а также круглосуточную поддержку.</p>
			</div>
		</div>
	</div>
@endsection