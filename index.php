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
for($i=0;$i<5;$i++){
	$b[$i]=new Bombilla();
	if( isset($_GET['on']) ) 
		echo $b[$i]->on();
	else 
		echo $b[$i]->off();
}
?>
