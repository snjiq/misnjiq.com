<?php
include 'includes/db.php';
$result = pg_query($db_conn, "SELECT * FROM articles ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список статей</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .article {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .article h2 {
            margin: 0;
            font-size: 1.5em;
            color: #007bff;
        }

        .article p {
            line-height: 1.5;
            color: #555;
        }

        .article small {
            color: #999;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Список статей</h1>

    <?php
    while ($row = pg_fetch_assoc($result)) {
        echo "<div class='article'>
                <h2>{$row['title']}</h2>
                <p>{$row['content']}</p>
                <small>Опубликовано: {$row['created_at']}</small>
              </div>";
    }
    ?>
</div>

</body>
</html>
