<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');

/* Full-screen sky-blue background */
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

/* Top Navigation Links (Add, Characters, Stories) */
body > a {
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

body > a:hover {
    background: linear-gradient(135deg, #7eddff 0%, #8ac8ff 50%, #9effef 100%);
    color: #ffffff;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(138, 200, 255, 0.4);
}

/* Table Container & Grid lines */
table {
    width: 100%;
    border-collapse: collapse !important;
    border: 2px solid #8ac8ff !important;
    border-radius: 12px;
    overflow: hidden;
    margin-top: 10px;
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

/* Table Body Cells & Grid Lines */
td {
    padding: 12px 14px;
    font-size: 14px;
    color: #3a506b;
    border-bottom: 1px solid #d0e6ff !important; /* Horizontal grid line */
    border-right: 1px solid #e2efff !important;  /* Vertical grid line */
}

td:last-child {
    border-right: none !important;
}

/* Row Hover & Alternating Colors */
tbody tr:nth-child(even) {
    background-color: rgba(245, 250, 255, 0.7);
}

tbody tr:hover {
    background-color: rgba(138, 200, 255, 0.2);
}

tbody tr:last-child td {
    border-bottom: none !important;
}

/* --- Action Column Buttons (Edit / Delete) --- */
td a[href*="edit"] {
    display: inline-block;
    padding: 5px 12px;
    margin-right: 4px;
    font-size: 12px;
    font-weight: 700;
    color: #1a2a6c;
    background-color: #e0f0ff;
    border: 1px solid #8ac8ff;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.2s ease;
}

td a[href*="edit"]:hover {
    background-color: #8ac8ff;
    color: #ffffff;
}

td a[href*="delete"] {
    display: inline-block;
    padding: 5px 12px;
    font-size: 12px;
    font-weight: 700;
    color: #ff5e62;
    background-color: #fff0f0;
    border: 1px solid #ffb8b8;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.2s ease;
}

td a[href*="delete"]:hover {
    background-color: #ff5e62;
    color: #ffffff;
    border-color: #ff5e62;
}
</style>

</head>
<body>
    
    <?php
        include_once "action/connect.php";
        
        // GROUP BY character ID and combine multiple story IDs using GROUP_CONCAT
    $sql = "SELECT characters.*, GROUP_CONCAT(DISTINCT key_story.story_id SEPARATOR ', ') AS story_ids 
        FROM characters 
        LEFT JOIN key_story ON characters.char_id = key_story.char_id
        GROUP BY characters.char_id";
                
        $result = mysqli_query($con, $sql);
    ?>
    <a href="add_story.php">Add</a>
     <a href="index.php">Characters</a>
      <a href="story.php">Stories</a>
    <table border=1>
         <thead>
            <th>ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Height</th>
            <th>Hobby</th>
            <th>Unit</th>
            <th>story</th>
            <th>Action</th>
        </thead>

        <?php
            if ($result) {
                foreach($result as $order){
                    ?>
                    <tr>
                        <td><?= $order["char_id"] ?></td>
                        <td><?= $order["name"] ?></td>
                        <td><?= $order["dob"] ?></td>
                        <td><?= $order["height"] ?></td>
                        <td><?= $order["hobby"] ?></td>
                        <td><?= $order["unit"] ?></td>
                        <td><?= $order["story_ids"] ?? 'None' ?></td>
                        <td>
                            <!-- แก้ไข -->
                            <a href="edit_story.php?id=<?= $order["char_id"] ?>">Edit</a>
                            <!-- ลบ -->
                            <a href="action/delete_story.php?id=<?= $order["char_id"] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>

</body>
</html>