<html lang="en">
<head>
  <title>JamForest</title>
  <meta charset="utf-8">
	<meta name="keywords" content="Jam,Music,Musician,Ireland,jamforest,Band,group,concert">
	<meta name="author" content="Keely Ryan for JamForest">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.localscroll.js" type="text/javascript"></script>
  <script src="jquery.scrollTo.js" type="text/javascript"></script>

  <link rel="icon" href="images/blackwhite.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//db.onlinewebfonts.com/c/3f086dbc376893f56b4a9c4d3cac5df9?family=Hiragino+Sans+GB" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/81b92d5664/UntitledProject/style.css">
	<link rel="stylesheet" href="stylesheet.css">
</head>

<body>
  <!--Section 1, landing screen start of container-->
	<div id="section1">
	<div class="container-fluid">
		<div class="row">
      <!--Social media -->
			<div class="col-sm-12">
			<a href="https://www.facebook.com/JamForestApp/" style="color:white"><i class= "fa fa-facebook"></i></a>
			<a href="https://twitter.com/jamforestapp" style="color:white"><i class= "fa fa-twitter"></i></a>
			<a href="https://webgram.co/jamforestapp" style="color:white"><i class= "fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCiojt8k1cYBUqkl0pn1o3Zg" style="color:white"><i class= "fa fa-youtube"></i></a>
      <a href="http://jamforestapp.tumblr.com/" style="color:white"><i class= "fa fa-bold"></i></a>
      <a href="https://open.spotify.com/user/jamforest" style="color:white"><i class= "fa fa-spotify"></i></a>
      <a href="https://plus.google.com/u/0/117675732442145087177" style="color:white"><i class="fa fa-google-plus"></i></a>
	</div></div>
    <div class="row"><div class="hidden-xs col-sm-12 text-center"> </br></br></br></div></div>
<!-- Logo -->
		<div class="row" id="flex1">
		<div class="col-xs-12 col-sm-10">
	   <img src="images/logoCrop.jpg" alt="JamForest logo" id="topLogo">
</div>

<!-- Navigation -->
<div class="hidden-xs col-sm-2">
	<div class="nav">
  </br>
  </br>
  </br>
	<div class="secWrap"><a href="#section1" class="class1a">&#9835;</a> <a class="secDesc"><small>Here</a></small></div>
	<div class="secWrap"><a href="#section2" class="class1b">&#9835;</a> <a class="secDesc"><small>Splainer Vid</a></small></div>
	<div class="secWrap"><a href="#section3" class="class1c">&#9835;</a> <a class="secDesc"><small>Jam<b>Forest</b></small></a></div>
	<div class="secWrap"><a href="#section4" class="class1d">&#9835;</a> <a class="secDesc"><small>Line-up</a></small></div>
  <div class="secWrap"><a href="#section5" class="class1e">&#9835;</a> <a class="secDesc"><small>Jobs</a></small></div>
  <div class="secWrap"><a href="#section6" class="class1f">&#9835;</a> <a class="secDesc"><small>News</a></small></div>
</div>
</div></div>
<div class="row"><div class="col-sm-12 text-center">
<p>Grow Your Music Network</p>
<button type="button" class="btn btn-default btn-sm" center data-toggle="modal" data-target="#myModal">Join Wait List</button>
</div></div>
<!-- Modal to subscribe to newsletter-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal form content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Join the Wait List!</h4>
        <h5>Join our wait list so you'll be first to hear when we launch!
           <p>Secret access to music events we throw in the coming year, become one of our beta testers so you can have your say in  Jam<b>Forest</b> 1.0, monthly comps too!</p>
           Cheers for being sound!!!</h5>
      </div>
      <div class="modal-body">
        <?php
        $action=$_REQUEST['action'];
        if ($action=="")    /* display the contact form */
            {
            ?>
            <form  action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="submit">
            Your name:<br>
            <input name="name" type="text" value="" size="30"/><br>
            Your email:<br>
            <input name="email" type="text" value="" size="30"/><br>
            <input type="submit" value="Send email"/>
            </form>
            <?php
            }
        else                /* send the submitted data */
            {
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $message="Please add me to the JamForest wait list.";
            if (($name=="")||($email=="")||($message==""))
                {
        		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        	    }
            else{
        	    $from="From: $name<$email>\r\nReturn-path: $email";
                $subject="Wait list request via website";
        		 mail("grace@jamforest.com", $subject, $message, $from);
        		echo "Email sent!";
        	    }
            }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div> </div>
</div> </div>
<!--end of section1 -->

<!--Section 2-->
<div id="section2">
<div class="container-fluid">
  <div class="row">
    <!--Social media -->
    <div class="hidden-xs col-sm-12">
    <a href="https://www.facebook.com/JamForestApp/" style="color:black"><i class= "fa fa-facebook"></i></a>
    <a href="https://twitter.com/jamforestapp" style="color:black"><i class= "fa fa-twitter"></i></a>
    <a href="https://webgram.co/jamforestapp" style="color:black"><i class= "fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCiojt8k1cYBUqkl0pn1o3Zg" style="color:black"><i class= "fa fa-youtube"></i></a>
    <a href="http://jamforestapp.tumblr.com/" style="color:black"><i class= "fa fa-bold"></i></a>
    <a href="https://open.spotify.com/user/jamforest" style="color:black"><i class= "fa fa-spotify"></i></a>
    <a href="https://plus.google.com/u/0/117675732442145087177" style="color:black"><i class="fa fa-google-plus"></i></a>
</div></div>
  <div class="row"><div class="col-sm-12"></div></div>

  <div class="row" id="flex2">
    <div class="hidden-xs col-sm-1"></div>
  <div class="col-xs-12 col-sm-9">
    <div class="embed-responsive embed-responsive-16by9">
   <iframe src="https://www.youtube.com/embed/NiEERhAVjNI" frameborder="0" allowfullscreen></iframe></div>
</div>


<!--Navigation -->
<div class="hidden-xs col-sm-2">
<div class="nav">

<div class="secWrap"><a href="#section1" class="class2a">&#9835;</a> <a class="secDesc"><small>Top</a></small></div>
<div class="secWrap"><a href="#section2" class="class2b">&#9835;</a> <a class="secDesc"><small>Here</a></small></div>
<div class="secWrap"><a href="#section3" class="class2c">&#9835;</a> <a class="secDesc"><small>Jam<b>Forest</b></small></a></div>
<div class="secWrap"><a href="#section4" class="class2d">&#9835;</a> <a class="secDesc"><small>Line-up</a></small></div>
<div class="secWrap"><a href="#section5" class="class2e">&#9835;</a> <a class="secDesc"><small>Jobs</a></small></div>
<div class="secWrap"><a href="#section6" class="class2f">&#9835;</a> <a class="secDesc"><small>News</a></small></div>
</div>
</div> </div>
</div> </div>

<!--end of section2 -->

<div id="section3">
<div class="container-fluid">
  <div class="row">
    <!--Social media -->
    <div class="col-sm-12">
      <a href="https://www.facebook.com/JamForestApp/" style="color:white"><i class= "fa fa-facebook"></i></a>
			<a href="https://twitter.com/jamforestapp" style="color:white"><i class= "fa fa-twitter"></i></a>
			<a href="https://webgram.co/jamforestapp" style="color:white"><i class= "fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCiojt8k1cYBUqkl0pn1o3Zg" style="color:white"><i class= "fa fa-youtube"></i></a>
      <a href="http://jamforestapp.tumblr.com/" style="color:white"><i class= "fa fa-bold"></i></a>
      <a href="https://open.spotify.com/user/jamforest" style="color:white"><i class= "fa fa-spotify"></i></a>
      <a href="https://plus.google.com/u/0/117675732442145087177" style="color:white"><i class="fa fa-google-plus"></i></a>
</div></div>
  <div class="row"><div class="col-sm-12"></div></div>

  <div class="row" id="flex3">
  <div class="hidden-xs hidden-sm col-md-1"> </div>
  <div class="hidden-xs hidden-sm col-md-5 text-center">
    <h3>Jam<b>Forest</b>...</h3>
    <p> a global music platform for musicians to meet, collaborate and grow their music network. Taking the success factors behind dating apps and applying them to the music world connecting musicians globally and locally.</p>

    <p>Whether you want to find someone to jam with or find musicians to create a band or fill a band position, Jam<b>Forest</b> can help. All you need to do is enter your credentials, set your search preferences such as instrument, genre, age, gender and distance. Our algorithm returns the matched profiles for you, listen to their SoundCloud account, watch their YouTube videos, choose a profile that stands out to you and message them.</p>

    <p>Find musicians to form your band or organise a jam: guitarists, vocalists, bassists, drummers, and much more. Post your digital music profile and connect with other musicians, no matter where you are.</p>

    <p>Coming to the App Store in 2017.</p>

    <h5>FEATURES</h6>

    <p>• Explore profiles of other musicians.
    • Create your digital music profile and highlight your skills, instruments, influences and interests.
    • Invite and connect with other musicians and share personal information.
    • Connect your SoundCloud and YouTube account and make your music profile stand out.</p>
    <button type="button" class="btn btn-default btn-sm" center data-toggle="modal" data-target="#myModal">Join the Wait List</button>
    </div>
    <div class="hidden-md hidden-lg col-10-sm col-12-xs">
      <h3>Jam<b>Forest</b>...</h3>
    <p> a global music platform for musicians to meet, collaborate and grow their music network. Taking the success factors behind dating apps and applying them to the music world connecting musicians globally and locally.</p>
    <a href="about.html" class="class1">More...</a>
    </div>
<div class="hidden-xs hidden-sm col-md-4 text-center">
  <div id="myCarousel" data-ride="carousel" style="width: 250px">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/iPhone6White.png" alt="Logo on iPhone">
      </div>

      <div class="item">
        <img src="images/iPhone6White (1).png" alt="Find Musicians">
      </div>

      <div class="item">
        <img src="images/iPhone6White (3).png" alt="Nutini">
      </div>

      <div class="item">
        <img src="images/iPhone6White (4).png" alt="Search">
      </div>

      <div class="item">
        <img src="images/iPhone6White (2).png" alt="Ezra">
      </div>

    </div>

  </div>
</div>
  <!-- Navigation -->
  <div class="hidden-xs col-sm-2">
  <div class="nav">

  <div class="secWrap"><a href="#section1" class="class1a">&#9835;</a> <a class="secDesc"><small>Top</a></small></div>
  <div class="secWrap"><a href="#section2" class="class1b">&#9835;</a> <a class="secDesc"><small>Splainer Vid</a></small></div>
  <div class="secWrap"><a href="#section3" class="class1c">&#9835;</a> <a class="secDesc"><small>Here</b></small></a></div>
  <div class="secWrap"><a href="#section4" class="class1d">&#9835;</a> <a class="secDesc"><small>Line-up</a></small></div>
  <div class="secWrap"><a href="#section5" class="class1e">&#9835;</a> <a class="secDesc"><small>Jobs</a></small></div>
  <div class="secWrap"><a href="#section6" class="class1f">&#9835;</a> <a class="secDesc"><small>News</a></small></div>
  </div>
</div> </div>
</div> </div>
<!-- End of Section3 -->

<div id="section4">
<div class="container-fluid">
  <div class="row">
    <!--Social media -->
    <div class="hidden-xs col-sm-12">
    <a href="https://www.facebook.com/JamForestApp/" style="color:black"><i class= "fa fa-facebook"></i></a>
    <a href="https://twitter.com/jamforestapp" style="color:black"><i class= "fa fa-twitter"></i></a>
    <a href="https://webgram.co/jamforestapp" style="color:black"><i class= "fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCiojt8k1cYBUqkl0pn1o3Zg" style="color:black"><i class= "fa fa-youtube"></i></a>
    <a href="http://jamforestapp.tumblr.com/" style="color:black"><i class= "fa fa-bold"></i></a>
    <a href="https://open.spotify.com/user/jamforest" style="color:black"><i class= "fa fa-spotify"></i></a>
    <a href="https://plus.google.com/u/0/117675732442145087177" style="color:black"><i class="fa fa-google-plus"></i></a>
</div></div>
<div class="row">
<div class="hidden-xs col-sm-12 text-center"> </br></br></div>
</div>
<div class="row">
<div class="col-sm-12 text-center"><h2>Jam<b>Forest</b> line-up</h2></div>
</div>
<div class="row"><div class="hidden-xs col-sm-12 text-center"> </br></div></div>
<!-- Profile pix on pcs -->
<div class="row" id="flex4">
<div class="col-xs-2 text-center"> </div>

<div class="hidden-xs col-sm-2 text-center">
<a href= "https://ie.linkedin.com/in/gracetooher"> <img src="images/Grace.png" class="img-responsive" alt="Grace" id="Grace"></a>
<p>Grace Tooher</p><p>Founder/CEO/CTO</p></div>

<div class="hidden-xs col-sm-2 text-center">
<a href= "https://ie.linkedin.com/in/marymb">
<img src="images/MazaFin.png" class="img-responsive" alt="Mary" id="Mary"></a>
<p>Mary Brennan</p><p>Chief of Design</p></div>

<div class="hidden-xs col-sm-2 text-center">
  <a href= "https://ie.linkedin.com/in/gillianoryan">
<img src="images/gil.png" class="img-responsive" alt="Gil" id="Gil"></a>
<p>Gillian Ryan</p><p>Chief of Marketing</p></div>

<div class="hidden-xs col-sm-2 text-center">
  <a href= "https://ie.linkedin.com/in/keely-ryan-1a992680">
<img src="images/keels.jpg" class="img-circle" alt="Keely" id="Keely"></a>
<p>Keely Ryan</p><p>Web Developer</p></div>


<div class="hidden-xs col-sm-2">
<div class="nav">
  </br>
<div class="secWrap"><a href="#section1" class="class2a">&#9835;</a> <a class="secDesc"><small>Top</a></small></div>
<div class="secWrap"><a href="#section2" class="class2b">&#9835;</a> <a class="secDesc"><small>Splainer Vid</a></small></div>
<div class="secWrap"><a href="#section3" class="class2c">&#9835;</a> <a class="secDesc"><small>Jam<b>Forest</b></small></a></div>
<div class="secWrap"><a href="#section4" class="class2d">&#9835;</a> <a class="secDesc"><small>Here</a></small></div>
<div class="secWrap"><a href="#section5" class="class2e">&#9835;</a> <a class="secDesc"><small>Jobs</a></small></div>
<div class="secWrap"><a href="#section6" class="class2f">&#9835;</a> <a class="secDesc"><small>News</a></small></div>
</div>
</div> </div>


<div class="row">
  <div class="col-xs-6 hidden-sm hidden-md hidden-lg text-center">
  <a href= "https://ie.linkedin.com/in/gracetooher">
  <img src="images/Grace.png" class="img-circle" alt="Grace" id="Grace"></a>
  </br><p>Grace</p><p>Founder</p><p>CTO/CEO</p> </div>

  <div class="col-xs-6 hidden-sm hidden-md hidden-lg text-center">
    <a href= "https://ie.linkedin.com/in/marymb">
    <img src="images/MazaFin.png" class="img-circle" alt="Mary" id="Mary"></a>
  </br><p>Mary</p><p>COD</p></div>
</div>
<div class="row">
  <div class="col-xs-6 hidden-sm hidden-md hidden-lg text-center">
    <a href= "https://ie.linkedin.com/in/gillianoryan">
    <img src="images/gil.png" class="img-circle" alt="Gil" id="Gil"></a>
  </br><p>Gillian</p><p>COM</p> </div>

  <div class="col-xs-6 hidden-sm hidden-md hidden-lg text-center">
    <a href= "https://ie.linkedin.com/in/keely-ryan-1a992680">
    <img src="images/keels.jpg" class="img-circle" alt="Keely" id="Keely"></a>
  </br><p>Keely</p><p>Web</p></div>
</div>

</div>
</div> </div>
<!-- End of section 4 -->

<div id="section5">
<div class="container-fluid">
  <div class="row">
    <!--Social media -->
    <div class="col-sm-12">
      <a href="https://www.facebook.com/JamForestApp/" style="color:white"><i class= "fa fa-facebook"></i></a>
			<a href="https://twitter.com/jamforestapp" style="color:white"><i class= "fa fa-twitter"></i></a>
			<a href="https://webgram.co/jamforestapp" style="color:white"><i class= "fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCiojt8k1cYBUqkl0pn1o3Zg" style="color:white"><i class= "fa fa-youtube"></i></a>
      <a href="http://jamforestapp.tumblr.com/" style="color:white"><i class= "fa fa-bold"></i></a>
      <a href="https://open.spotify.com/user/jamforest" style="color:white"><i class= "fa fa-spotify"></i></a>
      <a href="https://plus.google.com/u/0/117675732442145087177" style="color:white"><i class="fa fa-google-plus"></i></a>
</br></div></div>
<div class="row" id="flex5">
  <div class="hidden-xs col-sm-1">
  </div>
  <div class="hidden-xs col-sm-9 text-center">
  </br></br>
<h3>Want to join the Jam<b>Forest</b> team?</h3>
<br><p>Unfortunately, we do not have any vacancies at the moment, <br> but keep an eye here and on our <a href="https://www.linkedin.com/company-beta/11039854/">LinkedIn </a>to see when we do.</p>
<img src="images/blackwhite.jpg" alt="JamForest logo" width="25%;">
<h6>Grow Your Music Network</h6>
</div>
<div class="col-xs-12 hidden-sm hidden-md hidden-lg text-center">
</br>
<h3>Want to join the Jam<b>Forest</b> team?</h3>
<br><p>Unfortunately, we do not have any vacancies at the moment, <br> but keep an eye here and on our <a href="https://www.linkedin.com/company-beta/11039854/">LinkedIn </a>to see when we do.</p>
<img src="images/blackwhite.jpg" alt="JamForest logo" width="10%;">
<h6>Grow Your Music Network</h6>
</div>
<!--Navigation -->
<div class="hidden-xs col-sm-2">
<div class="nav">
</br></br></br></br>
<div class="secWrap"> <a href="#section1" class="class1a">&#9835;</a> <a class="secDesc"><small>Top</a></small></div>
<div class="secWrap"> <a href="#section2" class="class1b">&#9835;</a> <a class="secDesc"><small>Splainer Vid</a></small></div>
<div class="secWrap"> <a href="#section3" class="class1c">&#9835;</a> <a class="secDesc"><small>Jam<b>Forest</b></small></a></div>
<div class="secWrap"> <a href="#section4" class="class1d">&#9835;</a> <a class="secDesc"><small>Our Line-up</a></small></div>
<div class="secWrap"> <a href="#section5" class="class1e">&#9835;</a> <a class="secDesc"><small>Here</a></small></div>
<div class="secWrap"> <a href="#section6" class="class1f">&#9835;</a> <a class="secDesc"><small>News</a></small></div>

</div>
</div>
</div>


</div> </div>
<!-- End of Section5 -->


<!--Section 6-->
<div id="section6">
<div class="container-fluid">
  <div class="row">
    <!--Social media -->
    <div class="hidden-xs col-sm-12">
    </br>
    <a href="https://www.facebook.com/JamForestApp/" style="color:black"><i class= "fa fa-facebook"></i></a>
    <a href="https://twitter.com/jamforestapp" style="color:black"><i class= "fa fa-twitter"></i></a>
    <a href="https://webgram.co/jamforestapp" style="color:black"><i class= "fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCiojt8k1cYBUqkl0pn1o3Zg" style="color:black"><i class= "fa fa-youtube"></i></a>
    <a href="http://jamforestapp.tumblr.com/" style="color:black"><i class= "fa fa-bold"></i></a>
    <a href="https://open.spotify.com/user/jamforest" style="color:black"><i class= "fa fa-spotify"></i></a>
    <a href="https://plus.google.com/u/0/117675732442145087177" style="color:black"><i class="fa fa-google-plus"></i></a>
</div></div>
  <div class="row"><div class="col-sm-12"></div></div>

  <div class="row" id="flex6">
    <div class="hidden-xs col-sm-1"></div>
  <div class="hidden-xs col-sm-9 text-center">
<a class="twitter-timeline" data-width="500" data-height="450" href="https://twitter.com/jamforestapp">Tweets by jamforestapp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="col-xs-9 hidden-sm hidden-md hidden-lg text-center">
<a class="twitter-timeline" data-width="500" data-height="200" href="https://twitter.com/jamforestapp">Tweets by jamforestapp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<!--Navigation -->
<div class="hidden-xs col-sm-2">
<div class="nav">

<div class="secWrap"><a href="#section1" class="class2a">&#9835;</a> <a class="secDesc"><small>Top</a></small></div>
<div class="secWrap"><a href="#section2" class="class2b">&#9835;</a> <a class="secDesc"><small>Here</a></small></div>
<div class="secWrap"><a href="#section3" class="class2c">&#9835;</a> <a class="secDesc"><small>Jam<b>Forest</b></small></a></div>
<div class="secWrap"><a href="#section4" class="class2d">&#9835;</a> <a class="secDesc"><small>Line-up</a></small></div>
<div class="secWrap"><a href="#section5" class="class2e">&#9835;</a> <a class="secDesc"><small>Jobs</a></small></div>
<div class="secWrap"><a href="#section6" class="class2f">&#9835;</a> <a class="secDesc"><small>News</a></small></div>
</div>
</div> </div>

</div> </div>

<!--end of section6 -->
<!-- Footer -->
<footer>
</br>
  <p>&#169; Jam<b>Forest Ltd</b></p>
  <p>The Rubicon Centre, CIT Campus, Bishopstown, Cork, Ireland</p>
<div class="row">
<div class="hidden-xs col-sm-2 text-right">
  <a href center data-toggle="modal" data-target="#myModal" style="color:#7ED320">Join Wait List</a>
</div>
<div class="hidden-xs col-sm-9 text-right">
<a href="http://jamforestapp.tumblr.com/" style="color:#7ED320"> blog </a>
<a href center data-toggle="modal" data-target="#ContactModal" style="color:#7ED320"> contact </a>
<a href="mailto:grace@jamforest.com" style="color:#7ED320"> support </a></p></div>
<div class="hidden-xs col-sm-1"></div></div>
<div class="col-12-xs hidden-sm  hidden-md hidden-lg text-center">
  <p> <a href center data-toggle="modal" data-target="#myModal" style="color:#7ED320">Join Wait List</a> </p>
  <p> <a href="http://jamforestapp.tumblr.com/" style="color:#7ED320"> blog </a>
  <a href center data-toggle="modal" data-target="#ContactModal" style="color:#7ED320"> contact </a>
  <a href="mailto:grace@jamforest.com" style="color:#7ED320"> support </a></p></div>
</div>
</footer>
  <!-- Modal to subscribe to newsletter-->
  <div id="ContactModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal form content-->
      <div class="modal-content">
        <div class="modal-header">
<h3>You can contact us here at Jam<b>Forest</b> by the following:</h3>
  	 </div>
       <div class="modal-text">
     <p><b>e-mail:</b> <a href="mailto:grace@jamforest.com"> grace@jamforest.com</a></p>
     <p><b>Address:</b>   The Rubicon Centre, CIT Campus, Bishopstown, Cork</p>
     <p><b>Mobile:</b>   <a href="tel:353868422411">+353 86-842-2411</a></p>
     <p><b>Facebook:</b>  <a href="https://www.facebook.com/jamforestApp">www.facebook.com/jamforestApp</a></p>
     <p><b>Twitter:</b>   <a href="https://twitter.com/jamforestapp">www.twitter.com/jamforestapp</a></p>
   </div>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
 </div>
      </div>
<script type="text/javascript">
var handler = function(e) {
  e = e || window.event;
  var k = e.keyCode || e.which;
  switch(k) {
    case 37:
      document.body.scrollTop-= 675;
      document.documentElement.scrollTop-= 675;
      break;
    case 39:
      document.body.scrollTop += 675;
      document.documentElement.scrollTop += 675;
      break;
    default: return true;
  }
  if( e.preventDefault) e.preventDefault();
  return false;
};
if( window.attachEvent) window.addEvent("onkeydown",handler,false);
else window.addEventListener("keydown",handler,false);

</script>

<script type="text/javascript">
$(document).ready(function() {
   $('#nav').localScroll({duration:800});
});
</script>
</body>
</html>
