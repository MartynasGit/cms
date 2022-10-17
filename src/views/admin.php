<?php
require_once("fragments/headFragment.php");
require_once("fragments/adminHeader.php");
?>
<div class="container">
    <h1>Manage Pages</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Page</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($pages)) {
                foreach ($pages as $page) {
                    echo '<tr> <td>' . $page->getId() . '</td>';
                    echo  '<td>' . $page->getTitle() . '</td>';
                    echo '<td><a href="' . $base_url . '/Admin/Edit/?editPage=' . $page->getId() . '" class="btn btn-primary me-2">' . '<i class="bi bi-pencil-square me-1"></i></a>';
                    if ($page->getTitle() === "Home") {
                        continue;
                    }
                    echo '<a href="' . $base_url . '/Admin/?deletePage=' . $page->getId() . '" class="btn btn-primary">' . '<i class="bi bi-trash3-fill me-1"></i></i></a></tr>';
                }
                
            } else {
                echo '<h2>0 results</h2>';
            }
            ?>
        </tbody>
    </table>
    <!-- CREATE NEW PAGE -->
    <?php echo $error ?? ""; ?>
    <div class="col-2 mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Create new page</label>
                <input type="text" required id="name" placeholder="New page name" name="createPage" class="form-control">
            </div>
            <div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
        </form>
    </div>
</div>
<?php
require_once("fragments/footerFragment.php")
?>