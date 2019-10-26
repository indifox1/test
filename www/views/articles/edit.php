<?php include __DIR__ . '/../partials/header.php' ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center py-2">
                    Edit Articles <?= $article->name ?>
                </div>
                <div class="card-body">
                    <form action="/articles/<?= $article->id ?>/update" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="John Doe"
                                   value="<?= $article->name ?>">
                        </div>
                        <div class="form-group">
                            <label for="published">Published</label>
                            <input type="text" class="form-control" id="published" placeholder="1"
                                   value="<?= $article->published ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/../partials/footer.php' ?>