<?php 
    $url = $_SERVER['PATH_INFO'] ?? '/home';
?>
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
            <?php if( substr($url, 1, 5) == 'admin'): ?>
                <?php include './views/header.php'; ?>
            <?php else: ?>
                <?php include './views/navbar.php'; ?>
            <?php endif; ?>
        </div>
        
        <div class="main">
            <?php switch($url) {
                // Home page - external interface.
                case '/home': 
                    include './views/home.php';
                break;
                // Visitor page - visitor enters details.
                case '/home/visitor':
                    include './views/visitor.php';
                break;
                // Select page - visitor selects inmate to visit.
                case '/home/select':
                    include './views/select.php';
                break;
                // Internal interface - seen by management.
                case '/admin':
                    include './views/search.php';
                    include './views/main.php';
                break;
                case '/login':
                    include './views/login.php';
                break;
                case '/admin/prisoners':
                    include './views/search.php';
                    include './views/prisoners.php';
                break;
                case '/admin/staff':
                    include './views/search.php';
                break;
                case '/admin/visitors':
                    include './views/search.php';
                break;
                case '/admin/equipment':
                    include './views/search.php';
                break;
                case '/admin/help':
                    include './views/search.php';
                break;
                default: 
                    include './views/404.php';
                break;
            }
            ?>
        </div>
        <?php if(substr($url, 1,5) !== "admin"):?>
            <div id="footer">
                <?php include './views/footer.php'; ?>
            </div>
        <?php endif; ?>
    </div>
    <script src="/views/js/main.js"></script>
</body>
</html>