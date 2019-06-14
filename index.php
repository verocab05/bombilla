
<?php
Class Bombilla{
	//vista
	function on(){
		return '
			<a href="index.php?off=1">
				<img src="bombilla_on.jpg" style="height:200px" />
			</a>
		';
	}

	function off(){
		return '
			<a href="index.php?on=1">
				<img src="bombilla_off.jpg" style="height:200px"/>
			</a>
		';
	}
}
	// controlador
$b=new Bombilla();
if( isset($_GET['on']) ) 
	echo $b->on();
else 
	echo $b->off();
?>
