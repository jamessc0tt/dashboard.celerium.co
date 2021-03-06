<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/bootstrap.min.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/fullcalendar.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/maruti-style.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/maruti-media.css" class="skin-color" />
  </head>
  <body>
    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
    <!--close-top-Header-messaages-->
    <?php include 'templates/header.php';?>
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="home" title="Go to Home" class="tip-bottom">Home</a></div>
      </div>
      <div class="row mainrow">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    			<div class="card card-money">
    				<div class="shape">
    					<div class="shape-text">
    					</div>
    				</div>
    				<div class="card-content">
    					<h3 class="lead">
    						DarkRP Wallet
    					</h3>
    					<p>
    						<b>£0.00</b> Current Money
    						<br> <b>£0.00</b> Total Spent
    					</p>
    				</div>
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    			<div class="card card-bank">
    				<div class="shape">
    					<div class="shape-text">

    					</div>
    				</div>
    				<div class="card-content">
    					<h3 class="lead">
    						BATM Balance
    					</h3>
    					<p>
                <b>£0.00</b> Individual Account
    						<br> <b>£0.00</b> Group Accounts
    					</p>
    				</div>
    			</div>
    		</div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    			<div class="card card-warnings">
    				<div class="shape">
    					<div class="shape-text">

    					</div>
    				</div>
    				<div class="card-content">
    					<h3 class="lead">
    						Warnings
    					</h3>
    					<p>
                <b>0</b> Active Warnings
                <br> <b>4</b> Total Warnings
    					</p>
    				</div>
    			</div>
    		</div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    			<div class="card card-bans">
    				<div class="shape">
    					<div class="shape-text">
    					</div>
    				</div>
    				<div class="card-content">
    					<h3 class="lead">
    						Bans
    					</h3>
    					<p>
                <b>0</b> Active Bans
    						<br> <b>3</b> Expired Bans
    					</p>
    				</div>
    			</div>
    		</div>
      </div>
      <div class="container-fluid">
       	<div class="quick-actions_homepage">
        <ul class="quick-actions">
              <li> <a href="#"> <i class="icon-dashboard"></i> Game Profile </a> </li>
              <li> <a href="#"> <i class="icon-shopping-bag"></i> Link Forum Profile</a> </li>
              <li> <a href="#"> <i class="icon-web"></i> Refresh Steam Details </a> </li>
              <li> <a href="#"> <i class="icon-calendar"></i> Support Requests </a> </li>
              <li> <a href="gdpr"> <i class="icon-people"></i> GDPR JSON </a> </li>
            </ul>
       </div>
        <hr>
        <div class="row-fluid">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"><span class="icon"><i class="icon-file"></i></span>
                <h5>Latest Forum Posts</h5>
              </div>
              <div class="widget-content nopadding">
                <ul class="recent-posts">
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="images/maturi/demo/av1.jpg"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="images/maturi/demo/av2.jpg"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="images/maturi/demo/av4.jpg"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                    </div>
                  <li>
                    <button class="btn btn-warning btn-mini">View All</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-refresh"></i> </span>
                <h5>Server Updates</h5>
              </div>
              <div class="widget-content nopadding updates">
                <div class="new-update clearfix"><i class="icon-ok-sign"></i>
                  <div class="update-done"><a title="" href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> <span>dolor sit amet, consectetur adipiscing eli</span> </div>
                  <div class="update-date"><span class="update-day">20</span>jan</div>
                </div>
                <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>Congratulation Maruti, Happy Birthday </strong></a> <span>many many happy returns of the day</span> </span> <span class="update-date"><span class="update-day">11</span>jan</span> </div>
                <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>Maruti is a Responsive Admin theme</strong></a> <span>But already everything was solved. It will ...</span> </span> <span class="update-date"><span class="update-day">07</span>Jan</span> </div>
                <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>Envato approved Maruti Admin template</strong></a> <span>i am very happy to approved by TF</span> </span> <span class="update-date"><span class="update-day">05</span>jan</span> </div>
                <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>I am alwayse here if you have any question</strong></a> <span>we glad that you choose our template</span> </span> <span class="update-date"><span class="update-day">01</span>jan</span> </div>
              </div>
            </div>
          </div>
        </div>
        <hr>

      </div>
    </div>
    </div>
    </div>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
