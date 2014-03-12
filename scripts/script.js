jQuery(document).ready(function(){

jQuery('#sendorder').on('click', function(){

tip=jQuery('#tip').val();
msg=jQuery('#msg').val();
email=jQuery('#email').val();
region=jQuery('#region').val();

if(jQuery('#savemail').prop('checked')==true){

savemail=1;

} else {

savemail=0;

}

if(jQuery('#showmail').prop('checked')==true){

showmail=1;

} else {

showmail=0;

}
jQuery.post('sendorder.php',{ tip: tip, msg: msg, email: email, savemail: savemail, showmail: showmail, region: region }, function(data)
{

console.log(data);

});

});

});