<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Online test </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Имя не может быть пустым");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("Заполните название учебного заведения");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Неверный email");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Пароль не может быть пустым");return false;}if(a.length<5 || a.length>25){alert("Пароль должен содержать от 5 до 25 символов");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Пароли не совпадают");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Online test</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Вход</b></span></a></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Вход</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Введите вашу почту" class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Введите пароль" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Вход</button>
		</fieldset>
</form>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onПодтвердить="return validateForm()" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Введите имя" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Ваш пол" class="form-control input-md" >
   <option value="М">Ваш пол</option>
  <option value="М">Мужчина</option>
  <option value="Ж">Женщина</option> </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Введите название учебного заведения" class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Введите вашу почту" class="form-control input-md" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Введите номер телефона" class="form-control input-md" type="number">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Введите пароль" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Повторите пароль" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Зарегистрироваться" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>


<div class="row footer">
<div class="col-md-2 box">
</div>
<div class="col-md-2 box">
<a href="#" data-toggle="modal" data-target="#login">Администратор</a></div>
<div class="col-md-2 box">
<a href="#" data-toggle="modal" data-target="#developers">Разработчик</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Отзыв</a></div></div>

<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Разработчик</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/5HkXu3O1qJ8.jpg" width=100 height=100 alt="фоточька" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://vk.com/kotova_s0" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Котова София</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">89043640181</h4>
		<h4 style="font-family:'typo' ">kotovasofia1102@yandex.ru</h4>
		<h4 style="font-family:'typo' ">РТУ МИРЭА</h4></div></div>
		</p>
      </div>
    </div>
  </div>
</div>

	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Вход</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Логин администратора" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Пароль" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Вход" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>



</body>
</html>
