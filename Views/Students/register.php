<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="../../Assets/Styles/login.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="app">
        <form class="form" method="POST" action="./control.php">
            <div class="form-logo">Fullstack</div>
            <h1 class="form-title">Đăng ký tài khoản Fullstack</h1>
            <div class="row">
                <label class="form-label">Tài khoản</label>
                <input class="form-input" type="text" name="username" required>
            </div>
            <div class="row">
                <label class="form-label">Mật khẩu</label>
                <input class="form-input" type="password" name="password" required>
            </div>
            <div class="row">
                <label class="form-label">Nhập lại mật khẩu</label>
                <input class="form-input" type="password" name="re-password" required>
            </div>
            <button type="submit" class="form-btn" name="btn-register">Đăng ký</button>
            <span class="form-control">Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></span>
            <span class="form-term">Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với Điều khoản dịch vụ của chúng tôi.</span>
        </form>
    </div>
</body>
</html>