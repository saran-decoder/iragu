<?php
    include "libs/load.php";
    $conn = Database::getConnect();
    if (!$conn) {
        die("Database connection failed.");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Content | Iragu Foundation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include "temp/head.php"; ?>
        <style>
            .table-responsive {
                overflow-x: auto;
            }
            .table {
                min-width: 600px;
            }
            img {
                max-width: 100%;
                height: auto;
            }
        </style>
    </head>
    <body data-pc-theme="light">
        <?php include "temp/header.php"; ?>

        <div class="pc-container">
            <div class="pc-content">
                <div class="page-header">
                    <h5>All Contents</h5>
                </div>

                <!-- Left Side Buttons -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Left Side Buttons</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead><tr><th>#</th><th>Name</th><th>Actions</th></tr></thead>
                            <tbody>
                                <?php
                                    $buttons = Operations::getCate($conn);
                                    if ($buttons) {
                                        foreach ($buttons as $index => $btn) {
                                ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($btn['btn-name']) ?></td>
                                    <td>
                                        <a href="edit-button.php?id=<?= $btn['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="delete-button.php?id=<?= $btn['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this button?');">Delete</a>
                                    </td>
                                </tr>
                                <?php } } else { echo "<tr><td>No button text uploaded.</td></tr>"; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sub Left Side Buttons -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Sub Left Side Buttons</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead><tr><th>#</th><th>Name</th><th>Category</th><th>Actions</th></tr></thead>
                            <tbody>
                                <?php
                                    $buttons = Operations::getSubCate($conn);
                                    if ($buttons) {
                                        foreach ($buttons as $index => $btn) {
                                ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($btn['name']) ?></td>
                                    <td><?= htmlspecialchars($btn['category']) ?></td>
                                    <td>
                                        <a href="edit-subbutton.php?id=<?= $btn['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="delete-subbutton.php?id=<?= $btn['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this button?');">Delete</a>
                                    </td>
                                </tr>
                                <?php } } else { echo "<tr><td>No sub button text uploaded.</td></td>"; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Button Contents -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Button Contents</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr><th>#</th><th>Button Name</th><th>Main Content</th><th>Card Content</th><th>Actions</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                    $contents = Operations::getContent($conn);
                                    if ($contents) {
                                        foreach ($contents as $index => $con) {
                                ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= $con['category'] ?></td>
                                    <td><?= $con['main'] ?></td>
                                    <td><?= $con['card'] ?></td>
                                    <td>
                                        <a href="edit-content.php?id=<?= $con['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="delete-content.php?id=<?= $con['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this content?');">Delete</a>
                                    </td>
                                </tr>
                                <?php } } else { echo "<tr><td>No button content uploaded.</td></tr>"; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Banner -->
                <div class="card mb-4">
                    <div class="card-header"><h5>Banner Image</h5></div>
                    <div class="card-body">
                        <?php
                            $banner = Operations::getBanner($conn);
                            if ($banner) {
                                echo "<img src='{$banner['img']}' style='width: 100%; max-height:300px; object-fit:cover;'>";
                        ?>
                            <div class="mt-2">
                                <a href="delete-banner.php?id=<?= $banner['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this banner?');">Delete</a>
                            </div>
                        <?php } else { echo "<p>No banner uploaded.</p>"; } ?>
                    </div>
                </div>

                <!-- Slider Images -->
                <div class="card mb-4">
                    <div class="card-header"><h5>Slider Images</h5></div>
                    <div class="card-body row">
                        <?php
                            $sliders = Operations::getSliders($conn);
                            if ($sliders) {
                                foreach ($sliders as $slide) {
                        ?>
                        <div class="col-sm-6 col-md-4 mb-3">
                            <img src="<?= $slide['img'] ?>" class="img-fluid rounded" alt="Slider Image" />
                            <div class="mt-1">
                                <a href="delete-slider.php?id=<?= $slide['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this image?');">Delete</a>
                            </div>
                        </div>
                        <?php } } else { echo "<p>No slider uploaded.</p>"; } ?>
                    </div>
                </div>

                <!-- Brochure -->
                <div class="card mb-4">
                    <div class="card-header"><h5>Brochure</h5></div>
                    <div class="card-body">
                        <?php
                            $brochure = Operations::getBrochure($conn);
                            if ($brochure) {
                        ?>
                            <a href="<?= $brochure['file'] ?>" target="_blank" class="btn btn-outline-primary">Download Brochure</a>
                            <a href="delete-brochure.php?id=<?= $brochure['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete brochure?');">Delete</a>
                        <?php } else { echo "<p>No brochure uploaded.</p>"; } ?>
                    </div>
                </div>

            </div>
        </div>

        <?php include "temp/footer.php"; ?>
    </body>
</html>