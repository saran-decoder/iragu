<?php

    include "libs/load.php";

    $conn = Database::getConnect();
    if (!$conn) {
        die("Database connection failed.");
    }

    $content = Operations::getEContent($conn);

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['submit-bc']) && isset($_POST['category']) && isset($_POST['main']) && isset($_POST['card'])) {
            $getID = $_GET['id'] ?? "";
            $cate = $_POST['category'] ?? "";
            $main = $_POST['main'] ?? "";
            $card = $_POST['card'] ?? "";
            $error = User::updateCenter($getID, $cate, $main, $card, $conn);
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <!-- [Head] start -->
    <head>
        <!-- [Meta] -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Edit Content | Iragu Foundation</title>

        <?php include "temp/head.php" ?>

    </head>
    <!-- [Head] end -->
    <!-- [Body] Start -->

    <body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
        <?php include "temp/header.php" ?>

        <!-- [ Main Content ] start -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Iragu Foundation</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="https://iragufoundation.org/admin/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Edit Content</li>
                                </ul>
                                <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->

                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Button Content</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Select Button Name</label>
                                        <select class="form-control" name="category" required>
                                            <option value="<?= $content['category'] ?>">Select Category</option>
                                            <?php
                                                $category = Operations::getCate($conn);
                                                foreach ($category as $cate) {
                                            ?>
                                            <option value="<?= $cate['btn-name']; ?>"><?= $cate['btn-name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Main Content</label>
                                        <div class="quill-editor" data-name="main"><?= $content['main'] ?></div>
                                        <input type="hidden" name="main" value="<?= htmlspecialchars($content['main']) ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Card Content</label>
                                        <div class="quill-editor" data-name="card"><?= $content['card'] ?></div>
                                        <input type="hidden" name="card" value="<?= htmlspecialchars($content['card']) ?>">
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button type="submit" name="submit-bc" class="btn btn-danger">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
        <!-- [ Main Content ] end_ -->
        
        <?php include "temp/footer.php" ?>

    </body>
    <!-- [Body] end -->
</html>