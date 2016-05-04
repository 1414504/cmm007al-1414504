<!DOCTYPE html>
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
                <img class ="image-logo" src="assets/blog.png" alt="" />
            </div>
            <div class="col-md-10">
                <h2>myBlog</h2>
                <h3>because the internet needs to know what I think</h3>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-md-12 min-height">
            <?php include './navbar.php'; ?>
        </div>
        <div class="col-md-10 border min-height">
            <?php   $con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "bb5a7b89a1ca75", "ff443ee7", "blogView"); $sql = "select * from blogViewTable";
            $result = $con->
            query($sql); $con->
            close(); if(mysqli_num_rows($result)>0) { while($row = mysqli_fetch_array($result))
            { ?>
                <div class = "row margin-top">
                    <div class="col-md-6">
                        <input value="<?php echo $row['work_blog']; ?>" class="form-control">
                    </div>
                </div>
                <div class="row margin-top">
                    <div class="col-md-6">
                        <input value="<?php echo $row['university_blog']; ?>" class="form-control">
                    </div>
                </div>
                <div class = "row margin-top">
                    <div class="col-md-6">
                        <input value="<?php echo $row['family_blog']; ?>" class="form-control">
                    </div>
                </div>
                <div class = "row margin-top">
                    <div class="col-md-9">
 <textarea class="form-control">
 <?php echo $row['']; ?>
 </textarea>
                    </div>
                </div>
                <hr>
            <?php } } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 border footer">
            Designed by Shahid Baig </div>
    </div>
</div>
</body>
</html>
