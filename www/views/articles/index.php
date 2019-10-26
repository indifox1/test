<?php include __DIR__ . '/../partials/header.php' ?>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center py-2">
                <span class="mr-auto">Articles</span>
                <a href="/articles/create" role="button" class="btn btn-success btn-sm pull-right">Create</a>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead style="background-color: #b9cdd5">
                    <tr>
                        <th>Name</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td>
                                <?= $article->name ?>
                                <i class="fas fa-cloud"></i>
                            </td>
                            <td>
                                <?= $article->published ?>
                            </td>

                            <td>
                                <a role="button" class="btn btn-sm btn-primary"
                                   href="/articles/<?= $article->id ?>/edit">Edit</a>
                                <a role="button" class="btn btn-sm btn-info"
                                   href="/articles/<?= $article->id ?>/show">Show</a>
                                <a role="button" class="btn btn-sm btn-danger"
                                   href="/articles/<?= $article->id ?>/destroy">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>


