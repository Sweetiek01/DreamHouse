<?php
   $my_email = 'aapprehension@gmail.com';   // впишите свой email на который будут приходить заявки, кавычки не удалять
   $timer = '15';   // задержка до редиректа на главную страницу в секундах

/* все что ниже редактировать можно только опытным пользователям, кроме раздела для вставки кодов (размечен дополнительно) */

   $back = '<p><a class="button" href="javascript: history.back()">Вернуться назад</a></p>';

   if(!empty($_POST['phone'])
   ){
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: zakaz@' . $_SERVER['HTTP_HOST'] . "\r\n";
      $site = trim(strip_tags($_SERVER['HTTP_REFERER']));
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $comment = trim(strip_tags($_POST['comment']));


      mail($my_email, 'Заявка с сайта ' .$site, 
      '<br /> <strong>Имя:</strong> '.$name.
      '<br /> <strong>Телефон:</strong> '.$phone.
      '<br /> <strong>Сообщение:</strong> '.$comment.
      '<br /> <strong>Сайт:</strong> '.$site,
      $headers);

      $result = '<div class="wrapper"><div class="ok"><h1>Ваша заявка успешно отправлена!</h1><strong>Мы свяжемся с Вами ближайшее время.</strong><h3>Через <span id="timerCounter">' . $timer . '</span> секунд Вы вернетесь <Br>на Главную страницу</h3>' . $back . '</div></div>';
   }
   else {
      $result = '<div class="wrapper"><div class="error"><h1>Ошибка!</h1><strong>Для отправки сообщения заполните все поля формы!</strong><h3>Через <span id="timerCounter">' . $timer . '</span> секунд Вы вернетесь <Br>на Главную страницу</h3>' . $back . '</div></div>';
   }

?>

<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width" />
   <meta http-equiv="refresh" content="<?php echo $timer; ?>;URL=./" />
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
   <title>Отправка сообщения...</title>


<!--здесь между этой разметкой ↓↓↓ можете вставить код Вашего Фейсбук Пикселя, Google Analytics, Яндекс Метрики и пр.-->

<!--здесь между этой разметкой ↑↑↑ можете вставить код Вашего Фейсбук Пикселя, Google Analytics, Яндекс Метрики и пр.-->


</head>
<style type="text/css">
body{font-family:Oswald,sans-serif;background-color:#fff;color:#fff;margin:0}.wrapper{height:77vh;margin-top:0;padding:77px 0 0 0}div.ok{position:relative;border:5px solid;display:block;font-size:21px;border-color:#8bc34a;background:#ece8c0;box-shadow:5px 5px 11px #4e4a4a;padding:15px;color:#584e4e;text-shadow:1px 1px 2px white;width:80%;min-width:260px;max-width:500px;margin:auto;text-align:center}div.error{position:relative;border:5px solid;display:block;font-size:21px;border-color:#de2113;background:#931047;box-shadow:5px 5px 11px #4e4a4a;padding:15px;color:#efe7e7;text-shadow:1px 1px 2px black;width:80%;min-width:260px;max-width:500px;margin:auto;text-align:center}.button{background:#8bc34a;border:2px solid #6ac56d;position:relative;border-radius:27px;text-shadow:1px 1px 2px #282626;background:linear-gradient(to bottom,#6ac56d 0,#18a91c 100%);color:azure;text-decoration:none;text-transform:uppercase;font-size:20px;letter-spacing:1px;font-weight:700;padding:7px 27px}.button:hover{background:#f3b300;border:2px solid #e9a137;top:-2px;box-shadow:0 5px 15px 0 rgb(0 0 0 / 15%)}span{font-weight:700}div#SLG_balloon_obj{display:none!important}.copy{display:block;height:10vh}.copy a{color:#bec0c1}h1{font-size:27px}h3{font-size:21px;margin-top:30px;font-weight:400}
</style>

<body>

<?php echo $result; ?>

<script type="text/javascript">
var timer = setInterval(function() {var elem = document.getElementById("timerCounter"); var val = parseInt(elem.innerHTML); if (val === 0) {clearInterval(timer); return;} val--; elem.innerHTML = val;}, 1000); eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('k 0=1.3(\'4\');0.5="6";0.7="<a 8=\\"9://2-c.b\\">e f g-h.i</a>";1.j.d(0);',21,21,'div|document|lp|createElement|center|className|copy|innerHTML|href|https|body|var'.split('|'),0,{}))
</script>
</body>
</html>