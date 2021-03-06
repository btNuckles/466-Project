<?php session_start();
if(!isset($_SESSION['userlogin'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>ForumName</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/indexstyles.css">
    <link rel="stylesheet" href="stylesheets/colors.css">
    <link rel="stylesheet" href="stylesheets/icons.css" type="text/css">
</head>

<body>
    <?php include_once('header.php'); ?>

    <!-- FORM FOR NEW THREAD -->
    <div class="center-div">
        <div id="loaddiv" class="container" style="padding-top:70px" overflow: auto>
          <div id="post-box" class="container" style="padding-top:70px">
            <h1>Create New Topic</h1>
            <label for="post-title">Title</label>
            <b class="input-boxes"><input id="post-title" class="form-control" type="text" name="title"></b>
            <br>
            <label for="post-content">Content</label>
            <b class="input-boxes"><textarea input id="post-content" class="form-control" type="text" name="content"></textarea></b>
            <br>
            <label for="media-link">Link</label>
            <b class="input boxes"><input id="post-media" class="form-control" type="text" name="media"></b>
            <br>
            <button id="post-button" data-button="post-submit" type="button" class="btn btn-primary">Create Topic</button>
            <br>
            <br>
          </div>
        </div>
    </div>
    <!-- END FORM FOR NEW THREAD -->


    <script src="scripts/posttopic.js" charset="utf-8"></script>
    <script src="scripts/index.js" charset="utf-8"></script>


    <?php if(isset($_SESSION['userlogin'])) {
        echo "<script> checkForSession(); </script>";
     } ?>

</body>

</html>
