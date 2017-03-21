<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GoPoochGo</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<link rel="stylesheet" href="css/myStyle.css">
</head>
<body>
<div class="container">
	
	<div class="bg-container" id="homeId">
	</div>
	<div class="middle-content" id="home-textId">
			<span class="middle-text">Hi! I'm VJ and I build websites.</span>
			<button class="middle-button"> YES, I'M AVAILABLE FOR HIRE</button>
		</div>
	<div class="bg-color"></div>
	<div class="sidebar">
		<div class="sidebar-nav"><i id="home" class="fa fa-home fa-3x" aria-hidden="true"></i></div>
		<div class="sidebar-nav"><i id="infoId" class="fa fa-info-circle fa-3x" ></i></div>
		<div class="sidebar-nav"><i id="skillId" class="fa fa-code fa-3x"></i></div>
		<div class="sidebar-nav"><i id="portfolioId" class="fa fa-picture-o fa-3x"></i></div>
		<div class="sidebar-nav"><i id="contactId" class="fa fa-address-book fa-3x"></i></div>
	</div>

	<div class="skills-content" id="skillsId">
		<table class="table">
		    <thead>
		        <tr>
		            <th></th>
		            <th></th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>PHP</td>
		            <td>
		            	<div class="progress">
						  <div id="PHPId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
		            </td>
		        </tr>
		        <tr>
		            <td>SALESFORCE</td>
		            <td>
		            	<div class="progress">
						  <div id="SFId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
		            </td>
		        </tr>
		        <tr>
		            <td>JAVA</td>
	            	<td>
	            		<div class="progress">
						  <div id="JavaId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
	            	</td>
				</tr>
				<tr>
		            <td>CSS</td>
	            	<td>
	            		<div class="progress">
						  <div id="CSSId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
	            	</td>
				</tr>
				<tr>
		            <td>HTML</td>
	            	<td>
	            		<div class="progress">
						  <div id="HTMLId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
	            	</td>
				</tr>
				<tr>
		            <td>Javascript</td>
	            	<td>
	            		<div class="progress">
						  <div id="JSId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
	            	</td>
				</tr>
				<tr>
		            <td>Database SQL</td>
	            	<td>
	            		<div class="progress">
						  <div id="SQLId" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
	            	</td>
				</tr>
		    </tbody>
		</table>
		</div>

		<div class="info-content" id="info-contentId">
		<h1>My Work Experiences</h1>

		<table>
			<thead>
				<th>Worked As</th>
				
			</thead>
			<tbody>
				<tr>
					<td>Salesforce Analyst</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora necessitatibus cumque molestiae eveniet alias illo architecto quidem, commodi assumenda totam. Possimus nulla pariatur culpa dolorum! At ab sit, quis illo.</td>

				</tr>
				<tr>
					<td>Front-End Developer</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis at et, veritatis nisi, saepe in doloribus explicabo consectetur. Quo deleniti dolores vero rem illum assumenda in pariatur maxime nobis quia!</td>
				</tr>
			</tbody>
		</table>
		</div>

		<div class="contact-content" id="contact-contentId">
		<h1>Contact Form</h1>
		<div class="col-md-6">
			
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="text" class="form-control" id="usr">
					</div>
					<div class="form-group">
					  <label for="eml">Email:</label>
					  <input type="email" class="form-control" id="eml">
					</div>
					<div class="form-group">
					  <label for="moblnum">Mobile Number:</label>
					  <input type="number" class="form-control" id="moblnum">
					</div>
					<div class="form-group">
					  <label for="subj">Subject:</label>
					  <input type="text" class="form-control" id="subj">
					</div>
					<div class="form-group">
					  <label for="msg">Message:</label>
					  <textarea rows="5" type="text" class="form-control" id="msg"></textarea>
					</div>

					<button class="right btn-primary" >Submit </button>
		</div>
	</div>
</div>




<script>



	$("#skillId").click(function(){
		reset();
		showBGColor();
		$("#skillsId").show();
		$("#skillId").css("color", "green");
		animate();
	});
	$("#home").click(function(){
		reset();
		$(".bg-color").hide();
		$("#home-textId").show();
		$("#homeId").show();
		$("#home").css("color", "green");
	});

	$("#infoId").click(function(){
		reset();
		showBGColor();
		$("#info-contentId").show();
		$("#infoId").css("color", "green");
	});

	$("#contactId").click(function(){
		reset();
		showBGColor();
		$("#contact-contentId").show();
		$("#contactId").css("color", "green");
	});

	function showBGColor(){
		$(".bg-color").show();
	};

	function reset(){
		$("#skillsId").hide();
		$("#home-textId").hide();
		$("#homeId").hide();
		$("#info-contentId").hide();
		$("#contact-contentId").hide();

		$(".progress-bar").css("width", "0");
		$("#home").css("color", "black");
		$("#infoId").css("color", "black");
		$("#weId").css("color", "black");
		$("#skillId").css("color", "black");
		$("#contactId").css("color", "black");
	};

	function animate(){
	$("#SFId").animate({
    width: "80%"
	}, 2500);

	$("#PHPId").animate({
    width: "50%"
	}, 2500);

	$("#JavaId").animate({
    width: "70%"
	}, 2500);

	$("#JSId").animate({
    width: "70%"
	}, 2500);

	$("#HTMLId").animate({
    width: "90%"
	}, 2500);

	$("#SQLId").animate({
    width: "90%"
	}, 2500);

	$("#CSSId").animate({
    width: "90%"
	}, 2500);
	};
</script>
</body>
</html>