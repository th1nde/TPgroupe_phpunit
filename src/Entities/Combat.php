<?php

namespace App\Entities;

class Combat extends Flotte {

    private string $armement = "Laser Standard";
    private int $munitions = 50;

    public function getArmement(): string {
        return $this->armement;
    }

    public function getMunitions(): int {
        return $this->munitions;
    }

    public function setArmement(string $armement): void {
        $this->armement = $armement;
    }

    public function setMunitions(int $munitions): void {
        $this->munitions = $munitions;
    }

    public function tirer(): void {
        if ($this->munitions > 0) {
            $this->munitions--;
        } else {
            throw new \UnderflowException("Erreur : Munitions épuisées !");
        }
    }
}