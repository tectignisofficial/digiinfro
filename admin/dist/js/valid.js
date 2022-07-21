let catdnkname,catdnkslug
  $(document).ready(function(){
   //TEXT VALIDATION
   $("#spancatname").hide();
   $("#spancatslug").hide();
   
	    $("#catname").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
		   let txt=$("#catname").val();
		   let vali =/^[A-Za-z ]+$/;
		   if(!vali.test(txt)){
            catdnkname="no";
			  $("#spancatname").show().html("Enter Alphabets only").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
            catdnkname="yes";
		       $("#spancatname").hide();
		       
		   }
	   }

       $("#catslug").keyup(function(){
        slug_check();
      });
      function slug_check(){
          let txt=$("#catslug").val();
          let vali =/^[A-Za-z ]+$/;
          if(!vali.test(txt)){
            catdnkslug="no";
             $("#spancatslug").show().html("Enter Alphabets only").css("color","red").focus();
             slug_err=false;
             return false;
          }
          else{
            catdnkslug="yes";
              $("#spancatslug").hide();
              
          }
      }

       $("#catsub").click(function(){
        let catstatus=$("#catstatus").val();
        let catimage=$("#catimage").val();
        let caticon=$("#caticon").val();

        if(catdnkname =="no" ||catdnkslug=="no" || catstatus=="" || catimage=="" || caticon==""){
            swal("Oops...", "Please fill all the fields", "error");
          }
              else{
              swal("Saved!", "Agreement Save", "success");
            }
              txt_err = true;
              slug_err=true;
              txt_check();
              slug_check();
                
                if((txt_err==true) && (slug_err==true)){
                   return true;
                   
                }
                else{return false;}

                
           });
    });

    