<?php
	header("content-type:text/html;charset=utf8");
	$proxy  = "http://localhost/";
	if(isset($_GET['url'])){
		$url = $_GET['url'];
		$str = random();
		mkdir($str.'/');
		file_put_contents($str.'/index.html', '<script>window.location.href="'.$url.'"</script>');
        echo $proxy.$str;

	}else{
		echo "该网址不存在";
	}

	function random(){
		$string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$str="";
		while(strlen($str) < 8){
			$i = rand(0,62);
			$str=$str.$string[$i];
		}
		return $str;
	}
?>