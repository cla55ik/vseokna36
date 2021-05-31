<?php



class Akcii{
  private $conn;
  private $table_name = "akcii";

  public function __construct($db)
  {
      $this->conn = $db;
  }

  public function getAll()
  {
    $query = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->query($query);
    $array_cat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $array_cat;
  }

}
