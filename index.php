<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="stb.jpg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="stt.jpg" type="image/x-icon">
    <meta name="keyword" content="website developer,
website developer in bhubaneswar,
website developer near me,website developer agency,website developer bangalore,
website developer business,best website developer,top website developer agency,top 10 website making agency,
top 10 website developer agency,website design agency,best website design agency,
website developer company,best website developer company,fullstack web developer,
website developer company in india,website developer agency in india.">
    <title>Website developer</title>
    <link rel="stylesheet" href="siderrr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id="sticky">
        <img src="penc.jpg" class="banner">
        <H6 id="pree-logo">Sattan-B</H6>
        <a href="#" class="logo">WEB DEVELOPER</a>
        <H6 id="post-logo">Let's work together</H6>
        <nav>
            <ul class="ul">
                <li><a id="homoo" href="#">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">service</a></li>
                <!-- <li><a href="#">portfolio</a></li> -->
                <li><a href="about.php">team</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
            <div class="logo-bar"><i class="fas fa-align-justify"></i></div>
        </nav>
    </header>
    <div class="main-box">
        <div class="card-one">
            <div class="img">
                <img src="twoim.jpg" alt="">
                <img src="threeim.jpg" alt="">
            </div>
            <div class="text">
                <h2>Welcome <br> <span>to our website
                    </span></h2>
            </div>
        </div>
        <div class="container">
            <div class="black-box">
                <h1>CREATIVE DESIGN</h1>
                <p>Website is the face of your business.make your brand look its best
                    with stunning web page design.
                </p>
            </div>
            <div class="card-wraper">
                <div class="card">
                    <div class="front-card">
                        <div class="content">
                            <h1></h1>
                        </div>
                    </div>
                    <div class="back-card">
                        <div class="content">
                            <h1>sattan-B</h1>
                            <p>We do not just web design, we develop the web page. Here you get responcive & attractive
                                design whitch will help you a
                                lot in your business.</p>
                            <!-- <button>click me</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="small-box">
        <div class="bb-box reveal">
            <h1>What We Do</h1><br>
            <p>We provide a full suite of web design and development services, with special care for mobile. We offer
                everything your
                brand needs for digital marketing, too.
                we use HTML,CSS,JAVASCRIPT for frontend & PHP for backend.
            </p>
        </div>
        <div class="bh-box1"></div>
        <div class="bh-box2"></div>
        <div class="blor-b">
            <!-- <img src="snnow.png" height="50%" alt=""> -->

        </div>

        <div class="ana-box"></div>
    </div>
    <div class="b-box">
        <!-- <img src="plum.jpg" alt=""> -->
        <div class="imo">
            <img src="plum.jpg" alt="">
        </div>
    </div>
    <div class="last-box">
        <div class="col-box reveall">
            <p>We will design every aspect of your website. <br> Based on personal feel and business needs we will
                select the
                right template for you. these templates are designed by us. <br>
                Home page elements are identified and kept to ensure that the full business feel is given without
                creating a clutter.</p>
        </div>
        <!-- <biv class="bit-box">
            <div class="bottomm" id="f-btn">button</div>
            <div class="bottomm" id="b-btn">button</div>
        </biv> -->
        <div class="threem">
            <!-- <img src="snow.png" alt=""> -->
            <div class="extr-box">
                <h2>GET IN TOUCH</h2>
                <p>We're only one step away.always ready to asist you.</p>
                <p>We always vlue the clients. And dedicatedly work their Project</p>
                <biv class="bit-box">
                    <div class="bottomm" id="f-btn"><a class="klinton" href="contact.php">Contact Us</a></div>
                    <!-- <div class="bottomm" id="b-btn">button</div> -->
                </biv>
            </div>
        </div>
    </div>
    <footer>
        <div class="fm-box">
            <div class="f-col">
                <h3>Sattan.b</h3>
                <p><a href="about.php">About Us</a></p>
                <p><a href="about.php">Patnership</a></p>
                <p>Contributer Project</p>
            </div>
            <div class="s-col">
                <h3>Help</h3>
                <p><a href="contact.php">Help Center</a></p>
                <p><a href="contact.php">Contact Us</a></p>
            </div>
            <div class="t-col">
                <div class="upt-col">
                    <h3>Legal</h3>
                    <p>Term of Service</p>
                    <p>Privecy Policy</p>
                </div>
                <div class="dt-col"></div>
                <div class="logon">
                    <div class="fbb" id="fb">fb</div>
                    <div class="fbb" id="inst">insta</div>
                    <!-- <div class="inst"></div> -->
                </div>
            </div>

        </div>
        <div class="copy-r">
            <p> &#169; Copyright 2021</p>
            <p>All Rights Reserved</p>
        </div>
    </footer>
    <div class="stickk">
        <i class="fas fa-arrow-up"></i>

    </div>
    <script>
        window.addEventListener("scroll", function () {
            const header = document.querySelector("#sticky");
            header.classList.toggle('sticky', window.scrollY > 0);
        })

        let stickk = document.querySelector(".stickk")
        stickk.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth"
            })
        })
        window.addEventListener('scroll', reveal);

        function reveal() {
            let reveal = document.querySelectorAll('.reveal');
            let reveall = document.querySelectorAll('.reveall')
            // console.log(reveal);
            for (let i = 0; i < reveal.length; i++) {

                let windowheight = window.innerHeight;
                let revealtop = reveal[i].getBoundingClientRect().top;
                let revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveal[i].classList.add('active');
                } else {
                    reveal[i].classList.remove('active');
                }
            }

            for (let i = 0; i < reveall.length; i++) {

                let windowheight = window.innerHeight;
                let revealtop = reveall[i].getBoundingClientRect().top;
                let revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveall[i].classList.add('active');
                } else {
                    reveall[i].classList.remove('active');
                }
            }

        }

        let logo = document.querySelector('.logo-bar');
        let ul = document.querySelector('.ul')

        logo.addEventListener('click', function () {
            ul.classList.toggle('ull')
        })

    </script>
</body>

</html>