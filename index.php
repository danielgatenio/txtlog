<?include 'txtlog.php'; $t = new txtlog($_GET['url']);?>
<!DOCTYPE html>
<meta name="ROBOTS" content="INDEX,FOLLOW">
<meta name="description" content="obsessive documentarian">
<meta name="keywords" content="art daniel gatenio photo">
<html><meta name="viewport" content="width=device-width"><meta charset="utf-8" />
<head><title><?$t->title()?></title>
<link rel="stylesheet" type="text/css" media="screen" href="/txtlog/style.css">
<link rel="stylesheet" type="text/css" href="/txtlog/type.css">
<link rel="stylesheet" type="text/css" media="print" href="/txtlog/print.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5693759-7', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</head><body><a href="/"><div id=head><span class="headtext" title="back">daniel gatenio</span></div>
	
	
</a>
<?$t->menu()?>
<center><? $t->text() ?></center>
<div id="footer""><a href="about">about/contact</a></div>
</body></html>
