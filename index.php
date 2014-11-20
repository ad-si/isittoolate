<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Is it too late?</title>
	<meta name="description" content="Is it too late?" />
	<meta name="keywords" content="Is it too late?" />


	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="icon" href="favicon.png" type="image/png" />


</head>

<body>

<?php

$data = array(
"go to rehab"							=> "0",
"save Greece from the bankrupt" 		=> "1",
"have a beer with Osama Bin Laden"		=> "0",
"stop global warming"					=> "2",
);

foreach( $data as $question => $number ){
	echo '<h1>Is it too late to '.$question.'?</h1>';
	
	if($number == 0){
		echo'<h2>Yes</h2>';
		//echo'<div class="ampel yes"></div><div class="ampel"></div><div class="ampel"></div>';
	}elseif($number == 1){
		echo'<h2>Maybe</h2>';
		//echo'<div class="ampel"></div><div class="ampel maybe"></div><div class="ampel"></div>';
	}else{
		echo'<h2>No</h2>';
		//echo'<div class="ampel"></div><div class="ampel"></div><div class="ampel no"></div>';
	}
}


?>

<div id="footer">
	<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.isittoolate.com&amp;layout=button_count&amp;show_faces=false&amp;width=450&amp;action=recommend&amp;font&amp;colorscheme=light&amp;height=21"
		 style="border:none; overflow:hidden; width:120px; height:21px;">
	</iframe>
	
	<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="AdrianSieber">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js">
	</script>
	
	<p>
		An <a href="http://www.adriansieber.com" title="Adrian Sieber">Adrian Sieber</a> production
	</p>

	
</div>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.adriansieber.com/" : "http://piwik.adriansieber.com/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 4);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.adriansieber.com/piwik.php?idsite=4" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>
