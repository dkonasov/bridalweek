$('document').ready(function(){
$('#adduser').on('click', function(){
keycheck=$('#key input');
keywords='';
for(var i=0; i<keycheck.size()+1; i++){

curelem=keycheck.eq(i);
if(curelem.prop('checked')==true){

keywords+="'"+curelem.val()+"'"+',';

}

}
keywords=keywords.substr(0, keywords.length-1)
user=$('#username').val();
pass=$('#password').val();
tel=$('#tel').val();
companyname=$('#companyname').val();
managername=$('#managername').val();
jQuery.post('adduserscript.php', {username: user, password: pass, keywords: keywords, tel: tel, companyname: companyname, managername: managername}, function(data)
{

console.log(data);

});


});

});