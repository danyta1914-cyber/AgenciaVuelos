<?php
class FiltroViaje {

    public $nombreHotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracionViaje;

    public function __construct($hotel, $ciudad, $pais, $fecha, $duracion) {
        $this->nombreHotel = $hotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fecha;
        $this->duracionViaje = $duracion;
    }

    public function mostrarFiltro() {
        return "
        Hotel: {$this->nombreHotel}<br>
        Destino: {$this->ciudad}, {$this->pais}<br>
        Fecha de viaje: {$this->fechaViaje}<br>
        Duración: {$this->duracionViaje} días
        ";
    }

    public function buscarPorDestino($destino) {
        return strtolower($this->ciudad) === strtolower($destino);
    }
}
?>
