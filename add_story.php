<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');

/* Full-screen background */
html {
    min-height: 100vh;
    background: 
        radial-gradient(circle at 20% 20%, rgba(138, 200, 255, 0.9) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(138, 200, 255, 0.5) 0%, transparent 60%),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.8) 0%, transparent 70%),
        #ffffff;
    background-attachment: fixed;
}

body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    flex-direction: column; /* Stacks navigation link neatly above form */
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    padding: 20px 0;
    box-sizing: border-box;
}

/* Top Back Navigation Link (Characters) */
body > a {
    display: inline-block;
    padding: 8px 18px;
    margin-bottom: 16px;
    color: #1a2a6c;
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    border: 2px solid #8ac8ff;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(5px);
    transition: all 0.25s ease;
    box-shadow: 0 4px 12px rgba(138, 200, 255, 0.2);
}

body > a:hover {
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 50%, #9effef 100%);
    color: #ffffff;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(138, 200, 255, 0.4);
}

/* Card Container */
form {
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(10px);
    padding: 35px 30px;
    border-radius: 20px;
    border: 3px solid #8ac8ff;
    box-shadow: 0 0 25px rgba(138, 200, 255, 0.4),
                0 15px 30px rgba(0, 0, 0, 0.08);
    width: 100%;
    max-width: 340px;
    box-sizing: border-box;
}

/* Field Labels */
label {
    display: block;
    margin-bottom: 6px;
    color: #3a506b;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Input Fields (Text, Date) */
input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 16px;
    border: 2px solid #e0f0ff;
    border-radius: 12px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: #333;
    background-color: rgba(245, 250, 255, 0.9);
    transition: all 0.25s ease;
}

/* Focus State */
input[type="text"]:focus,
input[type="date"]:focus {
    outline: none;
    border-color: #8ac8ff;
    background-color: #ffffff;
    box-shadow: 0 0 12px rgba(138, 200, 255, 0.5);
}

/* Submit Button */
button {
    width: 100%;
    padding: 14px;
    margin-top: 10px;
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 25%, #9effef 50%, #9d00ff 75%, #a8a7ff 100%);
    background-size: 200% auto;
    color: #ffffff;
    border: none;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(138, 200, 255, 0.4);
    transition: all 0.3s ease;
}

button:hover {
    background-position: right center;
    box-shadow: 0 6px 22px rgba(158, 255, 239, 0.6);
    transform: translateY(-2px);
}

button:active {
    transform: translateY(0);
}
</style>

</head>
<body>
    
      <a href="index.php">Back</a>
    
    <form action="action/insert_story.php" method="post">

        <label for="">Character Name</label>
        <input type="text" name="name"> <br>

        <label for="">DOB</label>
        <input type="date" name="dob"> <br>

        <label for="">Height</label>
        <input type="text" name="height"> <br>

        <label for="">Hobby</label>
        <input type="text" name="hobby"> <br>

        <label for="">Unit</label>
        <input type="text" name="unit"> <br>

        <?php
            include "action/connect.php";

            $sql = "SELECT * FROM key_story";

            $result = mysqli_query($con, $sql);
        ?>


        <button>บันทึก</button>

    </form>

</body>
</html>