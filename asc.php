<?php

    include "libs/load.php";

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['submit-btn']) && isset($_POST['btn-name'])) {
            $name = $_POST['btn-name'] ?? "";
            $error = User::setButton($name);
        }

        if (isset($_POST['submit-bc']) && isset($_POST['category']) && isset($_POST['main']) && isset($_POST['card'])) {
            $cate = $_POST['category'] ?? "";
            $main = $_POST['main'] ?? "";
            $card = $_POST['card'] ?? "";
            $error = User::setCenter($cate, $main, $card);
        }

        if (isset($_POST['submit-banner']) && isset($_FILES['img'])) {
            $img = $_FILES['img'] ?? "";
            $error = User::setBanner($img);
        }

        if (isset($_POST['submit-slider']) && isset($_FILES['img']))
        {
            $img = $_FILES['img'] ?? "";
            $error = User::setSlider($img);
        }

        if (isset($_POST['submit-db']) && isset($_FILES['file'])) {
            $file = $_FILES['file'] ?? "";
            $error = User::setDownload($file);
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
        <title>Add Content | Iragu Foundation</title>

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
                                    <li class="breadcrumb-item" aria-current="page">Add Content</li>
                                </ul>
                                <p class="<?= $error ? 'text-success' : 'text-danger' ?>"><?= $error ?></p>
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
                                <h5>Add Left Side Button</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Button Name</label>
                                        <input type="text" class="form-control" name="btn-name" placeholder="Button Name?" required/>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button type="submit" name="submit-btn" class="btn btn-danger" style="width: fit-content; place-self: end;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Button Content</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Select Button Name</label>
                                        <select class="form-control" name="category" required>
                                            <option>Select Category</option>
                                            <?php
                                                $category = Operations::getCategory();
                                                foreach ($category as $cate) {
                                            ?>
                                            <option value="<?= $cate['btn-name']; ?>"><?= $cate['btn-name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Main Content</label>
                                        <div class="quill-editor" data-name="main"></div>
                                        <input type="hidden" name="main" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Card Content</label>
                                        <div class="quill-editor" data-name="card"></div>
                                        <input type="hidden" name="card" required>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button type="submit" name="submit-bc" class="btn btn-danger">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Banner</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Banner Image</label>
                                        <input type="file" name="img" accept="image/*" class="form-control" required/>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button type="submit" name="submit-banner" class="btn btn-danger" style="width: fit-content; place-self: end;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Slider Images</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Slider Images</label>
                                        <input type="file" name="img[]" class="form-control" accept="image/*" multiple required/>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button type="submit" name="submit-slider" class="btn btn-danger" style="width: fit-content; place-self: end;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Downloading Brochure</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Brochure File</label>
                                        <input type="file" name="file" class="form-control" accept=".pdf" required/>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <button type="submit" name="submit-db" class="btn btn-danger" style="width: fit-content; place-self: end;">Submit</button>
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