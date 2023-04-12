<!-- <?php include('config.php') ?> -->
<?php include('include/header.php') ?>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO add_notes(`name`,`phone`,`address`) VALUES('$name','$phone','$address')";
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
?>


<div class="container">

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
                <div class="text-one"><a href="tel:8209788323">8209788323</a></div>
            </div>
            <div class="Email details">
                <i class="fa-solid fa-envelope"></i>
                <div class="topic">Email</div>
                <!-- <div class="text-two">codingbandhu374@gmail.com</div> -->
                <div class="text-one">amankhandelwal820@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of queries related this website, you can send me a message
                from here. It's my pleasure to help you.</p>

            <form method='post' enctype="multipart/form-data">
                <!-- <input type='hidden' name='form-name' value='form 1' /> -->
                <div class="input-box">
                    <input id="" type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input id="phone" type="phone" name="phone" placeholder="Enter your phone" required>
                </div>
                <div class="input-box message-box">
                    <textarea id="message" name="address" placeholder="Write a message here" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Send Now">
                </div>
                <div class="button">
                    <input type="reset" value="Reset">
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
                            <a href="delete.php?id=<?php echo $data['id'] ?>"><button type="delete" class="btn btn-primary" type="delete" name="delete">Delete</button></a>
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
<!-- <script>
    function myFunction() {
        alert("Insert SuceesFully");
    }
</script> -->