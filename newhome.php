<<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $("#r1").click(function(){
			$(".register").fadeIn(1000);
			});
    });

</script>
</head>
<style>
	.header
	{
		height:400px;
		width:100%;
		float:left;
		border:0px solid black;
		background-image:url("images/a72edf4f921646a387436a0f52461991.jpg");
		background-size:100% 400px;
		background-repeat:inherit;
	
	}
	.headername
	{
		height:70px;
		width:60%;
		float:left;
		border:0px solid black;
		margin-top:50px;
		margin-left:265px;
		 
	}
	.headersearch
	{
		height:70px;
		width:80%;
		float:left;
		border:0px solid black;
		margin-top:10px;
		margin-left:190px;
	}
	.headerlink
	{
		height:70px;
		width:80%;
		float:left;
		border:0px solid white;
		margin-left:60px;
		margin-top:30px;
	}
	.hlogo
	{
		height:70px;
		width:5%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
	}
	.hname
	{
		height:70px;
		width:30%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
	}
	.hlink
	{
		height:70px;
		width:14%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
		
	}
	.reglink1
	{
		height:90px;
        width:60%;
        float:left;
        background-color:#A61646;                  
	    display:none;
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		padding:20px;
		margin-left:19px;
	}
	.hlink:hover>.reglink1
	{
	   display:block;
	   position:relative;	
	}
	.hlink2:hover>.reglink1
	{
	   display:block;
	   position:relative;	
	}
	a:hover
	{
		color:red;
	}
	.hlink2
	{
		height:70px;
		width:10%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
	}
	l
	{
		font-size:24px; 
		font:'Times New Roman', Times, serif;
		color:#FFF; 
		font-weight:100;
		padding:30px;
	}
	.marque
	{
		height:30px;
		width:100%;
		background-color:#FF1313;
		float:left;
	}
	
	.link
	{
		height:400px;
		width:49.5%;
		float:left;
		border:0px solid black;
	}
	a:hover
	{
		text-decoration:none;
		color:#F00;
	}
	a:link
	{
		text-decoration:none;
		color:#000;
	}
	
	input[type='search']
	{
		margin-left:20px;
		font-size:14px;
		width:60%;
		height:40px;
	    border-radius:20px;
		border:none;
		padding-left:20px;
		font-size:24px;
	    border:thick;
	}
	button[type='button1']
	{
		margin-left:0px;
		font-size:18px;
		width:20%;
		height:40px;
	    border-radius:20px;
	    border:thick;
		background-color:#399;
	}
   /*After Header*/
	.afterh
	{
		height:350px;
		width:100%;
		float:left;
		border:2px solid black;
		background-color:white;
	
	}
	.slider
	{
		height:350px;
		width:40%;
		float:left;
		margin-top:10px;
		margin-left:10px;
	}
	.sliderside
	{
		height:350px;
		width:57.5%;
		float:left;
		margin-top:10px;
		margin-left:10px;
	}
	.insliderside1
	{
		height:350px;
		width:48%;
		float:left;
		margin-top:8px;
		margin-left:9px;
	}
	.insliderside2
	{
		height:350px;
		width:48%;
		float:left;
		/*border:1px solid black;*/
		margin-top:8px;
		margin-left:9px;
	}
	.circle1
	{
	    height:140px;
		width:40%;
		float:left;
		border:5px solid #E84711;
		border-radius:50%;
		margin-top:8px;
		margin-left:100px; 	
		background-image:url("images/icon1.jpg");
		background-size:100% 140px;
	}
	.circlelink
	{
		height:110px;
        width:65%;
        float:left;
        background-color:#A61646;                  
	    display:none;
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		padding:30px;
		border-radius:50%;
		margin-left:160px;
		float:left;
	}
	.circle1:hover>.circlelink
	{
	   display:block;
	   position:relative;	
	}
	.circle2
	{
	    height:140px;
		width:40%;
		float:left;
		border:5px solid #E84711;
		border-radius:50%;
		margin-top:8px;
		margin-left:100px; 
		background-image:url("images/icon2.png");
		background-size:100% 140px;		
    }
	.circle2:hover>.circlelink
	{
	   display:block;
	   position:relative;	
	}

	.circlebox
	{
	    height:90px;
		width:85%;
		float:left;
		margin-top:5px;
		margin-left:35px;
		text-align:center; 
		border: 0px solid black;	
	}
	circletext
	{
		color:#000;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size:20px;
		font-weight:500; 
	   }
	   /*After afterh*/
	   .footer1
	{
		height:350px;
		width:100%;
		float:left;
		border:0px solid black;
		background-image:url(images/Intro.jpg);
		background-size:100% 350px;
		background-repeat:inherit;
		background-attachment:fixed;
		opacity:0.7;
		filter:alpha(opacity=50);
	}
	 .footer12
	{
		height:350px;
		width:100%;
		float:left;
		border:0px solid black;
		margin-top:-350px;
		
	}
	.footer2
	{
		height:400px;
		width:100%;
		float:left;
		background-image:url(images/note-book-green-shadow-header.jpg);
		background-size:100% 400px;
		background-repeat:inherit;
	}
	.footer22
	{
		height:150px;
		width:100%;
		float:left;
		margin-top:20px;
		margin-left:80px;
	}
	.footerblock1
	{
		height:200px;
		width:22%;
		float:left;
		background-color:#000;
		border:1px solid #575757;
		margin-top:20px;
		margin-left:30px;
		opacity:0.5;
		
	}
	.footerblock2
	{
		height:200px;
		width:22%;
		float:left;
		margin-top:20px;
		margin-left:-22%;
		z-index:200;
		position:relative;
			}
	.footertext
	{
		height:25px;
		width:100%;
		float:left;
		margin-top:5px;
		margin-top:5px;
		text-align:center;
		font-size:20px;
		font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
		font-weight:600;
		color:white;
	}
	.footertext1
	{
		height:170px;
		width:100%;
		float:left;
		margin-top:2px;
		text-align:center;
		font-size:18px;
		font-family:"Comic Sans MS", cursive;
		font-weight:500;
		color:#FF8000;
	}
	.contactblock
	{
	    height:60px;
		width:90%;
		float:left;
		margin-top:10px;
		margin-left:35px;
		text-align:center; 	
	}
	.contactimg1
	{
		height:60px;
		width:22%;
		float:left;
		border-radius:50%;
	    background-image:url(images/ficon4.jpg);
		background-size:100% 100%;
	}
	.contactno
	{
		height:50px;
		width:60%;
		float:left;
		margin-top:3px;
		margin-left:3px;
	}
	
	.contactimg2
	{
		height:70px;
		width:80%;
		float:left;
		margin-left:30px;
		margin-top:20px;
		border:1px solid white;
		border-radius:30px;
	    background-image:url(images/ficon.jpg);
		background-size:100% 100%;
	}
</style>
<body>
<div class="header">
    <div class="headerlink">
    	 
         <div class="hlogo">
         	<img src="images/9f84849c-fed5-459a-851e-e615291f2ab9.png" style="width:70%;"/>
         </div>
          <div class="hname">
          	<font style="font-size:36px; font:'Times New Roman', Times, serif;color:#FFF; font-weight:800;"> Shareyourknowlege </font>
          </div>
           <div class="hlink">
           	<a><l id="l1"> Registration </l></a>
            <div class="reglink1">
            	<a id="r1">Faculty Registration</a><br/><br/>
                Student Registration
           
           </div>
           
           </div>
           
           
           <div class="hlink2">
           	<l>Login </l>
            <div class="reglink1">
            	Faculty login<br/><br/>
                Student login
           
           </div>
           </div>
           <div class="hlink2">
           	<l> help </l>
           </div>
           <div class="hlink">
           	<l> Aboutus </l>
           </div>
           
         
    </div>
    
    <div class="headername">
        <font style="color:#FFF; font-size:40px; font-style:bold; font-weight:700; font-family:'Arial Black', Gadget,sans-serif">Online Tutors Ready to help 24/7</font>
    </div>
    <div class="headersearch">
        <form >
               <input type="search" name="search1" placeholder="search for tutors"/>
                <button type="button1"> Find your Tutors</button>
        </form>
    </div> 
</div>
      <div class="marque">
    		<marquee style="font-size:24px; font-weight:200;"> Online tutors ready to help 24/7</marquee>
      </div>
      <!--After Header Part-->
      <div class="afterh">
           <div class="slider">
                 <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(../img/browser-icons.png);
        }
    </style>
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/js/jssor.js"></script>
    <script type="text/javascript" src="js/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Swing Outside in Stairs
            {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} }

            //Dodge Dance Outside out Stairs
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Pet Outside in Stairs
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Dance Outside in Random
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Flutter out Wind
            , { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseOutWave, $Clip: $JssorEasing$.$EaseInOutQuad }, $Outside: true, $Round: { $Top: 1.3} }

            //Collapse Stairs
            , { $Duration: 1200, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $JssorEasing$.$EaseOutQuad }

            //Collapse Random
            , { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }

            //Vertical Chess Stripe
            , { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} }

            //Extrude out Stripe
            , { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} }

            //Dominoes Stripe
            , { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseOutJump, $Round: { $Top: 1.5} }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssor_slider2 = new $JssorSlider$("slider2_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);

            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider2_container" style="position: relative; width: 600px;
        height: 300px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <a u=image href="#"><img src="images/graduation.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="images/istock_000073747895_small_0-825x510.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="images/images3.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="images/45558_lmw_new_stress1_100411o1-938x535.jpg" /></a>
            </div>
        </div>
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }

                .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 12px;
                    height: 12px;
                    filter: alpha(opacity=70);
                    opacity: .7;
                    overflow: hidden;
                    cursor: pointer;
                    border: #000 1px solid;
                }

                .jssorb01 div {
                    background-color: gray;
                }

                    .jssorb01 div:hover, .jssorb01 .av:hover {
                        background-color: #d3d3d3;
                    }

                .jssorb01 .av {
                    background-color: #fff;
                }

                .jssorb01 .dn, .jssorb01 .dn:hover {
                    background-color: #555555;
                }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(../img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
        <a style="display: none" href="http://www.jssor.com">Carousel Slider</a>
    </div>
    <!-- Jssor Slider End -->
           </div>
           <div class="sliderside">
                <div class="insliderside1">
                     <div class="circle2">
                     <div class="circlelink">
                     	Faculty Registration<br/><br/>
                		Student Registration
                     </div>
                     </div>
                     <div class="circlebox">
                     <circletext>Register Your Account</circletext><br/><br/>
                     <font style="font-family:'Times New Roman', Times, serif; font-size:18px;"> Getting Started and Finding an expert online <br/>Tutors who can help you is easy.Just tell us <br/>what you need help with.</font>
                     </div>
                </div>
                <div class="insliderside2">
                     <div class="circle1">
                     <div class="circlelink">
                     	Faculty login<br/><br/>
                		Student login
                     </div>
                     </div>
                     <div class="circlebox">
                     <circletext>Login To Your Account</circletext>
                     
                     </div>
                </div>
           </div>
      </div>
      <!--footer1-->
      <div class="footer1"> </div>
      <div class="footer12">
        	<font style="font-size:36px; font:'Times New Roman', Times, serif;color:#FFF; font-weight:800;">Build yours</font>
        </div>
       <div class="footer2">
           <div class="footerblock1"></div>
           <div class="footerblock2">
                <div class="footertext">References</div>
                <div class="footertext1">
                 <headertext><a>WWW.Chegg.com</a></headertext><br/>
                 <headertext><a> WWW.tutor.com<a></headertext><br/>
                 <headertext><a> WWW.jiskha.com<a></headertext><br/>
                 <headertext<a>>WWW.assignmentmakers.com<a></headertext><br/>
                 <headertext><a>WWW.helpwithassignment.com<a></headertext><br/>
                 <headertext><a>WWW.24hoursanswer.com<a></headertext><br/>
                 </div>
           </div>
           <div class="footerblock1"></div>
           <div class="footerblock2">
               <div class="footertext">Contact Us</div>
               <div class="footertext1">
                    <div class="contactblock">
                         <div class="contactimg1"></div>
                         <div class="contactno">
                         <headertext>9754016788<headertext><br/>
                         <headertext>9777888999<headertext>
                         </div>
                    </div>
                    <div class="contactimg2"></div>
               </div>
           </div>
           <div class="footerblock1"></div>
           <div class="footerblock2">
                <div class="footertext">About Us</div>
                <div class="footertext1">
                       <headertext><br/><a>Click  here  for  the  details.</a></headertext>
                </div>
           </div>
           <div class="footerblock1"></div>
           <div class="footerblock2">
                 <div class="footertext">Stay tuned</div>
                 <div class="footertext1">
                        <headertext> <br/>Connect with us and stay in the loop. </headertext>
                 </div>
           </div>
           <div class="footer22">
                 <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/js/jssor.js"></script>
    <script type="text/javascript" src="js/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1600,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 140,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1324));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px; height: 100px; overflow: hidden;">
            <div><img u="image" alt="amazon" src="js/img/logo/amazon.jpg" /></div>
            <div><img u="image" alt="android" src="js/img/logo/android.jpg" /></div>
            <div><img u="image" alt="bitly" src="js/img/logo/bitly.jpg" /></div>
            <div><img u="image" alt="blogger" src="js/img/logo/blogger.jpg" /></div>
            <div><img u="image" alt="dnn" src="js/img/logo/dnn.jpg" /></div>
            <div><img u="image" alt="drupal" src="js/img/logo/drupal.jpg" /></div>
            <div><img u="image" alt="ebay" src="js/img/logo/ebay.jpg" /></div>
            <div><img u="image" alt="facebook" src="js/img/logo/facebook.jpg" /></div>
            <div><img u="image" alt="google" src="js/img/logo/google.jpg" /></div>
            <div><img u="image" alt="ibm" src="js/img/logo/ibm.jpg" /></div>
            <div><img u="image" alt="ios" src="js/img/logo/ios.jpg" /></div>
            <div><img u="image" alt="joomla" src="js/img/logo/joomla.jpg" /></div>
            <div><img u="image" alt="linkedin" src="js/img/logo/linkedin.jpg" /></div>
            <div><img u="image" alt="mac" src="js/img/logo/mac.jpg" /></div>
            <div><img u="image" alt="magento" src="js/img/logo/magento.jpg" /></div>
            <div><img u="image" alt="pinterest" src="js/img/logo/pinterest.jpg" /></div>
            <div><img u="image" alt="samsung" src="js/img/logo/samsung.jpg" /></div>
            <div><img u="image" alt="twitter" src="js/img/logo/twitter.jpg" /></div>
            <div><img u="image" alt="windows" src="js/img/logo/windows.jpg" /></div>
            <div><img u="image" alt="wordpress" src="js/img/logo/wordpress.jpg" /></div>
            <div><img u="image" alt="youtube" src="js/img/logo/youtube.jpg" /></div>
        </div>
        <a style="display: none" href="http://www.jssor.com">Carousel Slider</a>
    </div>
    <!-- Jssor Slider End -->
           </div>
      </div>
      
</div>
</body>
</html>