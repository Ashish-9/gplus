<script>
                $(document).ready(function() {
                    $('.slick-carousel').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        responsive: [{
                                breakpoint: 1140,
                                settings: {
                                    slidesToShow: 6,
                                    slidesToScroll: 3,
                                    infinite: true,
                                    dots: true
                                }
                            },
                            {
                                breakpoint: 960,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 720,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            }
                            // You can unslick at a given breakpoint now by adding:
                            // settings: "unslick"
                            // instead of a settings object
                        ]
                    });
                });
            </script>