<html>
<head>
</head>
<body>
<div id="left" style="display:inline-block">
</div>
<div id="right" align="right" style="display:inline-block">
<h1>Welcome<?php if ($USER) { echo " ".$USER; } else { echo " Workshop Participant"; } ?>!</h1>
  <p>Turns out that Heroku is far too secure for me to deploy my super vulnerable app for the workshop (OWASP JS folks are magicians) <br/>
  SO INSTEAD I've got a git project for you to download or git clone, <br/>
    unzip into /var/www/html (rename to dos2019yyz if needed), <br/>
    and then just run ./var/www/html/dos2019yyz/install.sh and you should be all ready to go!</p>
  <p>Your project will run locally at: <a href="http://localhost/dos2019yyz/">http://localhost/dos2019yyz/</a></p>
  <p>Hit me up with any questions and/or we'll get it all set up on Saturday.</p>
  <p>DL THE APP: <a href="https://github.com/kbroussardbf/dos2019yyz/archive/master.zip" alt="master git repo for dos2019yyz">https://github.com/kbroussardbf/dos2019yyz/archive/master.zip</a></p>
</div>
</body>
</html>
