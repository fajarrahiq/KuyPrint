<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons bution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files --> 
<!-- web font --> 
<link href="<?php echo base_url();?>//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="<?php echo base_url();?>//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
<script src='<?php echo base_url();?>//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
 if(typeof _bsa !== 'undefined' && _bsa) {
    // format, zoneKey, segment:value, options
    _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
   }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
 // format, zoneKey, segment:value, options
 _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
 if(typeof _bsa !== 'undefined' && _bsa) {
    // format, zoneKey, segment:value, options
    _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
   }
})();
</script>
<script>
 (function(v,d,o,ai){ai=d.createElement("script");ai.defee;ai.asyne;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//vdo.ai/core/w3layouts/vdo.ai.js");
 </script>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
 <!-- main --> 
 <div class="main-agileinfo slider ">
  <div class="items-group">
   <div class="item agileits-w3layouts">
    <div class="block text main-agileits"> 
     <span class="circleLight"></span> 
     <!-- login form -->
     <div class="login-form loginw3-agile"> 
      <div class="agile-row">
       <h1>REGISTER</h1> 
       <div class="login-agileits-top">  
       <?php echo validation_errors(); ?>
       <?php echo form_open('controller_mitra/Reg_Proces') ?>
        <form > 
        <input type="text" class="name" placeholder="Email"  name = "email"/> <br><br>

         <input type="text" class="name" placeholder="Username"  name = "name"/> <br><br>
        
         <input type="password" class="password" placeholder="Password"  name = "password"/><br><br>
           
         <input type="password" class="password" placeholder="Confirm Password"  name ="cpassword"/><br><br>
        
         <input type="text" class="alamat" placeholder="Alamat"  name = "alamat"/> <br><br> 
       
        <input type="text" class="jenisprinter" placeholder="Jenis Printer"  name = "jenis_printer"/> <br>
       
        <div style=" display: inline; height: 30px; width: 100%; font-size: 20px;  border-radius: 2px; font-weight: 100;background-color: white; width: 50px;"> Profil :
        <input type="file" name="foto_mitra" size="20" accept=".jpg, .png" style="align-self: right;" />
        </div><br><br>
        <div style=" display: inline; height: 30px; width: 100px; font-size: 20px;  border-radius: 2px; font-weight: 100;background-color: white; width: 50px;"> Ktp :
        <input type="file" name="foto_ktp" size="20" accept=".jpg, .png" style="align-self: right;" />
        </div><br><br>
        <input type="text" class="no_Hp" placeholder="no hp" name="mitra_hp"/> <br>
        <input type="submit" value="REGISTER"/>
        </form>
       <!-- </div> 
       <div>
        <br><br>
        <?php echo form_open('controller_mitra/Reg_Proces'); ?>
        <form> 
         <input type="submit" value="REGISTER"/>
       </div> -->
    <?php if (isset($error)): ?>
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    <?php endif ?>
       
      </div>  
     </div>   
    </div>
    
   </div>   
  </div>
 </div>  
 <!-- //main --> 
</body>
</html>