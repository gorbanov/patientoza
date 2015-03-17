<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>PATIENTOZA</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div class="wrapper">
            <div class="topnav"></a></div>
            <font color = "silver"><br />
                <center><table border = "1"><td><div class="bannerbg"><img src="images/logo_.jpg" alt="logo" width="465" height="270" border="1" /></a></div></td></table><br /></center>
                <div class="subbannerbgleft"><center><br /><br /><div class="fb-like" data-href="https://www.facebook.com/Patientoza" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
                <div class="subbannerbgmiddle"><br /><br />
                    <a href="https://bg-bg.facebook.com/Patientoza" target= "blank">Ashes Of Problem Patients</a>
                </div>
                <div class="subbannerbgright"><br /><br /><center>
                        <a href="logout.php">Logout</a><br /><br />
                        <a href="registration.php">Registration</a></div>
                <div class="content">
                    <div class="leftcolumn">
                        <h2>Navigation</h2>
                        <div class="underh2">
                            <div id="navvy">
                                <ul id="navvylist">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="video.php">Video</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <h2> News </h2>
                        <div class="underh2"></div>
                    </div>
                    <div class="rightcolumn">
                        <div class="mainheadingbg">
                        </div>
                        <div class="writtencontent">
                        {block name=body}{/block}
                    </div>
                    <div class="writtencontent">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="footer">
                <div class="footerlogo"><a href="login.php">Login</a></div>
            </div>
    </div>
    <div align=center>This site is created by <a href='http://hakim.portfoliobox.me' target= "blank">Lubaka</a></div></body>
</html>
