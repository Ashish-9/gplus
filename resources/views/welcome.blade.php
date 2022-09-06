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
    <link href="{{ asset('assets/img/style.css') }}" rel="stylesheet">
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
                    <a href="#" class="text-light">More Info</a>
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
