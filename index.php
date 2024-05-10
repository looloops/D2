<?php
require_once __DIR__ . "\inc\header.php";
include_once __DIR__ . '\inc\translations.php';
include __DIR__ . '\inc\db.php';


if ($language === "it") {
    $sqlQuery = "SELECT * FROM news_ita";
} else {
    $sqlQuery = "SELECT * FROM news_eng";
}
$stmt = $pdo->query($sqlQuery);
$news = $stmt->fetchAll();

?>

<body>
    <div class="row g-2">
        <?php
        foreach ($news as $row) { ?>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['Title'] ?></h5>
                        <p class="card-text"><?= $row['Description'] ?>
                        </p>
                        <p><?= $row['Author'] ?></p>
                        <a href="#" class="btn btn-primary"><?= $labels[$language]['details_btn'] ?></a>
                    </div>
                </div>
            </div>
            <?php
        } ?>
    </div>

</body>

</html>