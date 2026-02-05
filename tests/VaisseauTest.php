<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use App\Entities\Combat;
use App\Entities\Transport;

class VaisseauTest extends TestCase {

    #[Test]
    public function testVaisseauSansEnergiePasseHorsService(): void {
        $vaisseau = new Combat();
        $vaisseau->setEnergie(10);

        $vaisseau->simulerAvarie(15);

        $this->assertFalse($vaisseau->estFonctionnel());
        $this->assertEquals("hors service", $vaisseau->getEtat());
    }

    #[Test]
    public function testTirerSansMunitionsLeveException(): void {
        $chasseur = new Combat();
        $chasseur->setMunitions(0);

        $this->expectException(\UnderflowException::class);
        $this->expectExceptionMessage("Munitions épuisées");

        $chasseur->tirer();
    }

    #[Test]
    public function testSurchargeTransportLeveException(): void {
        $cargo = new Transport();
        $cargo->setCapaciteMax(100);

        $this->expectException(\OverflowException::class);
        $this->expectExceptionMessage("Capacité de soute dépassée");

        $cargo->charger("Minerai Lourd", 150);
    }

    #[Test]
    public function testRavitaillementRendLeVaisseauOperationnel(): void {
        $vaisseau = new Combat();
        $vaisseau->setEnergie(0);
        $vaisseau->simulerAvarie(10);

        $this->assertEquals("hors service", $vaisseau->getEtat());

        $vaisseau->ravitailler(50);

        $this->assertEquals(50, $vaisseau->getEnergie());
        $this->assertEquals("opérationnel", $vaisseau->getEtat());
        $this->assertTrue($vaisseau->estFonctionnel());
    }
}