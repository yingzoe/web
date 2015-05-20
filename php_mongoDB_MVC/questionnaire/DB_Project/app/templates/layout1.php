<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    
    <head>
    <title>QandA.com</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../web/css/style.css" />
        <script type="text/javascript" src="../../web/js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="../../web/js/css/jquery.ketchup.css" />
    <script type="text/javascript" src="../../web/js/jquery.ketchup.all.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
					
					
				$.ketchup.message('required', 'This is an obligatory field.');				
				  $('#login').ketchup();
				});

</script>
    </head>
    
    <body>
        <div id="global">
            <div id="header">
                <img src="../../web/img/logo.png"  style="float:left;"/>
            </div>
            
            <div id="area">
                <div id="containerLogin">
                    <?php echo $content ?>
                       
                </div>
                            
                    <div id="footer">
                     </div>
            
        
            </div>
    </body>
    
</html>