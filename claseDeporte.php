<?php

class EquipoDeportivo {
    public $jugador;
    public $entrenador;
    public $estadio;
    public $trofeo;
    public $patrocinador;

    public function __construct($jugador, $entrenador, $estadio, $trofeo, $patrocinador) {
        $this->jugador = $jugador;
        $this->entrenador = $entrenador;
        $this->estadio = $estadio;
        $this->trofeo = $trofeo;
        $this->patrocinador = $patrocinador;
    }
}


$equipo = new EquipoDeportivo('Messi', 'Guardiola', 'Camp Nou', 'La Liga', 'Nike');

?><br><h3>Equipo 1</h3><?php
echo "Jugador: " . $equipo->jugador . "\n";
echo "Entrenador: " . $equipo->entrenador . "\n";
echo "Estadio: " . $equipo->estadio . "\n";
echo "Trofeo: " . $equipo->trofeo . "\n";
echo "Patrocinador: " . $equipo->patrocinador . "\n";
?><br><h3>Equipo 2</h3><?php

$equipo1 = new EquipoDeportivo('Ronaldo', 'Zidane', 'Santiago Bernabéu', 'Champions League', 'Adidas');

echo "Jugador: " . $equipo1->jugador . "\n";
echo "Entrenador: " . $equipo1->entrenador . "\n";
echo "Estadio: " . $equipo1->estadio . "\n";
echo "Trofeo: " . $equipo1->trofeo . "\n";
echo "Patrocinador: " . $equipo1->patrocinador . "\n";
?><br><h3>Equipo 3</h3><?php
$equipo2 = new EquipoDeportivo('Neymar', 'Tuchel', 'Parc des Princes', 'Ligue 1', 'Puma');

echo "Jugador: " . $equipo2->jugador . "\n";
echo "Entrenador: " . $equipo2->entrenador . "\n";
echo "Estadio: " . $equipo2->estadio . "\n";
echo "Trofeo: " . $equipo2->trofeo . "\n";
echo "Patrocinador: " . $equipo2->patrocinador . "\n";
?><br><h3>Equipo 4</h3><?php
$equipo3 = new EquipoDeportivo('Mbappé', 'Klopp', 'Anfield', 'Premier League', 'New Balance');

echo "Jugador: " . $equipo3->jugador . "\n";
echo "Entrenador: " . $equipo3->entrenador . "\n";
echo "Estadio: " . $equipo3->estadio . "\n";
echo "Trofeo: " . $equipo3->trofeo . "\n";
echo "Patrocinador: " . $equipo3->patrocinador . "\n";
?><br><h3>Equipo 5</h3><?php
$equipo4 = new EquipoDeportivo('Haaland', 'Solskjær', 'Old Trafford', 'Europa League', 'Under Armour');

echo "Jugador: " . $equipo4->jugador . "\n";
echo "Entrenador: " . $equipo4->entrenador . "\n";
echo "Estadio: " . $equipo4->estadio . "\n";
echo "Trofeo: " . $equipo4->trofeo . "\n";
echo "Patrocinador: " . $equipo4->patrocinador . "\n";


?>
