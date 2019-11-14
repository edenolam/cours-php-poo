<div class="card">
    <div class="card-header">
        <h1><?= $article['title'] ?></h1>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><small>Ecrit le <?= $article['created_at'] ?></small></li>
        <li class="list-group-item"><p><?= $article['introduction'] ?></p></li>
        <li class="list-group-item"><?= $article['content'] ?></li>
    </ul>
</div>

<?php if (count($commentaires) === 0) : ?>
    <h2>Il n'y a pas encore de commentaires pour cet article </h2>
<?php else : ?>
    <h2>Il y a déjà <?= count($commentaires) ?> réactions : </h2>


    <?php foreach ($commentaires as $commentaire) : ?>
        <div class="card m-3">
            <h5 class="card-header">Commentaire de <?= $commentaire['author'] ?></h5>
            <div class="card-body">
                <h5 class="card-title">Le <?= $commentaire['created_at'] ?></h5>
                <p class="card-text"><?= $commentaire['content'] ?></p>
                <a href="delete-comment.php?id=<?= $commentaire['id'] ?>" class="btn btn-primary"
                   onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
            </div>
        </div>
    <?php endforeach ?>


<?php endif ?>

<form action="save-comment.php" class="form-group" method="POST">
    <h3>Vous voulez réagir ? N'hésitez pas les bros !</h3>
    <input type="text" class="form-control" name="author" placeholder="Votre pseudo !">
    <textarea name="content" class="form-control" id="" cols="30" rows="10"
              placeholder="Votre commentaire ..."></textarea>
    <input type="hidden" name="article_id" value="<?= $article_id ?>">
    <button class="btn btn-primary">Commenter !</button>
</form>
