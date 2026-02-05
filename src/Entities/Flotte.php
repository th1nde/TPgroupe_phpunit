<?php

namespace src\Entities;

class Flotte {

	protected $nom;
	protected $energie;

	protected $etat;


	public function getNom(){

		return $this->nom;

	}

	public function getEnergie(){

		return $this->energie;

	}

	public function getEtat() {

		return $this->etat;
	}

	public function setNom($nom) {

		$this->nom = $nom;
	}

	public function setEnergie($energie) {

		$this->energie = $energie;

	}

	public function setEtat($etat) {

		$this->etat = $etat;

	}



}


?>