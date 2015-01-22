<?php 
	$getIP  = new getIP();
	$serverIp = getIP::serverIP();
	echo $serverIp;
	//$testMongo = $serverIp.':28017';
	//echo $testMongo;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<table border="1">
	
	<!-- test -->
	<tr>
		<td>
			<a href="#" target="_blank">test</a>
		</td>
		<td>test</td>
		<td></td>
	</tr>
	
	<!-- yii -->
	<tr>
		<td>
			<a href="/phpinfo.php" target="_blank">test/phpinfo.php</a>
		</td>
		<td>phpinfo</td>
		<td></td>
	</tr>
	
	<tr>
		<td>
			<a href="http://yii2.test" target="_blank">yii2.test</a>
		</td>
		<td>yiiwtest</td>
		<td>
			<a href="http://www.yiichina.com/doc/guide/2.0" target="_blank">
				中文文档
			</a>
			/
			<a href="http://www.yiiframework.com/doc-2.0/" target="_blank">
				英文文档
			</a>
		</td>
	</tr>
	
	<!-- redis -->
	<tr>
		<td>
			<a href="" target="_blank"></a>
		</td>
		<td>redis</td>
		<td>
			<a href="http://redisdoc.com/" target="_blank">
				http://redisdoc.com/
			</a>
		</td>
	</tr>
	
	<!-- mongo -->
	<tr>
		<td>
			<a href="" target="_blank"></a>
		</td>
		<td>mongo</td>
		<td>
			<a href="http://www.w3cschool.cc/mongodb/mongodb-tutorial.html" target="_blank">
				http://www.w3cschool.cc/mongodb/mongodb-tutorial.html
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://rockmongo" target="_blank">rockmongo</a>
		</td>
		<td>rockmongo</td>
		<td></td>
	</tr>
	
	<!-- elasticsearch -->
	<tr>
		<td>
			<a href="http://<?php echo $serverIp;?>:9200/_plugin/head/" target="_blank">elasticsearch</a>
		</td>
		<td>elasticsearch</td>
		<td>
			<a href="http://www.elasticsearch.cn/" target="_blank">
				http://www.elasticsearch.cn/
			</a>
		</td>
	</tr>
	
</table>

<?php 

/**
 * 
 * $getIP  = new getIP();
 * $clientIp = getIP::clientIP();
 * $serverIp = getIP::serverIP();
 * 
 * @author lhl
 *
 */
class getIP{
	function clientIP(){
		$cIP = getenv('REMOTE_ADDR');
		$cIP1 = getenv('HTTP_X_FORWARDED_FOR');
		$cIP2 = getenv('HTTP_CLIENT_IP');
		$cIP1 ? $cIP = $cIP1 : null;
		$cIP2 ? $cIP = $cIP2 : null;
		return $cIP;
	}
	function serverIP(){
		return gethostbyname($_SERVER["SERVER_NAME"]);
	}
}

?>