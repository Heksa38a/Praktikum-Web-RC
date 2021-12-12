<?php require_once('app/db/Koneksi.php');

session_start();
if(!isset($_SESSION['userID'])){
    header("Location : index.php");
    die();
}

$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./home.js"></script>
    <link rel="stylesheet" href="./home.css">
    <title>Home</title>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id']; ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck">

            </div>
        </aside>
    </section>

    <?php
        if(!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'no'){
            echo '<script src="./assets/iklan/iklan.js"></script>';
        }
    ?>
</body>

</html>