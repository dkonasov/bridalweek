jQuery(document).ready(function(){

userid=jQuery('#userid').val();
lastid='default';
jQuery('.sendoffer').live('click', function(){

reply=jQuery(this).data('id');
jQuery('#content').load('sendoffer.php');
console.log('User with id '+userid+' wants to reply on order with id '+reply);



});
jQuery('#send').live('click', function(){

jQuery.post('sendofferscript.php', {userid: userid, reply :reply, msg: jQuery('#msg').val()}, function(data){

console.log(data.result);

}, "json");

});
jQuery('#ordersbutton').on('click', function(){
jQuery('#replypromt').remove();
jQuery.post('getorders.php', {userid: userid, lastid: lastid}, function(data)
{

//data=eval(data);
data=eval(data);
for(i=0; i<data.length; i++){
if(i==0){

latestid=data[i].id;

}
if(data[i].showmail==1){

email=data[i].email;

} else {

email='Почта скрыта';

}
if(data[i].id>jQuery('#lastid').val()){

divclass='singleorder unread';

} else {

divclass='singleorder';

}
jQuery('#content').append('<div class="'+divclass+'"><span class="orderlabel">Тип события: </span><div class="ordercontent">'+data[i].type+'</div><br/><span class="orderlabel">Сообщение: </span><div class="ordercontent">'+data[i].msg+'</div><br/><span class="orderlabel">Электронная почта: </span><div class="ordercontent">'+email+'</div><button class="sendoffer" data-id="'+data[i].id+'">Ответить</button></div>');

if(i==data.length-1){
oldestid=data[i].id;
jQuery('#content').append('<div id="showmore">Показать еще</div>');

jQuery.post('lastid.php', {latestid: latestid, userid: jQuery('#userid').val()}, function(data){

console.log(data);

});

}
}

});
});
jQuery.post('getorders.php', {userid: userid, lastid: lastid}, function(data)
{
console.log(data);
data=eval(data);
for(i=0; i<data.length; i++){
if(i==0){

latestid=data[i].id;

}
if(data[i].showmail==1){

email=data[i].email;

} else {

email='Почта скрыта';

}
if(data[i].id>jQuery('#lastid').val()){

divclass='singleorder unread';

} else {

divclass='singleorder';

}
jQuery('#content').append('<div class="'+divclass+'"><span class="orderlabel">Тип события: </span><div class="ordercontent">'+data[i].type+'</div><br/><span class="orderlabel">Регион: </span><div class="ordercontent">'+data[i].region+'</div><br/><span class="orderlabel">Сообщение: </span><div class="ordercontent">'+data[i].msg+'</div><br/><span class="orderlabel">Электронная почта: </span><div class="ordercontent">'+email+'</div><button class="sendoffer" data-id="'+data[i].id+'">Ответить</button></div>');

if(i==data.length-1){
oldestid=data[i].id;
jQuery('#content').append('<div id="showmore">Показать еще</div>');

jQuery.post('lastid.php', {latestid: latestid, userid: jQuery('#userid').val()}, function(data){

console.log(data);

});

}
}

});

jQuery('#showmore').live('click', function(){
console.log('click');
jQuery('#showmore').remove();
jQuery.post('getorders.php', {userid: userid, lastid: oldestid}, function(data)
{
console.log(data);
data=eval(data);
for(i=0; i<data.length; i++){
if(data[i].showmail==1){

email=data[i].email;

} else {

email='Почта скрыта';

}
if(data[i].id>jQuery('#lastid').val()){

divclass='singleorder unread';

} else {

divclass='singleorder';

}
jQuery('#content').append('<div class="'+divclass+'"><span class="orderlabel">Тип события: </span><div class="ordercontent">'+data[i].type+'</div><br/><span class="orderlabel">Регион: </span><div class="ordercontent">'+data[i].region+'</div><br/><span class="orderlabel">Сообщение: </span><div class="ordercontent">'+data[i].msg+'</div><br/><span class="orderlabel">Электронная почта: </span><div class="ordercontent">'+email+'</div><button class="sendoffer" data-id="'+data[i].id+'">Ответить</button></div>');

if(i==data.length-1){
oldestid=data[i].id;
jQuery('#content').append('<div id="showmore">Показать еще</div>');

jQuery.post('lastid.php', {latestid: latestid, userid: jQuery('#userid').val()}, function(data){

console.log(data);

});

}
}


});

});

});