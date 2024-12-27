<?php
class Muneca
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $outstanding;
    private $offer;
    private $disccount;
    private $height;

    public function __construct($id, $n, $d, $p, $ou = false, $of = false, $dis = 0, $height)
    {
        $this->id = $id;
        $this->name = $n;
        $this->description = $d;
        $this->price = $p;
        $this->outstanding = $ou;
        $this->offer = $of;
        $this->disccount = $dis;
        $this->height = $height;
    }

    public static function getAll($conn)
    {
        $sql = "SELECT * FROM muneca";
        $stmt = $conn->query($sql);
        $munecas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $munecas;
    }
}
