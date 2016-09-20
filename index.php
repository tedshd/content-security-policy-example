<?php
header("Content-Security-Policy: script-src 'self';object-src 'none';style-src 'self';child-src 'self' tedse.0fees.net;frame-src 'self' tedse.0fees.net;frame-ancestors 'none';");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>csp Examples</title>
<link href="" rel="stylesheet">
</head>
<body>
<h1>use csp from php header</h1>
<iframe src="iframe.html" frameborder="0"></iframe>
<iframe src="http://tedse.0fees.net/demo/iframe.html" frameborder="0"></iframe>
<iframe src="no_iframe.php" frameborder="0"></iframe>
<pre>
<code>
    header("Content-Security-Policy: script-src 'self';object-src 'none';style-src 'self';child-src 'self' tedse.0fees.net;frame-src 'self' tedse.0fees.net;frame-ancestors 'none';");
</code>
</pre>
<p>test in chrome 52, safari 9.1.3, firefox 48.0.2</p>
<ul>
    <li>script-src 'self' - only self js</li>
    <li>object-src 'none' - no object tag</li>
    <li>style-src 'self' - only self style</li>
    <li>child-src 'self' tedse.0fees.net - only self iframe & tedse.0fees.net domain</li>
    <li>frame-src 'self' tedse.0fees.net - only self iframe & tedse.0fees.net domain for safari browser</li>
    <li>frame-ancestors 'none' - like X-Frame-Options: DENY</li>
</ul>

<a href="javascript:void(0);">javascript:void(0);</a>
</body>
<script src="index.js"></script>
</html>