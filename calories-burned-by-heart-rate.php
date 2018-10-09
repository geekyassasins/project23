
    <!-- CSS -->
    
    <link href="activity/css/bootstrap.css" rel="stylesheet">
    
    <link href="activity/css/style.css" rel="stylesheet">
    <link href="activity/css/menu.css" rel="stylesheet">
    <link href="activity/fontello/css/fontello.css" rel="stylesheet" > 


  <div id="main-wrapper">
 
    
	<div class="row" id="row-main">
		<div class="col-lg-6 col-md-5" id="main-img-container">
			<div id="main-img"  >
				<img src="activity/img/02.jpg" alt=""/>
			</div><!-- End main-img -->
		</div><!-- End main-img-container -->
        
		<div class="col-lg-6 col-lg-offset-6 col-md-7 col-md-offset-5">
			<div class="row" id="content-row">
                
				<div class="col-md-12">
					<h1>Calories Burned By Heart Rate</h1>
					
					<hr class="add_bottom_30">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <form>
                                <div class="form-group"><input type="text" class="form-control" name="Age" placeholder="Age (Years)"></div>
                                <div class="form-group"><input type="text" class="form-control" name="Weight" placeholder="Weight"></div>
                                
                                <div class="form-group">
                                    <div class="styled-select">
                                        <select class="form-control" name="weight_select">
                                        	<option value="kilo">By Kilo (KG)</option>	
                                            <option value="pounds">By Pounds</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group add_top">
                                    <input type="radio" value="Male" name="Male" id="Male"><label for="Male" style="margin-right:30px;"><span></span>Male</label>
                                    <input type="radio" value="Female" name="Female" id="Female"><label for="Female"><span></span>Female</label>
                                </div>
                                
                                <div class="form-group"><input type="text" class="form-control" name="heartrate" placeholder="Heart Rate BPM"></div>
                                <div class="form-group"><input type="text" class="form-control" name="duration" placeholder="Duration in minutes"></div>
                                <input type="hidden" name="calculator" value="adv_calculator"/>
                            </form>
                            <button id="selectBtn" class="button_medium add_top">Calculate</button>
                        </div>
                        
                        <div class="col-md-6 col-sm-6">
                            <div class="result">
                                <h3>Result for calorie burned</h3>
                                <div id="adv_calculator_value">0</div>
                            </div>   
                        </div>
                        
                    </div><!-- End row -->
                    
                    <hr>
                    
                   
                    
                    <footer>
                    	
                    </footer><!-- End footer -->
                
			</div><!-- End col-md-12 -->
		</div><!-- End content-row -->
	</div><!-- End col-lg-6-->
</div><!-- End main-row -->
</div><!-- End main-wrapper  -->








<script src="activity/js/jquery-1.10.min.js"></script>

<!-- OTHER JS --> 
<script src="activity/js/bootstrap.min.js"></script>

<script src="activity/js/retina-replace.min.js"></script>
<script src="activity/js/jquery.placeholder.js"></script>
<script src="activity/js/functions.js"></script>

