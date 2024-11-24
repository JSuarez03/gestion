<?php

class Database{
  // * se crean dos atributos privados $instance se utiliza para guardar una instacia unica de la clase y $Dbpdo se utiliza para guardar la conexion con la base de datos
  private $Dbpdo;
  // * la palabra static se coloca para poder acceder a este atributo sin intancear la clase
  static private $instance;

  // * Se crea la clase __construct() de forma privada para evitar crear mas de una instancia de esta clase
  private function __construct() { 
    $this->Dbpdo = new PDO("pgsql:dbname=8vo;host=localhost","root","1");
  }

  // * para poder obtener la instacia de esta clase se utiliza el metodo getInstance para retornar la instancia unica o crearla
  static public function getInstance(){
    if (!isset(self::$instance)) {
        self::$instance = new static();
    }
    return self::$instance;
  }

  public function readMany($table){
    try {
      $statement = $this->Dbpdo->prepare("Select * from $table");
      $statement->execute();
      $red = $statement->fetchAll();
      var_dump($red);
    } catch (PDOException $th) {
      echo "error:" . $th->getMessage();
    }
  }  
  public function readOnly($table,$datos){
    $compare = "";
    $id = array_keys($datos);
    $value = array_values($datos);
    
    for($i = 0;$i < count($datos);$i++){
        if($i !== 0){
          $compare .= " AND ";
        }
        $compare .= $id[$i] ."= '". $value[$i]."'";
      }
    try {
       $statement = $this->Dbpdo->prepare("Select * from $table where $compare");
      $statement->execute();
      $res = $statement->fetch();
      return $res;
    } catch (PDOException $th) {
      echo "error:" . $th->getMessage();
    }
  }
  public function insert($table,$arr){
    try {
      $statement = $this->Dbpdo->prepare(
        "insert into $table (".implode(",",array_keys($arr)).") values(".implode(",",array_values($arr)).")"
    );
      $statement->execute();
      $res = $statement->fetch();
      return $res;
    } catch (PDOException $th) {
      echo "error:" . $th->getMessage();
    }
  }
}

?>