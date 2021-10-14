<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Page</title>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1298297157256332');
  fbq('init', '891482241535644');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none" 
       src="https://www.facebook.com/tr?id=1298297157256332&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>

<ul>
	<li><button onclick="fbq('track', 'ViewContent'); alert('ViewContent event fired')"><h3>View Content</h3></button></li>
	<li><button onclick="fbq('track', 'AddToCart'); alert('AddToCart event fired')"><h3>Add to Cart</h3></button></li>
	<li><button onclick="fbq('track', 'Purchase', {currency: 'USD', value: 30.00}); alert('Purchase event fired')"><h3>Purchase</h3></button></li>
</ul>


</body>
</html>
