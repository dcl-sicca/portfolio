// Définir ses variables
var nbrHasard;
var choixOrdi;
var choixJoueur;
var victoirePour;

// Variable hasard sur multiple de 3
nbrHasard = random(0, 3000);
// Génère un nombre aléatoire.
function random(min, max) {
    // Retourne une valeur entre 0 et 1002.
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
console.log(nbrHasard); // Affiche la réponse pour tester le programme.

// Défini le Shi-Fu-Mi en fonction du résultat

// --- Si résultat <= 1000 alors Shimumi = parpaing
if (nbrHasard <= 1000) {
    choixOrdi = "parpaing";
    // --- Si résultat <= 2000 alors shifumi = feuille
} else if (nbrHasard <= 2000) {
    choixOrdi = "feuille";
    // --- Si résultat supérieur à 2000 alors shifumi = tronconneuse
} else {
    choixOrdi = "tronconneuse";
}

console.log(choixOrdi); // Affiche la réponse pour tester le programme.

// Choix joueur
choixJoueur = prompt("parpaing, feuille, tronconneuse");
console.log("Shifumi Ordi =", choixOrdi);
console.log("Shifumi Joueur = ", choixJoueur);

// ----------------------------------------------------------------------------------------------------------

// Match nul

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

// Joueur Gagne
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


console.log(victoirePour)


// Résultats
// Match nul
// Si Ordi=Joueur Alors Match Nul
if (victoirePour == 0) {
    console.log("Match Nul ! Essai encore !")
}

// Joueur Perds
// Si Ordi pas Match nul ou pas Gagné alors Perds
else if (victoirePour == 1) {
    console.log("bouh ! Tu es un loser")
}

// Ordi Perds
// Si Ordi pas Match nul ou pas Gagné alors Perds
else if (victoirePour == 2) {
    console.log("Bravo ! Tu es un Champion !")
}