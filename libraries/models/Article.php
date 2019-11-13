<?php
require_once 'libraries/models/Model.php';

class Article extends Model
{

    /**
     * @return array
     */
    public function findAll(): array
    {
        // méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
        $results = $this->pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
        // On fouille le résultat pour en extraire les données réelles
        $articles = $results->fetchAll();
        return $articles;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM articles WHERE id = :article_id");
        $query->execute(['article_id' => $id]);
        $article = $query->fetch();
        return $article;
    }

    /**
     * @param int $id
     */
   public function delete(int $id): void
    {
        $query = $this->pdo->prepare('DELETE FROM articles WHERE id = :id');
        $query->execute(['id' => $id]);
    }
}
