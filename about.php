<!-- <?php include('config.php') ?> -->
<?php include('include/header.php') ?>

<!-- about-section -->
<section class="about">
    <div class="about-us-content">
        <div class="img">
            <img src="assets/img/time-to-study.jpg" alt="">
        </div>
        <div class="about-text">
            <h1>About Me</h1>
            <p>Web Developer & Designer</p>
            <p>Bachelor of Computer Applications (2019-2022)</p>
            <div class="btn">
                <a href="contact.php">Contact Me</a>
                <a href="/">Portfolio</a>
            </div>
        </div>
    </div>
</section>
<div class="counter">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="employees">
                <p class="counter-count">1</p>
                <p class="employee-p">Employee</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="customer">
                <p class="counter-count">1</p>
                <p class="customer-p">Customer</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="design">
                <p class="counter-count">3</p>
                <p class="design-p">Notes</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="order">
                <p class="counter-count">30</p>
                <p class="order-p">Orders</p>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>
<script>
    $('.counter-count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>