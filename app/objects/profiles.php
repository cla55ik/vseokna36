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

  public function getOne($u)
  {
    $sql = "SELECT * FROM profile WHERE url = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$u]);

    $profile = $stmt->fetch();

    return $profile;
  }

  public function getUrl()
  {
    $sql = "SELECT url FROM profile WHERE id = 1";
    $stmt = $this->conn->query($sql);
    $profile = $stmt->fetch();
    return $profile;
  }

  public function getID($u){
    $sql = "SELECT id FROM profile WHERE url = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$u]);
    $profile = $stmt->fetch();
    return $profile;
  }

}
