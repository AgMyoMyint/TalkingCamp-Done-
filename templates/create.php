<?php include ("includes/header.php");   ?>

    <div class="main-col">

        <div class="block">
            <h2 class="pull-left">
                Create A Topic
            </h2>
            <h4 class="pull-right">
                A simple php engine forum
            </h4>
            <div class="clearfix"></div>
            <hr>
            <form action="create.php" enctype="multipart/form-data" method="post">
                <?php displayMessage(); ?>
                <div class="form-group">
                    <label> Topic Title</label>
                    <input name="title"  type="text" class="form-control" placeholder="Enter Title ">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category"   class="form-control">
                    <?php foreach(getCategories() as $category) : ?>

                            <option value="<?php echo $category["id"] ;  ?>"> <?php echo $category["name"] ;  ?> </option>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Topic Body</label>
                    <textarea id="about" name="body"  rows="6"  class="form-control" placeholder="Enter About Yourself (Optional) "> </textarea>
                    <script >CKEDITOR.replace('about');</script>
                </div>

                <div class="form-group" >
                    <input name="submit" type="submit" class="btn btn-primary " value="Create">
                </div>
            </form>
        </div>

    </div>
<?php include ("includes/footer.php");   ?>