
<style type="text/css">
	img{
		height: 100px !important;
	}
</style>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	</head>
	<body>
		
		
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">NBA  ALL  STARS</h3>
			</div>
			<div class="panel-body">
				<div class="container">
			<div class="row">
					<?php
						include 'nbaData.php';
							//print_r($nbastar);
						for ($i=0; $i < count($nbastar) ; $i++) { 
						echo '<div class="col-xs-6 col-sm-12 col-md-4">
				<div class="thumbnail">
					<img src=" '.$nbastar[$i]['icon'].' " alt="...">
						<div class="caption">
						<h3>'.$nbastar[$i]['name'].'</h3>
						<p class="text-right">
							这是一个很牛逼的人a
						</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">
								购买
							</a>
<a href="./getPage.php?name='.$nbastar[$i]['name'].'" class="btn btn-primary" role="button">
详情页面
</a>

						</p>
					</div></div>
			</div>';
		}

?>
					
					
					
					
					
				
			
			
			
		</div>
	</div>
			</div>
		</div>
		
		
		
		
	
	</body>
</html>