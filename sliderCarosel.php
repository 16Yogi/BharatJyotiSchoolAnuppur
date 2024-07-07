<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="carosela.css">
  <!-- <link rel="stylesheet" href="indexStyle.css"> -->

  
</head>
<body>
  <div class="container-fluid" id="slider-bg">  
    <div class="text-center" id="text-sl">
      <h3>Head Of the Schools</h3>
      <p>But you are a chosen people, a royal priesthood, a holy nation, God’s special possession, that you may declare the praises of him who called you out of darkness into his wonderful light.</p>
    </div>


    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner" id="main-bn">
  
      <div class="carousel-item active" id="child-bn">
        <div class="wrap-sl">
          <div class="item">
            <img src="images/t111.jpg">
            <h4>Rt. Rev. Gerald Almeida</h4>
          </div>
          <div class="item">
              <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Message !</h3>
                  <p class="lead">No one lights a lamp and hides it in a clay jar or puts it under a bed. Instead, they put it on a stand, so that those who come in can see the light. <strong>Luke 8:16</strong></p>
              </div>
          </div>
        </div>
      </div>
  
      <div class="carousel-item" id="child-bn">
        <div class="wrap-sl">
          <div class="item">
            <img src="images/t1.jpg">
            <h4>Rev. Fr. Bipin Xalxo</h4>
          </div>
          <div class="item">
              <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Message !</h3>
                  <p class="lead">No one lights a lamp and hides it in a clay jar or puts it under a bed. Instead, they put it on a stand, so that those who come in can see the light. <strong>Luke 8:16</strong></p>
              </div>
          </div>
        </div>
      </div>

      <div class="carousel-item" id="child-bn">
        <div class="wrap-sl">
          <div class="item">
            <img src="images/t3.jpg">
            <h4>Sr. Sinimol Augustine</h4>
          </div>
          <div class="item">
              <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Message !</h3>
                  <p class="lead">No one lights a lamp and hides it in a clay jar or puts it under a bed. Instead, they put it on a stand, so that those who come in can see the light. <strong>Luke 8:16</strong></p>
              </div>
          </div>
        </div>
      </div>

      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>

</body>
</html>
