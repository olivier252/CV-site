/* 
Activité : jeu de devinette
*/

// NE PAS MODIFIER OU SUPPRIMER LES LIGNES CI-DESSOUS
// COMPLETEZ LE PROGRAMME UNIQUEMENT APRES LE TODO

console.log("Bienvenue dans ce jeu de devinette !");

// Cette ligne génère aléatoirement un nombre entre 1 et 100
var solution = Math.floor(Math.random() * 100) + 1;

// Décommentez temporairement cette ligne pour mieux vérifier le programme
console.log("(La solution est " + solution + ")");

// TODO : complétez le programme

var testJoueur = '', win = 'Bravo vous avez trouvé, la solution est ', lose = 'Vous avez perdu, la solution était ';

while ( testJoueur !== solution) {

    for(i = 1; i <= 6; i++) {
        testJoueur = Number(prompt('tape un chiffre'));

        if (testJoueur < solution) {
            console.log(testJoueur + ' est trop petit');

        } else if (testJoueur > solution) { 
            console.log(testJoueur + ' est trop grand');

        } else {
            console.log(win + solution);
            //je ne sais pas comment sortir des 2 boucles à ce niveau
        }
    }
    console.log(lose + solution);
    break;
}
