<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E5E5E5;
        }
        #header {
            background-color: #C70E24;
            padding: 24px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 95px;
        }
        #logo-container {
            height: 90px;
            width: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #logo-container img {
            max-width: 100%;
            max-height: 100%;
            height: auto;
        }
        .header-icons {
            display: flex;
            align-items: center;
        }
        .header-icons button {
            background-color: transparent;
            border: none;
            font-size: 24px;
            color: #fff;
            margin-left: 20px;
            cursor: pointer;
        }
        .search-box {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 3px;
            padding: 2px 8px;
        }
        .search-box input[type="text"] {
            border: none;
            outline: none;
            flex: 1;
            padding-left: 5px;
            font-size: 12px;
        }
        .search-box button {
            background-color: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div id="header">
        <div id="logo-container">
            <img src="/cocoLogo.png" alt="Logo">
        </div>
        <div class="header-icons">
            <div class="search-box">
                <input type="text" placeholder="Search..." style="border: none; background-color: #fff; outline: none; font-size: 16px;">
                <button><i class="fas fa-search" style="color: #C70E24;"></i></button>
            </div>
            <button onclick="window.location.href='{{ url('/login') }}'"><i class="fas fa-user"></i></button>

            <button><i class="fas fa-shopping-cart"></i></button> 
        </div>
    </div>

    <!-- Main content -->
    <div class="menu-section">
        <!-- Your menu content here -->
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
