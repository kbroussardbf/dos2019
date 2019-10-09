<html>
<head>
</head>
<body>
<div id="left" style="display:inline-block">
</div>
<div id="right" align="right" style="display:inline-block">
<h1>Welcome<?php if ($USER) { echo " ".$USER; } else { echo " Workshop Participant"; } ?>!</h1>
  <p>Turns out that Heroku is far too secure for me to deploy my super vulnerable app for the workshop (OWASP JS folks are magicians) <br/>
    SO INSTEAD I've got a git project for you to download or git clone into your Kali VM: <br/> 
    cd /var/www/html && git clone https://github.com/kbroussardbf/dos2019.git<br/>
    (or unzip downloaded dir into /var/www/html and rename to dos2019 if needed), <br/>
    and then chmod +x /var/www/html/dos2019/install.sh<br/>
    and /var/www/html/dos2019/install.sh and you should be all ready to go!</p>
  <p>Your project will run locally at: <a href="http://localhost/dos2019/">http://localhost/dos2019/</a></p>
  <p>Hit me up with any questions and/or we'll get it all set up on Friday.</p>
  <p>DL THE APP: <a href="https://github.com/kbroussardbf/dos2019/archive/master.zip" alt="master git repo for dos2019">https://github.com/kbroussardbf/dos2019/archive/master.zip</a></p>
  <p>GIT CLONE: cd /var/www/html && git clone https://github.com/kbroussardbf/dos2019.git
</div>
</body>
</html>
