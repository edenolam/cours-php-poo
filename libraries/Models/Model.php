<?php
namespace Models;


abstract class Model
//abstract ne peut pas etre utilisé, ne peut pas etre instancié
{
    protected $pdo;
    protected $table;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        //appel methode static
        $this->pdo = \Database::getPdo();
    }

    /**
     * @param null|string $order
     * @return array
     */
    public function findAll(?string $order = ""): array
    {
        $sql = "SELECT * FROM {$this->table}";
        if ($order){
            $sql .= " ORDER BY " . $order;
        }
        // méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
        $results = $this->pdo->query($sql);
        // On fouille le résultat pour en extraire les données réelles
        $items = $results->fetchAll();
        return $items;
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetch();
        return $item;
    }

    /**
     * @param int $id
     */
    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }

}
