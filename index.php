<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Key Stories</title>

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

/* Navigation Action Links */
a {
    display: inline-block;
    padding: 8px 18px;
    margin-right: 8px;
    margin-bottom: 20px;
    color: #1a2a6c;
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    border: 2px solid #8ac8ff;
    border-radius: 10px;
    background-color: rgba(245, 250, 255, 0.9);
    transition: all 0.25s ease;
}

a:hover {
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 50%, #9effef 100%);
    color: #ffffff;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(138, 200, 255, 0.4);
}

/* Table Container with Grid Lines */
table {
    width: 100%;
    border-collapse: collapse !important; /* Collapses borders so lines blend cleanly */
    border: 2px solid #8ac8ff !important;
    border-radius: 12px;
    overflow: hidden;
    margin-top: 10px;
    background-color: #ffffff;
}

/* Table Headers with Vertical Separators */
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

/* Table Cells with Vertical & Horizontal Grid Lines */
td {
    padding: 12px 14px;
    font-size: 14px;
    color: #3a506b;
    border-bottom: 1px solid #d0e6ff !important; /* Horizontal line */
    border-right: 1px solid #e2efff !important;  /* Vertical line */
}

td:last-child {
    border-right: none !important; /* Removes right line on final column */
}

/* Row Hover & Alternating Background */
tbody tr:nth-child(even) {
    background-color: rgba(245, 250, 255, 0.7);
}

tbody tr:hover {
    background-color: rgba(138, 200, 255, 0.2);
}

tbody tr:last-child td {
    border-bottom: none !important; /* Removes bottom line on last row */
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
        include "action/connect.php";
        
        mysqli_query($con, "SET SESSION group_concat_max_len = 1000000");

        // Joined query to fetch event names instead of raw story IDs
        $sql = "SELECT characters.*, 
                       GROUP_CONCAT(DISTINCT key_story.event_name ORDER BY key_story.story_id ASC SEPARATOR ', ') AS event_names
                FROM characters 
                LEFT JOIN key_story ON characters.char_id = key_story.char_id
                GROUP BY characters.char_id";

        $result = mysqli_query($con, $sql);
    ?>
    <a href="add_story.php">Add</a>
    <a href="manage_story.php">Manage</a>
    <a href="story.php">Stories</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Height</th>
                <th>Hobby</th>
                <th>Unit</th>
                <th>Story</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($result as $order): ?>
            <tr>
                <td><?= $order["char_id"] ?></td>
                <td><?= $order["name"] ?></td>
                <td><?= $order["dob"] ?></td>
                <td><?= $order["height"] ?></td>
                <td><?= $order["hobby"] ?></td>
                <td><?= $order["unit"] ?></td>
                <td><?= !empty($order["event_names"]) ? $order["event_names"] : 'None' ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>