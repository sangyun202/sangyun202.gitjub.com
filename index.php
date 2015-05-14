<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- AppMode on mobile safari -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="description" content="Lee SangYun">
    <meta name="author" content="sangyun202@naver.com">

    <title>Lee Chang hyun</title>

    <!-- Browser favicon -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <!-- IPhone home page bookmark icon creation -->
    <link href="favicon.ico" rel="apple-touch-icon"/>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/colorbox.css" type="text/css" media="screen">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39067921-2']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = 

true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + 

'.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" onclick="onBrand()">KSU_System Security</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <!-- li class="active"><a href="#">Home</a></li-->
              <li class="li-content"><a href="https://github.com/sangyun202">Github</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
        <div class="label label-info">E-Mail</div>
        <ul>
            <li class="li-content">sangyun202@naver.com</li>
        </ul>
        <br>

        <div class="label label-important">Repository</div>
        <ul>
            <li class="li-content"><a href="https://github.com/sangyun202">Github: 

https://github.com/sangyun202</a></li>
        </ul>
        <br>

        <div class="label label-warning">usingcode</div>
        <ul>
            <li class="li-content">JavaScript</li>
            <li class="li-content">HTML</li>
            <li class="li-content">CSS</li>
            <li class="li-content">Json</li>
        </ul>
        <br>

        <div class="label label-inverse">Date</div>
        <ul>
            <li class="li-content">15/05/2015 - Announcement</li>
            <li class="li-content">Group Leader - 이상윤</li>
            <li class="li-content">Group Member - 이정화</li>
            <li class="li-content">Group Member - 이준희</li>            
            
        </ul>
        <br>

        <div class="label">Report on proceeding</div>
        <div class="container">
            <div id="timelineContainer">

                <div class="timelineToggle"><p><a class="expandAll">+ expand all</a></p></div>
                <br class="clear">

                <!-- 2014-->
                <div class="timelineMajor">
                    <h2 class="timelineMajorMarker"><span>2nd Meeting</span></h2>

                    <dl class="timelineMinor">
                        <dt id="2014"><a>Member</a></dt>
                        <dd class="timelineEvent" id="2014EX" style="display:none;">
                            <h3>이정화</h3>
                            <h3>이준희</h3>                            
                            <br class="clear">
                        </dd><!-- /.timelineEvent -->
                    </dl><!-- /.timelineMinor -->

                    <dl class="timelineMinor">
                        <dt id="2014Hackerton"><a>Date & Place</a></dt>
                        <dd class="timelineEvent" id="2014HackertonEX" style="display:none;">
                            <h3>14/05/15 - Thursday</h3>
                            <h3>KSU - Central Library</h3>                            
                            <br class="clear">
                        </dd><!-- /.timelineEvent -->
                    </dl><!-- /.timelineMinor -->
                </div><!-- /.timelineMajor -->

                <!-- 2013-->
                <div class="timelineMajor">
                    <h2 class="timelineMajorMarker"><span>1st Meeting</span></h2>

                    <dl class="timelineMinor">
                        <dt id="2013"><a>Member</a></dt>
                        <dd class="timelineEvent" id="2013EX" style="display:none;">
                            <h3>이상윤</h3>
                            <h3>이정화</h3>                            <h3>이준희</h3> 
                           <br class="clear">
                        </dd><!-- /.timelineEvent -->
                    </dl><!-- /.timelineMinor -->

                    <dl class="timelineMinor">
                        <dt id="2013Doc"><a>Date & Place</a></dt>
                        <dd class="timelineEvent" id="2013DocEX" style="display:none;">
                            <h3>13/05/15 - Wednesday</h3> 
                            <h3>Starbucks in Daeyeon Hillstate</h3>                            

 
                            <br class="clear">
                        </dd><!-- /.timelineEvent -->
                    </dl><!-- /.timelineMinor -->
                </div><!-- /.timelineMajor -->

                
                            <br class="clear">
                        </dd><!-- /.timelineEvent -->
                    </dl><!-- /.timelineMinor -->
                </div><!-- /.timelineMajor -->

                <br class="clear">
            </div><!-- /#timelineContainer -->
        </div><!-- /.container -->
    </div>

    <!-- modal-gallery is the modal dialog used for the image gallery -->
    <div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">&times;</a>
            <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body"><div class="modal-image"></div></div>
        <div class="modal-footer">
            <a class="btn modal-download" target="_blank">
                <i class="icon-download"></i>
                <span>Download</span>
            </a>
            <a class="btn btn-success modal-play modal-slideshow" data-slideshow="2000">
                <i class="icon-play icon-white"></i>
                <span>Slideshow</span>
            </a>
            <a class="btn btn-info modal-prev">
                <i class="icon-arrow-left icon-white"></i>
                <span>Previous</span>
            </a>
            <a class="btn btn-primary modal-next">
                <span>Next</span>
                <i class="icon-arrow-right icon-white"></i>
            </a>
        </div>
    </div>

    <!-- Hidden Element -->
    <div id="myModal" class="modal hide fade">
        <div class="modal-header">
            <h3>My lover NamHee</h3>
        </div>
        <div class="modal-body">
            <img src="images/nh.png" width="300">
        </div>
    </div>


    <!--Loading -->
    <script src="js/jquery-1.7.1.min.js"></script>  <!-- http://jquery.com/ -->
    <script src="js/bootstrap.min.js"></script>  <!-- 

http://twitter.github.com/bootstrap/index.html -->
    <script src="js/load-image.min.js"></script>  <!-- https://github.com/blueimp/JavaScript-

Load-Image -->
    <script src="js/bootstrap-image-gallery.min.js"></script>  <!-- 

https://github.com/blueimp/Bootstrap-Image-Gallery -->
    <script src="js/colorbox.js"></script>  <!-- http://www.jacklmoore.com/colorbox   

https://github.com/jackmoore/colorbox -->
    <script src="js/timeliner.min.js"></script>  <!-- http://www.technotarek.com/timeliner/  

https://github.com/technotarek/timeliner -->
    <script>
        $(document).ready(function() {
            $.timeliner({
                //startOpen:'#2011EX'
            });
            // Colorbox Modal
            $(".CBmodal").colorbox();
        });
    </script>
    <script src="js/main.js"></script>

</body>

</html>
