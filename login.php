<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
  <title>Admin | Blog Site</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background-color: black;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
		margin-top:-100px;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
	margin-top:45px;
	position:auto;
	margin-left:10px;
}
.card{
	width:500px;

}
.text{
	font-style: normal;
	font-weight:bold;
	font-variant: small-caps;
}
.icon{
	margin-top:-40px;
}
h5{
	border: dotted black 1px;
	color:black;
	text-shadow: 0 0 3px #ffff, 0 0 5px #ffff;
	font-weight:bold;
}
p{
	border: dotted black 1px;
	text-shadow: 0 0 3px black, 0 0 5px black;
}
.group{
	margin-bottom:170px;
}
h6{
	font-size: 25px;
	border: dotted black 1px;
	color:black;
	text-shadow: 0 0 3px #ffff, 0 0 5px #ffff;
	font-weight:bold;
	border-color: black;	
}
p1{
	color:black;
	text-shadow: 0 0 1px black, 0 0 1px black;
}

</style>

<body>
	
<div class="form">
<nav class="mb-1 navbar navbar-expand-lg bg-info text-white default-color fixed-top">
<a class="navbar-brand">
    <div class="main-logo"><img src="img/DRRM.png" width="33px" height="33px"></div>
  <div class="text"><font color="red">M</font>DRRMO  <font color="red">F</font>ile <font color="red">M</font>anagement <font color="red">S</font>ystem</a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>

<!--arousel-->
<main id="main" class=" alert-info">
  		<div id="login-left">
		  <!--<div id="carousel-slider" class="carousel slide" data-ride="carousel" data-interval="4000">-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="logo">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/kalayaan.jpeg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>MUNICIPALITY OF KALAYAAN</h5>
    <p>"In 1946, Vice President Elpidio Quirino reiterated that the Southern Islands, the forerunner name for Kalayaan, as part of the Philippines.
	In 1947, Tomas Cloma, a Filipino adventurer and a fishing magnate, discovered a group of several uninhabited and unoccupied islands/islets in the vastness of the Luzon Sea also called the South China Sea."</p>
	</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/air-craft.jpg" height="861" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>SUN SET NEAR AT THE AIR STRIFE</h5>
    <p>"A sunset is the daily event where the sun descends below the horizon, leading to the gradual fading of daylight and the onset of twilight. This natural phenomenon is characterized by a visually stunning display of colors in the sky, ranging from warm oranges and reds to cooler purples and blues, caused by the scattering of sunlight in the Earth's atmosphere. Sunsets are cherished for their beauty and are often enjoyed as moments of serenity and contemplation." </p>
	</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/signage.jpg" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>MDRRM EVACUATION CENTER</h5>
    <p>"This evacuation center is a designated facility or location established to temporarily accommodate individuals or groups who have been displaced from their homes or are fleeing from natural disasters, emergencies, or other hazardous situations. This evacuation center are equipped with basic amenities such as shelter, food, water, medical assistance, and sanitation facilities to ensure the safety and well-being of evacuees. Evacuation centers serve as crucial hubs for coordinating disaster response efforts, providing temporary refuge, and facilitating the distribution of aid and resources to affected populations."</p>
    </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="img/drrmo.png" height="800" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
		<div class="group">
	  <h6>VISION</h6>
    <p1>“A safer and disaster resilient Municipality in the West Philippine Sea that is adaptive to climate change.”</p1>
<br><br><br><br>
	<h6>MISSION</h6>
    <p1>“To build Local Disaster Risk Reduction and Management, and Climate Change Adaptation capabilities with our partners and coordinate response and recovery operations to protect the people, environment, and economy and ensure a disaster-resilient municipality in the West Philippine Sea.”</p1>
<br><br><br><br> 
	<h6>MANDATE</h6>
    <p1>The Municipal Disaster Risk Reduction and Management Office, as provided by Section 4, Rule VI of RA 10121, is mandated to design, program, and coordinate disaster risk reduction and management activities consistent with the National Council’s standards and guidelines.</p1>
</div>      
</div>
  </div>
</div>	
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<!--arousel end-->
  <!--<main id="main" class=" alert-info">
  		<div id="login-left">
			
  			<div class="logo">
  				<img src="img/kalayaan.jpeg" width="1261px" height="1261"class="img-thumbnail bg-light">
  			</div>
  		</div>-->
		 
  		<div id="login-right">
  			<div class="card bg-info text-white default-color">
				<div class="icon"><center><img src="img/user.png" width="80px"></div>
				
  				<div class="card-body">
  					<form id="login-form" >
					  
  						<div class="form-group">
						  
  							<label for="username" class="control-label" >Username:</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
						
  						<div class="form-group">
  							<label for="password" class="control-label">Password:</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.reload('index.php?page=home');
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>