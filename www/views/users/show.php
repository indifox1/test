<?php include __DIR__ . '/../partials/header.php' ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Show <?= $user->name ?></h5>
                    <p class="card-text">
                        Name: <?= $user->name ?>
                    </p>
                    <a href="/users/<?= $user->id ?>/edit" class="btn btn-primary">Edit</a>
                    <a href="/users/<?= $user->id ?>/destroy" class="btn btn-danger">Delete</a>

                </div>
            </div>
        </div>
    </div>
<?php include __DIR__ . '/../partials/footer.php' ?>