
//Déclaration des variables --------------------------------------------------------------------------------------------------

var nbrHasard;
var choixOrdi;
var choixJoueur;
var victoirePour;

//Déclaration des éléments du DOM ---------------------------------------------------------------------------------------------------------------
var parpaing = document.getElementById("parpaing");
var feuille = document.getElementById("feuille");
var tronconneuse = document.getElementById("tronconneuse");


var isActivated = false;

 
function ordi(){
    //TODO: Fonction Jeu ----------------------------------------------------------------------------------------------------------------------------
    // --- Variable hasard sur multiple de 3
    nbrHasard = random(0, 3000);
    // --- Génère un nombre aléatoire.
    function random(min, max) {
        // --- Retourne une valeur entre 0 et 3000.
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    // Affiche la réponse pour tester le programme.
    console.log("Nombre Hasard =", nbrHasard);

    //TODO: Choix de l'IA -> choixOrdi --------------------------------------------------------------------------------------------------------------
    // --- Si résultat <= 1000 alors Shimumi = parpaing
    if (nbrHasard <= 1000) {
        choixOrdi = "parpaing";
        document.getElementById("iaX").src="img/parpaing.png";
        // --- Si résultat <= 2000 alors shifumi = feuille
    } else if (nbrHasard <= 2000) {
        choixOrdi = "feuille";
        document.getElementById("iaX").src="img/feuille.png";
        // --- Si résultat supérieur à 2000 alors shifumi = tronconneuse
    } else {
        choixOrdi = "tronconneuse";
        document.getElementById("iaX").src="img/tronconneuse.png";
    }
    // Affiche la réponse pour tester le programme.
    console.log("Choix Ordi =", choixOrdi);
    console.log("Choix Joueur =", choixJoueur);

}

//TODO: récupérer le choix du joueur -> choixJoueur --------------------------------------------------------------------------------------------

parpaing.addEventListener("click",
    function() {
        if (isActivated === false) {
            choixJoueur = "parpaing";
            ordi();
            victoire();
            parpaing.style.backgroundColor = "red";
            document.getElementById("joueurX").src="img/parpaing.png";
            
            isActivated = true;
        } else {
            parpaing.style.backgroundColor = "deeppink";
            isActivated = false;
        }
    }
);

feuille.addEventListener("click",
    function() {
        if (isActivated === false) {
            choixJoueur = "feuille";
            ordi();
            victoire();
            feuille.style.backgroundColor = "red";
            document.getElementById("joueurX").src="img/feuille.png";
            
            isActivated = true;
        } else {
            feuille.style.backgroundColor = "deeppink";
            isActivated = false;
        }
    }
);

tronconneuse.addEventListener("click",
    function() {
        if (isActivated === false) {
            choixJoueur = "tronconneuse";
            ordi();
            victoire();
            tronconneuse.style.backgroundColor = "red";
            document.getElementById("joueurX").src="img/tronconneuse.png";
            
            isActivated = true;
        } else {
            tronconneuse.style.backgroundColor = "deeppink";
            isActivated = false;
        }
    }
);

function victoire(){
    //TODO: Comparer les choix (choixJoueur, choixOrdi)-> victoirePour -----------------------------------------------------------------------------

    //TODO: Si : Cas égalité -----------------------------------------------------------------------------------------------------------------------
    // --- Match nul
    // --- Si Ordi = parpaing et Joueur = pargaing Alors Match nul - Ordi 0 0 Joueur
    if ((choixOrdi == "parpaing") && (choixJoueur == "parpaing")) {
        victoirePour = (0);
    }
    // --- Si Ordi = feuille et Joueur = feuille Alors Match nul - Ordi 0 0 Joueur
    else if ((choixOrdi == "feuille") && (choixJoueur == "feuille")) {
        victoirePour = (0);
    }
    // --- Si Ordi = tronconneuse et Joueur = tronconneuse Alors Match nul - Ordi 0 0 Joueur
    else if ((choixOrdi == "tronconneuse") && (choixJoueur == "tronconneuse")) {
        victoirePour = (0);
    }
    //TODO: Sinon Si : Cas de victoire -------------------------------------------------------------------------------------------------------------
    // Ordi Gagne
    // --- Si Ordi = parpaing et Joueur = tronconneuse Alors Ordi Gagne - Ordi 1 0 Joueur
    else if ((choixOrdi == "parpaing") && (choixJoueur == "tronconneuse")) {
        victoirePour = (1);
    }
    // --- Si Ordi = feuille et Joueur = parpaing alors Ordi Gagne - Ordi 1 0 Joueur
    else if ((choixOrdi == "feuille") && (choixJoueur == "parpaing")) {
        victoirePour = (1);
    }
    // --- Si Ordi = tronconneuse et Joueur = feuille Alors Ordi Gagne - Ordi 1 0 Joueur
    else if ((choixOrdi == "tronconneuse") && (choixJoueur == "feuille")) {
        victoirePour = (1);
    }
    //TODO: Sinon : Cas de défaite -----------------------------------------------------------------------------------------------------------------
    // --- Joueur Gagne
    // --- Si Ordi = parpaing et Joueur = feuille Alors Joueur Gagne - Ordi 0 1 Joueur
    else if ((choixOrdi == "parpaing") && (choixJoueur == "feuille")) {
        victoirePour = (2);
    }
    // --- Si Ordi = feuille et Joueur = tronconneuse Alors Joueur Gagne - Ordi 0 1 Joueur
    else if ((choixOrdi == "feuille") && (choixJoueur == "tronconneuse")) {
        victoirePour = (2);
    }
    // --- Si Ordi = tronconneuse et Joueur = parpaing Alors Joueur Gagne - Ordi 0 1 Joueur
    else if ((choixOrdi == "tronconneuse") && (choixJoueur == "parpaing")) {
        victoirePour = (2);
    }
    //--- Affiche la réponse pour tester le programme.
    console.log(victoirePour)
        //TODO: Afficher les résultats -----------------------------------------------------------------------------------------------------------------
        // Résultats
        // Match nul
        // Si Ordi=Joueur Alors Match Nul
    if (victoirePour == 0) {

        console.log("Match Nul ! Essai encore !")
        document.getElementById("matchNul").style.display="block";
        document.getElementById("afficheDefaut").style.display="none";
    }

    // Joueur Perds
    // Si Ordi pas Match nul ou pas Gagné alors Perds
    else if (victoirePour == 1) {
        console.log("bouh ! Tu es un loser")
        document.getElementById("joueurPerd").style.display="block";
        document.getElementById("afficheDefaut").style.display="none";
    }

    // Ordi Perds
    // Si Ordi pas Match nul ou pas Gagné alors Perds
    else if (victoirePour == 2) {
        console.log("Bravo ! Tu es un Champion !")
        document.getElementById("joueurGagne").style.display="block";
        document.getElementById("afficheDefaut").style.display="none";

         // document.getElementById("action").innerHTML = "Le joueur a choisit " +jChoice +"<br>" +" l'IA a choisit " +iaChoice +"<br><br>" +" <strong>ÉGALITÉ</strong>";
    }

}
//TODO: Afficher le choix du joueur (choixJoueur) ----------------------------------------------------------------------------------------------
//TODO: Afficher le choix de l'IA (choixOrdi) --------------------------------------------------------------------------------------------------
//TODO: Afficher le résultat -------------------------------------------------------------------------------------------------------------------
//TODO: Fonction restart -----------------------------------------------------------------------------------------------------------------------
        