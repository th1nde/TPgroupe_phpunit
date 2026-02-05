<?php

namespace App\Entities;

use App\Entities\Flotte;

class Combat extends Flotte {

	private $armement;

	private $munition;

	public function getArmement(){

		return $this->armement;
		
	}

	public function getMunition() {

		return $this->armement;

	}

	public function setArmement($armement) {

		$this->armement = $armement;

	}

	public function setMunition($munition) {

		$this->munition = $munition;

	}
	

}




?>