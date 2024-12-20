<?php
/**
 * Aquesta classe representa un exemple de documentació PHPDoc.
 */
class Exemple {
    /**
     * Retorna un missatge personalitzat.
     * 
     * @param string $nom El nom de l'usuari.
     * @return string El missatge personalitzat.
     */
    public function salutacio($nom) {
        return "Hola, $nom! Això és un exemple.";
    }
}

$exemple = new Exemple();
echo $exemple->salutacio("Jaume");
?>
