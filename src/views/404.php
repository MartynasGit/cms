<?php
require_once("fragments/headFragment.php");
?>
<nav class="navbar navbar-expand-lg bg-primary text-light p-0" id="nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="<?php echo $base_url; ?>">Home</a>
                </li>
            </ul>
        </div>
    </div>
    <span style="width: 40%;" class="fs-2 me-2">Content Managment System</span>
</nav>
<div class="container-min-height container text-center pt-5">
    <span class="fw-bold d-block text-danger"> PAGE NOT FOUND </span>
    <img alt="404 error message" src="<?= $base_url; ?>/src/views/assets/404.webp" width="800px">
</div>
<?php
require_once("fragments/footerFragment.php")
?>