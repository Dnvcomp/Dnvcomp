@extends('layouts.app')

@section('description', 'Операционные системa Windows 7 от кампании Microsoft.')

@section('keywords', 'Windows-7, Windows, Установка, Настройка, Система')

@section('title', 'Microsoft Windows 7')

@section('content')
	<div class="container block-six">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>Microsoft Windows 7</h1>
			</div>
			<div class="col-lg-2">
				<img src="../../images/windows-7/windows-7-0.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Логотип Windows 7">
			</div>
			<div class="col-lg-10">
				<div class="delay-02s animated fadeInDown wow animated">
					<h2>Системные требования</h2>
					<ul>
						<ol>Процессор: 32/64-x &nbsp;<i>не менее 1 ГГц </i></ol>
						<ol>ОЗУ: &nbsp;<i>1 ГБ для 32-x / 2 ГБ для 64-x разрядной системы </i></ol>
						<ol>Место на жестком диске: &nbsp;<i>16 ГБ для 32-x / 20 ГБ для 64-x </i></ol>
						<ol>Видеоадаптер: &nbsp;<i>DirectX 9 или поздняя версия с драйвером WDDM 1.0 </i></ol>
						<ol>Дисплей: &nbsp;<i>минимальное 800px - 600px</i></ol>
					</ul>
					<div class="col-lg-4">
						<p>Создание загрузочной USB-флешки через командую строку (Windows + R > cmd > OK)</p>
					</div>
					<div class="col-lg-4">
						<p>Установка и настройка обновлений в операционной системе Microsoft Windows 7</p>
					</div>
					<div class="col-lg-4">
						<p>Установка драйверов, антивируса, программ, настройка Интернета и сетевой карты, разрешение экрана для Windows 7</p>
					</div>
				</div>
			</div>
			<h2>Подготовка к установке операционной системы</h2>
			<p class="delay-02s animated fadeInDown wow animated">
				Лицензионная копия системы (дистрибутив) у нас имеется. Сертификат с 25 значным ключом продукта также есть - это небольшая наклейка расположенная на задней стороне корпуса системного блока или ноутбука.<br>
				Установка системы на ноутбук или на системный блок практически ничем не отличается, небольшая разница состоит только в том, что при начальном запуске системы комбинация клавиш может быть разной. У каждого производителя ноутбука или материнской платы вход в систему BIOS разный. К примеру это может быть клавиша Del, Delete, F1, F2, F3, Esc, F9 или F10. Скачать операционну систему с официального сайта можно здесь.
			</p>
			<div class="col-lg-2"></div>
				<div class="col-lg-8 tablet">
					<h2>Установка операционой системы</h2>
					<p>
						Включаем системный блок и с одновременным включением жмём на клавишу Del или Delete на клавиатуре, таким образом мы попадем в начальные и самые главные настройки компьютера. В верхнем меню выбираем раздел Boot/Загрузка. Внутри раздела Boot выбираеи первоначальную загрузку с привода компакт дисков. Далее жмем клавишу F10 то есть сохраняем настройки и перезагружаем компьютер. Также если компьютер поддерживает горячие клавиши, то достаточно нажать на одну из этих клавиш без входа в настройки BIOS и выбрать устройство компакт дисков или саму флешку, после чего нажать клавишу Enter.
					</p>

				<img src="../../images/windows-7/windows-7-1.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Для того, чтобы начать установку на новом компьютере сначала используется образ boot.wim, а точнее его составляющая – Windows PE, которая подготавливает среду для запуска процесса установки операционной системы. Непосредственно во время установки, данные операционной системы извлекаются из образа install.wim. Это означает, что на данном этапе происходит распаковка WindowsPE (Preinstallation Environment) в оперативную память. Для успешного окончания данного процесса компьютер должен "иметь на борту" не менее 512 Мб ОЗУ.
				</p>
				<img src="../../images/windows-7/windows-7-2.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					После окончания загрузки среды предустановки автоматически запускается мастер программы установки Windows. Если программа установки поддерживает несколько языков, то предварительно необходимо будет указать язык интерфейса программы установки
				</p>
				<img src="../../images/windows-7/windows-7-3.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Нам предлагается выбрать устанавливаемый язык, формат времени и денежных единиц, раскладку клавиатуры и метод ввода. Параметры будут действовать во время работы программы установки. 
				</p>
				<img src="../../images/windows-7/windows-7-4.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Сейчас можно выбрать установку операционной системы, запустить восстановление системы или почитать справочную информацию. Если вам необходимо предварительно выполнить какие-нибудь действия, для этого можно вызвать командную строку нажатием комбинации клавиш Shift + F10.
					С помощью консольной утилиты Diskpart можем управлять разделами жесткого диска.
				</p>
				<img src="../../images/windows-7/windows-7-5.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Теперь необходимо выбрать операционную систему, которая будет установлена на данный компьютер, Если какая-либо редакция операционной системы поставляется на нескольких языках, то в этом окне будет отдельная возможность выбора языка.
				</p>
				<img src="../../images/windows-7/windows-7-6.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					После выбора операционной системы, для продолжения процесса установки, необходимо принять лицензионное соглашение.
				</p>
				<img src="../../images/windows-7/windows-7-7.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Теперь нужно выбрать тип установки: обновление или полная установка.
				</p>
				<img src="../../images/windows-7/windows-7-9.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Обновление поддерживается только для операционной системы Windows Vista, для любой другой операционной системы при выборе данного варианта появляется сообщение о предупреждении.
				</p>
				<img src="../../images/windows-7/windows-7-10.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					При выборе варианта "Полная установка (дополнительные параметры)", мастер установки операционной системы определbт доступные диски. Если по каким-либо причинам не найден драйвер для контроллера жесткого диска или RAID-контроллера, то появится предупреждение. Тогда нужно, программе установки Windows указать место для поиска драйверов.
				</p>
				<img src="../../images/windows-7/windows-7-11.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Если выборать вариант "Полная установка (дополнительные параметры)", мастер установки операционной системы определит доступные диски. Если по каким-либо причинам не найден драйвер для контроллера жесткого диска или RAID-контроллера, то появится сообщение. Тогда нужно, программе установки Windows указать место для поиска драйверов.
				</p>
				<img src="../../images/windows-7/windows-7-12.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Дальше можно приступать к разбивке жёсткого диска. Если диск пустой и на нем не существует разделов, то мастер установки произведет автоматическую разбивку диска.
				</p>
				<img src="../../images/windows-7/windows-7-13.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Первый раздел предназначен для совместимости с технологией BitLocker, не допуская шифрование загрузочных файлов. Первый раздел имеет размер 100 Мб. Остальное место выделяется под раздел для установки операционной системы. Если же диск был предварительно разбит и на нем находится установленная операционная система, не совместимая с процессом обновления (например, Windows XP), то можно произвести установку на этот раздел, но мастер установки выдаст предупреждение. 
				</p>
				<img src="../../images/windows-7/windows-7-14.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					После разбивки диска, начинается непосредственный процесс установки операционной системы, во время которого, происходит 2 перезагрузки компьютера. Первая – после этапа "Распаковка файлов Windows", а вторая – по окончании процесса "Завершение установки.
				</p>
				<img src="../../images/windows-7/windows-7-14.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					После второй перезагрузки, программа установки Windows информирует нас о том, что подготавливает компьютер к первому запуску.
				</p>
				<img src="../../images/windows-7/windows-7-15.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					После первого запуска операционной системы, происходит ее конфигурирование. Для начала необходимо указать имя учетной записи первого (и пока единственного, за исключением отключенной учетной записи администратора) пользователя и имя компьютера.
				</p>
				<img src="../../images/windows-7/windows-7-16.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Следующим этапом необходимо ввести пароль для вновь созданной учетной записи (рис. 2.16). При желании или необходимости данные поля можно оставить пустыми, тогда вход будет осуществляться без пароля, однако негативно сказывается на общей безопасности компьютера.
				</p>
				<img src="../../images/windows-7/windows-7-17.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Теперь нужно ввести ключ продукта, если не ввести ключ на этом этапе, операционная система запуститься в полнофункциональном режиме сроком на 30 дней. В течении этого периода есть возможность изменить ключ продукта и произвести активацию, либо продлить пробный период до 120 дней (при использовании команды slmgr.vbs –reset)
				</p>
				<img src="../../images/windows-7/windows-7-18.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Далее нам предлагается выбрать настройки для автоматического обновления операционной системы (рис. 2.18). На выбор у нас есть 3 варианта: использовать рекомендуемые параметры, устанавливать только наиболее важные обновления, отложить решение. Если вы не можете принять решение сразу можно получить справочную информацию по каждому параметру, нажав на ссылку "Подробнее об этих параметрах", в дополнении к этому можно ознакомиться с "Заявлением о конфиденциальности".
				</p>

				<img src="../../images/windows-7/windows-7-19.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					Далее нам предлагается выбрать настройки для автоматического обновления операционной системы (рис. 2.18). На выбор у нас есть 3 варианта: использовать рекомендуемые параметры, устанавливать только наиболее важные обновления, отложить решение. Если вы не можете принять решение сразу можно получить справочную информацию по каждому параметру, нажав на ссылку "Подробнее об этих параметрах", в дополнении к этому можно ознакомиться с "Заявлением о конфиденциальности".
				</p>
				<img src="../../images/windows-7/windows-7-20.jpg" class="img-responsive img-rounded zoomIn wow animated" alt="Установка Windows 7">
				<p class="delay-02s animated fadeInDown wow animated">
					На заключительном этапе нам предлагают выбрать настройки даты и времени текущее время и часовой пояс. Таким, достаточно простым и полуавтоматическим способом происходит установка операционной системы Windows 7 на компьютер конечного пользователя. 
				</p>
			<div class="col-lg-2"></div>
		</div>
		</div>
	</div>
</div>
@endsection