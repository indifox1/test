<?php include __DIR__ . '/../partials/header.php' ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center py-2">
                    <span class="mr-auto">Users</span>
                    <a href="/users/create" role="button" class="btn btn-success btn-sm pull-right">Create</a>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead style="background-color: #b9cdd5">
                        <tr>
                            <th> User Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td>
                                    <?= $user->name ?>
                                    <i class="fas fa-cloud"></i>
                                </td>

                                <td>
                                    <a role="button" class="btn btn-sm btn-primary"
                                       href="/users/<?= $user->id ?>/edit">Edit</a>
                                    <a role="button" class="btn btn-sm btn-info"
                                       href="/users/<?= $user->id ?>/show">Show</a>
                                    <a role="button" class="btn btn-sm btn-danger"
                                       href="/users/<?= $user->id ?>/destroy">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit">
                        </form>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include  __DIR__ . '/../partials/footer.php'?>