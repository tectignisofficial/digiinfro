$(document).ready(function(){
    $("#spanmobile").hide();
$("#mobile_no").keyup(function(){
    mobile_check();
});
function mobile_check(){
    let mobile_no = $("#mobile_no").val();
    let mob_val= /^[0-9]{10}$/;
   if(!mob_val.test(mobile_no)){
       $("#spanmobile").show().html("Enter valid mobile number").css("color","red");
   }
   else{
    $("#spanmobile").hide();
}
}
});