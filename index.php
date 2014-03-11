<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="style.css" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
 <script src="scripts/script.js"></script>
 <title>Bridalweek</title>
 </head>
 <body>
 <label>Тип мероприятия:</label><br/>
 <select id="tip">
  <option>Свадьба</option>
  <option>Юбилей</option>
  <option>День рождения</option>
  <option>Годовщина</option>
  <option>Детский праздник</option>
  <option>Мальчишник</option>
  <option>Девичник</option>
  <option>Корпоратив</option>
  <option>Деловое мероприятие</option>
  <option>Спортивное мероприятие</option>
  <option>Выпускной</option>
  <option>Роматнический Week-end</option>
</select><br/>
<label>Сообщение:</label></br>
<textarea placeholder="Пожалуйста, опишите Ваше мероприятие" id="msg">
</textarea><br/>
<label>Адрес электронной почты:</label><br/>
<input type="text" id="email"/><br/>
<input type="checkbox" id="savemail" value="yes"/><label for="savemail">Подписаться на рассылку от Bridalweek</label><br/>
<input type="checkbox" id="showmail" value="yes"/><label for="showmail">Показывать адрес электронной почты компаниям</label><br/>
<button id="sendorder">Отправить</button>
 </body>
</html>