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
    <title>Celebrantees: Dashboard</title>
</head>

<?php
    $monthLink = "month.php?month=";
?>

<body>
    <nav class="sidebar" id="sidebar">
        <ul>
            <li><a href="<?php echo $monthLink; ?>" class="active"><i
                        class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="<?php echo $monthLink; ?>January"><i
                        class="fas fa-calendar"></i> January</a></li>
            <li><a href="<?php echo $monthLink; ?>February"><i
                        class="fas fa-calendar"></i> February</a></li>
            <li><a href="<?php echo $monthLink; ?>March"><i
                        class="fas fa-calendar"></i> March</a></li>
            <li><a href="<?php echo $monthLink; ?>April"><i
                        class="fas fa-calendar"></i> April</a></li>
            <li><a href="<?php echo $monthLink; ?>May"><i
                        class="fas fa-calendar"></i> May</a></li>
            <li><a href="<?php echo $monthLink; ?>June"><i
                        class="fas fa-calendar"></i> June</a></li>
            <li><a href="<?php echo $monthLink; ?>July"><i
                        class="fas fa-calendar"></i> July</a></li>
            <li><a href="<?php echo $monthLink; ?>August"><i
                        class="fas fa-calendar"></i> August</a></li>
            <li><a href="<?php echo $monthLink; ?>September"><i
                        class="fas fa-calendar"></i> September</a></li>
            <li><a href="<?php echo $monthLink; ?>October"><i
                        class="fas fa-calendar"></i> October</a></li>
            <li><a href="<?php echo $monthLink; ?>November"><i
                        class="fas fa-calendar"></i> November</a></li>
            <li><a href="<?php echo $monthLink; ?>December"><i
                        class="fas fa-calendar"></i> December</a></li>
        </ul>
    </nav>

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

    <div class="notification-box" id="notification-box">
        <h2 class="notification-heading">NOTIFICATION</h2>
        <table class="timetable">
            <thead>
                <tr>
                    <th>Recent Activities</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="notification-title">Notification 1</td>
                </tr>
                <tr>
                    <td class="notification-title">Notification 2</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="js/script.js"></script>

</body>

</html>