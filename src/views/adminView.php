<?php
require_once("fragments/headFragment.php");
require_once("fragments/adminHeader.php");
?>
<div class="container text-center view-min-height">
    <!-- SELECT PAGE SECTION -->
    <div style="width: 13rem; position: absolute;">
        <h5 class=" mt-3 fw-bold">View page</h5>
        <div class="col-md">
            <form action="" method="post">
                <div class="form-floating">
                    <select name="viewPage" class="form-select" id="floatingSelectGrid">
                        <?php foreach ($pages as $page) {
                            if ($page->getId() == $selectedViewPage) {
                                echo '<option selected value="' . $page->getId() . '">' . $page->getTitle() . '</option>';
                                continue;
                            }
                            echo '<option value="' . $page->getId() . '">' . $page->getTitle() . '</option>';
                        }
                        ?>
                    </select>
                    <label for="floatingSelectGrid">Select page</label>
                </div>
                <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">View</button></div>
            </form>
        </div>
    </div>
    <!-- Page content -->
    <div class="mt-3">
        <h1><?php echo $currentPage->getTitle(); ?></h1>
        <div><?php echo $currentPage->getContent(); ?></div>
    </div>
</div>
<?php
require_once("fragments/footerFragment.php")
?>