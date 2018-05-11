@extends('layouts.app')

@section('title', 'Операционные системы')

@section('description', 'Операционные системы от кампании Microsoft.')

@section('keywords', 'Windows-10, Windows-8.1, Windows-Vista, Windows-XP')

@section('title', 'Операционные системы')

@section('content')
<div class="container zenbook">
		<div class="row">
			<div class="col-lg-6">
				<a href="http://www.dnvcomp.com" target="_blank">
					<img src="{{ asset('images/windows10.jpg') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Windows 10">
				</a>
			</div>
			<div class="col-lg-6">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Windows 10</h2>
					<p>
						Операционная система Microsoft Windows 10 - это одна из самых последних версий операционных систем из полного семейства кампании Майкрософт. Она призвана объединить в себе не только стационарные компьютеры и ноутбуки, а также планшеты и смартфоны. Быстрее загружается, чем её предшественница Windows 8.1.
						<button type="button" class="btn btn-default pull-right">
							<a href="http://dnvcomp.com/systems/windows-10">Перейти</a>
						</button>
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Windows 7</h2>
					<p>
						Наиболее популярными операционными системами от Майкрософт, которые нравятся пользователям во всём мире - это Windows XP, Windows 7 и Windows 10. Несмотря на то что поддержка операционной системы Windows XP, завершена, многие до теперешнего времени не хотят расставаться с ней и переходить на другую. Ведь она до сих пор нравиться многим. А вот и те, которые не особо понравились - это Windows Vista, Windows 8, Windows 8.1.
						<button type="button" class="btn btn-default pull-right">
							<a href="http://dnvcomp.com/systems/windows-7">Перейти</a>
						</button>
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="http://www.dnvcomp.com" target="_blank">
					<img src="{{ asset('images/windows-7.jpg') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Windows 7">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
					<img src="{{ asset('images/Windows-xp.jpg') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Windows XP">
			</div>
			<div class="col-lg-6">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Windows XP</h2>
					<p>
						Начиная с первой графической операционной системы Windows 95 и заканчивая последней Windows 10, кампания Майкрософт всё время совершенствовала свои операционные системы, добавляя в них новые функции и приложения, меняя год за годом название системы, такие как Windows 98, Windows 2000, Windows XP, Windows Vista, Windows 7, Windows 8, Windows 8.1, Windows 10. Повышая системные требования для установки операционной системы на компьютер.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Windows 95 - 98</h2>
					<p>
						На каждом устройстве, то есть планшете, ноутбуке, смартфоне или компьютере, всегда есть установленная операционная система с которой взаимодействует пользователь. Он может настроить её под себя таким образом, чтобы ему было удобно с ней работать. Обычно на планшетах и смартфонах это ОС-Андроид от Google, или Microsoft Whindows 8.1, Microsoft Windows 10.
					</p>
				</div>
			</div>
			<div class="col-lg-6">
					<img src="{{ asset('images/windows-95.jpg') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Windows 95 - 98">
			</div>
		</div>
	</div>
</div>
@endsection