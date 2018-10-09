<style>
        #meet-team a,.panel-body{
             text-align: justify;
            text-justify: inter-word;
            color:black;
       
        }
        .panel-default a{
                font-weight:600;
        
        }
</style>

    <section id="get-in-touch">
        <div class="container">
                <?php include "request.php";?>

        </div>
    </section><!--/#get-in-touch-->

    <section id="contact"  id="main-contact-form">
        <div  style="height:550px" ></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-sm-offset-0">
                        <div class="contact-form">
                            <h3>Contact Info</h3>
<!--
                            <address>
                              <strong>Twitter, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
-->

        <div class="form">
          <div id="Msendmessage">Your message has been sent. Thank you!</div>
          <div id="Merrormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-12">
              <input type="text" class="form-control" name="sub" id="sub" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter subject for the message" />

                <div class="validation newval"></div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter your name" />
                <div class="validation newval"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="tel" data-rule="minlen:10" maxlength="10" class="form-control" name="mob" id="mob" placeholder="Your Mobile Number" data-rule="email" data-msg="Please enter a valid 10 digit Mobile Number" />
                <div class="validation newval"></div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter your email id" />
                <div class="validation newval"></div>
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-12">

              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Message can not left blank" placeholder="Message"></textarea>
              <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">

                    <div class="text-center"><button type="submit">Send Message</button></div>
              </div>
            </div>

          </form>
        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">Copyrights &copy; <?php echo date('Y')?>  All Rights Reserved <a href="https://indiaswca.com/" target="_blank" title="'IWCA' mission is to educate people about Sports, Nutrition, Health, Fitness Training, Personal Training, Injury habitation and make them healthy and wish they enjoy their life with disease free and injury free.">IWCA.</a>
                     <!--Designed by <a target="_blank" href="http://narmware.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Narmware</a>-->
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="disclaimer.php">Disclaimer</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
<!--
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>---->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script src="contactform/contactform.js"></script>
      <script src="contactform/offer.js"></script>
</body>
</html>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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
          <button type="button" class="btn btn-success" onclick="return sendenq();">Submit</button>
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
function sendenq()
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
		
		$.post('contactform/offercontact.php',{mob:mob,msg:msg,name:name,id:1,email:email,},
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


