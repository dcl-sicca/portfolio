// Création du plateau de jeux en 2 dimensions 7 col x 6 row -> new Array();-----------------------------------
var tableJeu = [
    [0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0]
];
//Déclaration des variables
var joueur1Choix = "red";
var joueur2Choix = "yellow";
var joueurActuel = 1; //1 pour joueur 1 et 2 pour joueur 2
var row = 6;
var col = 7;
var jeuActif = false;

var winnerIs;

var clickedCellElmt;
var clickedCellName;
var clickedCellCoordX;
var clickedCellCoordY;

//Affiche tableau vierge
console.table(tableJeu);

//Déclaration des éléments du DOM -------------------------------------------------------------------------------------
var puissance4 = document.getElementById("puissance4")

// Fonction Affiche Joueur Actif
function afficheJoueur() {
    if (jeuActif == true) {

        document.getElementById("joueurs").style.backgroundImage = "url(img/fond14.jpg)";
    }
    if (joueurActuel == 1) {

        document.getElementById("joueur2").style.backgroundColor = "yellow";
        document.getElementById("joueur1").style.backgroundColor = "cadetblue";
    } else if (joueurActuel == 2) {

        document.getElementById("joueur1").style.backgroundColor = "red";
        document.getElementById("joueur2").style.backgroundColor = "cadetblue";
    }
}
// TODO: Fonction Jeu-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -
function starJeu() {
    // location.reload();
    // if (jeuActif == true) return false;
    jeuActif = true;
    document.getElementById("joueurs").style.backgroundImage = "url(img/fond14.jpg)";
    console.log(jeuActif)
}

// function starJeu() {
//     jeuActif = true;
// }

// function jeuTableau() {
//     for (col = 0; col <= 6; col++) {
//         for (row = 0; row <= 6; row++) {
//             if (tableJeu[row][col] == 0) { // vérifie si la cellule est égal à 0
//                 document.getElementById("x" + row + "-y" + col).style.backgroundColor = "white";
//             }
//             if (tableJeu[row][col] == 1) { //vérifie si la cellule est égal à 1 = Joueur 1
//                 document.getElementById("x" + row + "-y" + col).style.backgroundColor = "red";
//             } else if (tableJeu[row][col] == 2) { //vérifie si la cellule est égal à 2 = Joueur 2
//                 document.getElementById("x" + row + "-y" + col).style.backgroundColor = "yellow";
//             }
//         }
//     }
// }


// // ajouter une pièce dans la colonne la plus basse disponible 
// function selectionColonne(col) {
//     // victoireJoueur();
//     // Cherchez le point le plus bas de cette rangée qui est ouvert.
//     for (row = 6; row >= 0; row--) {
//         if (tableJeu[row][col] == 0) {
//             tableJeu[row][col] = joueurActuel;
//             jeuTableau();
//             //changer le tour des joueurs actifs :
//             if (joueurActuel == 1) {
//                 joueurActuel = 2;
//             } else {
//                 joueurActuel = 1;
//             }
//             afficheJoueur();

//             //arrêter de chercher des espaces vides
//             return true;
//         }
//     }
// }

puissance4.addEventListener("click", function(event) {

    clickedCellElmt = document.getElementById(event.target.id); //enregistre l'élément  enfant du DOM qui a été cliquée.
    clickedCellName = event.target.id; //renvoie l'id de la cellule cliquée sous forme de string
    clickedCellCoordX = parseInt(clickedCellName[1]); // récupère le 2eme caractère dans l'ID
    clickedCellCoordY = parseInt(clickedCellName[4]); // récupère le 4eme caractère dans l'ID
    console.log("X : " + clickedCellCoordX + " - Y : " + clickedCellCoordY);
    console.log("clickedCell : " + clickedCellName);

    console.log("clickedCellElmt : " + clickedCellElmt);
    console.log("clickedCellName : " + clickedCellName);

    console.log("Colonne cliqué : " + clickedCellCoordY);


    if (joueurActuel == 1) {
        // on doit scanner les cases vide et remplir par le bas
        afficheJoueur();
        tableJeu[clickedCellCoordX][clickedCellCoordY] = 1; // modifie le tableau pour stocker la donnée dans la case cliquée
        clickedCellElmt.style.backgroundColor = joueur1Choix; // change la case qui viens d'être cliquée en rouge
        joueurActuel++ // Ajoute +1 pour passer au joueur 2
        console.table(tableJeu);
        console.log(clickedCellElmt);
        //console.log(test);

    } else if (joueurActuel == 2) {
        afficheJoueur();
        tableJeu[clickedCellCoordX][clickedCellCoordY] = 2; // modifie le tableau pour stocker la donnée dans la case cliquée
        clickedCellElmt.style.backgroundColor = joueur2Choix; // change la case qui viens d'être cliquée en jaune
        joueurActuel-- // Retire 1 pour passer au joueur 1
        console.table(tableJeu);
    }

});



// puissance4.addEventListener("click", function(event) {
//     jeuTableau();
// });






//TODO: Fonction restart-----------------------------------------------------------------------------------------------
function reload() {
    location.reload();
}