<?php

namespace App\Entities;

class Flotte {

    protected string $nom;
    protected int $energie;
    protected string $etat;

    public function __construct(string $nom = "Vaisseau", int $energie = 100) {
        $this->nom = $nom;
        $this->energie = $energie;
        $this->etat = "opérationnel";
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getEnergie(): int {
        return $this->energie;
    }

    public function getEtat(): string {
        return $this->etat;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setEnergie(int $energie): void {
        $this->energie = $energie;
        if ($this->energie <= 0) $this->setEtat("hors service");
    }

    public function setEtat(string $etat): void {
        $this->etat = $etat;
    }

    public function simulerAvarie(int $degats): void {
        $this->energie = max(0, $this->energie - $degats);

        if ($this->energie <= 0) {
            $this->etat = "hors service";
        }
    }

    public function estFonctionnel(): bool {
        return $this->energie > 0; // sans énergie, pas fonctionnel
    }

    public function ravitailler(int $quantite): void {
        $this->energie += $quantite;
        if ($this->energie > 0) {
            $this->etat = "opérationnel";
        }
    }
}