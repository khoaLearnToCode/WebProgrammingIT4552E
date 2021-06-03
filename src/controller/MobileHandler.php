<?php 
    include_once(__DIR__."/MobileController.php"); 
    
    $id = $_POST['mobileId'];
    $brandId = $_POST['brandId'];
    $name = $_POST['name'];
    $chip = $_POST['chip'];
    $platform = $_POST['platform'];
    $rear_camera = $_POST['rearCamera'];
    $front_camera = $_POST['frontCamera'];
    $memory = $_POST['memory'];
    $price = $_POST['price'];
    $screen = $_POST['screen'];
    $discount = $_POST['discount'];
    $img = $_POST['img'];
    
    $mobileController = new MobileController();

    if ($id == "-1") {
        return $mobileController -> insertMobile($brandId, $name, $platform, $chip, $rear_camera, $front_camera, $memory, $price, $screen, $discount, $img);
    } else {
        return $mobileController -> updateMobileById($id, $brandId, $name, $platform, $chip, $rear_camera, $front_camera, $memory, $price, $screen, $discount, $img);
    }
?>
