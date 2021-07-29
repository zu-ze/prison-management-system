<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/css/style.css">
    <link rel="stylesheet" href="/views/vendor/fontawesome-free/css/all.min.css">
    <title>Prison Management</title>
</head>
<body>
    <div id="overlay"></div>
    <div class="style"></div>
    <div id="wrapper">
        <div class="header">
            <?php include './views/navbar.php'; ?>
        </div>
        <div class="main">
            {{content}}
        </div>
    </div>
        <footer>
            <?php include './views/footer.php'; ?>
        </footer>
    <script src="/views/js/main.js"></script>
</body>
</html>