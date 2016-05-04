vehicle tutorial
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
<div class="container">
    <header>
        <div class="row">
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
            <?php include './navbar.php'; ?> </div>

        <div class="col-md-10 border min-height">
            <p>entryTitle: Today at work
                entrySummary: Today I went to work and did lots of very complicated coding things. I was very pleased that I managed to finish them all
                category: Work
                submitter: Adam</p>
            <p>entryTitle: University Lecturer
                entrySummary: This week in university I had an amazing lecture. I can’t remember the name of the lecturer but he was really really good.
                category: University
                submitter: Brian</p>
            <p>entryTitle: Dads new television
                entrySummary: Today dad bought a new television. He likes to watch the F1 on it a lot.
                category: Family
                submitter: Charlie</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 border footer">
            Designed by Shahid Baig 2016 </div>
    </div>
</div>
</body>
</html>