<!DOCTYPE html>
<html>
<head>
    <title>Julien ATCHY-DALAMA</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="eportfolio/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <nav id="home" class="black">
      <div class="nav-wrapper container">
        <a data-target="sidenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="home.html" class="brand-logo white-text">E-PORTFOLIO</a>

        <ul class="right hide-on-med-and-down">
          <li><a class="white-text" href="eportfolio/html/home.html">Accueil</a></li>
          <li><a class="white-text" href="eportfolio/html/about.html">À propos de moi</a></li>
          <li><a class="white-text" href="eportfolio/html/skills.html">Mes compétences</a></li>
          <li><a class="white-text" href="eportfolio/html/interests.html">Mes centres d'intérêts</a></li>
          <li><a class="white-text" href="eportfolio/html/projects.html">Mes projets</a></li>
        </ul>
      </div>
  </nav>

  <ul id="sidenav" class="sidenav">
        <li><a class="black-text" href="eportfolio/html/home.html">Accueil</a></li>
        <li><a class="black-text" href="eportfolio/html/about.html">À propos de moi</a></li>
        <li><a class="black-text" href="eportfolio/html/skills.html">Mes compétences</a></li>
        <li><a class="black-text" href="eportfolio/html/interests.html">Mes centres d'intérêts</a></li>
        <li><a class="black-text" href="eportfolio/html/projects.html">Mes projets</a></li>
    </ul>

    <div class="container">
        <div class="row valign-wrapper">
            <div class="col s12 valign">
                <div id="contact" class="card">
                    <div class="card-content black-text">
                        <span class="card-title"><strong>Me contacter</strong> <i class="material-icons">email</i></span>
                            <div class="col s12">
                                <div class="card">
                                    <div class="input-field col s6">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
              
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="phone_number" type="text" class="validate">
                                        <label for="phone_number">Phone number</label>
                                    </div>
              
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="object" type="text" class="validate">
                                        <label for="object">Object</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="message" type="text" class="validate">
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                            </div>

                        <button class="btn waves-effect waves-white black white-text" type="submit" name="action">Envoyer<i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#home" class="btn-floating btn-large right waves-effect waves-light blue"><i class="material-icons">arrow_upward</i></a>

    <footer class="page-footer black">
        <div class="container">
            <div class="col l6 s12">
                <h5 class="white-text">E-PORTFOLIO</h5>
                <p class="white-text">Vous avez visité mon e-portfolio. Si vous avez des question, vous pouvez me contacter par mail ou sur mes réseaux sociaux.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <ul class="social-icons center">
                    <li><a href="https://www.facebook.com/julienatchydalama" class="pure-button button-socicon"><span class="socicon socicon-facebook white-text"></span></a></li> 
                    <li><a href="https://twitter.com/Juliiensosa?s=09" class="pure-button button-socicon"><span class="socicon socicon-twitter white-text"></span></a></li>
                    <li><a href="https://www.instagram.com/juliensosa/" class="pure-button button-socicon"><span class="socicon socicon-instagram white-text"></span></a></li>
                    <li><a href="https://www.snapchat.com/add/juliensosa" class="pure-button button-socicon"><span class="socicon socicon-snapchat white-text"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/julien-atchy-dalama-a9557b16b/" class="pure-button button-socicon"><span class="socicon socicon-linkedin white-text"></span></a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Text
            </div>
        </div>
    </footer>
            

<!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        $(document).ready(function(){
            $('.materialboxed').materialbox();
        });
    </script>
</body>
</html>
