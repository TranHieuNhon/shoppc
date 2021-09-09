<?php
	include'nav.php';
	include'Header.php';
	include'NAV_MIDLE.PHP';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 style="text-align:center;">ĐĂNG KÝ</h1>
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<form action="xulydangky.php" method="post">
			<input type="hidden" name="loai" value="member">
			<input type="hidden" name="ngayhethan" value="<?php echo$cenvertedTime ?>"><br>
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input type="text" class="form-control" name="username" placeholder="username">
			  </div>
			<br>
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="email" type="text" class="form-control" name="email" placeholder="Email" pattern="[a-z]{1,15}" pattern=" ">
			</div><br>
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    <input type="text" class="form-control" name="password" placeholder="password">
			</div><br>
			<div class="col-sm-3"></div>
			<div class="col-sm-2">
				<input type="submit"  class="btn btn-success" value="ĐĂNG KÝ" style="width:100PX"><br>
			</div>
			<div class="col-sm-2">
				
			</div>
			<div class="col-sm-2">
				<input type="reset"  class="btn btn-danger" value="HỦY" style="width:100PX"><br>
			</div>
			<div class="col-sm-3"></div>
			
		</form>
	</div>
	<div class="col-sm-3"></div>
	</div>
</body>
</html>
<?php
	include'footer.php';
?>
<?php
  date_default_timezone_set('Asia/Ho_Chi_Minh');
   $startTime =date('Y-m-d');
   $cenvertedTime = date('Y-m-d',strtotime('+10 year',strtotime($startTime)));
?>
<?php
	$loi="";
	if(isset($_POST['Submit1'])) {
	    $yourname = $_POST ["yourname"];
	    if (empty($yourname)) 
	    {  
	       $loi="loi rồi";           
	    }
	    else 
	    {
	        if(isset($_POST['Submit1'])) {
			    $yourname = $_POST ["yourname"];
			    if (empty($yourname)) 
			    {  
			       $loi="loi rồi";           
			    }
			    else 
			    {
			        echo $yourname;  
			    }
			}  
	    }
	}
?>