<?php

namespace Controller;

class Database {
  // * se crean dos atributos privados $instance se utiliza para guardar una instacia unica de la clase y $Dbpdo se utiliza para guardar la conexion con la base de datos
  private $Dbpdo;
  // * la palabra static se coloca para poder acceder a este atributo sin intancear la clase
  static private $instance;

  // * Se crea la clase __construct() de forma privada para evitar crear mas de una instancia de esta clase
  private function __construct() { 
    $this->Dbpdo = new \PDO("pgsql:dbname=Gestionv2;host=localhost",'root','1');
  }

  // * para poder obtener la instacia de esta clase se utiliza el metodo getInstance para retornar la instancia unica o crearla
  static public function getInstance(){
    if (!isset(self::$instance)) {
        self::$instance = new static();
    }
    return self::$instance;
  }

  public function parametros($datos,$inter) {
    $compare='';
    $id = array_keys($datos);
    
    for($i = 0;$i < count($datos);$i++){
        if($i !== 0){
            $compare .= " $inter ";
        }
        $compare .= $id[$i] ."=:".$id[$i]."";
    }
    return $compare;
  }
  
  public function readMany($table){
    try {
      $statement = $this->Dbpdo->prepare("Select * from $table");
      $statement->execute();
      $res = $statement->fetchAll();
      return $res;
    } catch (\PDOException $th) {
      throw new \Exception($th->getMessage());
    }
  }  
  
  public function readOnly($table,$datos): array|false{
    $keys = array_keys($datos);
    $value = array_values($datos);
    $compare = $this->parametros($datos, "AND");
    try {
      $statement = $this->Dbpdo->prepare("Select * from $table where $compare");
      for($i = 0;$i < count($datos);$i++){
          $statement->bindParam($keys[$i], $value[$i]);
      }
      $statement->execute();
      $res = $statement->fetch();
      return $res;
    } catch (\PDOException $th) {
      throw new \Exception($th->getMessage());
    }
  }

  public function readOnlyAll($table,$datos): array|false{
    $keys = array_keys($datos);
    $value = array_values($datos);
    $compare = $this->parametros($datos, "AND");
    try {
      $statement = $this->Dbpdo->prepare("Select * from $table where $compare");
      for($i = 0;$i < count($datos);$i++){
          $statement->bindParam($keys[$i], $value[$i]);
      }
      $statement->execute();
      $res = $statement->fetchAll();
      return $res;
    } catch (\PDOException $th) {
      throw new \Exception($th->getMessage());
    }
  }
  
  public function insert($table,$datos){
    $keys = array_keys($datos);
    $values = array_values($datos);
    try {
      $statement = $this->Dbpdo->prepare(
        "insert into $table (".implode(",",$keys).") values(:".implode(",:",$keys).")"
    );
      for($i = 0;$i < count($datos);$i++){
          $statement->bindParam($keys[$i], $values[$i]);
      }
      $statement->execute();
      $res = $statement->fetch();
      return $res;
    } catch (\PDOException $th) {
        throw new \Exception($th->getMessage());
    }
  }
  
  public function update($table,$datos){
    $whereId =  array_key_first($datos);
    $whereValue = array_shift($datos);
    $keys = array_keys($datos);
    $value = array_values($datos);
    try {
      $parametros = $this->parametros($datos, ',');
      $statement = $this->Dbpdo->prepare(
        "UPDATE $table set $parametros WHERE ". $whereId."=:".$whereValue
    );
      for($i = 0;$i < count($datos);$i++){
          $statement->bindParam($keys[$i], $value[$i]);
      }
      $statement->bindParam($whereValue, $whereValue);
      $statement->execute();
      $res = $statement->fetch();
      return $res;
    } catch (\PDOException $th) {
      throw new \Exception($th->getMessage());
    }
  }
    
}

?>