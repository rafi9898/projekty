<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Strona poświęcona rozgrywką piłkarskim. Udostępniony strumień w czasie rzeczywistym z aktualnym meczem.">
    <meta name="keywords" content="piłka nożna, mecze, rozgrywki, piłkarskie, stream, na żywo">
    <meta name="author" content="Rafał Podraza">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://content.jwplatform.com/libraries/mnKb8Z0X.js"></script>
    <link rel="stylesheet" href="css/fontello.css" type="text/css" />
    <link rel="stylesheet" href="animate.css" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="jwplayer/jwplayer.js"></script>
    <script>jwplayer.key="UcxdaYG9KIMk2WkNNzO1CA/7V7rPQ2qzS4mG2g==";
    </script>
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>MY SPORT</title>
</head>
    <body>
        
        <!--Preloader-->
        <div id="preloader">
            <div id="status"></div>
        </div>
        
        
        <div id="container">
            <div id="nav">
                <a href="home.php"><img src="img/logo.png" alt="Logo" class="left" /></a>
                <ol>
                    <li><a class="active" href="home.php">STRONA GŁÓWNA</a></li>
                    <li><a class="pick1">OGLĄDAJ ↓</a></li>
                    
                    <div class="pick">
                        
                            <a href="stream-user.php"><img class="real" src="img/real-madrid.png" alt="Logo Real Madrid przezroczyste"></a>
                
                            <a href="stream-user.php"><img class="barca" src="img/barcelona.png" alt="Logo Barcelona przezroczyste"></a>
                        
                            <a href="stream-user.php"><img class="Bayern" src="img/Bayern.png" alt="Logo Bayern"></a>
                        
                            
            
                       
                    </div>
                    <li><a class="anim" href="timetable-user.php">PROGRAM</a></li>
                    <li><div class="username-show"><span style="color: #dddddd; font-weight: bold;">Witaj</span> <?= $_SESSION['username'] ?></div> <span class="user"><img src='<?= $_SESSION['avatar'] ?>'</span></li>
                </ol>

    
                <ol class="login">
                    
                    <li><a class="backgl myprofil-icon" href="#">MÓJ PROFIL</a></li>
                    <li><a class="backg" href="logout.php">WYLOGUJ</a></li>
                </ol>
                <div id="nav-icon">
    <span><i class="fa fa-bars"></i></span>
</div>
 
<div class="left-menu">
    <ul>
        <li>
            <a href="home.php" target="_blank">Strona Główna</a>
        </li>
        <li>
            <hr>
        </li>
        <li>
            <a href="stream-user.php">Oglądaj</a>
        </li>
        <li>
            <hr>
        </li>
        
        <li>
            <a href="timetable-user.php">Program</a>
        </li>
            <li>
                <hr>
            </li>
        <li>
            <a class="#" href="#">Mój profil</a>
        </li>
            <li>
                <hr>
            </li>
        <li>
            <a href="logout.php">Wyloguj</a>
        </li>
        
</div>
            </div>
          <div class="section1">
            <div class="lewa">
            <img data-animate="fadeIn" src="http://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-Cristiano-Ronaldo-PNG-Transparent-Image-1.png" alt="Ronaldo">
            </div>


            <!--Tło multimedialne-->
                <video autoplay loop muted id="bg-video"> 
                     <source src="UEFA_Champions_League_2015_2016_Intro_HD_PES_2016_.webm" type="video/webm"> 
                     <source src="UEFA Champions League 2015 2016 Intro HD (PES 2016 Intro).mp4" type="video/mp4"> 
                     <source src="UEFA_Champions_League_2015_2016_Intro_HD_PES_2016_.ogv" type="video/ogv">
                </video>
                <div id="player">
                <div id="myElement"></div>
                <script>
      var playerInstance = jwplayer("myElement");
      playerInstance.setup({
      image: "http://content.jwplatform.com/thumbs/qXS1oind-1280.jpg",
      width: "41%",
      aspectratio: "16:9",
      sources: [{
        file: "http://content.jwplatform.com/videos/qXS1oind-JtBrAYOi.mp4",
        label: "720p HD"
      },{
        file: "http://content.jwplatform.com/videos/qXS1oind-mXAaqNQX.mp4",
        label: "406p SD",
        "default": "true"
      },{
        file: "http://content.jwplatform.com/videos/qXS1oind-cCMX70i5.mp4",
        label: "180p Web"
      }]
    });
</script>
</div>
              <div data-animate="fadeIn" class="prawa">
<img src="https://fcbayern.com/binaries/content/gallery/fc-bayern/players/fullBodyShots/19800_lewandowski_60462.png/19800_lewandowski_60462.png/fcbhippo%3AfullBodyShotHd" alt="Lewy">
</div>
</div>
                
                <div class="login-push">
                    
                    <img class="cancel-icon" src="img/cancel-icon.png" alt="Cancel-Icon">
                    
                    <h1>Zaloguj się!</h1>
                    
                    <form>
                
                        <input type="text" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='Login'">
                        <input type="password" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'">
                        <input type="submit" value="Zaloguj się!">
                
                    </form>
                </div>
                
            <a name="informacje"></a>
            <div class="section2">
                <div class="texts2">
                    
                    <h1 data-animate="fadeIn" class="info">Informacje</h1>
                    <div class="lines2">
                    
                    
                    <p data-animate="fadeIn"><img data-animate="fadeIn" class="screen" src="img/screen.png" alt="Ekran monitora z otwartą stroną internetową">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis, tellus ac consectetur hendrerit, mi nisl rhoncus mauris, ac dapibus libero nisl vel arcu. Fusce a magna id odio maximus vehicula. Nunc laoreet volutpat semper. Etiam eget lectus sed enim vulputate efficitur in non risus. Fusce molestie efficitur consequat. Aliquam vitae ex hendrerit, interdum nibh dignissim, congue dolor. Phasellus malesuada tellus vitae semper congue. Ut dictum justo at est faucibus rutrum. Nam vel convallis leo, a interdum dui. Sed felis neque, cursus sed lorem efficitur, tristique bibendum ligula. Phasellus porta lorem et convallis egestas.</p></div>
                    
                    
                </div>
            </div>
            
            <div class="section3">
                
                <h1 data-animate="fadeIn" class="medias">Media Społecznościowe</h1>
                <div data-animate="fadeIn" class="fontelloc">
                <i data-animate="fadeIn" class="icon-facebook"></i>
                <i data-animate="fadeIn" class="icon-youtube"></i>
                <i data-animate="fadeIn" class="icon-twitter-squared"></i>
                    </div>
            </div>
            
            <div id="footer">
                <div class="footerline">
                <ol>
                    <li><a href="#informacje">O Stronie</a></li>    
                    <li><a href="#">Mój Profil</a></li>    
                    <li><a href="#">Regulamin</a></li>    
                    <li><a href="#">Kontakt</a></li>    
                </ol>
                </div>
                <p>&copy 2017 COPYRIGHT WSZYSTKIE PRAWA ZASTRZEŻONE.</p>
            </div>
        </div>
        
        <!--Wysuwane Menu-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="sliiide.min.js"></script>
        <script>
            $('.left-menu').sliiide({place: 'right', toggle: '#nav-icon'});
        </script>
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="jquery.viewportchecker.min.js"></script>

            <script>
                $(document).ready(function(){

                });
        </script>
        
        <script type="text/javascript">
(function($) {
    $(window).load(function() { // czekamy, aż załaduje się cała strona
	$('#status').fadeOut(); // efekt zanikania animowanej grafiki
	$('#preloader').delay(350).fadeOut('slow'); // efekt zanikania warstwy zakrywającej stronę
	$('body').delay(350).css({'overflow':'visible'}); // dopóki nasz div#preloader jest widoczny nie ma możliwości przewijania strony 
    });
})(jQuery)
</script>
    </body>
</html>