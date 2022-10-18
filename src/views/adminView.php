<?php
require_once("fragments/headFragment.php");
require_once("fragments/adminHeader.php");
?><div class="container">
    <h5 class="m-2 fw-bold">View All pages</h5>
    <div class="row g-2" style="width: 13rem;">
        <div class="col-md">
            <form action="" method="post">
                <div class="form-floating">
                    <select name="viewPage" class="form-select" id="floatingSelectGrid">
                        <?php foreach ($pages as $page) {
                            echo '<option value="' . $page->getid() . '">' . $page->getTitle() . '</option>';
                        }
                        ?>
                    </select>
                    <label for="floatingSelectGrid">Select page</label>
                </div>
                <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">View</button></div>
            </form>
        </div>
    </div>
</div>
<?php
require_once("fragments/footerFragment.php")
?>