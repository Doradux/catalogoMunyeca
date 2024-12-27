<?php
class Photo
{
    private $id;
    private $name;
    private $muneca_id;

    public function __construct($id, $n, $mi)
    {
        $this->id = $id;
        $this->name = $n;
        $this->muneca_id = $mi;
    }

    public static function getAll($conn)
    {
        $sql = "SELECT * FROM photos";
        $stmt = $conn->query($sql);
        $photos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $photos;
    }
}