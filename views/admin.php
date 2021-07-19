<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/css/style.css">
    <title>Prison Management</title>
</head>
<body>
    <div id="overlay"></div>
    <div class="style"></div>
    <div id="wrapper">
        <div class="header">
            <?php include './views/header.php'; ?>
        </div>
        <div class="main">
            <?php include './views/search.php'; ?>
            {{content}}
        </div>
    </div>
    <script src="/views/js/main.js"></script>
</body>
</html>