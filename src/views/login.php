<?php require_once("fragments/headFragment.php"); ?>

<nav class="navbar navbar-expand-lg bg-primary text-light p-0" id="nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="<?php echo $base_url?>">Home</a>
                </li>
            </ul>
        </div>
    </div>
    <span style="width: 40%;" class="fs-2 me-2">Content Managment System</span>
</nav>
<div class="mt-5 mx-auto col-3 ps-3 ">
    <h1 class="fw-bold mb-4">Welcome Admin</h1>
    <form method="POST" action="">
        <span class="text-danger"><?php print($loginErrorMessage) ?></span>
        <div>
            <label id="userName">Username</label>
            <input class="form-control" type="text" name="userName" placeholder="User name is Admin" required>
        </div>
        <div>
            <label id="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password is Admin" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="login">Submit</button>
    </form>
</div>

    <?php require_once("fragments/footerFragment.php") ?>