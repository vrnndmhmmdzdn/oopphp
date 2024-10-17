<?php

class Building
{
    public $name;
    protected $floor;

    public function __construct($name, $floor)
    {
        $this->name = $name;
        $this->floor = $floor;
    }
    public function info()
    {
        return "Building: " . $this->name . " with " . $this->floor . " floors.";
    }
}
class Apartement extends Building
{
    public $unit;
    public function __construct($name, $floor, $unit)
    {
        parent::__construct($name, $floor, $unit);
        $this->unit = $unit;
    }
    public function info()
    {
        return "Apartment " . $this->name .  " with " .  $this->floor .  " floors and " . $this->unit . " units.";
    }
}
$apartement = new Apartement("zaidan", "10", "80    ");
echo $apartement->info();
