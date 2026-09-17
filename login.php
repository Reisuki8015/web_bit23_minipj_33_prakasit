<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    /* #8ac8ff blending softly into white and gentle sky tones */
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

form {
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(10px);
    padding: 35px 30px;
    border-radius: 20px;
    border: 3px solid #8ac8ff;
    box-shadow: 0 0 25px rgba(138, 200, 255, 0.4),
                0 15px 30px rgba(0, 0, 0, 0.08);
    width: 100%;
    max-width: 320px;
}

label {
    display: block;
    margin-bottom: 6px;
    color: #3a506b;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

input[type="text"] {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 18px;
    border: 2px solid #e0f0ff;
    border-radius: 12px;
    box-sizing: border-box;
    font-size: 15px;
    font-weight: 500;
    color: #333;
    background-color: rgba(245, 250, 255, 0.9);
    transition: all 0.25s ease;
}

input[type="text"]:focus {
    outline: none;
    border-color: #8ac8ff;
    background-color: #ffffff;
    box-shadow: 0 0 12px rgba(138, 200, 255, 0.5);
}

button {
    width: 100%;
    padding: 14px;
    margin-top: 10px;
    /* Gradient across unit colors */
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 25%, #9effef 50%, #9d00ff 75%, #a8a7ff 100%);
    background-size: 200% auto;
    color: #ffffff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(255, 204, 0, 0.4);
    transition: all 0.3s ease;
}

button:hover {
    background-position: right center;
    box-shadow: 0 6px 22px rgba(100, 225, 140, 0.6);
    transform: translateY(-2px);
}

button:active {
    transform: translateY(0);
}
</style>

</head>
<body>
    
        <form action="check_login.php" method="post">

        <label for="">username</label>
        <input type="text" name="username"> <br>


        <label for="">password</label>
        <input type="text" name="password"> <br>

        <button>Login</button>
        

        </form>

</body>
</html>
