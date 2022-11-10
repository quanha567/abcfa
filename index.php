<?php
session_start();
if(!isset($_SESSION["account"])) $_SESSION["account"] = null;
include('./Model/database.php');
$sql = "SELECT * FROM cources";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullstack.edu</title>
    <link rel="stylesheet" href="../../Assets/Styles/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./Assets/Styles/app.css?v=<?php echo time(); ?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" type="text/css" href="slick/slick.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="center">
                <div class="header-top">
                    <div class="header-top-left">
                        <a class="logo" href="/fullstack">
                            FullStack
                        </a>
                        <nav class="navbar">
                            <ul class="navbar-list">
                                <li class="navbar-items">
                                    <a href="/fullstack" class="navbar-link active">
                                        <ion-icon name="home-outline"></ion-icon>
                                        <span class="navbar-text">Trang Chủ</span>
                                    </a>
                                </li>
                                <li class="navbar-items">
                                    <a href="Views/Cources/roadmap.php" class="navbar-link">
                                        <ion-icon name="telescope-outline"></ion-icon>
                                        <span class="navbar-text">Lộ Trình</span>
                                    </a>
                                </li>
                                <li class="navbar-items">
                                    <a href="Views/Cources" class="navbar-link">
                                        <ion-icon name="reader-outline"></ion-icon>
                                        <span class="navbar-text">Học</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-top-right">
                        <form action="#" method="get" class="search">
                            <input type="text" placeholder="Tìm kiếm khóa học">
                            <button>
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </form>
                        <?php if($_SESSION["account"] == null) { ?>
                            <a class="login" href="./Views/Students/login.php">
                                <ion-icon name="person-outline"></ion-icon>
                                <span class="login-text">Đăng nhập</span>
                            </a>
                            <?php } else { ?>
                                <a href="./Views/Students/" class="avt">
                                    <img src="./Assets/Imgs/avt/quanha.jpg" alt="avt">
                                </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>
        <div class="body">
            <div class="center">
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
                                <a class="box-items" href="Views/Cources/detail.php?id=<?php echo $items["id"] ?>">
                                    <div class="box-img">
                                        <img src="./Assets/Imgs/cources/<?php echo $items["img"] ?>" alt="<?php echo $items["cource_name"] ?>">
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
                                <a class="box-items" href="Views/Cources/detail.php?id=<?php echo $items["id"] ?>">
                                    <div class="box-img">
                                        <img src="./Assets/Imgs/cources/<?php echo $items["img"] ?>" alt="<?php echo $items["cource_name"] ?>">
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
        <footer class="footer">
            <div class="center">
                <div class="term">
                    <div class="term-container">
                        <div class="term-box">
                            <h2 class="term-title">Học lập trình để đi làm</h2>
                            <ul class="term-list">
                                <li class="term-items"><a href="#" class="term-link">Điện thoại: 0246.329.1102</a></li>
                                <li class="term-items"><a href="#" class="term-link">Email: contact@fullstack.edu.vn</a></li>
                                <li class="term-items"><a href="#" class="term-link">Địa chỉ: 41 đường 30, Linh Đông, Thủ Đức, TP.Hồ Chí Minh</a></li>
                            </ul>
                        </div>
                        <div class="term-box">
                            <h2 class="term-title">Về Fullstack</h2>
                            <ul class="term-list">
                                <li class="term-items"><a href="#" class="term-link">Giới thiệu</a></li>
                                <li class="term-items"><a href="#" class="term-link">Cơ hội việc làm</a></li>
                                <li class="term-items"><a href="#" class="term-link">Đối tác</a></li>
                            </ul>
                        </div>
                        <div class="term-box">
                            <h2 class="term-title">Hỗ Trợ</h2>
                            <ul class="term-list">
                                <li class="term-items"><a href="#" class="term-link">Liên hệ</a></li>
                                <li class="term-items"><a href="#" class="term-link">Bảo mật</a></li>
                                <li class="term-items"><a href="#" class="term-link">Điều khoản</a></li>
                            </ul>
                        </div>
                        <div class="term-box">
                            <h2 class="term-title">Công ty cổ phân công nghệ giáo dục Fullstack</h2>
                            <ul class="term-list">
                                <li class="term-items"><a href="#" class="term-link">Mã số thuế: 0109922901</a></li>
                                <li class="term-items"><a href="#" class="term-link">Ngày thành lập: 04/03/2022</a></li>
                                <li class="term-items"><a href="#" class="term-link">Lĩnh vực: Công nghệ, giáo dục, lập trình. Fullstack xây dựng và phát triển những sản phẩm mạng lại giá trị cho cộng đồng.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="copyright">&copy; 2018 - 2022 Fullstack. All rights reserved.</div>
                    <div class="more">
                        <ion-icon name="logo-youtube"></ion-icon>
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-github"></ion-icon>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="./Assets/Js/app.js"></script>
</body>

</html>