<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Страница ошибки</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	body {
    		line-height: 24px;
    		border: 0;
    		margin: 0;
    		padding: 0;
    	}

    	.h2 {
    		font-size: 32px;
    		text-align: center;
    		color: #1A124D;
    	}

    	.h3 {
    		text-align: center;
    		font-size: 26px;
    		color: #AB7A41;
    	}

    	.p-text {
    		color: #0990E1;
    		padding-left: 26%;
    		padding-top: 10px;
    		font-size: 16px;
    		padding-bottom: 18px;
    	}

    	.container .row p {
    		text-align: justify;
    		padding: 0px 210px;
    		color: #343E41;
    		font-size: 17px;
    		font-weight: 500;
    		line-height: 20px;
    	}

    	.container .row {
    		margin-top: 52px;
    		margin-bottom: 52px;
    	}

    	img {
    		width: 63%;
    		height: 70%;
    		margin: 0 auto;
    	}
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img src="{{ asset('../../images/404.jpg')}}" class="img-responsive img-rounded zoomIn wow animated" alt="404 Ошибка страницы">
				<h2 class="h2">Запрошенная вами страница не существует</h2>
				<h3 class="h3">Ошибка могла быть вызвана по следующим причинам:</h3>
				<p>
					<ul class="p-text">
						<li>Вы ввели неправильный адрес страницы.</li>
						<li>Возможно страница ранее была удалена</li>
						<li>Cервер не смог загрузить нужную Вам страницу</li>
					</ul>
				</p>
			</div>
			<p>
				Пожалуйста, воспользуйтесь ссылкой <a href="{{ route('sitemap') }}">карта сайта</a> или перейдите по другой ссылке на <a href="{{ route('index') }}">главную страницу</a>.
			</p>
			<p>
				Но если Вы не нашли того, чего хотели найти на нашем сайте, то не расстраивайтесь. Возможно в скором времени нужная информация для Вас будет доступна.
			</p>
			<p>
				Можете отправить нам сообщение по <a href="http://mailto:dnvcommp@hotmail.com">электронной почте</a> о вашей проблеме или случившемся, а мы к вашему возращению постараемся всё исправвить.<br><br>Надеемся на Ваше скорое возвращение.
			</p>
		</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>