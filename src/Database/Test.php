<?php


namespace app\Database;


class Test extends Connection
{

    public $name, $age;

    public function getInfo()
    {
        echo "Ім*я: $this->name; Вік: $this->age <br>";
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}
