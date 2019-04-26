<?php

class personnage{
    public $vie = 100;
    public $forceMagique = 20;
    public $forceBrut = 25;
    public $soin = 20;
    public $nom = pasdenom;
    public $armure = 15;


    public function __construct($nom, $soin)
    {
     $this->nom = $nom;  
     $this->soin = $soin;
    }

    public function __regenere($bonusVie = 0)
    {
        if ($bonusVie == 0) {
            $bonusVie = $this->soin;
        }
        
     $this->vie += $bonusVie;
     echo '<hr>';
     echo $this->nom. ' regenere de '. $bonusVie .' points de vie.</br>'; 
     echo 'il a maintenant '.$this->vie.' points de vie.</br>';
    }

    public function __decrire()
    {
        echo '<hr>'; 
        echo 'Personnage : '.$this->nom.'</br>';
        echo "Dispose d'une force Magique de : ".$this->forceMagique.'</br>';
        echo 'Il lui reste '.$this->vie.' points de vie.'.'</br>';
        echo '<hr></br>'; 
    }

    public function __attaqueMagique(personnage $defenseur)
    {
    $defenseur->vie = $defenseur->vie - $this->forceMagique;
    echo '<hr>';
    echo $this->nom.' attaque Magique '.$defenseur->nom.'</br>';
    echo $defenseur->nom." dispose d'une vie de : ".$defenseur->vie.'</br>';
    

        if ($defenseur->estVivant()){
            echo $defenseur->nom.' est toujours vivant <br>';
        } else {
            echo $defenseur->nom.' est mort';
        }
    echo '<hr>';   
    }

    public function __attaqueBrut(personnage $defenseur)
    {
        $defenseur->vie = $defenseur->vie - ($this->forceBrut-$this->armure);
        echo '<hr>';
        echo $this->nom.' attaque Brut '.$defenseur->nom.'</br>';
        echo $defenseur->nom." dispose d'une vie de : ".$defenseur->vie.'</br>';
        
    
            if ($defenseur->estVivant()){
                echo $defenseur->nom.' est toujours vivant <br>';
            } else {
                echo $defenseur->nom.' est mort';
            }
        echo '<hr>';    
    }

    public function estVivant()
    {
     if ($this->vie > 0){
        return true;
     }
     else {
         return false;
     }

    
     

    }
};

?>