@extends('layouts.app')

@section('description', 'Карта сайта. На этотй странице можно посмотреть в кратком виде весь сайт и выбрать ссылку на страницу которая вам необходима.')

@section('keywords', 'Карта, Ссылки, Страницы, Просмотр, Вид, Выбор, Доступность')

@section('title', 'Карта сайта')

@section('content')
<div class="container bottom">
	<div class="row">
		<div class="col-lg-12">
			<h2>Карта сайта</h2>
			<p>
				Здесь можно быстро найти нужную станицу и нажав на ссылку перейти на неё.	
			</p>
			<a href="{{ route('index') }}">Главная</a> |
            <a href="{{ route('notebook') }}">Ноутбук</a> |
            <a href="{{ route('computer') }}">Компьютер</a> |
            <a href="{{ route('windows') }}">Windows</a> >  
            <a href="http://www.dnvcomp.com/systems/windows-7">Windows 7</a> >
            <a href="http://www.dnvcomp.com/systems/windows-10">Windows 10</a> |
            <a href="{{ route('about') }}">О сайте</a> |
            <a href="{{ route('sitemap') }}">Карта сайта</a>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br>
</div>
@endsection