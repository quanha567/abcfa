<?php
include_once('../Components/Header.php');
include('../../Model/database.php');
$sql = "SELECT * FROM cources";
?>
<div class="body">
    <div class="center">
        <div class="cource">
            <h1 class="cource-head">Khóa Học</h1>
            <p class="cource-desc">Các khóa học được thiết kế phù hợp cho cả người mới, miễn phí, nội dung dễ hiểu.</p>
        </div>
        <div class="box">
            <h2 class="box-title">Lộ trình học Front-End</h2>
            <div class="box-list">
                <?php
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $items) {
                    if ($items["cate_id"] == 1) {
                ?>
                        <a class="box-items" href="detail.php?id=<?php echo $items['id'] ?>">
                            <div class="box-img">
                                <img src="../../Assets/Imgs/cources/<?php echo $items["img"] ?>" alt="<?php echo $items["cource_name"] ?>">
                                <div class="box-btn"></div>
                            </div>
                            <p class="box-items__title"><?php echo $items["cource_name"] ?></p>
                            <p class="box-items__count">
                                <ion-icon name="people-outline"></ion-icon>
                                <span><?php echo rand(100, 10000) ?></span>
                            </p>
                        </a>
                <?php }
                } ?>
            </div>
        </div>
        <div class="box">
            <h2 class="box-title">Lộ trình học Back-End</h2>
            <div class="box-list">
                <?php
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $items) {
                    if ($items["cate_id"] == 2) {
                ?>
                        <a class="box-items" href="detail.php?id=<?php echo $items['id'] ?>">
                            <div class="box-img">
                                <img src="../../Assets/Imgs/cources/<?php echo $items["img"] ?>" alt="<?php echo $items["cource_name"] ?>">
                                <div class="box-btn"></div>
                            </div>
                            <p class="box-items__title"><?php echo $items["cource_name"] ?></p>
                            <p class="box-items__count">
                                <ion-icon name="people-outline"></ion-icon>
                                <span><?php echo rand(100, 10000) ?></span>
                            </p>
                        </a>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>
<?php include_once('../Components/Footer.php'); ?>