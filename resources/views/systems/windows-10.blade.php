@extends('layouts.app')

@section('description', 'Операционные системa Windows 10 от кампании Microsoft.')

@section('keywords', 'Windows-10, Windows, Установка, Настройка, Система')

@section('title', 'Microsoft Windows 10')

@section('content')
	<div class="container block-six">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>Microsoft Windows 10</h1>
			</div>
			<div class="col-lg-3">
				<img src="../../images/windows-10/windows-10-logo.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Логотип Windows 10">
			</div>
			<div class="col-lg-9">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Системные требования</h2>
					<ul>
						<ol>Процессор: &nbsp;<i>не менее 1 ГГц </i></ol>
						<ol>ОЗУ: &nbsp;<i>1 ГБ для 32-x / 2 ГБ для 64-x разрядной системы </i></ol>
						<ol>Место на жестком диске: &nbsp;<i>16 ГБ для 32-x / 20 ГБ для 64-x </i></ol>
						<ol>Видеоадаптер: &nbsp;<i>DirectX 9 или поздняя версия с драйвером WDDM 1.0 </i></ol>
						<ol>Дисплей: &nbsp;<i>минимальное 800px - 600px</i></ol>
					</ul>
					<div class="col-lg-4">
						<p>Создание загрузочной USB-флешки через командую строку (Windows + R > cmd > OK)</p>
					</div>
					<div class="col-lg-4">
						<p>Установка и настройка обновлений в операционной системе Microsoft Windows 10</p>
					</div>
					<div class="col-lg-4">
						<p>Установка драйверов, антивируса, программ, настройка Интернета и сетевой карты, разрешение экрана для Windows 10</p>
					</div>
				</div>
			</div>
			<h2>Подготовка к установке операционной системы</h2>
			<p>
				Лицензионная копия системы (дистрибутив) у нас имеется. Сертификат с 25 значным ключом продукта также есть - это небольшая наклейка расположенная на задней стороне корпуса системного блока или ноутбука.<br>
				Установка системы на ноутбук или на системный блок практически ничем не отличается, небольшая разница состоит только в том, что при начальном запуске системы комбинация клавиш может быть разной. У каждого производителя ноутбука или материнской платы вход в систему BIOS разный. К примеру это может быть клавиша Del, Delete, F1, F2, F3, Esc, F9 или F10. Скачать операционну систему с официального сайта можно здесь.
			</p>

			<div class="delay-02s animated fadeInDown wow animated">
				<div class="col-lg-2"></div>
				<div class="col-lg-8 tablet">
					<h2>Установка операционой системы</h2>
					<p>
						Включаем системный блок и с одновременным включением жмём на клавишу Del или Delete на клавиатуре, таким образом мы попадем в начальные и самые главные настройки компьютера. В верхнем меню выбираем раздел Boot/Загрузка. Внутри раздела Boot выбираеи первоначальную загрузку с привода компакт дисков. Далее жмем клавишу F10 то есть сохраняем настройки и перезагружаем компьютер. Также если компьютер поддерживает горячие клавиши, то достаточно нажать на одну из этих клавиш без входа в настройки BIOS и выбрать устройство компакт дисков или саму флешку, после чего нажать клавишу Enter.
					</p>

				<img src="../../images/windows-10/setup-windows-10-3.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Перед тем как появиться это окно системы, нужно также нажать клавишу Enter. Выбираем свой язык, расскладку клавиатуры и нажимаем на кнопку далее которую видим на экране монитора
				</p>
				<img src="../../images/windows-10/setup-windows-10-4.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Жмем клавишу установить. На данный момент нам никакие другме клавиши или подсказки не нужны.
				</p>
				<img src="../../images/windows-10/setup-10-key.png" class="img-responsive img-rounded zoomIn wow animated" alt="Ввод ключа Windows 10">
				<p class="text-md-center">
					На этом шаге можно сразу ввести 25 значный ключ продукта вашей копии, можно также пропустить, но если данная система уже была ранее установлена на компьютере то она активируется сама автоматически. Так выбираем вводить ключ или ввести его позже и снова жмём клавишу далее.
				</p>
				<img src="../../images/windows-10/setup-windows-10-version.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Сейчас нам система предлагает выбрать одну из указанных редакций, зто может быть, Профессиональная, Домашняя, Версия для одного языка и Образовательная. Выбрав нужную нам версию снова нажимаем кнопку далее.
				</p>
				<img src="../../images/windows-10/setup-10-licence.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Соглашаемся с условиями лицензионного соглашения, принимаем его поставив птичку и жмём далее.
				</p>
				<img src="../../images/windows-10/setup-windows-10-install.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Теперь выбираем полную установку то есть выборочную жмём далее
				</p>
				<img src="../../images/windows-10/setup-windows-10-hard-setting.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					В этом появившемся окне, разбиваем жесткий диск на разделы. Обычно разбивают на два или три раздела. C, D, или C, D, E. Диск С будет системным. После форматируем созданные разделы. Нажимаем далее.
				</p>
				<img src="../../images/windows-10/windows-10-install.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Вот теперь установка системы Windows 10 распаковывается и устанавливается на компьютер. Компьютер несколько раз перезагрузится и мы снова уже продолжим настройку установленной системы.
				</p>
				<img src="../../images/windows-10/windows-10-region.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Выбираем страну в которой мы живём
				</p>
				<img src="../../images/windows-10/windows-10-valid-keyboard.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Выбираем язык для клавиатуры по умолчанию который будет основным.
				</p>
				<img src="../../images/windows-10/windows-10-select-keyboard.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Выбираем вторую раскладку клавиатуры. К примеру английский. Чтобы можно было переключаться между двумя языками для ввода символов.
				</p>
				<img src="../../images/windows-10/windows-10-user-account.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Вводим имя учётной записи. Или электронный почтовый ящик созданный ранее в Майкрософт. Если такого нет, то его нужно создать. А после нажать далее. 
				</p>
				<img src="../../images/windows-10/windows-10-onedrive.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Нажимаем да и получаем доступ облаку от Майкрософт в размере 5 Гб бесплатно. Это будет хранилищем ваших фото или файлов, которые будут храниться как в компьютере так и в облаке. Если что то пойдёт не так, то вы всегда из облака сможете их вернуть обратно. 
				</p>
				<img src="../../images/windows-10/windows-10-configuration.png" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					Здесь соглашаемся со всеми параметрами или выбираем что нам нужно, а что нет. Жмем кнопку принимаем. И мы увидим новый рабочий стол Windows 10.
				</p>
				<img src="../../images/windows-10/windows-10-pro.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 10">
				<p class="text-md-center">
					На этом установка системы завершена. Теперь после всех выполненных действий нужно также установить различные драйверы, кодеки, браузеры, антивирус и много чего другого. Таким образом мы сейчас установили чистую операционную систему на компьютер.
				</p>
			</div>
			<div class="col-lg-2"></div>
		</div>
		</div>
	</div>
</div>
@endsection