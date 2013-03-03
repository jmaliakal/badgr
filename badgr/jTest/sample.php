<!DOCTYPE html> 
<html> 
	<head> 
	<title>BADGR Example</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc3/jquery.mobile-1.0rc3.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0rc3/jquery.mobile-1.0rc3.min.js"></script>
</head> 
<body> 

<div data-role="page" id="index">

	<div data-role="header">
		<div align="center">
			<img src="../logo/badgr100w.png" style="height: 50px; width: 150px;"></img>
		</div>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Page content goes here.</p>		
	</div><!-- /content -->

	<footer data-role="footer" class="ui-body-b">  
    <div data-role="navbar">  
        <ul>  
            <li><a href="#">Download vCard</a></li>  
            <li><a href="#semail">Send in Email</a></li>
        </ul>  
    </div>  
</footer>  
</div><!-- /index -->

<div data-role="page" data-add-back-btn="true" id="semail">
	<div data-role="header">
		<div align="center">
			<img src="../logo/badgr100w.png" style="height: 50px; width: 150px;"></img>
		</div>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Page content goes here.</p>		
	</div><!-- /content -->
</div><!-- /semail -->

</body>
</html>
