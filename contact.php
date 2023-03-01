<?php include('include/header.php') ?>

<!-- contact-page -->

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

            <form action='POST' method='post'><input type='hidden' name='form-name' value='form 1' />
                <div class="input-box">
                    <input id="name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input id="email" type="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box message-box">
                    <textarea id="message" placeholder="Write a message here" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Send Now">
                </div>
                <div class="button">
                    <input type="reset" value="Reset">
                </div>
            </form>
        </div>

    </section>

</div>
<?php include('include/footer.php') ?>