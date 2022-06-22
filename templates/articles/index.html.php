<h1>Nos articles</h1>

<?php foreach ($articles as $article) : ?>
    <div class="article">
        <h2><?= $article['title'] ?></h2>
        <small>Ecrit le <?= $article['created_at'] ?></small>
        <p><?= $article['introduction'] ?></p>
        <a href="article.php?id=<?= $article['id'] ?>" class="btn btn-show">Lire la suite</a>
        <a href="delete-article.php?id=<?= $article['id'] ?>" class="btn btn-danger" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)">Supprimer</a>
    </div>
    <?php endforeach ?>