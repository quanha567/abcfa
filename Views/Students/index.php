<?php 
    include('../Components/Header.php');
    include('../../Model/database.php');
    $id = $_SESSION["account"];
    $sql = "SELECT * FROM students WHERE student_id = $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $student = $stmt->fetch();
?>

<div class="center">
    <div class="cover">
        <div class="cover-gradient">document.write('Hello world');</div>
        <div class="cover-avt">
            <img src="../../Assets/Imgs/avt/<?php echo $student["avata"]; ?>" alt="#">
            <h1 class="cover-name"><?php echo $student["student_name"]; ?> <a href="./logout.php" class="logout">Đăng xuất</a></h1>
        </div>
    </div>
    <div class="student-info">
        <div class="student-info-left">
            <div class="student-info-box">
                <h3 class="student-info-title">Giới thiệu</h3>
                <div class="student-info-participant">
                    <ion-icon name="people-outline"></ion-icon>
                    <span>Thành viên của F8 - Học lập trình để đi làm từ <?php echo rand(1,10) ?> tháng trước</span>
                </div>
            </div>
            <div class="student-info-box">
                <h3 class="student-info-title">Hoạt động gần đây</h3>
                <div class="student-info-action">
                    Chưa có hoạt động gần đây
                </div>
            </div>
        </div>
        <div class="student-info-right">
            <div class="student-info-box">
                <h3 class="student-info-title">Các khóa học đã tham gia</h3>
                <ul class="cource-info-cource-list">
                    <?php
                        $cource_sql = "SELECT * FROM cources c, follow f, students s WHERE c.id=f.id and f.student_id=s.student_id and s.student_id =$id";
                        $stmt=$db->prepare($cource_sql);
                        $stmt->execute();
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        $cource_list = $stmt->fetchAll();
                        if($cource_list == null) {
                            ?>
                            <p class="list-emty">Chưa có khóa học nào ! <a href="../Cources">Đăng ký học ngay.</a></p>
                            <?php } else { 
                        foreach($cource_list as $items) {
                    ?>
                        <li class="student-info-cource-item">
                            <a href="../Cources/detail.php?id=<?php echo $items["id"]; ?>" class="student-info-cource-link">
                                <img src="../../Assets/Imgs/cources/<?php echo $items["img"]; ?>" alt="cource">
                                <div>
                                    <h4 class="student-info-cource-title"><?php echo $items["cource_name"]; ?></h4>
                                    <p class="student-info-cource-desc"><?php echo $items["description"]; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php } } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('../Components/Footer.php') ?>