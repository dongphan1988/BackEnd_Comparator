    <?php


class Circle
{
    public $name;
    public $radius;
public function __construct($_radius,$_name)
{
    $this->radius = $_radius;
    $this->name = $_name;
}
public function getRadius(){
    return $this->radius;
}
}