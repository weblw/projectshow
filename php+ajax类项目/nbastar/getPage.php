<style type="text/css">
	a {
		background-color: skyblue;
		height: 50px;
		width: 100%;
		display: block;
	}
	img {
		height: 300px;
	}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<a href="./index.php">back</a>
<?php


include 'nbaDataPage.php';
echo $_GET['name'];
$nbs = $_GET['name'];

echo '<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			 '.$nbastars[$nbs]['info'].'
			<img src="'.$nbastars[$nbs]['icon'].'"/>
		</div>
	</div>
</div>';

?>
