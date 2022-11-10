<?php
    include('../Components/Header.php');
    include('../../Model/database.php');
    $id = @$_GET['id'];
    $sql = "SELECT * FROM cources WHERE id =? LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $item = $stmt->fetch();
?>
<div class="center">
    <div class="row">
        <div class="col-8">
            <h1 class="cource-head"><?php echo $item["cource_name"] ?></h1>
            <p class="cource-descript"><?php echo $item["description"] ?></p>
            <div class="cource-result">
                <h2 class="cource-title">Bạn sẽ học được gì?</h2>
                <ul class="cource-result__list">
                    <?php 
                        $result_list = explode("\n", $item["result"]);
                        foreach($result_list as $result_item) {
                    ?>
                        <li class="cource-result__item">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            <span class="cource-result__text"><?php echo $result_item ?></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="cource-content">
                <h2 class="cource-title">Nội dung khóa học</h2>
                <ul class="cource-content__list">
                    <?php 
                        $content_list = explode("\n", $item["content"]);
                        foreach($content_list as $content_item) {
                    ?>
                        <li class="cource-content__item"><?php echo $content_item ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <?php echo $item["video"] ?>
            <div class="cource-info">
                <h3 class="cource-info__fee">Miễn phí</h3>
                <?php 
                    $sql_check = "SELECT * FROM cources c, follow f, students s Where c.id = f.id and f.student_id = s.student_id and c.id=$id";
                    $check = false;
                    // echo $sql_check;  
                    $st=$db->prepare($sql_check);
                    $st->execute();
                    $res = $st->fetchAll();
                    foreach($res as $item) {
                        if($item["id"] == $id) {
                            $check = true;
                            break;
                        }
                    }
                    if($check) { ?>
                        <a target="_blank" href="<?php echo $item["link_video"] ?>" class="cource-info__btn btn btn-primary">Học ngay</a>

                    <?php } else { ?>
                        <a href="./follow.php?id=<?php echo $item["id"] ?>" class="cource-info__btn btn btn-primary">Đăng ký ngay</a>
                    <?php } ?>
                <ul class="cource-info__list">
                    <li class="cource-info__item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="cource-info__text"><?php echo $item["level"] ?></span>
                    </li>
                    <li class="cource-info__item">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span class="cource-info__text">Tổng số <?php echo $item["lession_count"] ?> bài học</span>
                    </li>
                    <li class="cource-info__item">
                        <ion-icon name="hourglass-outline"></ion-icon>
                        <span class="cource-info__text">Thời lượng <?php echo $item["total_time"] ?></span>
                    </li>
                    <li class="cource-info__item">
                        <ion-icon name="battery-charging-outline"></ion-icon>
                        <span class="cource-info__text"><?php echo $item["access"] ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('../Components/Footer.php') ?>