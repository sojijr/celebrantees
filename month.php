<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Celebrantees: Month</title>
</head>

<body>

    <nav class="sidebar" id="sidebar">
        <ul>
            <li><a href="dashboard.php"
                    <?php echo isActive('Dashboard'); ?>><i
                        class="fas fa-home"></i> Dashboard</a></li>
            <?php
            $monthLink = "month.php?month=";

                    $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                    foreach ($months as $month) {
                        echo '<li><a href="' . $monthLink . $month . '" ' . isActive($month) . '><i class="fas fa-calendar"></i> ' . $month . '</a></li>';
                    }
                    ?>
        </ul>
    </nav>

    <?php
function isActive($month)
{
    $currentMonth = isset($_GET['month']) ? $_GET['month'] : 'Dashboard';
    return $currentMonth === $month ? 'class="active"' : '';
}
                    ?>

    <header class="header">
        <div class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </div>
        <img src="images/logo.png" alt="Logo" class="logo">
        <div class="admin-info">
            <span class="admin-name">John Doe</span>
            <div class="dropdown">
                <button class="dropbtn">
                    <img src="images/demo-image.jpg" alt="Demo Image" class="demo-image">
                    <i class="fas fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="change-password.html"><i class="fas fa-key"></i> Change Password</a>
                    <a href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                </div>
            </div>
        </div>
    </header>

    <div class="month-box" id="month-box">
        <h2 class="month-box-heading">NOTIFICATION</h2>
        <!-- <img src="me.jpg" /> -->
    </div>

    <div class="month-box-2" id="month-box-2">
        <h2 class="month-box-heading">NOTIFICATION</h2>
    </div>

    <input type="submit" id="download-image" value="Download Images">

    <script src="js/script.js"></script>
    <script src="js/downloadImage.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

</body>

</html>