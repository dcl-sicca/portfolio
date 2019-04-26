<?php
/* class formulaire {

    echo '<form method="get" action="traitement.php">'
    echo '<input type="text" id="nomPerso1" placeholder="Nom Perso1">'
    echo '<input type="text" id="forceBrut" placeholder="Force Brut">'
    echo '<input type="text" id="forceMagique" placeholder="Force Magique">'
    echo '<input type="text" id="armure" placeholder="Armure">'
    echo '<input type="text" id="vie" placeholder="Vie">'
    echo '<input type="text" id="soin" placeholder="Soin">'
    echo '<input type="submit" value="Enregistrer">'
    echo '</form>'
} */
?>
<?php
class formulaire {
    public $num = 0;
    public $nom = '<input type="text" value="" placeholder="Nom" name="nomPerso';
    public $forceBrut = '<input type="text" value="" placeholder="Force Brut" name="forceBrut';
    public $forceMagique = '<input type="text" value="" placeholder="Force Magique" name="forceMagique';
    public $armure = '<input type="text" value="" placeholder="Armure" name="armure';
    public $soin = '<input type="text" value="" placeholder="Soin" name="soin';
	public $vie = '<input type="text" value="" placeholder="Vie" name="vie';
	public function __construct($i)
	{
		$this->num = $i;
	}

	public function addI()
	{
        $this->nom .= $this->num.'">';
        $this->forceBrut .= $this->num.'">';
        $this->forceMagique .= $this->num.'">';
        $this->armure .= $this->num.'">';
        $this->soin .= $this->num.'">';
        $this->vie .= $this->num.'">';	
	}

	public function echoForm()
	{
        echo $this->nom;
        echo $this->forceBrut;
        echo $this->forceMagique;
        echo $this->armure;
        echo $this->soin;
        echo $this->vie;
	}
}

?>