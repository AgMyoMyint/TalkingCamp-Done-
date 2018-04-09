</div>

<div class="col-md-4">
    <div id="sidebar">
        <div class="block">

            <h3 class="text-center">Login Form</h3>

            <form method="" action="" role="form">

                <div class="form-group">
                    <label >UserName</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label >Password</label>
                    <input  name="password" type="password" class="form-control" placeholder="Enter Password">
                </div>

                <input type="submit" name="do_login" class="btn btn-primary" value="Login">
                <a href="register.php" class="btn btn-default" >Create Account</a>
            </form>

        </div>

        <div class="block">
            <h3> Categories </h3>
            <div class="list-group">


                <a href="topics.php" class="list-group-item <?php echo is_active(""); ?>">
                    All Topics
                    <span class="badge pull-right">
                            <?php echo getTotalCategories(); ?>
                        </span>
                </a>

                <?php foreach(getCategories() as $category) : ?>

                    <a href="topics.php?category=<?php echo $category["id"]; ?>" class="list-group-item <?php echo is_active($category['id']); ?>"  >
                        <?php echo $category["name"]; ?>
                        <span class="badge pull-right">
                            <?php echo getTotalTopics_count($category["id"]); ?>
                        </span>
                    </a>
                <?php endforeach; ?>



            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
