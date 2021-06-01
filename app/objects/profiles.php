<?php



class Profiles{
  private $conn;
  private $table_name = "profile";

  public function __construct($db)
  {
      $this->conn = $db;
  }

  public function getAll()
  {
    $query = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->query($query);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $array;
  }

  public function getOne($id)
  {
    $sql = "SELECT * FROM " . $this->table_name . "WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$id]);

    $profile = $stmt->fetch();

    return $profile;
  }

}
