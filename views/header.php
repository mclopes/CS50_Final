<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>

       <!-- <link href="/css/styles.css" rel="stylesheet"/>-->

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Final Project</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="../public/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="../public/js/bootstrap.min.js"></script>

        <script src="../public/js/scripts.js"></script>

    </head>

    <body>

       