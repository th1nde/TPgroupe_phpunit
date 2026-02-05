<?php

namespace App\Entities;

class Transport extends Flotte {

    private array $soute = [];
    private int $capaciteMax = 500;

    public function getSoute(): array {
        return $this->soute;
    }

    public function getCapaciteMax(): int {
        return $this->capaciteMax;
    }

    public function setCapaciteMax(int $capacite): void {
        $this->capaciteMax = $capacite;
    }

    public function charger(string $objet, int $poids): void {
        $poidsActuel = array_sum($this->soute);

        if (($poidsActuel + $poids) > $this->capaciteMax) {
            throw new \OverflowException("Erreur : Capacité de soute dépassée !");
        }

        if (isset($this->soute[$objet])) {
            $this->soute[$objet] += $poids;
        } else {
            $this->soute[$objet] = $poids;
        }
    }
}