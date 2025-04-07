<?php

class Operations
{
    public static function getCategory()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `cate` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getCate($conn)
    {
        $sql = "SELECT * FROM `cate` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    
    public static function getContent($conn)
    {
        $sql = "SELECT * FROM `btn-content` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getBanner($conn)
    {
        $sql = "SELECT * FROM `banner` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    public static function getSliders($conn)
    {
        $sql = "SELECT * FROM `slider` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getBrochure($conn)
    {
        $sql = "SELECT * FROM `brochure` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    public static function getECate($conn)
    {
        $getID = $_GET['id'];
        $sql = "SELECT * FROM `cate` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    
    public static function getEContent($conn)
    {
        $getID = $_GET['id'];
        $sql = "SELECT * FROM `btn-content` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
}

?>