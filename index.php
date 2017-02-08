<?php
  $bg = array(  'envoyez.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trophée Presse Citron&#8239;{BnF</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="icon"
          type="image/png"
          href="img/fav.png">

<!--CSS bootstrap -->


<link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/scrolling-nav.css" rel="stylesheet" type="text/css" />

<link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" media="screen and (max-width: 1280px)" type="text/css" />

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class="bordel">
<div class="tarte"><div id="draggable"></div></div></div>

    <!-- Navigation -->


    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Presse Citron {BnF</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#presentation">Présentation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#agenda" >Agenda</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#partenaires">Partenaires</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                    <!-- <li>
                        <a  href="archives/archives.php" target="_blank">Archives <i class="fa fa-external-link" aria-hidden="true"></i>
</a>
                    </li> -->

                    <li>  <?include 'boutonformulaire.php' ?> </li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <marquee class="news-marquee" direction="left" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" SCROLLDELAY="40" Truespeed>
      <?php include 'news.php';?>
    </marquee>




    <!-- fond alatoire -->
    <section id="fond" class="fond-section">
      <div id="x" style="-webkit-user-select: none;  -khtml-user-select: none;   -moz-user-select: none; -o-user-select: none;    user-select: none;"><img width="550" class="icon" hidden="hidden"  id="template" onmousedown="return false" /></div>
    </section>



    <!-- Intro Section -->
    <section id="intro" class="intro-section">
		<a href="#presentation"  class="page-scroll"><img src="img/fleche.svg" id="downarrow" class="animated bounce page-scroll"></a>
    </section>



    <!-- Présentation -->

    <section id="presentation" class="present-section">

        <div class="container" >
            <div class="row">

<?php include 'presentation.php';?>
</div>
            </div>


    </section>

    <!-- Agenda -->
    <section id="agenda" class="agenda-section">
        <div class="container">
            <div class="row">

<?php include 'calendrier.php' ?>



                </div>
            </div>
    </section>

    <!-- Partenaires -->

      <section id="partenaires" class="partenaires-section">
          <div class="col-lg-12">

          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="container">

                        <div class="row">
<div class="col-lg-12"><h1>Partenaires</h1><a href="downloads/pressecitron-partenariat-2017.pdf" target="blank" >Télécharger le dossier de partenariat</a></div>
<div class="col-lg-12"><?php include 'partenaires.php' ?></div>
                  </div>
                    </div>
    </div>
              </div>
          </div>
            </div>
      </section>
        <!-- Contact -->

    <section id="contact" class="contact-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h1>Nous contacter</h1>

                <div class="col-lg-3"><h4>Concours pro</h4><br/> <a href="mailto:tropheepro.pressecitron@gmail.com">tropheepro.pressecitron@gmail.com</a></div>
                <div class="col-lg-3"><h4>Concours étudiants</h4><br/> <a href="mailto:concourspressecitron@gmail.com">concourspressecitron@gmail.com</a></div>
                <div class="col-lg-3"><h4>Relations presse</h4><br/> <a href="mailto:rp.pressecitron@gmail.com">rp.pressecitron@gmail.com</a></div>
                <div class="col-lg-3"><h4>Partenariat</h4><br/><a href="mailto:partenariat.pressecitron@gmail.com">partenariat.pressecitron@gmail.com</a></div>
              </div>

              <div class="col-lg-12">
                <div class="col-lg-3"><H4>Presse</H4></br>   <a href="downloads/pressecitron-dp-2017.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Télécharger le dossier de presse</button></a></div>
                    <div class="col-lg-3"><H4>Nous suivre</H4>
                      <ul class="list-unstyled" >
                        <li><a href="http://facebook.com/trophee.pressecitron" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="http://facebook.com/"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                        <li><a href="http://instagram.com/pressecitronbnf"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-3"><h4>Adresse postale</h4><p><a href="http://www.ecole-estienne.paris" target="_blank">École Estienne</a></br>
                      Trophée Presse Citron&#8239;{BnF</br>
                        18 bd Auguste-Blanqui</br>
                        75013 PARIS
                    </div>
                    <div class="col-lg-3">
                      <H4>Crédits</H4></br>Design & communication : DSAA DSC
                    </div>
              </div>


            </div>
        </div>

    </section>

    <!-- jQuery, local ou fourni par le cdn jquery -->
    <script src="js/jquery.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

    <!-- jQuery Ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <!-- uplaod -->

    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.js"></script>
    <script src="js/upload.js"></script>

    <script>
    $( function() {
      $( "#draggable" ).draggable();;
    });
    </script>

    <script>
    ;(function(window,document,undefined){
        "use strict";
            var init = function(){
                var canvas = document.querySelector('#x');
                var icon_template = document.querySelector('#template');
                var icon_width = 10;
                var icon_height = 30;
                var the_images = [
                  'img/8.svg',
                    'img/concours.svg',
                    'img/concours2.svg',
                    'img/logo-bnf.svg',
                    'img/trophee.svg',
                    'img/presse.svg',
                    'img/presse2.svg',
                    'img/vosdessins.svg',
                    'img/envoyez.svg',
                    'img/2017.svg',
                    'img/citron.svg'
                ];
                var pickRandomImage = function(){
                    var i = Math.floor( Math.random() * the_images.length );
                    return the_images[i];
                };
                var total_number_of_images = 100;
                var max_height = canvas.offsetHeight - icon_height;
                var max_width = canvas.offsetWidth - icon_width;
                var randomCoordinate = function(){
                    var r = [];
                    var x = Math.floor( Math.random() * max_width );
                    var y = Math.floor( Math.random() * max_height );
                    r = [x,y];
                    return r;
                };
                var createImage = function(){
                    var node = icon_template.cloneNode(true);
                    var xy = randomCoordinate();
                    node.removeAttribute('id');
                    node.removeAttribute('hidden');
                    node.style.top = xy[1] + 'px';
                    node.style.left = xy[0] + 'px';
                    node.setAttribute('src',pickRandomImage());
                    canvas.appendChild(node);
                };
                for (var i=0;i<total_number_of_images;i++){
                    createImage();  };
            };
           window.addEventListener('load',init);
    })(window,document);
    </script>

    <script>

    var scrollShadow = (function() {
  var elem, width, height, offset,
    shadowTop, shadowBottom,
    timeout;

  function initShadows() {
    shadowTop = $("<div>")
      .addClass("shadow-top")
      .insertAfter(elem);
    shadowBottom = $("<div>")
      .addClass("shadow-bottom")
      .insertAfter(elem);
  }

  function calcPosition() {
    width = elem.outerWidth();
    height = elem.outerHeight();
    offset = elem.position();

    // update
    shadowTop.css({
      width: width + "px",
      top: offset.top + "px",
      left: offset.left + "px"
    });
    shadowBottom.css({
      width: width + "px",
      top: (offset.top + height - 20) + "px",
      left: offset.left + "px"
    });
  }

  function addScrollListener() {
    elem.off("scroll.shadow");
    elem.on("scroll.shadow", function() {
      if (elem.scrollTop() > 0) {
        shadowTop.fadeIn(125);
      } else {
        shadowTop.fadeOut(125);
      }
      if (elem.scrollTop() + height >= elem[0].scrollHeight) {
        shadowBottom.fadeOut(125);
      } else {
        shadowBottom.fadeIn(125);
      }
    });
  }

  function addResizeListener() {
    $(window).on("resize.shadow", function() {
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        calcPosition();
        elem.trigger("scroll.shadow");
      }, 10);
    });
  }

  return {
    init: function(par) {
      elem = $(par);
      initShadows();
      calcPosition();
      addScrollListener();
      addResizeListener();
      elem.trigger("scroll.shadow");
    },
    update: calcPosition
  };

}());

// start
scrollShadow.init("#agenda-table");

</script>
</body>

</html>
