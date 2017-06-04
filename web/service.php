<?php
	include 'base.php';
	include 'db_connect.php';
?>

<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	
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

	
</head>

<body>
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">
		<div class="col-sm-12 col-md-9 col-lg-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<!-- сервисы берутся с БД?? -->
					<h2 class="text-center">Сервисы "1C"</h2>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Наименование</th>
								<th>Описание</th>
							</tr>
						</thead>
						
						<?php
							$sql = "SELECT id, icon, title, description FROM services WHERE deleted='0'";
							$result = $link->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<tr id=".$row["id"]."><td><img src=".$row["icon"]." width=\"50\" height=\"50\"/></td><td>".$row["title"]."</td><td>".$row["description"]."</td></tr>";
								}
							} else {
								echo "<tr><td class=\"text-center\" colspan=3>Нет сервисов</td></tr>";
							}
						?>
					</table>
					<div class="col-md-12 text-center">
						<a href="application.php?type=2"><button class="btn btn-primary btn-lg" style="float:center">Подключить</button></a>
					</div>
					
				</div>
			</div>
		</div>
		
		<?php
			include 'advantages-panel.php';
		?>
		
	</div>
	
	<!--
	<div class="footer">
		<div class="foot">
			© ООО «ПРОКС»<br>
			656043, г. Барнаул, ул. Пролетарская, д.90
			<br><br>
			+7 (3852) 229-444. 
		</div>
	</div>
	-->

</body>
</html>