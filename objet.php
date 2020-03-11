<?php
		
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);

	/**
	 * 
	 */
	class Objet
	{
		public $id;
		public $designation;
		public $quantite;
		public $volume;
		public $categorie;
		

		public function __construct($id,$designation,$quantite,$volume,$categorie)
		{
			$this->id=$id;
			$this->designation=$designation;
			$this->quantite=$quantite;
			$this->volume=$volume;
			$this->categorie=$categorie;
		}

		public function choisirQuantite($quantite)
		{
			if ($quantite>0) {
				$this->quantite=$quantite;
			} else {
				echo "Veuillez choisir une quantité supérieure à 0 svp";
			}
			
		}

		static function selectionnerObjet($obj)
		{
			array_push($objetSelectionnes, $obj);
		}

		static function calculVolume($objetSelectionnes)
		{
			
		}
	} 
	$objetSelectionnes = array("1","2","3");
	echo "a ",$objetSelectionnes[1]," b";
?>