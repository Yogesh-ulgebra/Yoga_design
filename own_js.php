<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	
</head>
<body>
	<div id="res">
		<?php
//	header("location:size.php");
		$url = 'http://sakthikanth.esy.es/new_header.php';



		?>
	</div>

	<button onclick="get_this()">click this</button>
	<button id="location_change">Get locs</button>
	<script type="text/javascript">

		function get_this(){
			console.log('l');

			var fmdt = new FormData();
			fmdt.append("username","sakthikanth");

			$.ajax({
				url:'http://sakthikanth.esy.es/new_header.php',
				processData: false,
				contentType: false,
				data: fmdt,
				type: "POST",
				dataType: 'text',
				crossDomain: true,
				xhrFields: {
					withCredentials: true
				},
				success:function(r){
					$('#res').html(r);
				},
				error:function(r){
					$('#res').html(r);

				}
			});


		}



		function  show_locs(){

			var app_cookie_url = "loc_test.php";
			var fmdt = new FormData();
			$.ajax({

				url: app_cookie_url,
				dataType: 'text',
				cache: false,
				contentType: false,
				processData: false,
				crossDomain: true,
				xhrFields: {
					withCredentials: true
				},
				data: fmdt,
				type: 'post',
				beforeSend:function(){

					$('#res').html("Processing...").css('color','blue');

				},
				success:function(r){
					console.log(r);
					
					$('#res').html(r);
				},
				error:function(r){
					$('#res').html(r);
				}



			});
		}


		$('#location_change').click(function(){
			show_locs();
		});



	</script>
</body>
</html>