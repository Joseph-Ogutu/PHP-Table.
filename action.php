<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
}

if (isset($_POST['first'], $_POST['last'], $_POST['subject'], $_POST['score'])) {
    $_SESSION['data'][] = array(
        'first' => $_POST['first'],
        'last' => $_POST['last'],
        'subject' => $_POST['subject'],
        'score' => $_POST['score']
    );
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Dynamic PHP and HTML Table Testing</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0%;
            font-family: "helvetica", "verdana", "calibri", "san serif";
            overflow: hidden;
            padding: 0%;
            border: 0%;
        }
        table {
            width: 50%;
            border: 2px solid #343434;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            width: 20%;
            border: 2px solid #343434;
            padding: 10px;
        }
        th {
            background-color: #343434;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #he {
            height: 10%;
            background-color: #343434;
            margin-bottom: 2%;
        }
    </style>
</head>
<body bgcolor="#e5a010">
<div style="text-align: center; margin-top: 20px;">
    <button style="background-color: #343434; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" onclick="history.back()">Go Back</button>
</div><br>
<div id="he"></div>
<div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Subject</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($_SESSION['data'] as $row) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['first'] ?></td>
                    <td><?= $row['last'] ?></td>
                    <td><?= $row['subject'] ?></td>
                    <td><?= $row['score'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>