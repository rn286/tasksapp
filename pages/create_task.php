<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<form action="index.php?page=tasks&action=save" method="post">
    Owner Email: <input type="text" name="owneremail" readonly value="<?php echo $data; ?>"><br>
    Due Date: <input type="date" name="duedate"> <br>
    Message: <input type="text" name="message"> <br>
    Is Done?: <input type="text" name="isdone"> <br>
    <input type="hidden" name="id" value="">
    <input type="submit" value="Submit Form" value="">
</form>


<script src="js/scripts.js"></script>


