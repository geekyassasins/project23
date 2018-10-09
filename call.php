 <!-- Modal -->
  <div class="modal fade" id="<?php echo $blog['blog_id'];?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Call Now For Free Diet Plan</h4>
        </div>
          	<form class="form" id="form" >
        <div class="modal-body">
			<div class="form-group">
				<input type="text" name="btitle" id="btitle" class="form-control" value="<?php echo $blog['title'];?>" placeholder="Name" readonly>

			</div>

			<div class="form-group">
				<input type="text" name="name2" id="name2" class="form-control" placeholder="Name">
				<span id="msgname2" class="hide alert" style="color:red">Name should not be blank</span>
			</div>
			<div class="form-group">
				<input type="text" name="Email2" id="Email2" class="form-control" placeholder="Email">
			</div>

			<div class="form-group">
				<input id="phone" name="phone" class="form-control" type="tel" placeholder="Mobile Number">
				<span id="msgblank2" class="hide alert" style="color:red">Number should not be blank</span>
				<span id="msgvalid11" class="hide alert" style="color:red">Number should be 10 digit only</span>				
			</div>
			<div class="form-group ">
				<textarea class="form-control" id="msg2" name="msg2" maxlength="120" placeholder="Your message"></textarea>
				<span id="msgtext2" class="hide alert" style="color:red">Message should not be blank</span>
			</div>


        </div>
        <div class="modal-footer">
	  <center>	
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="return msend();">Submit</button>
	 </center>
        </div>
	</form>
	<div class="modal-body hide" id="correct2">
			<h4>Your Message has been sent</h4>
	</div>
      </div>
      
    </div>
  </div>
<script>
function msend()
{
	flag=1;

	if(!$('#msgblank2').hasClass("hide")){
		$('#msgblank2').addClass("hide");
	};
	if(!$('#msgtext2').hasClass("hide")){
		$('#msgtext2').addClass("hide");
	};
	if(!$('#msgname2').hasClass("hide")){
		$('#msgname2').addClass("hide");
	};
	if($('#form').hasClass("hide")){
		$('#form').removeClass("hide");
	};
	if(!$('#correct2').hasClass("hide")){
		$('#correct2').addClass("hide");
	};
		if(!$('#msgvalid11').hasClass("hide")){
		$('#msgvalid11').addClass("hide");
	};


	var mob=$.trim(document.getElementById('phone').value);
	var email=$.trim(document.getElementById('Email2').value);	
	var msg=$.trim(document.getElementById('msg2').value);
	var name=$.trim(document.getElementById('name2').value);
	var title=$.trim(document.getElementById('btitle').value);
	alert(title);
	if(mob=="")
	{

		$('#msgblank2').removeClass("hide");
		flag=0;
	}

	if(mob.length!=10 && mob!="")
	{

		$('#msgvalid11').removeClass("hide");
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

		$('#msgname2').removeClass("hide");
		flag=0;
	}
	if(flag==1)
	{
		
		$.post('contactform/offercontact.php',{mob:mob,msg:msg,name:name,id:1,email:email,title:title,},
		function (res){
			var string=$.trim(res);
                        //alert(string);
			if(string=="OK")
			{

				$('#form').addClass("hide");
				$('#correct2').removeClass("hide");
				
				      setTimeout(function() {
					$('#form').removeClass("hide");
					$('#correct2').addClass("hide");
					$("#phone").val("");
					$("#msg2").val("");
					$("#Email2").val("");
					$("#name2").val("");
					$("#cls1").click();
            				}, 2000);
					window.open('Blood-pressure-chart.pdf');
            				

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
