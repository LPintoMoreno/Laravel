<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;
    private $id;
    private $nombre;
    private $fecha;
    private $estado;
    private $responsable;
    private $monto;

    public function __construct()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getFecha()
    {
        return $this->id;
    }
    public function getEstado()
    {
        return $this->id;
    }
    public function getResponsable()
    {
        return $this->id;
    }
    public function getMonto()
    {
        return $this->id;
    }
    public function setId($_n)
    {
        $this->id = $_n;
    }
    public function setNombre($_n)
    {
        $this->nombre = $_n;
    }
    public function setFecha($_n)
    {
        $this->id = $_n;
    }
    public function setEstado($_n)
    {
        $this->id = $_n;
    }
    public function setResponsable($_n)
    {
        $this->id = $_n;
    }
    public function setMonto($_n)
    {
        $this->id = $_n;
    }
}
