<h1>Nos articles</h1>

<?php foreach ($articles as $article) : ?>
<div class="card">
   <div class="card-body">
       <h4 class="card-title"><?= $article['title'] ?></h4>
       <small>Ecrit le <?= $article['created_at'] ?></small>
       <p class="card-text"><?= $article['introduction'] ?></p>

    <a href="article.php?id=<?= $article['id'] ?>" class="btn btn-warning">Lire la suite</a>
    <a href="delete-article.php?id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)" class="btn btn-danger">Supprimer</a>
   </div>
</div>
<?php endforeach ?>