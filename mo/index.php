<?php
	require_once('includes/config.php');
	//query the db and store the results
	//in thr $myData variable
	$sql = 'SELECT * FROM site_content';
	$myData = $db->query($sql);
	
	while($row = $myData->fetch_assoc())
	{
		
		if($row['view'] =='n')
		{
			continue;
		}
		
		if($row['putt_score'] =='puttputt')
		{
			$intro = $row['content'];
		}
		
		if($row['section_name'] =='blurb')
		{
			$blurb = $row['content'];
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Man Olympics</title>

<meta name="viewport" content="device-width, initial-scale=1, maximum-scale=1"/>
<link rel="apple-touch-icon" href="i/appicon.png" type="" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="apple-touch-startup-image" href="i/splash.png" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link href="c/main.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="j/main.js" type="text/javascript"></script>

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
	<script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body>

<div id="fb-root" data-role="button"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '187027991473228', // App ID
      channelUrl : '//jamescutchens.com/mo/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional init code here
	// Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
 };

// Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>

	<!-- Page: Home  -->
	<div id="home" 
    class="screen" 
    data-role="page" 
    data-title="Man Olympics: Home">
	
    <fb:login-button show-faces="false" autologoutlink="true" width="200px" max-rows="1"></fb:login-button>
   
    <div data-role="content">
   		<img src="i/logo.png" class="main_logo" alt="Man Olympic's Logo"/>
<!-- Main Nav -->  
	      
	<div data-role="controlgroup">
    	<a href="#loginpop"
            data-role="button" 
            data-icon="arrow-r" 
            data-rel="dialog" 
            data-iconpos="right"
        >My Profile</a>
        <a href="#checkScores" 
           	data-role="button" 
            data-icon="arrow-r" 
            data-iconpos="right"
            data-transition="flip"
        >Live Scores</a>
        <a href="#hof" 
            data-role="button" 
            data-icon="grid" 
            data-iconpos="right"
            data-transition="flip"
        >Hall of Fame</a>
        <a href="#photospage" 
            data-role="button" 
            data-icon="mo_photo" 
            data-iconpos="right"
            data-transition="flip"
        >Photos</a>
        <a href="#events" 
            data-role="button" 
            data-icon="arrow-r" 
            data-iconpos="right"
        >Events & Rules</a>
        </div><!-- End controlgroup -->
</div><!-- content -->
<footer data-role="footer" 
data-theme="a">
<p>&copy; Man Olympcs 2013</p>
</footer>
</div><!-- ************************************* End Home Page ******************************* -->

<!-- Events Page -->
        <div id="events" 
        class="screen" 
        data-role="page"
        data-title="Events">
        <header data-role="header" 
        data-position="fixed">
        <h1>Main Events</h1>
            <a href="#home" 
            data-role="button" 
            data-transition="pop" 
            data-icon="back"  
            class="ui-btn-right"
            >Back</a>
         </header>
            <div data-theme="a" 
            data-role="content">
            	<div data-role="collapsible-set">
            		<div data-role="collapsible" data-collapsed="true">
                	<h1>Putt Putt</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Horse Shoes</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Home Run Derby</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Free Throws</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Washers</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Corn Hole</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Darts</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                	<div data-role="collapsible">
                	<h1>Football Toss</h1>
                	<p>10 putts</p>
                	<p>Scoring:</p>
                		<ul>
                			<li>In the hole= 30pts</li>
                			<li>In the 1st circle= 20pts</li>
                			<li>In the 2nd circle= 10pts</li>
                		</ul>
                	<p>If it lands on the line, it counts for the higher points value.
                (Enhancement shots will be from the same distance for the same point values and will be added to your score.)</p>
                	</div>
                </div><!-- End Collapse Set -->
    		</div><!-- End events content  -->
        <footer data-role="footer"
        data-position="fixed" 
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
        </div><!-- ************************************* End Events Page ******************************* -->

<!-- Hall of Fame Page -->
    	<div id="hof"
        data-title="Hall of Fame" 
        data-role="page"
        class="screen">
    	<header data-role="header" 
        data-position="fixed">
        	<h1>Champions</h1>
        <a href="#home" 
        data-role="button" 
        data-transition="pop" 
        data-icon="back"  
        class="ui-btn-right"
        >Back</a>
        </header>
        <div data-role="content">
        
<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/images.jpg" alt="2013" title="2013" id="wows1_0"/>Winner of Darts</li>
<li><img src="data1/images/logo.jpg" alt="Logo" title="Logo" id="wows1_1"/>Man Olympics Logo</li>
<li><img src="data1/images/splash.jpg" alt="Test" title="Test" id="wows1_2"/>Splash Page</li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="2013"><img src="data1/tooltips/images.jpg" alt="2013"/>1</a>
<a href="#" title="Logo "><img src="data1/tooltips/logo.jpg" alt="Logo "/>2</a>
<a href="#" title="Test "><img src="data1/tooltips/splash.jpg" alt="Test "/>3</a>
</div></div>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1//wowslider.js"></script>
	<script type="text/javascript" src="engine1//script.js"></script>
<!-- End WOWSlider.com BODY section -->
        
       	</div><!-- End pg1 content  -->
        <footer data-role="footer" 
        data-theme="a" 
        data-position="fixed">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
	</div><!-- ************************************* End HOF Page ******************************* -->

<!-- Photos Page -->
   	<div id="photospage" 
        data-title="Photos"
        data-role="page"
        class="screen"
        >
    	<header data-role="header" data-position="fixed">
        	<h1>Man Olympics of Ga</h1>
        <a href="#home" 
        data-role="button" 
        data-transition="pop" 
        data-icon="back"  
        class="ui-btn-right"
        >Back</a>
        </header>
        <div data-role="content">
        
			<div class="ui-grid-c" id="photolist">
        	</div><!-- grid -->
        </div><!-- End pg1 content  -->
        <footer data-role="footer" 
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
	</div><!-- ************************************* End Photos Page ******************************* -->
<!-- Gallery -->
		<div data-role="page"
            id="showphoto">
            <div data-role="header"
            data-position="fixed"
            data-theme="a">
            <a href="#photospage"
                data-transition="fade"
                data-icon="back"
                data-iconpos="notext"
                >Photos</a>
             <h1>Photos</h1>
             </div><!-- header -->
             <div data-role="content">
                <div id="myphoto"></div>
             </div><!-- content -->
         </div><!-- *************************** End Gallery Page *************************** -->


<!-- Check Scores Page -->
    <div id="checkScores"
    	data-title="Scores" 
    	data-role="page">
    	<header data-role="header">
        <h1>Man Olympics of Ga</h1>
        <a href="#home" 
        data-role="button" 
        data-transition="pop" 
        data-icon="back" 
         
        class="ui-btn-right"
        >Back</a>
        </header>
        <div data-role="content">
        
        <?php echo @$intro; ?> 
        
        
        	
        </div><!-- End pg1 content  -->
        <footer data-role="footer"
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
     </div><!-- ************************************* End Check Scores Page ******************************* -->

<!-- Log In Page -->
    <div id="loginpop" 
    data-role="page">
    	<header data-role="header">
        	<h1>Log-in</h1>
        </header>
        	<div data-role="content">
            
        		
            
            	<form method="" action="POST">
                	<label for="name">Your Name:</label>
                    <input type="text" name="name" id="name" value="" placeholder="Enter name here">
                    
                    <label for="age">Your Age:</label>
                    <input type="number" name="age" id="age" value="" placeholder="Input Age">
                    
                    <label for="email">Your Email:</label>
                    <input type="email" name="email" id="email" value="" placeholder="jimmyhoffa@yahoo.com">
                    
                    <div data-role="fieldcontain">
                      <label for="flipswitch">Email Notifications:</label>
                      <select name="flipswitch" id="flipswitch" data-role="slider">
                        <option value="off">Off</option>
                        <option value="on">On</option>
                      </select>
                    </div>
                    
                    <div data-role="fieldcontain">
                      <label for="textarea">Questions / Comments:</label>
                      <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
                    </div>
            </form>
            
            <a href="#loggedin" data-role="button">Submit</a>
        
        	</div><!-- End pg2 content -->
        	<footer 
            data-role="footer" 
            data-theme="a">
        	<p>&copy; Man Olympics 2013</p>
        	</footer>
       </div><!-- ************************************* End Log In Page ******************************* -->

<!-- Page Four - Logged In -->
    <div id="loggedin" 
    data-role="page">
    	<header data-role="header">
        <h1>Man Olympics of Ga</h1>
        <a href="#home" 
        data-role="button" 
        data-transition="pop" 
        data-icon="home"  
        class="ui-btn-right"
        >Home</a>
        </header>
        <div data-role="content">
        <div data-role="controlgroup">
      		<div class="ui-grid-a">
                <div class="ui-block-a">
                    <a href="#register" 
                    data-role="button" 
                    data-rel="dialog"
                    data-icon="plus"
                    data-iconpos="top"
                    >Register for Event</a>
              	</div>
                <div class="ui-block-b">
                	<a href="#scores" 
                    data-role="button"
                    data-icon="plus"
                    data-iconpos="top"
                    >Scores</a>
                </div>
                <div class="ui-block-c">
                	<a href="#trophies" 
                    data-role="button"
                    data-icon="plus"
                    data-iconpos="top"
                    >Trophies</a>
                </div>
                <div class="ui-block-d">
                	<a href="#profile" 
                    data-role="button"
                    data-icon="plus"
                    data-iconpos="top"
                    >Profile</a>
         		</div>
         </div>
         </div><!-- End controlgroup -->
         </div><!-- End loggedin content -->
         
         
         <!-- Facebook Login API DIV -->
         <div id="fb-root"></div>
         
        <footer data-role="footer"
        data-position="fixed" 
        data-theme="a">
        <nav data-role="navbar">
            <ul>
            	<li><a href="#" data-icon="plus" data-rel="dialog">One</a></li>
                <li><a href="#" data-icon="minus" data-rel="dialog">Two</a></li>
                <li><a href="#" data-icon="check" data-rel="dialog">Three</a></li>
                <li><a href="#" data-icon="grid" data-rel="dialog">Four</a></li>
            </ul>
         </nav>
        <p>&copy; Man Olympics 2013</p>
        </footer>
    </div><!-- ************************************* End Logged In Page ******************************* -->
    
<!-- Register Page -->
    <div id="register" 
    data-role="page">
    	<header data-role="header">
        <h1>Registration</h1>
        
        </header>
        <div data-role="content">
        	<a href="#loggedin" data-role="button">Same as last year!</a>
            
            	<form method="get" action="">
                	<label for="name">Your Name:</label>
                    <input type="text" name="name"  value="" placeholder="Enter name here">
                    
                    <div data-role="fieldcontain">
                      <label for="flipswitch">Beer Pass?:</label>
                      <select name="flipswitch"  data-role="slider">
                        <option value="off">Yes</option>
                        <option value="on">No</option>
                      </select>
                    </div>
                    
                    <div data-role="fieldcontain">
                      <label for="flipswitch">Meal Pass?:</label>
                      <select name="flipswitch"  data-role="slider">
                        <option value="off">Yes</option>
                        <option value="on">No</option>
                      </select>
                    </div>
                    
                    <div data-role="fieldcontain">
                      <label for="flipswitch">T-shirt?:</label>
                      <select name="flipswitch" data-role="slider">
                        <option value="off">Yes</option>
                        <option value="on">No</option>
                      </select>
                    </div>
                    
                    <div data-role="fieldcontain">
                      <label for="textarea">What size & how many:</label>
                      <textarea cols="40" rows="8" name="textarea"></textarea>
                    </div>
            </form>
          
        </div><!-- End register content  -->
        <a href="#loggedin" 
        data-role="button"
        >Submit!</a>
        <footer data-role="footer" 
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
	</div><!-- ************************************* End Register Page ******************************* -->
    
<!-- Score Page -->
    <div id="scores" data-role="page">
    	<header data-role="header">
        <h1>Man Olympics of Ga</h1>
        <a href="#loggedin" 
        data-role="button" 
        data-icon="back"  
        class="ui-btn-right"
        >Back</a>
        </header>
        <div data-role="content">
        <p>This is the score page</p>
        
        </div><!-- End pg1 content  -->
        <footer data-role="footer" 
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
	</div><!-- ************************************* End Scores Page ******************************* -->

<!-- Trophies Page -->
    <div id="trophies" 
    data-role="page">
    	<header data-role="header">
        <h1>Man Olympics of Ga</h1>
        <a href="#loggedin" 
        data-role="button" 
        data-icon="back" 
        data-iconpos="notext" 
        class="ui-btn-right"
        >Back</a>
        </header>
        <div data-role="content">
        <p>This is the trophies page</p>
        
        </div><!-- End pg1 content  -->
        <footer data-role="footer" 
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
	</div><!-- ************************************* End Trophies Page ******************************* -->
 
<!-- Profile Page -->
    <div id="profile" 
    data-role="page">
    	<header data-role="header">
        <h1>Man Olympics of Ga</h1>
        <a href="#loggedin" 
        data-role="button" 
        data-icon="back" 
        data-iconpos="notext" 
        class="ui-btn-right"
        >Back</a>
        </header>
        <div data-role="content">
        <p>This is the profile page</p>
        
        </div><!-- End pg1 content  -->
        <footer data-role="footer" 
        data-theme="a">
        <p>&copy; Man Olympcs 2013</p>
        </footer>
	</div><!-- ************************************* End Profile Page ******************************* -->
	
<!-- Flickr JSON API -->
<script src="http://api.flickr.com/services/feeds/photos_public.gne?
id=73845487@N00&format=json&tags=viewsource"
type="text/javascript"></script>

</body>
</html>
