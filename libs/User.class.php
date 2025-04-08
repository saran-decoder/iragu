<?php

class User
{
    public static function setButton($name)
    {
        $conn = Database::getConnect();

        $sql = "INSERT INTO `cate` (`btn-name`, `created_at`) VALUES (?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function updateButton($getID, $name, $conn)
    {
        $sql = "UPDATE `cate` SET `btn-name` = ?, `created_at` = NOW() WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $name, $getID);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setSubButton($name, $cate)
    {
        $conn = Database::getConnect();

        $sql = "INSERT INTO `sub-cate` (`name`, `category`, `created_at`) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $cate);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function updateSubButton($getID, $name, $cate, $conn)
    {
        $sql = "UPDATE `sub-cate` SET `name` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $cate, $getID);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setCenter($cate, $main, $card)
    {
        $conn = Database::getConnect();

        $sql = "INSERT INTO `btn-content` (`category`, `main`, `card`, `created_at`) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $cate, $main, $card);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function updateCenter($getID, $cate, $main, $card, $conn)
    {
        $sql = "UPDATE `btn-content` SET `category` = ?, `main` = ?, `card` = ?, `created_at` = NOW() WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $cate, $main, $card, $getID);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setBanner($img)
    {
        $conn = Database::getConnect();
        $targetDirImg = "uploads/Banner/";

        if (!is_dir($targetDirImg)) {
            mkdir($targetDirImg, 0777, true);
        }

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];
        
        $imgPath = "";
        
        if (!empty($_FILES["img"]["name"])) {
            $imgName = basename($_FILES["img"]["name"]);
            $imgPath = $targetDirImg . $imgName;
            $imgType = pathinfo($imgName, PATHINFO_EXTENSION);

            if (!in_array($imgType, $allowImageTypes)) {
                return "Error: Only JPG, JPEG, PNG, and GIF files are allowed for images.";
            }

            if (!move_uploaded_file($_FILES["img"]["tmp_name"], $imgPath)) {
                return "Error: Failed to upload image.";
            }
        }

        $sql = "INSERT INTO `banner`(`img`, `created_at`) VALUES (?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $imgPath);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setSlider($img)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/slider/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

        if (empty($img['name'][0])) {
            $sql = "INSERT INTO `slider` (`img`, `created_at`) VALUES (NULL, NOW())";
            if ($conn->query($sql)) {
                header("Location: vsc.php");
                exit;
            } else {
                return "Error occurred while saving data: " . $conn->error;
            }
        }

        $sql = "INSERT INTO `slider` (`img`, `created_at`) VALUES (?, NOW())";
        $stmt = $conn->prepare($sql);

        foreach ($img['name'] as $key => $fileName) {
            $fileTmp = $img['tmp_name'][$key];
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if (in_array($fileType, $allowTypes)) {
                $uniqueName = time() . "_" . basename($fileName);
                $filePath = $targetDir . $uniqueName;

                if (move_uploaded_file($fileTmp, $filePath)) {
                    $stmt->bind_param("s", $filePath);
                    $stmt->execute();
                }
            }
        }

        header("Location: vsc.php");
        exit;
    }

    public static function setDownload($file)
    {
        $conn = Database::getConnect();
        $targetDirPDF = "uploads/Brochure/";

        if (!is_dir($targetDirPDF)) {
            mkdir($targetDirPDF, 0777, true);
        }

        $allowPDFTypes = ['pdf'];

        $filePath = "";

        if (!empty($_FILES["file"]["name"])) {
            $fileName = basename($_FILES["file"]["name"]);
            $filePath = $targetDirPDF . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if (!in_array($fileType, $allowPDFTypes)) {
                return "Error: Only PDF files are allowed.";
            }

            if (!move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
                return "Error: Failed to upload PDF.";
            }
        }

        $sql = "INSERT INTO `brochure`(`file`, `created_at`) VALUES (?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $filePath);

        if ($stmt->execute()) {
            header("Location: vsc.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

}