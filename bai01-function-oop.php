<!--Lập trình hướng thủ tục-->
<?php
function getPersonnel()
{
    $name = 'Vu Van A';
    $age =32;
    return $name .' '.$age;
}
 $getPersonnel = new getPersonnel();
echo "<hr>";
?>
<!--Lập trình hướng đối tượng - OOP -->
<?php
class Personnel
{
    private $name = 'vu van a';
    private $age =32;
    public function getPersonnel()
    {
        return $this->name .'-'.$this->age;
    }
}
getPersonnel();
?>