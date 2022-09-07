<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
    margin: 0;
    padding: 0;
}

.logo {
    float: left;
}

/* Footer */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a,
a:hover,
a.focus,
a.active {
    text-decoration: none;
    outline: none;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

li a{
  text-decoration:none;
}

.footer {
    background: linear-gradient(105deg, #000000, #000000);
}

.footer_section h4,
.social_media h4 {
    color: #fff;
    margin-top: 0;
    margin-bottom: 25px;
    font-weight: 700;
    font-size: 20px;
}

.footer_section h4::after,
.social_media h4::after {
    content: "";
    display: block;
    height: 2px;
    width: 40px;
    background: #fff;
    margin-top: 20px;
}


.footer_section ul {
    margin: 0;
    padding: 0;
    list-style: none;
}


.footer_section ul li a {
    color: #fff;
    transition: all .3s ease 0s;
    line-height: 36px;
    font-size: 15px;
}

.footer_section ul li a:hover {
    color: #f1f1f1;
}

.footer_section_contact ul li {
    color: #fff;
}

.search form {
    width: 100%;
    position: relative;
    display: flex;
    margin-bottom: 10px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.contact_input {
    width: 100%;
    border: none;
    padding: 0 0 0 15px;
    height: 60px;
    border-radius: 5px 0 0 5px;
    outline: none;
    color: #999;
    font-size: 16px;
}


.submit_button {
    width: 70px;
    height: 60px;
    font-size: 20px;
    border: none;
    background: #fff;
    text-align: center;
    color: #ff0000;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.social_media ul{
    display: flex;
    justify-content: space-between;
}

.social_media ul li {
    text-align: center;
    line-height: 50px;
    font-size: 16px;
    width: 50px;
    height: 50px;
    border-radius: 5%;
    border: 1px solid #ff0000;
    background-color: #ff0000;
    transition: all .5s ease;
}

.social_media ul li:hover {
    border: 1px solid #ff0000;
    background-color: transparent;
}

.social_media ul li a {
    font-weight: 100;
    color: #fff;
}

@media screen and(max-width:400px) {
    .footer {
        padding: 0 10px;
    }
}

/* ~~ Top Navigation Bar ~~ */

#navigation-container {
    width: 1200px;
    margin: 0 auto;
    height: 100px;

}

.navigation-bar {
    background-color: #ffffff;
    height: 100px;
    width: 100%;
    text-align: center;
}

.navigation-bar img {
    float: left;
    margin-top: 15px;
    margin-bottom: 5px;
}

.navigation-bar ul {
    padding: 0px;
    margin-top: 15px;
    text-align: center;
    display: inline-block;
    vertical-align: top;
}

.navigation-bar li {
    list-style-type: none;
    padding: 0px;
    height: 24px;
    margin-top: 4px;
    margin-bottom: 4px;
    display: inline;
}

.navigation-bar li a {
    color: black;
    font-size: 18px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    text-decoration: none;
    line-height: 70px;
    padding: 5px 15px;
    opacity: 1.0;
}

.book {
    float: right;
    background-color: #ff0000;
    height: 80px;
    display: inline-flex;
    align-items: flex-end;
    font-size: 16px;
    border-radius: 0;
    margin-right: 40px;
}
.txt{
    color: rgb(255, 255, 255);
    background-color: #ff0000;
    font-size: 14px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    text-decoration: none;
    text-align: left;
}
.sponser{
    color: rgb(255, 255, 255);
    font-size: 14px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    text-decoration: none;
    text-align: left;

}


.square-holder {
    padding:10px;
    border: 1px solid #ffffff;
    align-items: center;
    display:flex;
    align-items: center;
    justify-content: center;
    margin-bottom:20px;
    background-color:#ffffff;
    min-height:150px
  }
  
  .square-holder img {
    max-width:100%;
  }
  
/* Slider */
.slick-slider
{
position: relative;

display: block;
box-sizing: border-box;

-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
    user-select: none;

-webkit-touch-callout: none;
-khtml-user-select: none;
-ms-touch-action: pan-y;
touch-action: pan-y;
-webkit-tap-highlight-color: transparent;
}

.slick-list
{
position: relative;

display: block;
overflow: hidden;

margin: 0;
padding: 0;
}
.slick-list:focus
{
outline: none;
}
.slick-list.dragging
{
cursor: pointer;
cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
 -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.slick-track
{
position: relative;
top: 0;
left: 0;

display: block;
margin-left: auto;
margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
display: table;

content: '';
}
.slick-track:after
{
clear: both;
}
.slick-loading .slick-track
{
visibility: hidden;
}

.slick-slide
{
display: none;
float: left;

height: 100%;
min-height: 1px;
}
[dir='rtl'] .slick-slide
{
float: right;
}
.slick-slide img
{
display: block;
}
.slick-slide.slick-loading img
{
display: none;
}
.slick-slide.dragging img
{
pointer-events: none;
}
.slick-initialized .slick-slide
{
display: block;
}
.slick-loading .slick-slide
{
visibility: hidden;
}
.slick-vertical .slick-slide
{
display: block;

height: auto;

border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
display: none;
}
.clients {
padding: 15px 0;
text-align: center;
}
.clients-bg {
background-color: #ffffff;
}
.clients img {
max-width: 45%;
transition: all 0.4s ease-in-out;
display: inline-block;
padding: 15px 0;
}
.clients img:hover {
transform: scale(1.15);
}
@media (max-width: 768px) {
.clients img {
max-width: 40%;
}}

#clients .card {
position: relative;
display: flex;
width: 120px;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
/*border: 1px solid #e8e8ee;
border-radius: 11px;
-webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
-moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)*/
}
#clients .card .card-body {
padding: 0.5rem 1rem
}
#clients .card-body {
flex: 1 1 auto;
padding: 1.25rem
}
#clients .logo {
height: 120px;
}
#clients .items {
/*width: 90%;*/
margin: 0px auto;
}
#clients .slick-slide {
margin: 10px
}
/*#clients .slick-arrow {
background: #14629c;
border-radius: 50%;
}*/

@media only screen and (max-width: 999px){
#clients .items {
  width: 90%;
}}/*cliet slider*/

section {
    padding: 20px 0;
  }

  .clients-bg {
    background-color: #ffffff;
  }

  .section-title {
    text-align: center;
    padding-bottom: 10px;
  }

  .section-title h2 {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 10px;
    position: relative;
  }

  .section-title h2::before {
    content: '';
    position: absolute;
    display: block;
    width: 120px;
    height: 1px;
    background: #ddd;
    bottom: 1px;
    left: calc(50% - 60px);
  }

  .section-title h2::after {
    content: '';
    position: absolute;
    display: block;
    width: 40px;
    height: 3px;
    background: #2ca856;
    bottom: 0;
    left: calc(50% - 20px);
  }

  .section-title p {
    margin-bottom: 0;
    font-size: 14px;
    color: #919191;
  }
    </style>
    <title>GTF 2022</title>
</head>
<body>
    <div>
        @include('header')
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/banner.png') }}" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/img/modal.png') }}" alt="" />

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color:red">
        <div class="container" style="padding-top:2rem">
            <div class="col-12 row">
                <div class="col-6 txt">
                    <h1>Guwahati Theatre Festival</h1>
                    <p>The Guwahati Theatre Festival aims to showcase world-class performances with quality
                        entertainment, working towards becoming a prestigious landmark in the cultural landscape of
                        Guwahati.
                        The idea
                        of the festival is to bring spectrum of plays from all over india to allow audiences in Guwahati
                        to get
                        a feel
                        of how production works and what kind of innovation are taking place in the outside theatres
                        which are
                        not from
                        Assam.</p>

                    <p>The one-of-a-kind event aims to provide a platform in the region for diverse range of world class
                        performing
                        groups, local as well as national, to showcase their performances amongst new audiences infusing
                        freshness and
                        vivacity. The annual festival, now in its second year, visions to create a dynamic platform
                        bringing new
                        and
                        dynamic voices & performances to the stage. The festival has fulfilled the avid appetite of the
                        city to
                        experience and understand the relevance of theatre; in context of our human relationships,
                        culture and
                        stereotypes.</p>
                    <a href="#festival_div" class="text-light">More Info</a>
                </div>
                <div class="col-6 txt" style="padding:2px">
                    <div class="col-12">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                    </div>
                    <div class="col-12"><img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px"
                            width="120px">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                    </div>
                    <div class="col-12"><img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px"
                            width="120px">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                        <img src="{{ asset('assets/img/sample.jpg') }}" alt="" height="100px" width="120px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('book')

    <section id="clients" class="clients-bg mt-3">
        <div class="container">
            <div class="slick-carousel">
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://www.ncs.gov.in/" target="_blank" rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/ncs.png"></a></div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://www.india.gov.in/" target="_blank"
                            rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/india-portal.jpg"></a>
                    </div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://www.makeinindia.com/" target="_blank"
                            rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/make-in-india.jpg"></a>
                    </div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://www.mygov.in/" target="_blank" rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/my-gov.jpg"></a></div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://pmnrf.gov.in/en/" target="_blank"
                            rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/pmnrf.jpg"></a></div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://www.digitalindia.gov.in/" target="_blank"
                            rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/digital.png"></a>
                    </div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://www.pmindia.gov.in/en/" target="_blank"
                            rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/pm-india.jpg"></a>
                    </div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://swachhbharat.mygov.in/" target="_blank"
                            rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/swachhbharat.jpg"></a>
                    </div>
                </div>
                <div class="card align-items-center">
                    <div class="card-body"><a href="https://eci.gov.in/" target="_blank" rel="noopener noreferrer"
                            onclick="return confirm('You are being redirected to an external website.')"><img
                                class="logo"
                                src="https://employment.assam.gov.in/assets/img/footer-slider/eci.png"></a></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @include('slick')
    @include('sponser')
   
    @include('festival')
    @include('vision')
    @include('organiser')
    @include('footer')
    <script>
        $(window).ready(function() {
            setTimeout(function() {
                $('#modal-subscribe').modal("show")
            }, 3000)
        });
    </script>



</body>

</html>
