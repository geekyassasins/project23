<a href="#" title="Call request" data-toggle="modal" data-target="#myModal2"><img src="images/meal.jpg" class="pull-right img-responsive call" style="height:110px;width:100%;border-radius:10px;" alt="Call to Action"></a>
<style>
@media(max-width:786px)
{
        .call{
                width:100%;
                height:50px !important;
                
        }

}
</style>


  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Click To Download Diet plan</h4>
        </div>
          	<form class="form" id="form" >
        <div class="modal-body">
			<div class="form-group">
				<input type="text" name="name22" id="name22" class="form-control" placeholder="Name">
				<span id="msgname22" class="hide alert" style="color:red">Name should not be blank</span>
			</div>
			<div class="form-group">
				<input type="text" name="Email22" id="Email22" class="form-control" placeholder="Email">
			</div>

			<div class="form-group">
				<input id="phone2" name="phone2" class="form-control" type="tel" placeholder="Mobile Number">
				<span id="msgblank22" class="hide alert" style="color:red">Number should not be blank</span>
				<span id="msgvalid112" class="hide alert" style="color:red">Number should be 10 digit only</span>				
			</div>
			<div class="form-group ">
				<textarea class="form-control" id="msg22" name="msg22" maxlength="120" placeholder="Your message"></textarea>
				<span id="msgtext22" class="hide alert" style="color:red">Message should not be blank</span>
			</div>


        </div>
        <div class="modal-footer">
	  <center>	
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="return sendenq2();">Submit</button>
	 </center>
        </div>
	</form>
	<div class="modal-body hide" id="correct22">
			<h4>Your Message has been sent</h4>
	</div>
      </div>
      
    </div>
  </div>
<script>
function sendenq2()
{
	flag=1;

	if(!$('#msgblank22').hasClass("hide")){
		$('#msgblank22').addClass("hide");
	};
	if(!$('#msgtext22').hasClass("hide")){
		$('#msgtext22').addClass("hide");
	};
	if(!$('#msgname22').hasClass("hide")){
		$('#msgname22').addClass("hide");
	};
	if($('#form').hasClass("hide")){
		$('#form').removeClass("hide");
	};
	if(!$('#correct22').hasClass("hide")){
		$('#correct22').addClass("hide");
	};
		if(!$('#msgvalid112').hasClass("hide")){
		$('#msgvalid112').addClass("hide");
	};


	var mob=$.trim(document.getElementById('phone2').value);
	var email=$.trim(document.getElementById('Email22').value);	
	var msg=$.trim(document.getElementById('msg22').value);
	var name=$.trim(document.getElementById('name22').value);
	if(mob=="")
	{

		$('#msgblank22').removeClass("hide");
		flag=0;
	}

	if(mob.length!=10 && mob!="")
	{

		$('#msgvalid112').removeClass("hide");
		flag=0;
	}
/*		
	if(msg=="")
	{

		$('#msgtext2').removeClass("hide");
		flag=0;
	}
*/
	if(name=="")
	{

		$('#msgname22').removeClass("hide");
		flag=0;
	}
	if(flag==1)
	{
		
		$.post('contactform/offercontact.php',{mob:mob,msg:msg,name:name,id:1,email:email,},
		function (res){
			var string=$.trim(res);
                        //alert(string);
			if(string=="OK")
			{

				$('#form').addClass("hide");
				$('#correct22').removeClass("hide");
				
				      setTimeout(function() {
					$('#form').removeClass("hide");
					$('#correct22').addClass("hide");
					$("#phone2").val("");
					$("#msg22").val("");
					$("#Email22").val("");
					$("#name22").val("");
					$("#cls1").click();
            				}, 2000);
            				

			}
		}
		);
		 $("#cls1").click();

/*
		$('#form').addClass("hide");
		$('#correct').removeClass("hide");
*/
	}
	
	return false;
}

</script>
