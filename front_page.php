<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');

    /* Full-screen background */
    body {
        font-family: 'Poppins', sans-serif;
        background: 
            radial-gradient(circle at 20% 20%, rgba(138, 200, 255, 0.9) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(138, 200, 255, 0.5) 0%, transparent 60%),
            radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.8) 0%, transparent 70%),
            #ffffff;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    /* Card Box Container */
    .card-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 320px;
        padding: 35px 30px;
        box-sizing: border-box;

        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 3px solid #8ac8ff;
        box-shadow: 0 0 25px rgba(138, 200, 255, 0.5),
                    0 15px 35px rgba(0, 0, 0, 0.08);

        font-size: 18px;
        font-weight: 700;
        color: #1b2a47;
        text-align: center;
    }

    /* Main Menu Button (Top) */
    .btn-main {
        display: block;
        width: 100%;
        padding: 14px 0;
        margin-top: 20px;
        background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 25%, #9effef 50%, #9d00ff 75%, #a8a7ff 100%);
        background-size: 200% auto;
        color: #ffffff;
        text-decoration: none;
        font-weight: 700;
        border-radius: 12px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        box-shadow: 0 4px 15px rgba(138, 200, 255, 0.5);
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .btn-main:hover {
        background-position: right center;
        transform: translateY(-2px);
        box-shadow: 0 6px 22px rgba(158, 255, 239, 0.6);
    }

    /* Logout Button (Bottom) */
    .btn-logout {
        display: block;
        width: 100%;
        padding: 12px 0;
        margin-top: 12px;
        color: #1a2a6c;
        text-decoration: none;
        font-weight: 700;
        border: 2px solid #8ac8ff;
        border-radius: 12px;
        background-color: rgba(245, 250, 255, 0.9);
        transition: all 0.25s ease;
        box-sizing: border-box;
    }

    .btn-logout:hover {
        background-color: #8ac8ff;
        color: #ffffff;
        border-color: #8ac8ff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(138, 200, 255, 0.4);
    }
    </style>
</head>
<body>

    <?php
        session_start();
        
        if(!isset($_SESSION["username"])){
            header("location: login.php");
            exit;
        }
    ?>

    <div class="card-container">
        สวัสดี คุณ <?= $_SESSION["username"] ?>

        <a href="index.php" class="btn-main">Main Menu</a>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

</body>
</html>