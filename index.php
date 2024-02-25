<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITBOOKBAZAR</title>
    <!-- daisy ui -->

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- navbar -->
    <?php
    include "nav.php";
    ?>
    <?php
    include "slider.php";
    ?>
    <!-- catagories feature -->
    <?php
    include "featured_catagories.php";
    ?>
    <?php
    include "team_section.php";
    ?>
    <?php
    include "favourite_books.php";
    ?>
    <?php
    include "scroll_view_catagories.php";
    ?>
    <?php
    include "footer.php";
    ?>
    
</body>

</html>