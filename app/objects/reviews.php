<?php



class Reviews{
  private $conn;
  private $table_name = "review";

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
