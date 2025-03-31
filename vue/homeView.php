<!DOCTYPE html>
<html lang="fr">
<head>
    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter - C'est ce qu'il se passe</title>
    <link rel="icon" href="../MyTwitter/public/assets/twitter.png">
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../MyTwitter/public/css/Skeleton-2.0.4/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../MyTwitter/public/css/Skeleton-2.0.4/css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="../MyTwitter/public/css/home.css">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    
    <!--JS-->
    <script src="../MyTwitter/public/js/home.js" defer></script>
</head>
<body>
    <div id="container" class="container row">
        <!-- LOGO & INFO - LEFT SECTION -->
        <img id="logo" src="../MyTwitter/public/assets/salut.png" alt="Logo Perroquet Salut" class="four columns">
        
        <!-- LOGIN & REGISTER - RIGHT SECTION-->
        <main id="main_home" class="eight columns">
            <section id="welcome-section">
                <h1>Ça se passe maintenant</h1>
            </section>
            <br>
            <section id="auth-section">
                <div id="register">
                    <h2>Inscrivez-vous.</h2>
                    <button class="option1"><img class="logo" src="../MyTwitter/public/assets/google.png" alt="Logo Google"> S'inscrire avec Google</button>
                    <button class="option1"><img class="logo" src="../MyTwitter/public/assets/apple.png" alt="Logo Apple"> S'inscrire avec Apple</button>
                    <div class="separator">
                        <div class="line"></div>
                        <div>ou</div>
                        <div class="line"></div>
                    </div>
                    <button id="display-register" class="option2">Créer un compte</button>
                    <p>
                        En vous inscrivant, vous acceptez les <a>Conditions d'utilisation</a> 
                        et la <a>Politique de confidentialité</a>, notamment l'<a>Utilisation des cookies</a>.
                    </p>
                </div>
                <br>
                <div id="login">
                    <h2>Vous avez déjà un compte ?</h2>
                    <button id="display-login" class="option2">Se connecter</button>
                </div>
            </section>
        </main>
    </div>

    <!--POPUPS-->
    <div id="popups">
        <!--REGISTER-->
        <div id="register-popup" class="popup-container">
            <div id="register-container" class="form-container">
                <img id="cross-register" class="close-icon" src="../MyTwitter/public/assets/fermer.png" alt="Fermer">
                <img class="parrot-icon" src="../MyTwitter/public/assets/detendu.png" alt="Logo Perroquet Peace-Sign">
                <form id="register-form" name="register-form" method="POST">
                    <div class="inputs-container">
                        <h3>Créer votre compte</h3>
                        <input type="text" id="register-username" name="register-username" placeholder="Nom d'utilisateur" required>
                        <input type="email" id="register-email" name="register-email" placeholder="Email" required>
                        <input type="password" id="register-password" name="register-password" placeholder="Mot de passe" required>
                        <h4>Date de naissance</h4>
                        <p>
                            Cette information ne sera pas affichée publiquement.
                            Confirmez votre âge, même si ce compte est pour une entreprise, 
                            un animal de compagnie ou autre chose.
                        </p>
                        <input type="date" id="register-birthdate" name="register-birthdate" required>
                    </div>
                    <button id="register-btn" type="submit" name="submit-register">S'inscrire</button>
                </form>
            </div>
        </div>
        <!--LOGIN-->
        <div id="login-popup" class="popup-container">
            <div id="login-container" class="form-container">
                <img id="cross-login" class="close-icon" src="../MyTwitter/public/assets/fermer.png" alt="Fermer">
                <img class="parrot-icon" src="../MyTwitter/public/assets/chanter.png" alt="Logo Perroquet Chantant">
                <form id="login-form" name="login-form" method="POST">
                    <h3>Connectez-vous à Twitter</h3>
                    <button class="option1"><img class="logo" src="../MyTwitter/public/assets/google.png" alt="Logo Google"> Se connecter avec Google</button>
                    <button class="option1"><img class="logo" src="../MyTwitter/public/assets/apple.png" alt="Logo Apple"> Se connecter avec Apple</button>
                    <div class="separator">
                        <div class="line"></div>
                        <div>ou</div>
                        <div class="line"></div>
                    </div>
                    <div class="inputs-container">
                        <input type="email" id="login-email" name="login-email" placeholder="Email" required>
                        <input type="password" id="login-password" name="login-password" placeholder="Mot de passe" required>
                        <p><a>Mot de passe oublié</a></p>
                    </div>
                    <button id="login-btn" type="submit" name="submit-login">Se connecter</button>
                    <p>Vous n'avez pas de compte ? <a id="display-register2">Inscrivez-vous</a></p>
                </form>
            </div>
        </div>
        <!--REGISTER 2-->
        <div id="register2-popup" class="popup-container">
            <div id="register2-container" class="form-container">
                <img id="cross-register2" class="close-icon" src="../MyTwitter/public/assets/fermer.png" alt="Fermer">
                <img class="parrot-icon" src="../MyTwitter/public/assets/chanter.png" alt="Logo Perroquet Chantant">
                <div id="register">
                    <h3>Rejoignez Twitter dès aujourd'hui</h3>
                    <button class="option1"><img class="logo" src="../MyTwitter/public/assets/google.png" alt="Logo Google"> S'inscrire avec Google</button>
                    <button class="option1"><img class="logo" src="../MyTwitter/public/assets/apple.png" alt="Logo Apple"> S'inscrire avec Apple</button>
                    <div class="separator">
                        <div class="line"></div>
                        <div>ou</div>
                        <div class="line"></div>
                    </div>
                    <button id="display-register1" class="option2">Créer un compte</button>
                    <p>
                        En vous inscrivant, vous acceptez les <a>Conditions d'utilisation</a> 
                        et la <a>Politique de confidentialité</a>, notamment l'<a>Utilisation des cookies</a>.
                    </p>
                    <p>
                        Vous avez déjà un compte ?
                        <a id="display-login1">Connectez-vous.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../MyTwitter/src/home_verif.js" defer></script>
</body>
</html>
