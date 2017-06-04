﻿<?php
	include 'base.php';
	include 'db_connect.php';
?>

<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="custom.css" media="screen">
	<link rel="stylesheet" href="bootstrap.min.css" media="screen">
	
<script>
	jsHover = function() {
	var hEls = document.getElementById("menu").getElementsByTagName("li");
	for (var i=0, len=hEls.length; i<len; i++) {
	hEls[i].onmouseover=function() { this.className+=" jshover"; }
	hEls[i].onmouseout=function() { this.className=this.className.replace(" jshover", ""); }
	}
	}
	if (window.attachEvent && navigator.userAgent.indexOf("Opera")==-1) window.attachEvent("onload", jsHover);
</script>

<script>
var slider = {
	slides:['3.png','7.png','8.png'],
	frame:0,
	set: function(image) { 
		document.getElementById("scr").style.backgroundImage = "url("+image+")";
	},
	init: function() { 
		this.set(this.slides[this.frame]);
	},
	left: function() { 
		this.frame--;
		if(this.frame < 0) this.frame = this.slides.length-1;
		this.set(this.slides[this.frame]);
	},
	right: function() { 
		this.frame++;
		if(this.frame == this.slides.length) this.frame = 0;
		this.set(this.slides[this.frame]);		
	}
};
window.onload = function() { 
	slider.init();
	setInterval(function() { 
		slider.right();
	},5000);
};
</script>

	
</head>

<body>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <img class="img-responsive center-block" src="3.png">
		</div>

		<div class="item">
		  <img class="img-responsive center-block" src="7.png">
		</div>
		
		<div class="item">
		  <img class="img-responsive center-block" src="8.png">
		</div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>

	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">
		<div class="col-sm-6 col-md-6 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body ">
					<p>Программные продукты «1С: Предприятие» являются мощным инструментом в ведении учета и автоматизации 
					бизнес-процессов различных предприятий, они постоянно совершенствуются и расширяются их функциональные возможности. </p><br>
					<p>Чтобы с максимальной эффективностью использовать все возможности программ «1С: Предприятие», вести учет корректно и качественно, 
					безошибочно составлять налоговую и бухгалтерскую отчетность для этого необходимо: быть в курсе последних изменений в законодательстве,
					применять современные методики ведения учета, обновлять настройки системы - т.е. регулярно сопровождать. </p><br>
					<p> Для решения данных задач, компания ООО «ПРОКС» предлагает всем пользователям программных продуктов «1С» 
					заключить договор регулярного сопровождения.</p><br>
					<p>Договор регулярного сопровождения является залогом корректной, эффективной 
					и бесперебойной работы организации </p>
					<br>
					<h2 class="text-center">1С:Сопровождение - это:</h2>
					<hr size="0.01" width="100%">
					<p4><z>★</z>&nbsp;&nbsp;Линия консультации, на все Ваши вопросы ответят специалисты компании «ПРОКС»</p4>
					<br>
					<p4><z>★</z>&nbsp;&nbsp;Консультации аудитора по налоговому, бухгалтерскому и кадровому учету</p4>
					<br>
					<p4><z>★</z>&nbsp;&nbsp;Консультации специалиста через удаленный доступ к вашему компьютеру</p4>
					<br>
					<p4><z>★</z>&nbsp;&nbsp;Своевременное обновление конфигураций «1С», установка форм отчетности</p4>
					<br>
					<p4><z>★</z>&nbsp;&nbsp;Технологическое сопровождение Информационных баз данных (ИБ) «1С» (создание архивных копий ИБ, тестирование ИБ)</p4>
					<br>
					<p4><z>★</z>&nbsp;&nbsp;Настройка и доработка конфигураций «1С» под нужды организации</p4>
				</div>
			</div>
		</div>
		
		<?php
			include 'news-small-panel.php';
			include 'contacts-small-panel.php';
		
		?>
	</div>

	<!-- футера временно нет -->

</body>
</html>