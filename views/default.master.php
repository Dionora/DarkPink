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
	 		<div id="Row">
<h1><span><?php echo Gdn_Theme::Logo(); ?></span></a></h1>    
 <div class="Menu">
    
        
               <?php 
                 
               

               $Session = Gdn::Session();
               if ($this->Menu) {
                                                
                                               $this->Menu->AddLink('Dashboard', T('Dashboard'), '/dashboard/settings', array('Garden.Settings.Manage'));
                                                                                                  
                  // $this->Menu->AddLink('Dashboard', T('Users'), '/user/browse', array('Garden.Users.Add', 'Garden.Users.Edit', 'Garden.Users.Delete'));
                                                $this->Menu->AddLink('Home', T('Home'), '/');     
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
           
            
           </div></div>
            <div class="cl"></div>
        
    
    <!-- end Navigation -->
	 
	       
    <div class="shell">
        <!-- Main -->
        <div id="main">
          
            
 <div id="Body">
 	 
		
<div id="Content"><?php $this->RenderAsset('Content'); ?></div>
<div id="Panel"><?php $this->AddModule('MeModule'); ?>
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

      </div>
	</div>
	 
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