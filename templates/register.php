<?php include ("includes/header.php");   ?>

<div class="main-col">

    <div class="block">
        <h2 class="pull-left">
            Create An Account
        </h2>
        <h4 class="pull-right">
            A simple php engine forum
        </h4>
        <div class="clearfix"></div>
        <hr>

        <form action="register.php" enctype="multipart/form-data" method="post">

            <div class="form-group">
                <?php displayMessage(); ?>
            </div>
            <div class="form-group">


                <label> Enter Name*</label>
                <input name="name"  type="text" class="form-control" placeholder="Enter Name ">
            </div>
            <div class="form-group">
                <label>Enter Email Adress*</label>
                <input name="email"  type="text" class="form-control" placeholder="Enter Email Adress ">
            </div>
            <div class="form-group">
                <label>Choose UserName*</label>
                <input name="username"  type="text" class="form-control" placeholder="Enter UserName ">
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input name="password"  type="text" class="form-control" placeholder="Enter Password ">
            </div>
            <div class="form-group">
                <label>Enter Password Again </label>
                <input name="password2"  type="text" class="form-control" placeholder="Enter Password again ">
            </div>
            <div class="form-group">
                <label>Upload Avatar </label>
                <input name="avatar" type="file" class="form-control" placeholder="Choose avatar ">
                <p class="help-block">

                </p>
            </div>
            <div class="form-group">
                <label>About Me  </label>
                <textarea id="about" name="about"  rows="6"  class="form-control" placeholder="Enter About Yourself (Optional) "> </textarea>
                <script >CKEDITOR.replace('about');</script>
            </div>
            <div class="form-group" >

                <input name="submit" type="submit" class="btn btn-primary " value="Create Account">

            </div>
        </form>
    </div>

</div>
<?php include ("includes/footer.php");   ?>