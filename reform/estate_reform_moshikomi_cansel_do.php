<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail16.css">
</head>
<body>





	<div class="boxA">

	  <!--トップ-->
	      <div class="boxA-inner">
	      <div class="box1">
	        <div class="site">
	        </div>
	      </div>
	  <!--//トップ-->

	    <!--ヘッダーメニュー-->
	    <div class="box2">
	        <div class="menu">

	        </div>
	    </div>
	    </div>
	  </div>

		<div class="boxB">

			<?php
			// session_start();
			// session_regenerate_id(true);
			// if(isset($_SESSION['login'])==false){
			// 	print 'ログインされていません。';
			// 	print '<br>';
			// 	print '<a href="estate_login.php">ログイン画面へ</a>';
			// 	exit();
			// }
			 ?>

			<?php

			try{

				$real_code=$_POST['code'];
				$real_name=$_POST['real_name'];
				$post1=$_POST['post1'];
				$post2=$_POST['post2'];
				$address=$_POST['address'];
				$roomNumber=$_POST['roomNumber'];
				$yachin=$_POST['yachin'];
				$kyoeki=$_POST['kyoeki'];
				$shiki=$_POST['shiki'];
				$rei=$_POST['rei'];
				$madoriType=$_POST['madoriType'];
				$keyLocation=$_POST['keyLocation'];
				$email1=$_POST['email1'];
				$email2=$_POST['email2'];
				$email3=$_POST['email3'];
				$email4=$_POST['email4'];
				$email5=$_POST['email5'];
				$company1=$_POST['company1'];
				$company2=$_POST['company2'];
				$company3=$_POST['company3'];
				$company4=$_POST['company4'];
				$company5=$_POST['company5'];
				$other=$_POST['other'];
				$reformDay=$_POST['reformDay'];
				$reform_naiyo=$_POST['reform_naiyo'];
				$moshikomiCompany=$_POST['moshikomiCompany'];
				$moshikomiTel1=$_POST['moshikomiTel1'];
				$moshikomiTel2=$_POST['moshikomiTel2'];
				$moshikomiTel3=$_POST['moshikomiTel3'];


				$timedate=date("Y年n月j日 G時i分",time());







				$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
				$user='root';
				$password='';
				$dbh=new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql='UPDATE estate SET real_name=?,post1=?,post2=?,address=?,roomNumber=?,yachin=?,kyoeki=?,shiki=?,rei=?,madoriType=?,keyLocation=?,email1=?,email2=?,email3=?,email4=?,email5=?,company1=?,company2=?,company3=?,company4=?,company5=?,other=?,reformDay=?,reform_naiyo=?,timedate=?,moshikomi=?,moshikomiCompany=?,moshikomiTel1=?,moshikomiTel2=?,moshikomiTel3=? WHERE code=?';
				$stmt=$dbh->prepare($sql);
				$data[]=$real_name;
				$data[]=$post1;
				$data[]=$post2;
				$data[]=$address;
				$data[]=$roomNumber;
				$data[]=$yachin;
				$data[]=$kyoeki;
				$data[]=$shiki;
				$data[]=$rei;
				$data[]=$madoriType;
				$data[]=$keyLocation;
				$data[]=$email1;
				$data[]=$email2;
				$data[]=$email3;
				$data[]=$email4;
				$data[]=$email5;
				$data[]=$company1;
				$data[]=$company2;
				$data[]=$company3;
				$data[]=$company4;
				$data[]=$company5;
				$data[]=$other;
				$data[]=$reformDay;
				$data[]=$reform_naiyo;
				$data[]=$timedate;
				$data[]=0;
				$data[]="";
				$data[]="";
				$data[]="";
				$data[]="";


				$data[]=$real_code;



				$stmt->execute($data);

				$dbh=null;

			print '<h3>申込解除しました</h3>';

			}
			catch (Exception $e)
			{
				print 'ただいま障害により大変ご迷惑をお掛けしております。';
				exit();
			}



			 ?>

			 <div class="photoGallery3">
			 	<div class="bottomLine">

			 <table>
			 	<tr>
			 		<td><a href="../estate_list.php">戻る</a></td>

			 	</tr>
			 </table>

			  </div>

			 </div>


						 </div>


<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>


</body>
</html>
