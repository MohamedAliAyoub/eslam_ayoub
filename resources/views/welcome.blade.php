<!doctype html>
<html lang="en">
<head>
    <title>Eslam Ayoub</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
          integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css ')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css ')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css ')}}"></link>
</head>
<body style="overflow: hidden;" dir="rtl">

<!-- Loader -->
<section class="loader">
    <video autoplay muted loop autobuffer playsinline id="header_Video" class="w-100 h-75" style="position: relative;">
        <source src="{{asset('assets/videos/loader.mp4 ')}}" type="video/mp4">
    </video>
</section>

<!-- Header Section -->
<section class="header" id="header" style="overflow: hidden;height: 100vh;position: relative;">
    <!-- Header Video -->
    <video autoplay muted loop autobuffer playsinline id="header_Video" class="w-100">
        <source src="{{asset('/storage/'.$video)}}" type="video/mp4">
    </video>
    <!-- Header Content-->
    <div class="header_content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a id='whiteLogo' href="/" class="custom-logo-link" rel="home" aria-current="page"><img width="120px"
                                                                                                        src="{{asset('assets/images/logoW.png ')}}"
                                                                                                        class="custom-logo"
                                                                                                        alt="?????????? ????????"
                                                                                                        sizes="(max-width: 917px) 100vw, 917px"></a>
                <a id='blueLogo' class="d-none" href="/" class="custom-logo-link" rel="home" aria-current="page"><img
                        width="120px" src="{{asset('/storage/'.setting('site.logo'))}}" class="custom-logo"
                        alt="???????? ????????" sizes="(max-width: 917px) 100vw, 917px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#header">????????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">???????????? ??????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactUs">?????????? ??????</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="text-center">
                <h1 class="header_content_title"> {{ setting('site.title') }} </h1>
                <p class="header_content_desc">{{ setting('site.description') }} </p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container my-5">
        <div class="row">

            <div class="col-md-5 col-sm-12 h-auto mb-5 pr-4">

                <div class="about-border m-auto">

                    <div class="about-image  position-relative">
                        <img src="{{asset('/storage/'.setting('site.section_b_image'))}}" class="h-100 w-100 img-fluid">
                        <div class="layout2 w-100 h-100 d-flex justify-content-center align-items-center">
                            <a href="{{setting('site.whatsapp')}}"> <i
                                    class="fa fa-whatsapp icon text-white"></i> </a>
                            <a href="setting('site.behance')"> <i class="fa fa-behance   icon text-white"></i> </a>
                            <a href="{{setting('site.footer_linkedin')}}"> <i
                                    class="fa fa-linkedin icon text-white"></i> </a>
                            <a href="setting('site.footer_tweter')"> <i class="fa fa-twitter  icon text-white"></i> </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-7 col-sm-12 pl-4 mt-1 pt-3">
                <h1 class="mb-3 font-weight-bold"><span class="I">{{setting('site.section_b_name')}}</span></h1>


                <div id="typed-strings" class="d-none">
                    <p> {{setting('site.section_b_description')}} </p>
                </div>
                <span class="text-muted mb-3 I summary" id="typed"></span>

                <hr style="background-color: #263d66 !important;">
                <div class="row">

                    <div class="col-md-6 col-sm-12 text-left">
                        <p class="font-weight-bold I"> ?????????? :
                            <span class="font-weight-light text-muted"> {{setting('site.section_b_name')}} </span></p>
                        <p class="font-weight-bold I"> ???????? :
                            <span class="font-weight-light text-muted"> {{setting('site.section_b_age')}}?????? </span></p>
                        <p class="font-weight-bold I"> ?????????? ???????? :
                            <span class="font-weight-light text-muted"> {{setting('site.section_b_freelance')}} </span>
                        </p>
                    </div>

                    <div class="col-md-6 col-sm-12 text-left">
                        <p class="font-weight-bold I"> ?????????????? :
                            <span class="font-weight-light text-muted">  {{setting('site.section_b_job')}}</span></p>
                        <p class="font-weight-bold I"> ???????????? :
                            <span class="font-weight-light text-muted">  {{setting('site.section_b_country')}} </span>
                        </p>
                        <p class="font-weight-bold I"> ???????????? ???????????????????? :
                            <span class="font-weight-light text-muted"> {{setting('site.section_b_email')}}</span></p>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <a hred="{{  asset(setting('site.section_b_cv')   )  }}" download>
                        <button class="btn  text-white p-2 m-2"> ?????????? ???????????? ?????????????? <i
                                class="fa fa-download ml-1"></i></button>
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Section Services -->
<section class="services py-5" id='services'>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 my-3">
                <h2 class=" text-center services-section-title"><span>????????????</span></h2>
            </div>
            <div class="owl-carousel" id='firstCarsual'>
                @foreach($items  as $item)
                    <div class="border border-white m-3 p-2">
                        <div class="text-center">
                            <img src="{{asset('storage/'.$item->logo)}}" class="image-fluid w-50 mx-auto">
                            <h3 class="service-title mt-3">{{ $item->name }}</h3>
                            <h5 class="service-desc mt-3"> {{ $item->description }}</h5>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>

<!-- Section numbers -->
<!--<section class="numbers py-lg-5 py-1">-->
<!--    <div class="container">-->
<!--        <div class="row mx-auto justify-content-around align-items-center numbersContainer">-->

<!--            <div class="col-6 col-lg-3   text-center my-3 my-md-0">-->
<!--                <h4 class="numberTitle">?????? ?? ??????????</h4>-->
<!--                <h2 class="numberValue"><span class="countfect" data-num="1200"></span></h2>-->
<!--            </div>-->

<!--            <div class="col-6 col-lg-3 text-center my-3 my-md-0">-->
<!--                <h4 class="numberTitle">?????????? ?? ????????????</h4>-->
<!--                <h2 class="numberValue"><span class="countfect" data-num="1200"></span></h2>-->
<!--            </div>-->

<!--            <div class="col-6 col-lg-3  text-center my-3 my-md-0">-->
<!--                <h4 class="numberTitle">???????? ??????????????</h4>-->
<!--                <h2 class="numberValue"><span class="countfect" data-num="1200"></span></h2>-->
<!--            </div>-->

<!--            <div class="col-6 col-lg-3  text-center my-3 my-md-0">-->
<!--                <h4 class="numberTitle">?????????? ????????????</h4>-->
<!--                <h2 class="numberValue"><span class="countfect" data-num="1200"></span></h2>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Section Projects -->
<section class="projects py-5" id='projects'>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 my-3">
                <h2 class="text-center projects-section-title"><span>????????????</span></h2>
            </div>

            <div class="col-12 mb-3 d-flex justify-content-center categoriesBar">
                <button class="btn active filter" data-id="0" data-value="{{$products}}"> ????????????</button>
                @foreach($items as $item)
                    <button class="btn filter" data-id="{{$item->id}}"
                            data-value="{{$products}}"> {{$item->name}} </button>
                @endforeach
            </div>
            <div class="col-12">
                <div class="owl-carousel" id="secondCarsual">
                    @foreach($products as $item)
                        <div class="mb-3 position-relative"
                             onclick="openViewModal('{{$item->video}}',  '{{json_encode($item->images)}}', '{{$item->url}}')">
                            <div class="image position-relative overflow-hidden text-center"
                                 data-itemId="{{ $item->id }}">

                                @if(isset($item->images[0]->image ))
                                    <img src="{{asset('storage/'.$item->images[0]->image) }}" alt="picture 1"
                                         class="img-fluid">
                                @else
                                    <img src="{{asset('/storage/images/March2021/portfolio-1.jpg')}}" alt="picture 1"
                                         class="img-fluid">
                                @endif

                                <div class="img-card p-2 text-center w-75 m-auto position-absolute">
                                    <h6 class="font-weight-bold"> {{ $item->name }} </h6>
                                    <small> {{ $item->service->name }} </small>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Modal To View  -->
<div class="modal fade p-0" id="projectView" tabindex="-1" role="dialog" aria-labelledby="projectView"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modalLogo">
            <video autoplay muted loop autobuffer playsinline id="header_Video" class="w-50 h-50 mx-auto"
                   style="position: relative;">
                <source src="assets/videos/loader.mp4" type="video/mp4">
            </video>
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">?????? ??????????</h5>
                <button type="button" class="close" onclick="closeViewModal()">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-9 projectVideoContainer">
                        <h3> ?????????? ??????????</h3>
                        <div class="projectVideo">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/kmssJlr2qAs"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-9 projectImagesContainer">
                        <h3> ?????? ??????????</h3>
                        <div class="owl-carousel border border-white p-2">

                        </div>
                    </div>
                    <div class="col-9 mt-3 projectUrlContainer">
                        <h3>???????? ??????????</h3>
                        <h6><a href="https://www.google.com/" class="projectLink" target="_blank">
                                https://www.google.com </a></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Section contactUs -->
<form method="post" action="{{route('contact_us')}}">
    <section class="contactUs py-5" id='contactUs'>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 my-3 py-1">
                    <h2 class="text-center contactUs-section-title"><span>?????????? ??????</span></h2>
                </div>

                @csrf
                <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                    <input name="name" class="form-control" type="text" placeholder="??????????" required
                           oninvalid="this.setCustomValidity('???????? ?????????? ?????????? ????????????')">
                </div>

                <div class="col-lg-4 col-md-4  col-sm-12 mt-3">
                    <input name="email" class="form-control" type="email" placeholder="???????????? ????????????????????" required
                           oninvalid="this.setCustomValidity('???????? ?????????? ???????????? ???????????????????? ????????????')">
                </div>

                <div class="col-lg-4 col-md-4  col-sm-12 mt-3">
                    <input name="subject" class="form-control" type="text" placeholder="??????????????" required
                           oninvalid="this.setCustomValidity('???????? ??????????  ??????????????')">
                </div>

                <div class="col-sm-12 mt-3">
                    <textarea name="message" class="form-control" placeholder=" ????????????" rows="4s" required
                              oninvalid="this.setCustomValidity('???????? ?????????? ???????????? ')"></textarea>
                </div>

                <div class="col-sm-12 text-center mt-3">
                    <button class="btn text-white p-2 messageSendBtn"> ?????????? ??????????????</button>
                </div>

            </div>
        </div>
</form>

</section>

<!-- Section Footer -->
<section class="footer py-3">
    <div class="container">
        <div class="row justify-content-between align-items-center text-center">

            <div class="col-md-3 col-12">
                <a href="{{setting('site.whatsapp')}}"> <i
                        class="fa fa-whatsapp icon text-white"></i> </a>
                <a href="setting('site.behance')"> <i class="fa fa-behance   icon text-white"></i> </a>
                <a href="{{setting('site.footer_linkedin')}}"> <i
                        class="fa fa-linkedin icon text-white"></i> </a>
                <a href="setting('site.footer_tweter')"> <i class="fa fa-twitter  icon text-white"></i> </a>
            </div>


            <div class="col-md-3 col-12">
                <h6 class="text-white"> ????
                    ?????????????? ???????????? <a href="http://eslamayoub.com/public/" class="designer">
                        ?????????? ???????? </a></h6>
            </div>

            <div class="col-md-3 col-12">
                <h6 class="text-white"> ?? 2021 ?????????? ????????. ???? ???????????? ????????????. </h6>
            </div>

        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
        integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/scripts/owl.carousel.min.js ')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="{{asset('assets/scripts/script.js ')}}"></script>

<script>
    $('#projectView').on('show.bs.modal', function (event) {


        var button = $(event.relatedTarget)
        //var title = button.data('mytitle')
        var item_id = button.data('itemId')
        console.log(item_id);


        var modal = $(this)

        modal.find('.modal-body #item_id').val(item_id);
    });

    function htmlEncode(html) {
        if (html === undefined || html === null || html.length === 0)
            return html;
        return html.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
    }

    $('.filter').click(function () {
        let products = new Array();
        var product = $(this).data('value');
        var id = $(this).data('id');
        if (id != 0) {
            products = product.filter(function (element) {
                return element.service_id == id;
            });
        } else {
            products = product;
        }
        let productsTemp = "";
        $('#secondCarsual').html('');
        products.forEach(element => {
            productsTemp += `<div class="mb-3 position-relative" onclick="openViewModal('${htmlEncode(element.video)}',  '${htmlEncode(JSON.stringify(element.images))}', '${htmlEncode(element.url)}')"><div class="image position-relative overflow-hidden text-center" data-itemId="${element.id}">`
            if (element.images[0].image !== '') {
                console.log(
                    element.images[0].image
                )
                productsTemp += "<img src='http://127.0.0.1:8000/storage/" + element.images[0].image + "' alt='picture 1' class='img-fluid'>";
            } else {
                productsTemp += `<img src="{{asset('/storage/images/March2021/portfolio-1.jpg')}}" alt="picture 1"
                    class="img-fluid">`
            }

            productsTemp += `
                <div class="img-card p-2 text-center w-75 m-auto position-absolute">
                    <h6 class="font-weight-bold"> ${element.name} </h6>
                    <small> ${element.service.name} </small>
                </div>
                </div>
                </div>`;
        });
        $('#secondCarsual').owlCarousel('destroy').html(productsTemp).owlCarousel({
            rtl: true,
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 4,
                    nav: false
                }
            }
        });

    });

</script>
</body>
</html>
