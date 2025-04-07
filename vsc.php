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
    <?php include "temp/head.php"; ?>
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
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead><tr><th>#</th><th>Name</th><th>Actions</th></tr></thead>
                        <tbody>
                            <?php
                                $buttons = Operations::getCate($conn); // assuming btn-name list
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
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Button Contents -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Button Contents</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead><tr><th>#</th><th>Button Name</th><th>Main Content</th><th>Card Content</th><th>Actions</th></tr></thead>
                        <tbody>
                            <?php
                                $contents = Operations::getContent($conn); // assumes a method to fetch all button content
                                foreach ($contents as $index => $con) {
                            ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($con['category']) ?></td>
                                <td><?= $con['main'] ?></td>
                                <td><?= $con['card'] ?></td>
                                <td>
                                    <a href="edit-content.php?id=<?= $con['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="delete-content.php?id=<?= $con['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this content?');">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Banner -->
            <div class="card mb-4">
                <div class="card-header"><h5>Banner Image</h5></div>
                <div class="card-body">
                    <?php
                        $banner = Operations::getBanner($conn); // assuming latest banner or list
                        if ($banner) {
                            echo "<img src='{$banner['img']}' width='100%' style='max-height:300px; object-fit:cover;'>";
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
                        $sliders = Operations::getSliders($conn); // array of slider images
                        foreach ($sliders as $slide) {
                    ?>
                    <div class="col-md-4 mb-3">
                        <img src="<?= $slide['img'] ?>" class="img-fluid rounded" />
                        <div class="mt-1">
                            <a href="delete-slider.php?id=<?= $slide['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this image?');">Delete</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Brochure -->
            <div class="card mb-4">
                <div class="card-header"><h5>Brochure</h5></div>
                <div class="card-body">
                    <?php
                        $brochure = Operations::getBrochure($conn); // latest brochure file
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