@extends('layouts.app')

@section('content')

@section('description', 'Для любителей самостоятельной сборки, ремонта, настройки и обслуживании компьютеров и ноутбуков')

@section('keywords', 'Компьютер, Ноутбук, Система, Процессор, Системник, жёсткий диск')


@section('title', 'Главная страница')
	<!-- Content  section computer -->
	<div class="container computer">
		<div class="row">
			<div class="col-lg-5">
				<a href="http://dnvcomp.com">
					<img src="{{ asset('images/stacionar-pc.jpg') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Стационарный компьютер">
				</a>
				</div>
				<div class="col-lg-7">
					<div class="delay-02s animated fadeInDown wow animated">
						<h2>Компьютер</h2>
			            <p>
			            	Стационарный компьютер - состоит из системного блока, клавиатуры, мыши, монитора, звуковых колонок, а также других внешних устройств подключаемых к нему. Сейчас никого не удивишь компьютером, но не каждый знает как его обслуживать и модернизировать, а тем более собрать самому. Многие умеют пользоваться компьютером и прекрасно знают что он из себя представляет. Где как и зачем нужно нажимать ту или иную клавишу, как создать ярлык или иконку на рабочем столе. Сохранить нужные файлы на жеёстком диске, в облаке или скопировать их на внешний носитель информации. Но также не каждый сможет установить и настроить в нём операционую систему, драйверы, антивирус, дополнительное программное обеспечение входящее в поставку к нему. 
			        	</p>
			        </div>
				</div>
			</div>
		</div>
	</section><!-- // Content section computer -->
	<!-- Content section notebook -->
	<div class="container notebook">
		<div class="row">
			<div class="col-lg-8">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Ноутбук</h2>
					<p>
          				Ноутбук - также является персональным переносным компьютером (лептоп), только он в меньших размерах и более удобен. Выполнен в виде настольной книги. У него также есть свои параметры и свойства как и в стационарном компьютере. Его можно брать с собой в дорогу или куда либо ещё, что делает его переносным и удобным. В нём имеется аккумуляторная батарея с помощью которой им можно пользоваться без подключения к электросети. Удобство работы в любом месте. Их выбор достаточно велик, от маленьких до больших размеров экрана, производительности, веса и комплектации.
        			</p>
				</div>
			</div>
			<div class="col-lg-4">
				<a href="http://www8.hp.com/by/ru/products/laptops/index.html" target="_blank">
					<img src="{{ asset('images/notebook-hp17-bs100.png') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Портативный компьютер">
				</a>
			</div>
		</div>
	</div><!-- // Content section notebook -->
	<!-- Content tablet pc -->
	<div class="container tablet">
		<div class="row">
			<div class="col-lg-6">
				<a href="https://www.microsoft.com/en-us/store/d/surface-pro/8nkt9wttrbjk?activetab=pivot:overviewtab" target="_blank">
					<img src="{{ asset('images/surface-pro.png') }}" class="img-responsive img-rounded zoomIn wow animated" alt="Планшетный компьютер">
				</a>
			</div>
			<div class="col-lg-6">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Планшет</h2>
					<p>
          				Планшетный компьютер Surface Pro дает вам лучший в своем классе ноутбук от Майкрософт, а также его универсальность ноутбука и планшета. Потрясающий дисплей PixelSense поддерживает Surface Pen1 и touch, до 13,5 часов работы от батареи, чтобы работать весь день и играть всю ночь.
        			</p>
				</div>
			</div>
		</div>
	</div><!-- // Content tablet pc -->
	<!-- Content side center -->
	<div class="container center-block">
		<div class="row">
			<div class="col-lg-12">
				<p>
         			Cами установите и переустановите любую операционную систему Windows от кампании Microsoft, установите все драйверыы, программы, обновления системы, которые необходимы для вашего компьютера. Активируете свой Windows без всяких проблем по сети Интернет или по звонку в кампанию Майкрософт, если у вас она действительно настоящая подлинная лицензия. Установите все драйвера, программы, обновления системы, которые необходимы для вашего компьютера. Активируете свой Windows без всяких проблем по сети Интернет или по звонку в кампанию Майкрософт. Не бойтесь нажимать на клавиши, ведь компьютер таким образом сломать невозможно, за исключением физических повреждений. К примеру уронить ноутбук или ударить им о что либо. Можно сбить или стереть программу на компьютере, которую потом с легкостью переустановить.
        		</p>
        		<p> 
          			Запускать любые программы с рабочего стола кликнув по ярлыку кнопкой мыши, а также создввать и переносить их. Пользоваться Интернетом. Просматривать различную информацию в сети, скачивать файлы, изображения и программы нужные для вас или вашего компьютера. Будьте уверены в том, что у вас всё получиться, мы в этом абсолютно уверены.
        		</p>
			</div>
		</div>
	</div><!-- // Content side center -->
	<!-- Content block six parts -->
	<div class="container block-six">
		<div class="row">
			<!-- Motherboard Gigabyte -->
			<div class="col-lg-2">
				<a href="http://www.gigabyte.by/products/page/mb/ga-h170-gaming_3rev_10#kf" target="_blank">
        			<img src="{{ asset('images/motherboard.jpg') }}" class="img-responsive img-rounded border zoomIn wow animated" alt="Материнская плата">
      			</a>
			</div>
			<!-- Microprocessor Intel Core i9 -->
			<div class="col-lg-2">
				<a href="https://www.intel.ru/content/www/ru/ru/products/processors/core/x-series/i9-7900x.html?_2.127935180.1926096997.1507453601ga=-17407693.1507453601" target="_blank">
        			<img src="{{ asset('images/intel-Core-i9.jpg') }}" class="img-responsive img-rounded border zoomIn wow animated" alt="Микророцессор Intel Core i9">
      			</a>
			</div>
			<!-- Microprocessor Ryzen 7 -->
			<div class="col-lg-2">
				<a href="http://www.amd.com/ru/Ryzen-7" target="_blank">
	        		<img src="{{ asset('images/Ryzen-7.jpg') }}" class="img-responsive img-rounded border zoomIn wow animated" alt="Микророцессор AMD Ryzen 7">
	      		</a>
			</div>
			<!-- Memory -->
			<div class="col-lg-2">
				<a href="http://i2hard.ru/reviews/obzor-i-test-dvuxkanalnogo-komplekta-pamyati-kingston-hyperx-fury-ddr4-2400-16gb.html" target="_blank">
	        		<img src="{{ asset('images/ddr4.png') }}" class="img-responsive img-rounded border zoomIn wow animated" alt="DDR4 Оперативная память">
	      		</a>
			</div>
			<!-- Nvidia -->
			<div class="col-lg-2">
				<a href="http://www.nvidia.ru/object/wheretobuy-ru.html" target="_blank">
	        		<img src="{{ asset('images/nvidia.jpg') }}" class="img-responsive img-rounded border zoomIn wow animated" alt="Nvidia Ge Force">
	      		</a>
			</div>
			<!-- Windows -->
			<div class="col-lg-2">
				<a href="https://www.microsoft.com/ru-ru/software-download/windows10" target="_blank">
	          		<img src="{{ asset('images/windows-10.jpg') }}" class="img-responsive img-rounded border zoomIn wow animated" alt="Windows 10 Pro">
	        	</a>
			</div>
		</div>
	</div><!-- // Content block six parts -->
	<!-- Content bottom -->
	<div class="container bottom">
		<div class="row">
			<div class="col-lg-8">
				<p>
					Сможете извлечь свои фотографии и важные файлы с жёсткого диска на флешку, если компьютер не включается или операционная система не запускается. В этом ничего особо сложного нет. Проверите свои диски на наличие ошибок и сбойных секторов (bed-блоков). Восстановите свои фотографии и важные файлы если компьютер не включается или операционная система не запускается. В этом ничего сложного нет. Проверите свои диски на наличие ошибок и сбойных секторов (bed-блоков). Будете уметь пользоваться программмой Diskpart из командной строки.
        		</p>
			</div>
			<div class="col-lg-4">
				<img src="{{ asset('images/note-tablet.jpg') }}" class="img-responsive img-rounded border-bottom  zoomIn wow animated" alt="Ноутбуки и планшеты">
			</div>
		</div>
	</div><!-- // Content bottom -->
@endsection