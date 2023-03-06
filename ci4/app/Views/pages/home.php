<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesswitcher.js">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <title>JJ</title>
    <script src="stylesswitcher.js"></script>
</head>
<body>
    <main>
        
        <header>
            <nav>
                <ul>
                    <li><a href="#Contact">CONTACT</a></li>
                    <li><a href="#Sports">SPORTS</a></li>
                    <li><a href="#About">ABOUT</a></li>
                    <li><a href="#Home">HOME</a></li>
                    <li style="float:left"><a  href="#Home">
                              <img src="img/logo.png" width="25px" height="25px" overflow="hidden" margin-top="-6px" margin-left="10px"></a></li>
                  </ul> 
            </nav>
        </header>

        <!-- HERO SECTION -->
        <div id="Home">
        <section class="hero-section">
            
            <!-- Text section -->
            <div class="hero-text-container">
                <span style="cursor: pointer;"><a href="#" class="fa fa-facebook"></a></span>
                <span style="cursor: pointer;"><a href="#" class="fa fa-instagram"></a></span>
                <span style="cursor: pointer;"><a href="#" class="fa fa-youtube"></a></span>

                <p class="hero-p1-tag">WELCOME TO MY WEBSITE</p>
                <h1 class="hero-h1-tag">Hello, I'm Jonathan Joseph Archog</h1>
                <h2 class="hero-h2-tag">But you can call me Jj</h2>
                
                <p class="hero-p2-tag">This website is my personal website. You may see here information about me, 
my achievements, my sports, and my contact information. I am willing to learn new things, work
with what I have learned, and also teach the things I've learned.  
If you wish to hire me, please don't hesitate to contact me through the given information.
&#128516</p>
 
            </div>

            <!-- Image -->
            <div class="hero-image-container">
                <img src="img/hero-shot.png" alt="sfsfsk" width="500" height="auto">
            </div>
        </section>
</div>
        <!--ABOUT-->
    <div id="About">
        <section class="about-section">
            <div class="about-text-container">
                
            <h2 class="sports-h2-tag">ABOUT ME</h2>
              <p class="about-p1-tag">
                Birthdate: ********<br>
                Age: 20<br>
                Sex: Male<br>
                Address: ** ** ****<br>
                City: *****<br>
                Region: National Capital Region<br>
                Country: Philippines<br><br><br>

                ~ Successfully Developed Apache WebServer on CentOS7<br>
                ~ Successfully Developed BIND DNS WebServer on CentOS7<br>
                ~ Successfully Installed Zimbra Collaboration Mail Server on CentOS7<br><br><br>
                
                Countries Visited:<br>
                Australia<br>
                Malaysia<br>
                South Korea<br>
                United States of America</p>
            </div>

            <div class="about-image-container">
                    <img src="img/cave.jpg"  width="300" height="auto" border-radius="30%">
            </div>
        </section>
    </div>

    <div id="Sports">
        <section class="sports-section">
            <h2 class="sports-h2-tag">MY SPORTS</h2><br>
            <div class="sports-image-container">
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/Tres.png">
                        <img src="img/Tres.png" alt="Tres" width="250" height="auto">
                    </a>
                <div class="desc">Three Points - BasketBall</div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/Layup.png">
                        <img src="img/Layup.png" alt="Layup" width="300" height="auto">
                    </a>
                <div class="desc">Layup - BasketBall<br></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/block.png">
                        <img src="img/block.png" alt="Block" width="180" height="auto">
                    </a>
                <div class="desc">Three Man Block - BasketBall</div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/tbt.JPG">
                        <img src="img/tbt.JPG" alt="Table Tennis" width="250" height="auto">
                    </a>
                <div class="desc">Table Tennis</div>
                </div>
            </div>
            </div>
        </section>
    </div>

        <!--FORM-->
        <div class="contbtn">
                    <a href="/lab3/ci4/public/comments/" class="contact-btn">Feedbacks Here</a>
            </div>
        </main>
    </main>
</body>
</html>