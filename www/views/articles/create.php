<?php include __DIR__ . '/../partials/header.php' ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Article
                </div>
                <div class="card-body">
                    <form action="/articles/store" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="published">Published</label>
                            <input type="text" name="published" class="form-control" id="published" placeholder="1">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/../partials/footer.php' ?>