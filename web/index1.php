<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”nofollow” />
    <meta name=”robots” content=”noindex” />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nordlid</title>
    <link rel="shortcut icon" href="img/favi.png">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <!-- bootstrap fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/Nordlid_logo.png" alt="logo" width="53px">
                </a>
            </div>
        </nav>
        <div id="headerPic">
            <img src="img/mobile_1.png" alt>

        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="false" data-keyboard="true" data-pause="hover" data-interval="10000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit, sed do
                            <br> eiusmod tempor incididunt ut
                        </h1>
                    </div>
                    <img src="img/1.png" class="d-block w-100" alt="first">

                </div>

                <div class="carousel-item">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit, sed do
                            <br> eiusmod tempor incididunt ut
                        </h1>
                    </div>
                    <img src="img/2.png" class="d-block w-100" alt="second">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit, sed do
                            <br> eiusmod tempor incididunt ut
                        </h1>
                    </div>
                    <img src="img/3.png" class="d-block w-100" alt="third">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div id="wrapper">
        <div class="cointainer h2-top">
            <div class="row">
                <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim
                    <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                </h2>

            </div>
        </div>

        <div class="cointainer">
            <div class="row">
                <div class="col-sm-6 col-m-6 col-l-6 ">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                        aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia

                    </p>

                </div>
                <div class="col-sm-6 col-m-6 col-l-6 ">
                    <p>
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                    </p>

                    </form>
                    <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" role="form">

                        <div class="form-group">
                            <label class="form-label" id="nameLabel" for="name"></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Navn" tabindex="1">
                            <p id="msg0"></p>
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="emailLabel" for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2">
                            <p id="msg1"></p>
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="numberLabel" for="number"></label>
                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number"
                                maxlength="8" class="form-control" id="number" name="number" placeholder="Tlf" tabindex="3">
                            <p id="msg2"></p>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="tilmeld" value="tilmeld">
                            <label for="tilmeld">Jeg giver hermed tilladelse til, at Nordlid må gemme og bruge min data til interne projekter.
                                Jeg kan til hver en tid tilbagekalde min accept.</label>
                            <br>
                        </div>


                        <button name="knap" id="_submit" type="submit" class="btn btn-default btn-gap">SEND</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->

    <div class="cointainer cointain3">
        <div class="row">
            <div class="col-sm-4 col-m-4 col-l-4">
                <img src="img/light.png" alt="lightbulb">
                <h3>Lorem ihosum dolor sit amet, consectetur adihpiscing elit, sed do</h3>
            </div>
            <div class="col-sm-4 col-m-4 col-l-4">
                <img src="img/speak.png" alt="talkicon">
                <h3> Eiusmod tempor incididunt ut labore et dolore magna aliqua</h3>
            </div>
            <div class="col-sm-4 col-m-4 col-l-4">
                <img src="img/gold.png" alt="prizeicon">
                <h3>Ut enim ad minim veniam, quis nostrud exercitation ullamco </h3>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <footer>

        <div class="container contain4">

            <div class="row rowfot">

                <div class="col-sm-6 col-m-6 col-l-6 text-al">
                    <p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    <span class="fa-xlg">
                        <i class="fa fa-map-marker" aria-hidden="true" style="font-size:45px; vertical-align: middle;"></i>
                        <span class="font2">Miniama venen, quis 7 - 242324 Dk</span>
                    </span>
                    <br>
                    <br>
                    <span class="fa-lg">
                        <i class="fa fa-mobile" aria-hidden="true" style="font-size:50px; vertical-align: middle;"></i>
                        <span class="font2">+45 65 95 95 95</span>
                    </span>
                    <br>
                    <br>
                    <span class="fa-lg">
                        <i class="fa fa-at" aria-hidden="true" style="font-size:35px; vertical-align: middle;"></i>
                        <span class="font2">hejhej@mail.com</span>

                    </span>

                </div>

                <div class=" left-f col-sm-6 col-m-6 col-l-6 ">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x"></i>
                    </span>

                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-linkedin fa-stack-1x"></i>
                    </span>

                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x"></i>
                    </span>

                </div>

            </div>

        </div>


    </footer>


    <script src="script/script.js "></script>
</body>

</html>