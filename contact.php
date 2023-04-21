<!-- <?php include('config.php') ?> -->
<?php include('include/header.php') ?>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $image = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['img_tmp'];
    $size = $_FILES['img']['size'];
    $img_type = $_FILES['img']['img_type'];
    move_uploaded_file($img_tmp, "upload/" . $image);
    $sql = "INSERT INTO add_notes(`name`,`phone`,`address`,`img`) VALUES('$name','$phone','$address','$image')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "data insert";
    } else {
        echo "not insert";
    }
}
// <!-- SHOW DATA -->
$sql1 = "SELECT * FROM `add_notes`";
$result1 = mysqli_query($conn, $sql1);

// update
if (isset($_POST['update'])) {
    $upd_id = $_GET['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    if (empty($_FILES['img']['name'])) {
        $image = $_POST['old_image'];
    } else {
        $image = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $size = $_FILES['img']['size'];
        $img_type = $_FILES['img']['type'];
        move_uploaded_file($img_tmp, "upload/" . $image);
    }
    $sql2 = "UPDATE `add_notes` SET name = '$name',phone='$phone',address= '$address',img ='$image' WHERE id = '$upd_id'";
    $res = mysqli_query($conn, $sql2);
    if ($res) {
        header('Location:contact.php');
    } else {
        echo "Data Not Updated";
    }
}
?>


<div class="container">
    <!-- update -->
    <?php
    if (isset($_GET['id'])) {
        // $upd_id = $_GET['id'];
        // $sqlio = "SELECT *FROM tbl_student WHERE id = '$upd_id'";
        // $resu = mysqli_query($conn, $sqlio);
        // $update = mysqli_fetch_assoc($resu);
        $upd_id = $_GET['id'];
        $sqlio = "SELECT *FROM add_notes WHERE id = '$upd_id'";
        $resu = mysqli_query($conn, $sqlio);
        $update = mysqli_fetch_assoc($resu);
    }
    ?>
    <section class="contact-us">
        <div class="left-side">
            <div class="address details">
                <i class="fa-solid fa-location-dot"></i>
                <div class="topic">Address</div>
                <div class="text-two">Jaipur,Rajasthan</div>
            </div>
            <div class="Phone details">
                <i class="fa-solid fa-phone"></i>
                <div class="topic">Phone</div>
                <div class="text-one"><a href="tel:8209788323">1122334466</a></div>
            </div>
            <div class="Email details">
                <i class="fa-solid fa-envelope"></i>
                <div class="topic">Email</div>
                <!-- <div class="text-two">codingbandhu374@gmail.com</div> -->
                <div class="text-one">amankhandelwal220@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of queries related this website, you can send me a message
                from here. It's my pleasure to help you.</p>

            <form method='post' enctype="multipart/form-data">
                <!-- <input type='hidden' name='form-name' value='form 1' /> -->
                <div class="input-box">
                    <input id="" type="text" name="name" value="<?php if (isset($upd_id)) {
                                                                    echo $update['name'];
                                                                } ?>" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input id="" type="phone" name="phone" value="<?php if (isset($upd_id)) {
                                                                        echo $update['phone'];
                                                                    } ?>" placeholder="Enter your phone" required>
                </div>
                <div class="input-box message-box">
                    <input id="" name="address" value="<?php if (isset($upd_id)) {
                                                            echo $update['address'];
                                                        } ?>" placeholder="Write a address here" required>
                </div>
                <div class="col-md-12 mt-2 px-0 input-box">
                    <input type="file" name="img" id=""  class="form-control" value="<?php if (isset($upd_id)) {
                                                                                        echo $update['img'];
                                                                                    } ?>">
                    <input type="hidden" name="old_image" id="" class="form-control" value="<?php if (isset($upd_id)) {
                                                                                                echo $update['img'];
                                                                                            } ?>">
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <?php
                        if (isset($upd_id)) {
                            $image1 = 'upload/' . $update['img'];
                            echo " <img src='$image1' alt='' height = 100px width= 100px />";
                        } else {
                            echo " ";
                        }
                        ?>
                    </div>
                </div>
                <!-- <div class="button">
                    <input type="submit" name="submit" onclick="myFunction()" value="Send Now">
                </div>
                <div class="button">
                    <input type="reset" value="Reset">
                </div> -->
                <div class="col-md-12 mt-2 px-0">
                    <?php if (isset($upd_id)) {
                        echo "<button class='btn btn-sm btn-warning' type='submit' name='update'>Update</button>";
                    } else {
                        echo "<button mb-2 class='btn btn-sm btn-info' type='submit' name='submit'>Save</button>";
                    } ?>
                </div>
            </form>
        </div>
    </section>
</div>
<div class="row px-3">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped mt-2">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($result1 as $data) {
                ?>
                    <tr>
                        <td>
                            <?php echo $data['id'] ?>
                        </td>

                        <td>
                            <?php echo $data['name'] ?>
                        </td>
                        <td>
                            <?php echo $data['phone'] ?>
                        </td>
                        <td>
                            <?php echo $data['address'] ?>
                        </td>
                        <td>
                            <?php echo $data['img'] ?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $data['id'] ?>"><button type="delete" class="btn btn-sm btn-danger" type="delete" name="delete">Delete</button></a>
                            <a href="contact.php?id=<?php echo $data['id'] ?>"><button class='btn btn-sm btn-primary' type="update" name="update">Update</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>
<script>
    function myFunction() {
        alert("Insert SuceesFully");
    }
</script>