<?php
//including the database connection file
include_once(".\config\config.php");
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');
?>
<!doctype html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cricket home.css" />
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Footer-with-logo.css">
    <link rel="stylesheet" href="css/details/footer.css">

</head>

<body>

	<div id='cssmenu-nav' class="col-m-12 col-12">
		<ul>
		   <li><a href='..\index.html'><span>Home</span></a></li>
		   <li class='active has-sub'><a href='Cricket Home.php'><span>Cricket</span></a>
		      <ul>
		         <li class='has-sub'><a href='Cricket Home.php'><span>Today Matches</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details1.php'><span>Highlights</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>International</span></a>
		            <ul>
		               <li><a href='Cricket Home.php'><span>Upcoming</span></a></li>
		               <li class='last'><a href='details2.php'><span>Completed</span></a></li>
		            </ul>
		         <li class='has-sub'><a href='Cricket Home.php'><span>Domestic</span></a>
		            <ul>
		               <li><a href='Cricket Home.php'><span>Upcoming</span></a></li>
		               <li class='last'><a href='details3'><span>Completed</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='details1'><span>Leagues</span></a>
		            <ul>
		               <li><a href='Cricket Home.php'><span>Upcoming</span></a></li>
		               <li class='last'><a href='details2'><span>Completed</span></a></li>
		            </ul>
		         </li>
		         </li>
		      </ul>
		   </li>
		   <li class='active has-sub'><a href='../football/carousel/footballHome.html'><span>Football</span></a>
		      <ul>
		         <li class='has-sub'><a href='#'><span>Live</span></a>
		            <ul>
		               <li><a href='#'><span>Highlights</span></a></li>
		               <li class='last'><a href='#'><span>News</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>Recent Matches</span></a>
		            <ul>
		               <li><a href='#'><span>Results</span></a></li>
		               <li class='last'><a href='#'><span>Points Table</span></a></li>
		            </ul>
		         </li>
		          <li class='has-sub'><a href='#'><span>Upcoming Matches</span></a>
		         </li>
		      </ul>
		   </li>
		    <li class='last'><a href='#'><span>Entertainment News</span></a></li>
		    <li class='last'><a href='#'><span>Contact</span></a></li>
		    <li class='last'><a href='#'><span>Help</span></a></li>
		</ul>
	</div>


<div class="clear"></div>
<div class="row1">

	<div id='cssmenu' class="col-3 col-m-3 col-sm-2 sidenav leftmenu">
		<ul>
		   <li class='active'><a href='Cricket Home.php'><span>Live</span></a></li>
		   <li class='has-sub'><a href='International.php'><span>International</span></a>
		      <ul>
		         <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details1'><span>News</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details3.php'><span>News</span></a></li>
		            </ul>
		         <li><a href='#'><span>Upcoming</span></a>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='Domestic.php'><span>Domestic</span></a>
		      <ul>
		         <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details1'><span>News</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details3.php'><span>News</span></a></li>
		            </ul>
		         <li><a href='#'><span>Upcoming</span></a>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='T20League.php'><span>T20 League</span></a>
		      <ul>
		         <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details1'><span>News</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details3.php'><span>News</span></a></li>
		            </ul>
		         <li><a href='#'><span>Upcoming</span></a>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='T10League.php'><span>T10 League</span></a>
		      <ul>
		         <li class='has-sub'><a href='Cricket Home Live2.php'><span>Live</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details1'><span>News</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='Cricket Home Live1.php'><span>Recent</span></a>
		            <ul>
		               <li><a href='score.php'><span>Scorecard</span></a></li>
		               <li class='last'><a href='details3.php'><span>News</span></a></li>
		            </ul>
		         <li><a href='#'><span>Upcoming</span></a>
		         </li>
		      </ul>
		   </li>
		</ul>
	</div>	
<div class="col-9 col-m-9 row polaroid" style="margin-left: 10px;margin-right: 10px;">
		<?php

		$d=date("l");
		$d="Saturday";
		$linkData = mysqli_query($mysqli, "SELECT link FROM highlights WHERE day='$d';"); 
		$link="";
		while ($res=mysqli_fetch_array($linkData)) {
      		$link=$res['link'];
    	}
		?>
		<div id="heading" class="col-9 col-m-12 mainhigh1 border" ><iframe width="100%" height=450px allowfullscreen="true" frameborder="1" src= <?php echo $link."?autoplay=0";?> >
									</iframe>
		<div class="writer" height=40px width=50px><b>Latest Highlights about <?php echo $d;?></b></div>
		</div>

		<div class="col-3 col-m-12">
			<div id="heading" class="col-12 col-m-6 "><a href='details1.php'><img src="https://pbs.twimg.com/media/DCnCB9LW0AAcRGV.jpg" height="100%" width="100%">​​</a>
			<div class="writer"><p>Amir strikes again, Take Kohli two times in a row..</p></div></div>
			<div id="heading" class="col-12 col-m-6 "><a href='details2.php'><img src="https://i.ndtvimg.com/i/2017-09/david-warner-afp_806x605_61506498506.jpg" height="100%" width="100%"></a>
			<div class="writer"><p>Warner is back to play in leagues but still out from international cricket..</p></div></div>
			<div id="heading" class="col-12 col-m-6 "><a href='details3.php'><img src="images\image3.png" height="100%" width="100%"></a>
			<div class="writer"><p>The Troll's tongue in Hardanger, Norway</p></div></div>
		</div>

</div>
</div>

<hr>

<div class="row polaroid" style="margin-left: 10px;margin-right: 10px;">
	<h1>Live Matches</h1>
	<div id="heading" class="col-4 col-m-6 "><a href='Cricket Home Live1.php'><img src="images\amir.jpg" height="100%" width="100%"></a>
				<div class="writer">
    					<p>Amir has been continuously playing for Pakistan in all formats of the game, ever since making a return from his five-year ban for his alleged involvement in various offences of corrupt behaviour relating to the Lord`s Test between England and Pakistan in August 2010 by the independent Anti-Corruption Tribunal in February 2011.</p>
  				</div>
  	</div>
	<div id="heading" class="col-4 col-m-6 "><a href='Cricket Home Live2.php'><img src="images\kohli.jpg" height="100%" width="100%"></a>
				<div class="writer"><p>Fielding deep at the square leg boundary, Boult caught Virat Kohli’s perfectly timed shot with one hand as he dove backwards and stopped just inches before the boundary line. So good was the catch, that even Kohli, who was confident that he had just clobbered another maximum, could not believe what he had seen before walking off shell shocked. </p></div>
	</div>
	<div id="heading" class="col-4 col-m-12 "><a href='Cricket Home Live3.php'><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz90zV02jTHxD1Q9Ug0DZsb_rWRStw9xDCO-IrfEQrIzQRSPuE" alt="Pineapple" width="100%" height="100%"></a>
				<div class="writer">
    					<p>Earlier, it was the Rishabh Pant show for Delhi which helped them reach what looked like an above par score on what was a slow and a turning pitch. Gambhir's poor run continued with the bat as he was dismissed after an ugly innings, scoring just 3. Roy didn't last long either, with Chahal picking him up for 5.And again when he will return back no one want to lose him again.</p>
  				</div>
	</div>
</div>

<hr>

<div class="row polaroid" style="margin-left: 10px;margin-right: 10px;">
		<h1>Recently Finished</h1>
		<div id="heading" class="col-6 col-m-12"><a href='details3.php'><img src="https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/11/03/Pictures/cricket-sri-ind_6e89b4d8-c03f-11e7-80b5-65d6945df80e.jpg" height="100%" width="100%"></a>
			<div class="writer"><p>Kohli finished it with a maximum, Norway</p></div>
		</div>
		<div class="col-6 col-m-12">
			<div id="heading" class="col-6 col-m-6"><a href='details1.php'><img src="http://www.trendrr.net/wp-content/uploads/2017/04/AB-De-Villiers-Top-Famous-Richest-Cricketers-in-The-World-in-2017.jpg" height="100%" width="100%"></a>
			<div class="writer"><p>Coolest crickter anounces his retirement. </p></div></div>
			<div id="heading" class="col-6 col-m-6"><a href='details3.php'><img src="http://images.indianexpress.com/2017/09/kuldeep-759.jpg" height="100%" width="100%"></a>
			<div class="writer"><p>The skipper pressurize Bangladesh to runs low.</p></div></div>
			<div id="heading" class="col-6 col-m-6"><a href='details1.php'><img src="https://www.trendrr.net/wp-content/uploads/2017/07/Sana-Mir-Top-Most-Famous-Beautiful-Women-Cricketers-in-The-World-2017.jpg" height="100%" width="100%"></a>
			<div class="writer"><p>Pakistani Women's team captain , Pakistan</p></div></div>
			<div id="heading" class="col-6 col-m-6"><a href='details2.php'><img src="https://i.ytimg.com/vi/058eBsIjQxo/maxresdefault.jpg" height="100%" width="100%"></a>
			<div class="writer"><p>Australian Women's U19 champion</p></div></div>
		</div>
	
</div>

<div class="clearleft"></div>
<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="subscribe-form">   
				    <form action="subscribe.php" method="post" class="group"> 
				    
				    
				    <input type="text" name="username" class="email" id="mc-email" placeholder="Name" required=""><br/>

				    
				    <input type="email" name="email" class="email" id="mc-email" placeholder="Email Address" required=""><br/>

				    <button  type="submit" name="save">Subscribe</button>
				    </form>
				</div> <!-- end s-footer__subscribe -->
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="#"> SPORTIFY </a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>