<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');

/* Full-screen background */
html {
    min-height: 100vh;
    background: 
        radial-gradient(circle at 20% 20%, rgba(138, 200, 255, 0.8) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(138, 200, 255, 0.4) 0%, transparent 60%),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.8) 0%, transparent 70%),
        #ffffff;
    background-attachment: fixed;
}

body {
    font-family: 'Poppins', sans-serif;
    max-width: 1000px;
    margin: 40px auto;
    padding: 30px;
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 3px solid #8ac8ff;
    box-shadow: 0 0 25px rgba(138, 200, 255, 0.4),
                0 15px 35px rgba(0, 0, 0, 0.08);
    color: #1b2a47;
    box-sizing: border-box;
}

/* Navigation Link Bar */
nav {
    margin-bottom: 20px;
}

nav a {
    display: inline-block;
    padding: 8px 18px;
    color: #1a2a6c;
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    border: 2px solid #8ac8ff;
    border-radius: 10px;
    background-color: rgba(245, 250, 255, 0.9);
    transition: all 0.25s ease;
}

nav a:hover {
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 50%, #9effef 100%);
    color: #ffffff;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(138, 200, 255, 0.4);
}

/* Table Container & Grid Lines */
table {
    width: 100%;
    border-collapse: collapse !important;
    border: 2px solid #8ac8ff !important;
    border-radius: 12px;
    overflow: hidden;
    background-color: #ffffff;
}

/* Table Headers */
thead th {
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 50%, #9effef 100%);
    color: #ffffff;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 13px;
    padding: 12px 14px;
    text-align: left;
    border-right: 1px solid rgba(255, 255, 255, 0.4) !important;
    border-bottom: 2px solid #8ac8ff !important;
}

thead th:last-child {
    border-right: none !important;
}

/* Table Data Cells & Column Grid Separators */
td {
    padding: 12px 14px;
    font-size: 14px;
    color: #3a506b;
    border-bottom: 1px solid #d0e6ff !important; /* Horizontal line */
    border-right: 1px solid #e2efff !important;  /* Vertical line */
}

td:last-child {
    border-right: none !important;
}

/* Alternating Row Color & Hover */
tbody tr:nth-child(even) {
    background-color: rgba(245, 250, 255, 0.7);
}

tbody tr:hover {
    background-color: rgba(138, 200, 255, 0.2);
}

tbody tr:last-child td {
    border-bottom: none !important;
}
</style>

</head>
<body>

    <nav>
        <a href="index.php">Characters</a>
    </nav>
    
    <?php
        include "action/connect.php";

        // Grouping by story_id prevents duplicate rows from displaying
        $sql = "SELECT key_story.*, characters.name AS char_name 
                FROM key_story 
                LEFT JOIN characters ON key_story.char_id = characters.char_id
                GROUP BY key_story.story_id";

        $result = mysqli_query($con, $sql);
    ?>

    <table border=1>
        <thead>
            <th>ID</th>
            <th>Event Name</th>
            <th>Type</th>
            <th>Banner Unit</th>
            <th>Song</th> 
            <th>Main Character</th>
        </thead>

        <?php
            while($order = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?= $order["story_id"] ?></td>
                    <td><?= $order["event_name"] ?></td>
                    <td><?= $order["event_type"] ?></td>
                    <td><?= $order["banner_unit"] ?></td>
                    <td><?= $order["key_song"] ?></td>
                    <td><?= $order["char_name"] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>