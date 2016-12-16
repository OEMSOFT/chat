<?php
if($_POST){
$username = $_POST['username'];
$msg = $_POST['msg'];
$msg = eregi_replace("[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*","<a href=\"mailto:\\0\" target=_blank>\\0</a>",$msg);
$msg = eregi_replace("^http://([^ ,\r\n]*)","<a href='http://\\1' target=_blank>http://\\1</a>", $msg);
$msg = eregi_replace("([ \r\n])http://([^ ,\r\n]*)","\\1<a href='http://\\2' target=_blank>http://\\2</a>",$msg);
$msg = eregi_replace("([ \r\n])www\\.([^ ,\r\n]*)","\\1<a href='http://www.\\2'target=_blank>http://www.\\2</a>",$msg);
$msg = eregi_replace("^www\\.([^ ,\r\n]*)","<a href='http://www.\\1' target=_blank>http://www.\\1</a>",$msg);
//Смайлики
$msg = eregi_replace("-1-","<img src=smiles/1.gif>",$msg);
$msg = eregi_replace("-2-","<img src=smiles/2.gif>",$msg);
$msg = eregi_replace("-3-","<img src=smiles/3.gif>",$msg);
$msg = eregi_replace("-4-","<img src=smiles/4.gif>",$msg);
$msg = eregi_replace("-5-","<img src=smiles/5.gif>",$msg);
$msg = eregi_replace("-6-","<img src=smiles/6.gif>",$msg);
$msg = eregi_replace("-7-","<img src=smiles/7.gif>",$msg);
$msg = eregi_replace("-8-","<img src=smiles/8.gif>",$msg);
$msg = eregi_replace("-9-","<img src=smiles/9.gif>",$msg);
$msg = eregi_replace("-10-","<img src=smiles/10.gif>",$msg);
$msg = eregi_replace("-11-","<img src=smiles/11.gif>",$msg);
$msg = eregi_replace("-12-","<img src=smiles/12.gif>",$msg);
$msg = eregi_replace("-13-","<img src=smiles/13.gif>",$msg);
$msg = eregi_replace("-14-","<img src=smiles/14.gif>",$msg);
$msg = eregi_replace("-15-","<img src=smiles/15.gif>",$msg);
$msg = eregi_replace("-16-","<img src=smiles/16.gif>",$msg);
$msg = eregi_replace("-17-","<img src=smiles/17.gif>",$msg);
$msg = eregi_replace("-18-","<img src=smiles/18.gif>",$msg);
//Смайлики
//Анти-мат
$msg = eregi_replace("Охуеть","Я удивлён",$msg);
$msg = eregi_replace("Пидар","Вы данном случае неправы",$msg);
$msg = eregi_replace("Какая нахуй разница","Разница не принципиальная",$msg);
$msg = eregi_replace("Пиздец","Упс, небольшой коллапс получился",$msg);
$msg = eregi_replace("Пошёл на хуй","Не отвлекайте, в данную минуту я занят",$msg);
$msg = eregi_replace("Заебали","Извините, вы сильно надоедливые",$msg);
$msg = eregi_replace("Что за хуйня","Мне, кажется, здесь что-то не то",$msg);
$msg = eregi_replace("Блядь","Меня переполняют эмоции",$msg);
$msg = eregi_replace("Роспиздяй","Ваша степень ответственности оставляет желать лучшего",$msg);
$msg = eregi_replace("Проебали","Мне, кажется, мы что-то упустили из внимания",$msg);
$msg = eregi_replace("Заебали","Извините, вы сильно надоедливые",$msg);
$msg = eregi_replace("Охуел","Ваше поведение не отвечает моим ожиданиям",$msg);
$msg = eregi_replace("Хуйня","Всем известный предмет",$msg);
$msg = eregi_replace("За это нужно выебать","Я буду вынужден сообщить",$msg);

$msg = eregi_replace("охуеть","я удивлён",$msg);
$msg = eregi_replace("пидар","вы данном случае неправы",$msg);
$msg = eregi_replace("какая нахуй разница","разница не принципиальная",$msg);
$msg = eregi_replace("пиздец","упс, небольшой коллапс получился",$msg);
$msg = eregi_replace("пошёл на хуй","не отвлекайте, в данную минуту я занят",$msg);
$msg = eregi_replace("заебали","извините, вы сильно надоедливые",$msg);
$msg = eregi_replace("что за хуйня","мне, кажется, здесь что-то не то",$msg);
$msg = eregi_replace("блядь","меня переполняют эмоции",$msg);
$msg = eregi_replace("роспиздяй","ваша степень ответственности оставляет желать лучшего",$msg);
$msg = eregi_replace("проебали","мне, кажется, мы что-то упустили из внимания",$msg);
$msg = eregi_replace("заебали","извините, вы сильно надоедливые",$msg);
$msg = eregi_replace("охуел","ваше поведение не отвечает моим ожиданиям",$msg);
$msg = eregi_replace("хуйня","всем известный предмет",$msg);
$msg = eregi_replace("за это нужно выебать","я буду вынужден сообщить",$msg);
//Анти-мат
$msg = eregi_replace("<script([^ ,\r\n]*)","",$msg);
if( $username == "" ){
	$username = "Гость".rand(1, 10000);
	SetCookie("ChatUSER", $username);
}
$fp = fopen('msg.txt', 'a+');
$mytext = "<font color='white'>[".$username."]</font><font color='lightgreen'> - ".$msg."</font><br>/n";
$send = fwrite($fp, $mytext);
$send;
fclose($fp);
}
?>
<html>
<head>
<title>Супер чат!</title>
<meta charset="utf-8">
</head>
<style>
	html{
		background: grey;
	}
	.list{
		border: 3px black solid;
		padding: 15px;
		overflow: scroll;
		width: 54%;
		height: 80%;
		color: black;
		background: black;
	}
	#message{
		width: 85%;
	}
	#chat{
		background:grey;
		padding: 15px;
		margin: 0px;
	}
	#online{
		float: right;
		border: 3px darkgreen solid;
		padding: 15px;
		overflow: scroll;
		width: 40%;
		height: 80%;
		color: white;
		background: darkgreen;
	}
</style>
<?php 
	$usernamecook = $_COOKIE['ChatUSER'];
?>
<div id="online"><font color="white">Онлайн:</font><br></div>
<div class="list" id="list"><? echo readfile("msg.txt"); ?></div>
<form method="POST" name="send" id="chat" action="send.php">
<input placeholder="Username" value="<?php echo $usernamecook; ?>" type="hidden" name="username"> 
<input placeholder="Message" id="message" name='msg'>
<input type=button value="Смайлы" onClick=window.open('smiles/smiles.html','','width=300,height=80,status=no,menubar=no,toolbar=no,scrollbars=yes')>
<input type="submit" id="chatsend" disabled="true">
</form>
<!--<form method="POST" action="sendaudio.php" enctype="multipart/form-data"><br>
<input placeholder="Username" value="<?php echo $usernamecook; ?>" name="username">
<input type="file" name="uploadfile" accept="audio/*;capture=microphone">
<input value="Голосовой чат" type="submit">
<img src="refresh.png" width="40px;" onclick="location.reload()">-->
<script>

var c=10;
   fc();

   function fc(){

     if(c>0){

        document.getElementById('chatsend').value = 'Ждите: ' + c;
        c--;
        setTimeout('fc()', 1000);
      } else {
        document.getElementById('chatsend').disabled = false;
        document.getElementById('chatsend').value = 'Отправить';
     }

       }

</script> 
</html>