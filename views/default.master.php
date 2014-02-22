<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head> <?php $this->RenderAsset('Head');  ?>





<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'blackglass'
 };
 </script>

</head>
<body id="<?php echo $BodyIdentifier; ?>" class="<?php echo $this->CssClass; ?>">

  <div id="Frame">
	 		
    <div class="Title" id="logo">

    	<?php echo Gdn_Theme::Logo(); ?>
    </a></div>
		<!-- Navigation -->
		<div class="Menu">
    <div id="Menu">
        
               <?php 
                 
               

               $Session = Gdn::Session();
               if ($this->Menu) {
                                                
                                               $this->Menu->AddLink('Dashboard', T('Dashboard'), '/dashboard/settings', array('Garden.Settings.Manage'));
                                                                                                  
                  // $this->Menu->AddLink('Dashboard', T('Users'), '/user/browse', array('Garden.Users.Add', 'Garden.Users.Edit', 'Garden.Users.Delete'));
                                                $this->Menu->AddLink('Home', T('Home'), '/');     
                                                $this->Menu->AddLink('Home', T('New Discussion'), 'post/discussion', array('target'=>'_blank'));
                                                
                                                $this->Menu->AddLink('Home', T('Activity'), '/activity',array('Garden.SignIn.Allow'));   
                                                $Authenticator = Gdn::Authenticator();
						if ($Session->IsValid()) {
							$Name = $Session->User->Name;
							$CountNotifications = $Session->User->CountNotifications;
							if (is_numeric($CountNotifications) && $CountNotifications > 0)
								$Name .= ' <span>'.$CountNotifications.'</span>';
								
							$this->Menu->AddLink('User', $Name, '/profile/{UserID}/{Username}', array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
							$this->Menu->AddLink('SignOut', T('Sign Out'), $Authenticator->SignOutUrl(), FALSE, array('class' => 'NonTab SignOut'));
						} else {
							$Attribs = array();
							if (C('Garden.SignIn.Popup') && strpos(Gdn::Request()->Url(), 'entry') === FALSE)
								$Attribs['class'] = 'SignInPopup';
								
							$this->Menu->AddLink('Entry', T('Sign In'), $Authenticator->SignInUrl($this->SelfUrl), FALSE, array('class' => 'NonTab'), $Attribs);
						}                                                                        
                                                
                                                
                                                
                                                                                              
                                                
                  echo $this->Menu->ToString(); }?>
           
            
           </div>
            <div class="cl"></div>
        </div>
    </div>
    <!-- end Navigation -->
	 
	       
    <div class="shell">
        <!-- Main -->
        <div id="main">
            
            
 <div id="Body">
 	 <!-- Box -->
            <div class="box-holder" id="slider">
	            
	            <div class="box">
	                <!-- Slider -->
	                <div class="slider">
	        			<ul>
	        			    <li>
	        			    	<div class="cnt">
		        			    	<img alt="this is an image of a drink. " src="http://oi58.tinypic.com/vzx4qx.jpg" />
		        			        <div class="information">
		        			            <h2> <span>Welcome</span> To Our Great <span>Forum</span></h2>
		        			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget nibh id enim laoreet euismod eget ac orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Curae cras pellentesque euismod fringilla.</p>
		        			            <div class="purchase"><a href="entry/signin?Target=discussions" class="Button Primary SignInPopup" id="SliderButton" rel="nofollow">Sign In</a></div>
		        			        </div>
		        			        <div class="cl"></div>	
	        			    	</div>
	        			    </li>
	        			    <li>
	        			        <div class="cnt">
		        			    	<img alt="this is an image of a face." src="http://oi58.tinypic.com/vioc43.jpg" />
		        			        <div class="information">
		        			            <h2> <span>Welcome</span> To Our Great <span>Forum</span></h2>
		        			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget nibh id enim laoreet euismod eget ac orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Curae cras pellentesque euismod fringilla.</p>
		        			            <div class="purchase"><a href="entry/register?Target=discussions" class="Button ApplyButton" id="SliderButton" rel="nofollow">Register</a></div>
		        			        </div>
		        			        <div class="cl"></div>	
	        			    	</div>   
	        		        </li>
	        			    <li>
	        			        <div class="cnt">
		        			    	<img alt="this is an image of a shoe." src="http://oi59.tinypic.com/2wcefpt.jpg" />
		        			        <div class="information">
		        			            <h2> <span>Welcome</span> To Our Great <span>Forum</span></h2>
		        			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget nibh id enim laoreet euismod eget ac orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Curae cras pellentesque euismod fringilla.</p>
		        			            <div class="purchase"><a href="entry/signin?Target=discussions" class="Button Primary SignInPopup" id="SliderButton" rel="nofollow">Sign In</a></div>
		        			        </div>
		        			        <div class="cl"></div>	
	        			    	</div>
	        		        </li>
	        		        <li>
	        			        <div class="cnt">
		        			    	<img alt="this is an image of a outfits." src="http://i57.tinypic.com/2wpnl3n.png" />
		        			        <div class="information">
		        			            <h2><span>Welcome</span> To Our Great <span>Forum</span></h2>
		        			            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget nibh id enim laoreet euismod eget ac orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Curae cras pellentesque euismod fringilla.</p>
		        			            <div class="purchase"><a href="entry/register?Target=discussions" class="Button ApplyButton" id="SliderButton" rel="nofollow">Register</a></div>
		        			        </div>
		        			        <div class="cl"></div>	
	        			    	</div>
	        		        </li>
	        			</ul>
	        		</div>
	        		<!-- End Slider -->
	        		<!-- Slider-nav -->
	        		<div class="slider-nav">
	        			<ul>
	        			    <li><a href="#">1</a></li>
	        			    <li><a href="#">2</a></li>
	        			    <li><a href="#">3</a></li>
	        			    <li><a href="#">4</a></li>
	        			</ul>
	        		</div>
	        		<!-- End Slider-nav -->
	            </div>
	            
	        </div>
            <!-- End Box -->
		
<div id="Content"><?php $this->RenderAsset('Content'); ?></div>
<div id="Panel">
			 <div class="Search"><?php
               $Form = Gdn::Factory('Form');
               $Form->InputPrefix = '';
               echo 
                  $Form->Open(array('action' => Url('/search'), 'method' => 'get')),
                  $Form->TextBox('Search', array('Value' => 'Search')),
                  $Form->Button('Go', array('Name' => '')),
                  $Form->Close();
            ?></div>

<?php $this->RenderAsset('Panel'); ?>
<div class="Center">
<a id="onlineRadioLink" href="http://radiotuna.com/iPhone">radio app</a><script type="text/javascript" src="http://radiotuna.com/OnlineRadioPlayer/EmbedRadio?playerParams=%7B%22styleSelection0%22%3A29%2C%22styleSelection1%22%3A253%2C%22styleSelection2%22%3A194%2C%22textColor%22%3A1378835%2C%22backgroundColor%22%3A13504375%2C%22buttonColor%22%3A16777215%2C%22glowColor%22%3A16777215%2C%22playerSize%22%3A240%2C%22playerType%22%3A%22style%22%7D&width=240&height=292"></script></div></div>
</div>
      </div>
	</div>
	 
	 

            <!-- Box -->
            <div class="box-holder">
	           
	            <div class="box">
	                <!-- Cols -->
	                <div class="col-holder">
	                    <div class="col">
	                        <h3> Title</h3>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget nibh id enim laoreet euismod eget ac orci. Vestibulum anipsum primis in faucibus orci luctus.</p>
	                        <a href="#" class="more" title="more information" >More</a>
	                    </div>
	                    <div class="col">
	                        <h3> Title Here</h3>
	                        <p>Sed dignissim, felis at pharetra molestie, tellus nisi commodo lacus, at laoreet dui nunc eu nunc. In consequat varius adipiscing.</p>
	                        <a href="#" class="more" title="more information" >More</a>
	                    </div>
	                    <div class="col last-col">
	                        <h3>Title goes here</h3>
	                        <p>Aenean interdum, ante quis lacinia viverra, sapien mauris posuere dolor, interdum lacinia eros nunc in nunc. Maecenas eu arcu vel dui tincidunt sollicitudin.</p>
	                        <a href="#" class="more" title="more information" >More</a>
	                    </div>
	                    <div class="cl"></div>
	                </div>
	                <!-- End cols -->
	                
	                <div class="cl"></div>
	            </div>
	            
	        </div>
	        <!-- End Box -->
        </div>
        <!-- End Main -->
        <!-- Footer -->
        <div id="footer"><div class="Foot">
        	
		<span class="author"><?php $this->RenderAsset('Foot'); 
echo Wrap(Anchor(T('Vanilla Theme by VrijVlinder'), C('Garden.VanillaUrl'),array('target' => '_blank')), 'div');	
?></span></div>
		<p><a href="/" title="home" target="_blank">Home</a><span>|</span><a href="#" title="about" target="_blank">About Us</a><span>|</span><a href="https://www.facebook.com/" target="_blank" title="Facebook" >Facebook</a><span>|</span><a href="#" title="blog" >Blog</a><span>|</span><a class="Popup" href="plugin/PrivacyNotice" target="_blank" title="Privacy" >Privacy</a><span>|</span><a href="mailto:contact@youremal.com" title="contact" >Contact Us</a></p>
		 
        	
        	
        </div></div>
  </div>
        <!-- end Footer -->	
    </div>
    
</div>


	<script type="text/javascript"> 
	$(document).ready(function() {
   $(".Attachment a").attr("target", '_blank');
   
});

</script>

<script type="text/javascript">
var ddmenuitem = 0;
var menustyles = { "visibility":"visible", "display":"block", "z-index":"9999"}

function Menu_close()
{  if(ddmenuitem) { ddmenuitem.css("visibility", "hidden"); } }

function Menu_open()
{  Menu_close();
   ddmenuitem = $(this).find("ul").css(menustyles);
}

jQuery(document).ready(function()
{  $("ul#Menu > li").bind("mouseover", Menu_open);
   $("ul#Menu > li").bind("mouseout", Menu_close);
});

document.onclick = Menu_close;
</script>

   <?php $this->FireEvent('AfterBody'); ?>
</body>
</html>