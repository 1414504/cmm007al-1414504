<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message = ""; if(isset($_POST['save_blog'])) {
    $name = $_POST['work_blog'];
    $category = $_POST['university_blog'];
    $summary1 = $_POST['family_blog'];
    $summary2 = $_POST['family_blog'];
    $summary3 = $_POST['family_blog'];

    $con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "bb5a7b89a1ca75", "ff443ee7", "blogView");
    $sql = "insert into blogViewTable (blogitemID,entryTitle,entrySummary, category, submitter)values('$name','$category','$summary1', '$summary2', '$summary3')";
    $con->query($sql); $con->
close(); $message = "<h3>
Data saved successfully</h3>
"; }//end if statement ?> <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/jquery-1.12.0.min.js" type="text/javascript">
    </script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>myBlog</title>
</head>
<body>
<div class="container border">
    <header>
        <div class="row border">
            <div class="col-md-2">
                <img class ="image-logo" src="image/logo.png" alt="" />
            </div>
            <div class="col-md-10">
                <h2>myBlog</h2>
                <h3>because the internet needs to know what I think</h3>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-md-2 min-height">
            <?php include './navbar.php'; ?> </div>



        <form action="" method="POST">
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-10 border min-height">
                        <div class = "row" style="margin-top: 10px;">

                            <div class="col-md-3">
                                Entry Title</div><div class="col-md-3">
                                <input name="work_blog" type="text" class="form-control" required="">

                             </div>
                        </div>

                        <div class = "row" style="margin-top:10px;">
                            <div class="col-md-3">
                              Entry Summary</div>
                            <div class="col-md-9">
                        <textarea name="university_blog" class="form-control" required=""></textarea>
                            </div>
                        </div>



                        <div class = "row" style="margin-top: 10px;">
                            <div class="col-md-3">
                              Category </div>
                            <div class="col-md-9">
                                <input name="family_blog" type="text" class="form-control" required="">
                            </div>
                        </div>




                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-2" style="float:right;">
                                <input type="submit" name="save_blog" value="Submitted By" class="form-control">
                            </div>
                        </div>
                        <?php echo $message; ?> </div>
                </div>
            </div>
        </form>





        <div class="row">
            <div class="col-md-12 border footer">
                Designed by Shahid Baig </div>
        </div>
    </div>
</body>
</html>
