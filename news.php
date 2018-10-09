<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/newsbox/site.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="js/newsbox/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>


</head>
<body>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list-alt"></span><b>Technology News</b></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								<ul class="news-demo-down-auto">
									<li class="news-item">Python new version is released..<a href="#">Read more...</a></li>
									<li class="news-item">Get ready for Bootstrap 4.... <br />Compare with Bootstrap 3 <a href="#">Read more...</a></li>
									<li class="news-item">New forms in Bootstrap.. <a href="#">Read more...</a></li>
									<li class="news-item">PHP date ... <a href="#">Read more...</a></li>
									<li class="news-item">Read about Java update ... <a href="#">Read more...</a></li>
									<li class="news-item">HTML 5... <a href="#">Read more...</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-footer">

					</div>
				</div>
			</div>

		</div>
	</div>
	
<script type="text/javascript">
    $(function () {

		
		$(".news-demo-down-auto").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 1500,
            onToDo: function () {
            }
        });


    });
</script>

</body>
</html>


