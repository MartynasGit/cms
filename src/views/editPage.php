<?php
require_once("fragments/headFragment.php");
require_once("fragments/adminHeader.php");
?>
<div class="container view-min-height">
    <h1 class="m-3 text-center">Edit Page </h1>
    <div class="mt-5 mx-auto col-5 ps-3 ">
        <form method="POST" action="">
            <div>
                <?php echo  isset($editMessage) ?   $editMessage  : ""; ?>
                <label id="userName">Title</label>
                <input class="form-control" type="text" <?=($currentPage->getTitle() === 'Home')? 'readonly="readonly"':'';?> name="titleName" placeholder="New title name" required value="<?php echo $currentPage->getTitle() ?>">
            </div>
            <div class="form-floating mt-3">
                <textarea style="height:20rem" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="content" style="height: 100px"><?php echo $currentPage->getContent() ?></textarea>
                <label for="floatingTextarea2">Content</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="edit">Submit</button>
            <a class="btn btn-primary mt-3" href="<?= $base_url . "/Admin/" ?>">Abort</a>

        </form>
    </div>

</div>
<?php
require_once("fragments/footerFragment.php")
?>