<?php
session_start();
require_once '../MyTwitter/controlleur/homeControl.php';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    echo "<p>Aucun utilisateur connecté.</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter - Profil</title>
    <link rel="icon" href="../MyTwitter/public/assets/twitter.png">

    <!--CSS-->
    <link rel="stylesheet" href="../MyTwitter/public/css/Skeleton-2.0.4/css/normalize.css">
    <link rel="stylesheet" href="../MyTwitter/public/css/Skeleton-2.0.4/css/skeleton.css">
    <link rel="stylesheet" href="../MyTwitter/public/css/nav.css">
    <link rel="stylesheet" href="../MyTwitter/public/css/interests.css">
    <link rel="stylesheet" href="../MyTwitter/public/css/profile.css">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    
    <!--JS-->
    <script src="../MyTwitter/public/js/nav.js" defer></script>
</head>
<body>
    <div id="container" class="container row">
        <!--NAVBAR - LEFT SECTION-->
        <nav id="sidebar" class="three columns">
            <div id="sidebar-top">
                <div id="top-container">
                    <img id="logo" src="../MyTwitter/public/assets/fier.png" alt="Logo Perroquet Fier">
                    <div id="theme-toggle">
                        <button id="toggle-theme"><img src="../MyTwitter/public/assets/mode-jour.png" alt="Logo mode jour"></button>
                    </div>
                </div>
                <div id="nav-container">
                    <!--Home-->
                    <a href="/MyTwitter/Accueil" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/domicile.png" alt="Logo Accueil"><h4 id="nav-home" class="nav-link">Accueil</h4>
                    </a>
                    <!--Explore-->
                    <a href="#" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/loupe.png" alt="Logo Accueil"><h4 id="nav-explore" class="nav-link">Explorer</h4>
                    </a>
                    <!--Notifications-->
                    <a href="#" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/cloche.png" alt="Logo Accueil"><h4 id="nav-notification" class="nav-link">Notifications</h4>
                    </a>
                    <!--Messages-->
                    <a href="#" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/lettre.png" alt="Logo Accueil"><h4 id="nav-messages" class="nav-link">Messagerie</h4>
                    </a>
                    <!--Bookmarks-->
                    <a href="#" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/signet.png" alt="Logo Accueil"><h4 id="nav-bookmarks" class="nav-link">Signets</h4>
                    </a>
                    <!--Profile-->
                    <a href="#" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/utilisateur.png" alt="Logo Accueil"><h4 id="nav-profile" class="nav-link current">Profil</h4>
                    </a>
                    <!--Settings-->
                    <a href="#" class="nav-li">
                        <img class="nav-logo" src="../MyTwitter/public/assets/parametres.png" alt="Logo Accueil"><h4 id="nav-settings" class="nav-link">Paramètres</h4>
                    </a>
                    <!--Post btn-->
                    <button id="nav-post-btn">Poster</button>
                </div>
            </div>
            <div id="sidebar-bottom">
                <div id="profile-menu">
                    <button id="switch-account">Changer de compte</button>
                    <form method="POST">
                        <button id="logout" name="logout">Se déconnecter</button>
                    </form>
                </div>
    
                <div id="user-profile">
                    <img id="profile-pic" src="../MyTwitter/public/assets/utilisateur.png" alt="Profil">
                    <p id="username"><?= $user['username'] ?></p>
                </div>
    
                <!--POST POPUP-->
                <div id="post-popup">
                    <!--MEME QUE LE POST-->
                </div>
            </div>
        </nav>
        
        <!--PROFILE - MIDDLE SECTION-->
        <main id="profile-content" class="six columns">
            <div id="return-container">
                <img src="" alt="Flèche retour">
            </div>
            <div id="banner">
                <img id="user-banner" src="" alt="Bannière">
                <img id="user-picture" src="../MyTwitter/public/assets/utilisateur-profile.png" alt="Profil" class="profile-pic">
            </div>
            <div id="profile-info">
                <div id="container-update-btn">
                    <button id="update-profile">Modifier le profil</button>
                </div>
                <h2 id="profile-username"><?= $user['username'] ?></h2>
                <p id="account-creation-date">A rejoint Twitter le DATE</p>
                <p id="profile-bio"><?= $user['bio'] ?></p>
                <p id="followers">X abonnés</p>
                <p id="following">X abonnements</p>
            </div>

            <!--LES TWEETS SERONT ICI-->
            <section id="tweets-list">
                <article class="tweet">
                    <p id="tweet-username">Pseudo</p>
                    <div id="tweet-content">
                        <p id="tweet-text">Ceci est un tweet</p>
                        <div id="tweet-media"></div>
                    </div>
                    <div id="tweet-footer">
                        <div id="comment">
                            <img src="" alt="Commenter">
                            <p id="comments-number"></p>
                        </div>
                        <div id="repost">
                            <img src="" alt="Reposter">
                            <p id="reposts-number"></p>
                        </div>
                        <div id="like">
                            <img src="" alt="Liker">
                            <p id="likes-number"></p>
                        </div>
                        <div id="comment">
                            <img src="" alt="Commenter">
                            <p id="comments-number"></p>
                        </div>
                        <div id="archive">
                            <img src="" alt="Archiver">
                            <p id="archives-number"></p>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        
        <!--TRENDS - RIGHT SECTION-->
        <aside id="trends" class="three columns">
            <section id="hashtags">
                <input type="text" id="hashtag-search" placeholder="Rechercher un hashtag...">
                <button id="hashtag-search-button">Rechercher</button>
                <h3>Tendances</h3>
                <ul>
                    <li class="trend-item" id="trend-1">#Exemple</li>
                    <li class="trend-item" id="trend-2">#TweetAcademie</li>
                </ul>
            </section>
            <section id="suggestions">
                <h3>Suggestions</h3>
                <ul>
                    <li class="suggest-item" id="suggest-user1">@User1</li>
                    <li class="suggest-item" id="suggest-user2">@User2</li>
                </ul>
            </section>
        </aside>
    </div>
</body>
</html>
