<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Training PHP - Unlock Program</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/button-form.css">

    <link rel="stylesheet" type="text/css" href="css/radio-form.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/templatemo-training-studio.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">Training<em> Unlock NFQ</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active"></a></li>
                        <li class="scroll-to-section"><a href="#exercise1" class="active">Exercise 1</a></li>
                        <li class="scroll-to-section"><a href="#exercise2">Exercise 2</a></li>
                        <li class="scroll-to-section"><a href="#exercise3">Exercise 3</a></li>
                        <li class="main-button"></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Main Banner Area End ***** -->
<section class="section" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <div class="section-heading">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item Start ***** -->
<section class="section" id="exercise1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Exercise 1 <em>Finding number</em></h2>
                    <p>The output of this exercise is the finding one number or number array according condition (max, min, positive, negative).</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="contact-form">
                    <form id="contact">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="arr_num" type="text" id="arr_num" placeholder="Enter array number here..." oninput="find()">
                                    <button type="button" id="form-submit" class="main-button" onclick="find()">Result</button>
                                </fieldset>
                            </div>
                            <div class="col-md-1 col-sm-12">
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <pre id="exercise1-response"></pre>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<section class="section" id="exercise">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <div class="section-heading">
                        <img src="image/line-dec.png" alt="waves">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Our Classes Start ***** -->
<section class="section" id="exercise2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Exercise 2 <em>Saving Cookie</em></h2>
                    <p>Using cookie in order to select your favorite animal. <br>Select the animal at below, please?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
            <form>
                <div class="col-md-6 col-sm-12">
                    <fieldset>
                        <input name="myAnimal" id="myAnimal" type="radio" value="dog" class="radio-form" onchange="applyCookie()"> Dog
                    </fieldset>
                    <fieldset>
                        <input name="myAnimal" id="myAnimal" type="radio" value="cat" class="radio-form" onchange="applyCookie()"> Cat
                    </fieldset>
                    <fieldset>
                        <input name="myAnimal" id="myAnimal" type="radio" value="snack" class="radio-form" onchange="applyCookie()"> Snack
                    </fieldset>
                    <fieldset>
                        <input name="myAnimal" id="myAnimal" type="radio" value="mouse" class="radio-form" onchange="applyCookie()"> Mouse
                    </fieldset>
                    <fieldset >
                        <button type="button" id="form-submit button-form" class="main-button button-form" onclick="applyCookie()">Result</button>
                    </fieldset>
                </div>
                <div class="col-md-5 col-sm-12">
                    <pre id="exercise2-response"></pre>
                </div>
            </form>
        </div>

    </div>

    </div>
</section>
<section class="section" id="exercise3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <div class="section-heading">
                        <h2>Exercise 3 <br><em>Drawing the rectangle star</em></h2>
                        <p>The output of this exercise is the finding one number or number array according condition (max, min, positive, negative).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="contact-form">
                <form id="contact" >
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <input name="width" type="text" id="width" placeholder="Enter width shape here..." oninput="draw()">
                            </fieldset>
                            <fieldset>
                                <input name="height" type="text" id="height" placeholder="Enter height shape here..." oninput="draw()">
                            </fieldset>
                            <fieldset>
                                <button type="button" id="form-submit" class="main-button" onclick="draw()">Drawing</button>
                            </fieldset>
                        </div>
                        <div class="col-md-2 col-sm-12">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <pre id="exercise3-response"></pre>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section" id="exercise">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <div class="section-heading">
                        <h2>THE <em>END</em></h2>
                        <img src="image/line-dec.png" alt="waves">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="./js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="./js/popper.js"></script>
<script src="./template-boostrap/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="./js/scrollreveal.min.js"></script>
<script src="./js/waypoints.min.js"></script>
<script src="./js/jquery.counterup.min.js"></script>
<script src="./js/imgfix.min.js"></script>
<script src="./js/mixitup.js"></script>
<script src="./js/accordions.js"></script>

<!-- Global Init -->
<script src="./js/custom.js"></script>

<script>
    function draw() {
        $.ajax({
            url: './php/DrawingRectangleStar.php',
            type: 'post',
            data: {
                height: $('#height').val(),
                width: $('#width').val()
            },
            dataType: 'text',
            success: function (result) {
                $('#exercise3-response').html(result);
            }
        });
    }

    function find() {
        $.ajax({
            url: './php/ProcessingFindNumber.php',
            type: 'post',
            data: {
                arr_num: $('#arr_num').val()
            },
            dataType: 'text',
            success: function (result) {
                $('#exercise1-response').html(result);
            }
        });
    }

    function applyCookie() {
        $.ajax({
            url: './php/CookieExercise.php',
            type: 'post',
            data: {
                myAnimal: $('input[name=myAnimal]:checked').val()
            },
            dataType: 'text',
            success: function (result) {
                $('#exercise2-response').html(result);
            }
        });
    }
</script>

</body>
</html>
