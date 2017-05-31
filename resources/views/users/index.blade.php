<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Restaurant</title>
        <base href="{{asset('')}}">
        <link rel="stylesheet" href="users/css/main.css" media="screen" type="text/css">
        <link rel="stylesheet" href="users/css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="users/css/bootstrap.css">
        <link rel="stylesheet" href="users/css/style-portfolio.css">
        <link rel="stylesheet" href="users/css/picto-foundry-food.css" />
        <link rel="stylesheet" href="users/css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="users/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Gentium+Book+Basic" />
        <link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet"> 
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
    </head>

    <body>

        @include('users.pages.header')
      
        <!-- ============ About Us ============= -->

        <section id="about" class="description_content about_bg" >
            <div class="about background_content"  >
                <div class="col-md-5" style="margin-left:5%;">
                    <h2>Just the right food</h2>
                    <img  src="users/img/restaurant3_04.png">
                    <div class="desc-text" >
                    <p>If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!</p>
                    </div>
                    <img src="users/img/restaurant1_03.png" alt='' >
                </div>
                <div class="col-md-4">
                    <div class="img-about">
                       <img src="users/img/restaurant01_1.png">
                       
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Igredients  ============= -->


        <section id ="igredients" class="description_content igredients" >
             <div class=" igredients background_content">
                <div class="igredients_bg">
                    <div>
                        <p class="igredients_header">
                            Fine ingredients
                        </p>
                        <img style="padding:16px 0 30px 0px;" src="users/img/restaurant5_03.png">
                        <div class="igredients_text">
                        <p>
                            If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!

                        </p>
                        </div>
                        </div>
                        <div  >
                            <img  src="users/img/restaurant1_08.png">
                        
                            <img style="margin-left:-15px;" src="users/img/restaurant1_08.png">
                        
                            <img style="margin-left:-15px;" src="users/img/restaurant1_08.png">
                        </div>
                  

                </div>
             </div>
           
        </section>

     
        <!-- ============ Menu  ============= -->
        @include('users/pages/menu')

       <!-- ============ Reviews  ============= -->


        <section id="reviews" class=" description_content">
            <div  class="reviews background_content">
                    <div class="col-md-offset-3" style="; padding-top: 90px;">
                <div class="col-md-8 revies_bg ";>
                    <div>
                    <div >
                        <p style="color:#ffffff;font-size:36px ;font-family: 'Yeseva One', cursive;padding-top: 50px;">
                            Guest Reviews
                        </p>
                        <img style="padding:25px 0 15px 0px;" src="users/img/restaurant5_03.png">
                        <br>
                        <img style="float: left;" src="users/img/anh3.png">
                        <br>
                        <p class="reviews_quote">
                            If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!
                        </p>
                        </div>
                        <div class="reviews_footer">
                            <p style="color: #ffffff">-food inc , NewYork</p>
                        </div>
                    </div>

                </div>
             </div>
            </div>
        
        </section>


        
        


        <!-- ============ Reservation  ============= -->
        @include('users/pages/reservations')

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div  class="col-md-4">
                <p class="sub-footer-text text-center">
                About Us
                </p>
                <img  class="footer_img" src="users/img/footert.png">
                <p class="footer_text">
                    Lambda's new and expanded Chelsea location represents a truly authentic Greek patisserie, featuring breakfasts of fresh croissants and steaming bowls of café.
                    Lamda the best restaurant in town
                </p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">
                Opening Hours</p>
                 <img class="footer_img" src="users/img/footert.png">
                 <p style="font-weight: bold; text-align: center;" class="footer_text">
                    Mon-Thu: 7:00am-8:00pm </p>
                 <p style="font-weight: bold; text-align: center;padding-bottom: 50px;" class="footer_text">   
                    Fri-Sun: 7:00am-10:00pm
                 </p>
                 <div class="footer_icon col-md-offset-4">
                 <i   class="fa fa-cc-visa" aria-hidden="true"></i>
                 <i   class="fa fa-cc-paypal" aria-hidden="true"></i>
                 <i   class="fa fa-cc-mastercard" aria-hidden="true"></i>
                 <i   class="fa fa-cc-mastercard" aria-hidden="true"></i>
                </div>


                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">
                Our Location
               </p>
                 <img class="footer_img" src="users/img/footert.png">
                 <p style="font-weight: bold; text-align: center;" class="footer_text">
                    19th Paradise Street Sitia </p>
                 <p style="font-weight: bold; text-align: center;padding-bottom: 50px;" class="footer_text">   
                    128 Meserole Avenue
                 </p>
                 <div class="footer_icon col-md-offset-4">
                 <i   class="fa fa-facebook" aria-hidden="true"></i>
                 <i   class="fa fa-youtube" aria-hidden="true"></i>
                 <i   class="fa fa-twitter" aria-hidden="true"></i>
                 <i   class="fa fa-instagram" aria-hidden="true"></i>
                </div>
                </div>
            </div>
        </footer>


        <script type="text/javascript" src="users/js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="users/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="users/js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="users/js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="users/js/main.js" ></script>
    @yield('script')
    </body>
</html>