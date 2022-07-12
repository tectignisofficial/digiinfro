$(document).ready(function(){
   $("#spanmobile").hide();
   $("#spanauthorized").hide();
   $("#spanwhatsapp").hide();
$("#mobile_no").keyup(function(){
    mobile_check();
});
function mobile_check(){
    let mobile_no = $("#mobile_no").val();
    let mob_val= /^[0-9]{10}$/;
   if(!mob_val.test(mobile_no)){
       $("#spanmobile").show().html("Enter valid mobile number").css("color","red");
       $("#mobile_no").css("margin-bottom","0");
   }
   else{
    $("#spanmobile").hide();
}
}

$("#authorized_person").keyup(function(){
    authorized_check();
});
function authorized_check(){
    let authorized_person = $("#authorized_person").val();
    let auth_val= /^[a-zA-Z ]{3,30}$/;
   if(!auth_val.test(authorized_person)){
       $("#spanauthorized").show().html("Enter valid authorized person name").css("color","red");
       $("#authorized_person").css("margin-bottom","0");
   }
   else{
    $("#spanauthorized").hide();
}
}

$("#whatsapp_no").keyup(function(){
    whatsapp_check();
});
function whatsapp_check(){
    let whatsapp_no = $("#whatsapp_no").val();
    let whatsapp_val= /^[0-9]{10}$/;
   if(!whatsapp_val.test(whatsapp_no)){
       $("#spanwhatsapp").show().html("Enter valid whatsapp number").css("color","red");
       $("#whatsapp_no").css("margin-bottom","0");
   }
   else{
    $("#spanwhatsapp").hide();
}
}
});
