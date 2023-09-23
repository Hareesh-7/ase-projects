<?php
include_once("./connection.php");

if (isset($_POST['Submit'])) {
    // $sno = $_POST['sno'];
    $category = $_POST['category'];
    // $previewImage = $_POST['previewImage'];
    if ($category !== "webDevelopment") {
        $typeOf = "";
        $previewURL = "";
    } else {
        $typeOf = $_POST['typeOf'];
        $previewURL = $_POST['previewURL'];
    }

    $errors = array();
    $file_name = $_FILES['previewImage']['name'];
    $file_size = $_FILES['previewImage']['size'];
    $file_tmp = $_FILES['previewImage']['tmp_name'];
    $file_type = $_FILES['previewImage']['type'];

    $previewImage = str_replace(" ", "", $file_name);

    if ($category == "webDevelopment") {
        $img = move_uploaded_file($file_tmp, "./img/webDevelopment/" . $typeOf . "/" . $previewImage);
    } else {
        $img = move_uploaded_file($file_tmp, "./img/" . $category . "/" . $previewImage);
    }


    if (($img != null) && ($category != null)) {
        $result = "INSERT INTO previewdata (category,typeOf,previewURL,previewImage) VALUES ('$category','$typeOf','$previewURL','$previewImage')";
    }
    // var_dump($result);
    $res = $conn->query($result);
    // var_dump($res);
    if ($res != null) {
        echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Data added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
    }
}
?>

<script>
    setTimeout(function() {
        window.location.href = './upload.php';
    }, 100);
</script>