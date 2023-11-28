<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Portfolio</title>

</head>

<body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nab">
        <div class="container">


            <a href="" class="navbar-brand ml-5" style="font-size:xx-large; font-weight: 600;"> <span
                    style="color: orange;">H</span>ar<span style="color: orange;">R</span>iz</a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse " id="nav">


                <ul class="navbar-nav m-auto">
                    <li class="nav-item active mr-3">
                        <a href="#" class="nav-link"><i class="fa-solid fa-house pr-1"></i>Home</a>

                    </li>


                    <li class="nav-item mr-3  ">
                        <a href="#about" class="nav-link"><i class="fa-solid fa-circle-user pr-1"></i>About</a>
                    </li>

                    <li class="nav-item mr-3">
                        <a href="#pro" class="nav-link"><i class="fa-solid fa-diagram-project pr-1"></i>Projects</a>
                    </li>


                    <li class="nav-item mr-3">
                        <a href="#con" class="nav-link"><i class="fa-solid fa-phone pr-1"></i>Contact Us</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <!-- navigation ends -->


    <!-- Home page -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="home">
                    <h4>Hello my name is <span class="hh">Mohammed Harris</span></h4>
                    <h2>I'm a <span class="typing"> Web Developer</span></h2>

                    <span class="home2">I'm a Harriz based front end Developer & Graphic designer focused on crafting
                        clean & user-friendly experiences.I am passionate about building excellent software that
                        improves the lives of those around me.</span><br>
                    <a href="#about" class="btn mt-2 am">About Me</a>
                    <a href="assets/Resume (Mohammed Harish).pdf" download="Resume (Mohammed Harish).pdf"
                        class="btn mt-2 dc">Download CV</a>
                </div>
            </div>
            <div class="col-lg-6  col-md-6 col-sm-12 col-12 order-md-2 homeimg">
                <center><img src="assets/images/me.jpg" class="img-fluid" alt=""></center>

            </div>
        </div>
    </div>


    <!-- Home page Ends-->
    <br id="about"><br><br>
    <!-- about starts -->
    <center>
        <h2 style="background-color: orange; color: white;">About me</h2>
    </center><br>
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1000">

            <div class="card md-6 about">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-1 ">
                        <div class="card-body">
                            <ul class="about1">
                                <li>
                                    <h2>Personal Info</h2>
                                </li>
                                <p style=" color: orange;
                            border-bottom: 3px solid orange;width: 40px;
                            "></p>
                                <li>Name <span class="about2">: Mohammed Harris</span></li>
                                <li>DOB <span class="about2">: 28/07/2004</span></li>
                                <li>Age <span class="about2">: 19</span></li>
                                <li>Address <span class="about2">: Trichy</span></li>
                                <li>Email <span class="about2">: mohammedharris@gmail.com</span></li>
                                <li>Study <span class="about2">: Jamal Mohammed College</span></li>
                                <li>Role <span class="about2">: Front End Developer</span></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-6 aboutimg order-md-2">

                        <img src="assets/images/Picsart_23-09-01_20-01-46-112.jpg" class="card-img" alt="">
                    </div>
                </div>

            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 about3">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h4>About My Skills</h4>
                    <span class="about4">I'm a Harriz based front end Developer & Graphic designer focused on crafting
                        clean & user-friendly experiences.I am passionate about building excellent software that
                        improves the lives of those around me. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Corporis reiciendis nobis, perspiciatis voluptatum praesentium tenetur vero! Qui distinctio
                        ipsam eaque quod, autem odit quaerat, neque commodi accusamus porro perspiciatis
                        saepe?</span><br>
                    <a href="" class="btn mt-4">About Me</a><br>
                    <i class="fa-brands pt-4 pr-2 fa-l fa-facebook"></i>
                    <i class="fa-brands fa-l pr-2 fa-instagram"></i>
                    <i class="fa-brands fa-l pr-2 fa-whatsapp"></i>
                    <i class="fa-brands fa-l pr-2 fa-twitter"></i>
                    <i class="fa-brands fa-l fa-linkedin"></i>
                </div>

                <br><br>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 aboutpro">
                <div data-aos="fade-left" data-aos-duration="1000">
                    <label for="">HTML5</label>
                    <div class="progress">
                        <div class="progress-bar" style="width:95%  ; font-weight: 500;" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="98">98%</div>
                    </div>

                    <label class="mt-2" for="">CSS3</label>
                    <div class="progress">
                        <div class="progress-bar" style="width:85%  ; font-weight: 500;" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="85">85%</div>
                    </div>

                    <label class="mt-2" for="">BOOTSTRAP 5</label>
                    <div class="progress">
                        <div class="progress-bar" style="width:95%  ; font-weight: 500;" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="85">95%</div>
                    </div>

                    <label class="mt-2" for="">PHOTOSHOP CC</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped  progress-bar-animated"
                            style="width:90%  ; font-weight: 500;" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100" aria-valuenow="90">90%</div>
                    </div>

                    <label class="mt-2" for="">JAVA SCRIPT</label>
                    <div class="progress">
                        <div class="progress-bar" style="width:50%  ; font-weight: 500;" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="50">50%</div>
                    </div>

                    <label class="mt-2" for="">GRAPHIC DESIGNING</label>
                    <div class="progress">
                        <div class="progress-bar" style="width:70%  ; font-weight: 500;" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="70">70%</div>
                    </div>

                </div>
                <br><br><br>
            </div>


        </div>

        <div class="container">
            <div class="card-deck">
                <div class="card about abc">
                    <div class="card-body">
                        <div data-aos="flip-left" data-aos-duration="800">

                            <center><span class=""><i
                                        class="fa-solid mt-4 pb-5 fa-2xl fa-television text-center"></i></span></center>
                            <h3 class="card-title text-center ab1">Web development</h3>
                            <p class="card-text text-center ab1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Nisi, dolore.</p>
                        </div>
                    </div>

                </div>
                <div class="card about abc">
                    <div class="card-body ">
                        <div data-aos="flip-left">
                            <center><span class=""><i
                                        class="fa-solid mt-4 pb-5 fa-2xl fa-pencil text-center"></i></span></center>
                            <h3 class="card-title  text-center  ab1">Graphic Designing</h3>
                            <p class="card-text  text-center  ab1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Nisi, dolore.</p>
                        </div>

                    </div>
                </div>
                <div class="card about abc">
                    <div class="card-body">
                        <div data-aos="flip-left">
                            <center><span class=""><i
                                        class="fa-solid mt-4 pb-5 fa-2xl fa-computer text-center"></i></span></center>
                            <h3 class="card-title text-center ab1">DSA</h3>
                            <p class="card-text text-center ab1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Nisi, dolore.</p>
                        </div>

                    </div>
                </div>

                <br><br>
            </div>
        </div>

        <br><br>
        <div class="container">
            <div class="card-deck">

                <div class="card aboutbor">
                    <div class="card-body">
                        <div data-aos="zoom-out" data-aos-duration="800">




                            <center><i class="fa-solid fa-xl pb-4 fa-ranking-star" style="color: orange;"></i></center>
                            <h3 class="card-title text-center ab2">1</h3>
                            <p class="card-text text-center ab3">Years of experience</p>
                        </div>
                    </div>


                </div>
                <div class="card aboutbor">
                    <div class="card-body ">
                        <div data-aos="zoom-out" data-aos-duration="800">
                            <center><i class="fa-solid fa-xl pb-4 fa-diagram-project" style="color: orange;"></i>
                            </center>
                            <h3 class="card-title  text-center  ab2">8</h3>
                            <p class="card-text  text-center  ab3">Completed Projects</p>
                        </div>

                    </div>
                </div>
                <div class="card aboutbor">
                    <div class="card-body">

                        <div data-aos="zoom-out" data-aos-duration="800">
                            <center><i class="fa-solid fa-xl pb-4 fa-face-laugh-beam" style="color: orange;"></i>
                            </center>
                            <h3 class="card-title text-center ab2">5</h3>
                            <p class="card-text text-center ab3">Happy Costumers</p>
                        </div>

                    </div>
                </div>
                <div class="card aboutbor">
                    <div class="card-body">
                        <div data-aos="zoom-out" data-aos-duration="800">
                            <center><i class="fa-solid fa-xl pb-4 fa-certificate" style="color: orange;"></i></center>
                            <h3 class="card-title text-center ab2">2</h3>
                            <p class="card-text text-center ab3">Certificates Won</p>

                        </div>

                    </div>
                </div>
                <script>
                    $('.ab2').counterUp({
                        delay: 10,
                        time: 1000
                    });
                </script>
                <br><br>
            </div>
        </div>

        <br><br><br>

    </div>
    <!-- about starts Ends-->
    <br id="pro"><br><br>
    <!-- Projects -->
    <center>
        <h2 style="background-color: orange; color: white;">Projects</h2>
    </center><br>
    <div class="container">
        <div class="row">


            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <a href="assets/projects/Bootstrap E-Com Project/index.html" target="_blank"><img
                                src="assets/images/Shopping.png" class="img-fluid mt-4" alt=""></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <a href="assets/projects/Organic/index.html" target="_blank"><img
                                src="assets/images/organic.png" class="img-fluid mt-4" alt=""></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <a href="assets/projects/Bootstrap Plant Shop/" target="_blank"><img
                                src="assets/images/Plant shop.png" class="img-fluid mt-4" alt=""></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <a href="assets/projects/Netflix Clone/index.html" target="_blank"><img
                                src="assets/images/Netflix.png" class="img-fluid mt-4" alt=""></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <a href="assets/projects/marvel studios/index.html" target="_blank"><img
                                src="assets/images/marvel.png" class="img-fluid mt-4" alt=""></a>
                    </div>
                </div>
                <br><br>
            </div>




            <br><br>
        </div>
    </div>



    <!-- Projects Ends-->

    <!-- contact -->
    <center>
        <h2 id="con" style="background-color: orange; color: white;">Contact Us</h2>
    </center><br>

    <section class="head pb-5">
        <div class="container conhe py-5">


            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <div data-aos="fade-right" data-aos-duration="1000">

                        <div class="row pt-3 loc">
                            <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                                <span style="font-size: 25px;"><i class="fa-solid fa-xl fa-map "></i></span>
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-9 col-9 co1">
                                <h5>Location</h5>
                                <p>No.55/198,2nd floor,Natharsha pallivasal,Madurai road,Trichy-8</p>
                            </div>
                        </div>
                        <br>
                        <div class="row pt-3 phn">
                            <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                                <span style="font-size: 25px;"><i class="fa-solid fa-xl fa-phone"></i></span>
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-9 col-9 co2">
                                <h5>Call Me</h5>
                                <a href="tel:9840989573">
                                    <p>+91 9840989573</p>
                                </a>
                            </div>
                        </div>
                        <br>

                        <div class="row pt-3 mail">
                            <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                                <span style="font-size: 25px;"><i class="fa-solid fa-xl fa-envelope"></i></span> </div>
                            <div class="col-lg-10 col-md-9 col-sm-9 col-9 co3">
                                <h5>E-mail</h5>
                                <a href="mailto:mohammedharris0786@gmail.com">
                                    <p>mohammedharris0786@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>


                <div class="col-lg-8 col-md-12 col-sm-12 col-12">

                    <div data-aos="fade-left" data-aos-duration="1000">

                        <h3 style="color: white;">Interested in Contact?</h3>
                        <br>
                        <div class="form-row cc">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name*" id="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email*" id="email">
                            </div>
                        </div>
                        <div class="form-row cc">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                <label for="sub">Subject</label>
                                <input type="text" class="form-control" placeholder="Enter Subject* " id="sub">
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                <label for="phone">Phone</label>
                                <input type="num" class="form-control" placeholder="Enter Phone Number*" id="phone">
                            </div>
                        </div>
                        <div class="form-row cc">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                <label for="msg">Message (optional)</label>
                                <textarea class="form-control" cols="30" id="msg" rows="5"
                                    placeholder="Enter Message..."></textarea>
                                    <div class="mt-2">
                                    <input type="checkbox" name="box" id="box"> <label for="box" class="text-white">I Fill All
                                    the Agreements</label>
                                    </div>
                               
                                <div class="c55 col-12">
                                    <button id="submit" style="width:100%;" class="btn btn-md mt-4">Send Your Message<i
                                            class="fa-solid fa-share pl-2"></i></button>
                                </div>
                                <div class="c55 col-12">
                                <button id="reset"  style="width:100%;" class="btn btn-md mt-4 c5">Reset<i
                                            class="fa-solid fa-clock-rotate-left pl-2"></i></button>
                                    
                                </div>
                              
                            </div>

                        </div>

                    </div>

                </div>




            </div>

        </div>
    </section>

    <!-- contact us-->

    <!-- footer -->
    <footer style=" background-color: #2d2f31; height: 6vh; padding-top: 5px;">
        <center><span style="font-size: medium; color: rgb(194, 190, 190);">Copyright 2023 &copy; <span
                    style="color: orange;">HarRiz </span> All Rights Reserved</span></center>
    </footer>

    <!-- footer End-->

    <!-- JS files -->
    <script>
        AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
        integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        $(document).ready(function () {

            $("#reset").click(function () {
                var name = $("#name").val("");
                var email = $("#email").val("");
                var sub = $("#sub").val("");
                var phn = $("#phone").val("");
                var msg = $("#msg").val("")
                var box = $('input[name="box"]:checked').val("")
            })
            $("#submit").click(function () {
                var name = $("#name").val();
                var email = $("#email").val();
                var sub = $("#sub").val();
                var phn = $("#phone").val();
                var box = $('input[name="box"]:checked').val()
                var msg = $("#msg").val();

                if (name == "") {
                    iziToast.error({
                        title: 'Error',
                        message: 'Enter Your Name',
                        position: 'topRight',
                    });
                } else if (email == "") {
                    iziToast.error({
                        title: 'Error',
                        message: 'Enter Your Email',
                        position: 'topRight',
                    });
                } else if (sub == "") {
                    iziToast.error({
                        title: 'Error',
                        message: 'Enter Your Subject',
                        position: 'topRight',
                    });
                } else if (phn == "") {
                    iziToast.error({
                        title: 'Error',
                        message: 'Enter Your Number',
                        position: 'topRight',
                    });
                } else if (box == null) {
                    iziToast.warning({
                        title: 'Warning',
                        message: 'Accept the Agreement',
                        position: 'topRight',
                    });
                } else {
                    var fd = new FormData();

                    fd.append("name", name);
                    fd.append("email", email);
                    fd.append("phn", phn);
                    fd.append("sub", sub);
                    fd.append("message", msg);

                    $.ajax({
                        url: 'ajax',
                        processData: false,
                        contentType: false,
                        type: 'post',
                        data: fd,

                        success: function (response) {
                            var result = JSON.parse(response);

                            if (result.status == "Success") {
                                iziToast.success({
                                    title: 'Success',
                                    message: 'Successfullt Submitted',
                                    position: 'topRight',
                                });
                            }

                            else{
                                iziToast.error({
                                    title: 'Error',
                                    message: 'Unable to Send',
                                    position: 'topRight',
                                });
                            }
                        }
                    })
                }

            });

        });
    </script>
</body>

</html>