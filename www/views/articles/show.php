<?php include __DIR__ . '/../partials/header.php' ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Show <?= $article->name ?></h5>
                    <p class="card-text">
                        Name: <?= $article->name ?>
                    </p>
                    <p class="card-text">
                        Published: <?= $article->published ?>
                    </p>
                    <a href="/articles/<?= $article->id ?>/edit" class="btn btn-primary">Edit</a>
                    <a href="/articles/<?= $article->id ?>/destroy" class="btn btn-danger">Delete</a>

                </div>
            </div>
        </div>
    </div>
<?php include __DIR__ . '/../partials/footer.php' ?>