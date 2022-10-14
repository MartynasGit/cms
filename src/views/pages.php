<?php
require_once("fragments/headFragment.php");
?>
<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg bg-primary text-light p-0" id="nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">
                <?php
                foreach ($pages as $page) {
                    print("<li class=\"nav-item\">" .
                        "<a class=\"nav-link active text-light\"
                         aria-current=\"page\" href=\"" . $base_url . "/Pages/?id=" . $page->getId() . "\">" .
                        $page->getTitle() . "</a></li>");
                }
                ?>
            </ul>
        </div>
    </div>
    <span style="width: 40%;" class="fs-2 me-2">Content Managment System</span>
</nav>
<div class="container-min-height container">
    <h1><?php echo $currentPage->getTitle(); ?></h1>
    <div><?php echo $currentPage->getContent(); ?></div>
    <?php
    require_once("fragments/footerFragment.php")
    ?>