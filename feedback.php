<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online test </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header">
<div class="col-lg-6">
<span class="logo">Online test</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Вход</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Выход</a>&nbsp;';}
?>

<a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-Home" aria-hidden="true"></span>&nbsp;Главная</a>&nbsp;
</div></div>

<!--sign in modal start-->
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


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Введите вашу почту" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
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
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/back1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">Введите отзыв или сообщите о проблеме</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
Вы можете написать ваш отзыв на нашу почту kotovasofia1102@yandex.ru <br />
<div class="row">
<div class="col-md-1"></div>
<p>Или можете сразу отправить ваш отзыв, заполнив поля ниже:</p>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Имя:</b><br /><br /><br /><b>Тема:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Введите имя" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Введите тему" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-mail адрес:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Введите вашу почту" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Введите текст"></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Подтвердить" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->


<!--Footer start-->
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
