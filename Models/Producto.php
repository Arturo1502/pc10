<?php

namespace Models;

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Producto
{
    private $conexion;
    public function __construct()
    {
        $database = new Database;
        $this->conexion = $database->getConn();
    }
    // Mostrar todos los productos
    public function all()
    {

        $query = 'SELECT * FROM productos';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Encontrar producto donde el id sea ?
    public function find($id)
    {

        $query = 'SELECT * FROM productos Where id = ?';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    // crear nuevo producto
    public function create($nombre, $precio)
    {

        $query = '';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$nombre, $precio]);
 
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //actualizar un producto
    public function update($id)
    {

        $query = '';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
 
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //eliminar un producto
    public function delete($id)
    {

        $query = '';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
 
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}


