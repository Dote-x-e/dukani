<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="bootstrap4-glyphicons/css/bootstrap-glyphicons.css" rel="stylesheet">
   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-light ">
       
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav nav-content">
         
           <a class="nav-item nav-link px-4" href="#">Women <span class="sr-only">(current)</span></a>
           <a class="nav-item px-4 nav-link" href="#">Men</a>
           <a class="nav-item px-4 nav-link" href="#">Kids</a>
           <a class="nav-item px-4 nav-link" href="#">Accesories</a>
           <a class="nav-item px-4 nav-link" href="#">Sale</a>
         </div>
         <div class="navbar-nav   mx-md-auto mx-0">

           <div class="  text-white nav-image">Sam's Shoes</div>
          
       </div>

       <a class="nav-item px-4 nav-link" ><span class="glyphicon glyphicon-search"></span></a>
       <a class="nav-item px-4 nav-link" ><span class="glyphicon glyphicon-shopping-cart
         "></span></a>
       

     
       </div>
   
       
       
     </nav>
        <?= $content ?>
   

<footer>
      

      <footer class="footer_area section_padding_130_0">
            <div class="container">
              <div class="row">
                
               
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">My Account</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul>
                        <li><a href="#">Sign-in</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Order status</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">Help</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Sizing</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">About</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul>
                        <li><a href="#">Our story</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Sustainability</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">Legal stuff</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Terms of sale</a></li>
                        <li><a href="#">Privacy policy</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-footer-widget section_padding_0_130">
                    <h5>Follow Sam's</h5>
                    <!-- Footer Social Area-->
                    <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
                  </div>
                </div>
                <div class="col-12 space-it">
                  <h6>&copy; Figma inc, All Rights Reserved.</h6>
                </div>
              </div>
            
            </footer>
            </div>
           
       

     </footer>

         

<?php $this->endBody() ?>


</body>
</html>
<?php $this->endPage() ?>
