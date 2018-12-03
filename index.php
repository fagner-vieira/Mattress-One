<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mattress One</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="container-fluid bgOne">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 pOne">
        <img src="images/logo.png" class="img-responsive" alt="">
      </div>
      <div class="col-lg-8">
        <p class="txtOne"><a href="#lojas">Nossas Lojas</a></p>
      </div>
    </div>
  </div>
</header>
<section class="container-fluid bgTwo">
  <div class="container">
    <div class="row mOne">
      <div class="col-lg-6">
        <img src="images/promo01.png" class="img-responsive center-block" alt="">
      </div>
      <div class="col-lg-6">
        <img src="images/promo02.png" class="img-responsive center-block" alt="">
      </div>
    </div>
  </div>
</section>
<section class="container-fluid bgThree">
  <div class="container">
    <div class="row mTwo">
        <div class="col-lg-1">
            &nbsp;
          </div>
      <div class="col-lg-2">
        <img src="images/marcas01.png" class="img-responsive center-block" alt="">
      </div>
      <div class="col-lg-2">
        <img src="images/marcas02.png" class="img-responsive center-block" alt="">
      </div>
      <div class="col-lg-2">
        <img src="images/marcas03.png" class="img-responsive center-block" alt="">
      </div>
      <div class="col-lg-2">
        <img src="images/marcas04.png" class="img-responsive center-block" alt="">
      </div>
      <div class="col-lg-2">
        <img src="images/marcas05.png" class="img-responsive center-block" alt="">
      </div>
    </div>
  </div>
</section>
<section class="container-fluid">
  <div class="container">
    <div class="row mThree">
      <div class="col-lg-12">
        <p class="txtTwo">Assista no <span><img src="images/megatv.png" class="" alt=""></span></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <video width="100%" controls>
  			<source src="filme01.mp4" type="video/mp4">
  				Your browser does not support the video tag.
		</video>
      </div>
      <div class="col-lg-6">
          <video width="100%" controls>
  			<source src="filme02.mp4" type="video/mp4">
  				Your browser does not support the video tag.
		</video>
        </div>
    </div>
  </div>
</section>
<section class="continer-fluid">
  <div class="row mFour">
    <div class="col-lg-12">
      <img src="images/img01.png" class="img-responsive center-block" alt="">
    </div>
  </div>
  <div class="row mFour">
      <div class="col-lg-12">
        <img src="images/img02.png" class="img-responsive center-block" alt="">
      </div>
    </div>
    <div class="row mFour">
        <div class="col-lg-12">
          <img src="images/img03.png" class="img-responsive center-block" alt="">
        </div>
      </div>
      <div class="row mFour">
          <div class="col-lg-12">
            <img src="images/img04.png" class="img-responsive center-block" alt="">
          </div>
        </div>
</section>
<footer class="container-fluid" id="lojas">
  <div class="container">
    <div class="row mFive">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-1 col-xs-2 col-sm-2">
            <img src="images/linha.png" class="center-block img-responsive" alt="">
          </div>
          <div class="col-lg-11 col-xs-10 col-sm-10">
            <p class="txtThree">Av Alcântara Machado 2940 - (11) 2597 4777 <br/> Av Braz Leme 1603 - Santana - (11) 2592 0604 <br/> Av Jurubatuba 288 - São Bernardo do campo <br/> Lar Center - Av Otto baugard 500 1º piso.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-12">
            <img src="images/logoFooter.png" class="img-responsive center-block" alt="">
          </div>
          <div class="col-lg-12">
            <p class="txtFour">Copyright © 2019 - Todos os direitos reservados<br/>*Cobrimos qualquer oferta mediante apresentação do<br/>orçamento timbrado com marca e modelo do colchão.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script>
  var $doc = $('html, body');
$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
    return false;
});
</script>
</body>
</html>
