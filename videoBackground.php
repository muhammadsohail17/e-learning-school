<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
    <video playsinline autoplay muted loop>
        <source src="video/computers.mp4">
    </video>
    <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to iSchool</h1>
        <small class="my-contant">Learn and Implement</small><br>
        <?php
        if (!isset($_SESSION['is_login'])) {
            echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalcenter">
            Get Started</a>';
        } else {
            echo '<a class="btn btn-primary mt-3" href="#">My Profile</a>';
        }
        ?>
        
    </div>
</div>