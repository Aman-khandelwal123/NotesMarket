<!-- <?php include('config.php') ?> -->
<?php include('include/header.php')  ?>
<!-- <style>
    .search-btn {
        /* width: 100px;
        height: 100px; */
        background-color: red;
        position: relative;
        animation-name: example;
        animation-duration: 10s;
        animation-iteration-count: infinite;
    }

    @keyframes example {
        0%   {background-color: red;   }
        25%  {background-color: yellow;}
        50%  {background-color: blue;  }
        75%  {background-color: green; }
        100% {background-color: black; }
    }
</style> -->
<div class="bg"></div>
<section class="h-text">
    <!-- <marquee behavior="alternate" direction="right" scrollamount="3" style="color:royalblue;">
    </marquee> -->
    
    <h1>Welcome to Notes<span>Market</span></h1>
    <p>The best documents shared by our fellow students, organized in one place.</p>
    <div class="search-bar">
        <form action="#">
            <input type="text" placeholder="Search for notes, papers">
            <button type="submit" class="search-btn1">Search</button>
        </form>
    </div>
</section>
<section class="course">
    <div class="card">
        <div class="box">
            <div class="content">
                <h2>BCA</h2>
                <h4>Bachelor of Computer Application</h4>
                <button class="btn1"><a href="notes.php">For Notes</a></button>
                <button class="btn2"><a href="">For Papers</a></button>
                <button class="btn3"><a href="https:///docs.google.com/uc?export=download&id=189DbTz6XP4sfmFdcZsf6ae2-AeVMW_QL">For
                        Syllabus</a></button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <h2>BBA</h2>
                <h4> Bachelor of Business Administration</h4>
                <button class="btn1"><a href="">For Notes</a></button>
                <button class="btn2"><a href="">For Papers</a></button>
                <button class="btn3"><a href="https:///docs.google.com/uc?export=download&id=14sLAI68HRZ5YtNc-_39OT7b14X_P58qc">For
                        Syllabus</a></button>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php')  ?>