<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/gd.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <link rel="icon" href="../imgs/logo.png">
    <title>Đăng ký</title>
    
</head>
<body>
    <img src="../imgs/AoH.png" alt="" class="aoh-img">
    <div class="container">
        <a href="../Tuyển sinh/Tuyển sinh.html"><img src="../imgs/logo.png" alt="" width="80px"></a>
        <div class="hvah">HỌC VIỆN ANH HÙNG</div>
        <div class="cttts">CỔNG THÔNG TIN TUYỂN SINH</div>


        <div class="infor-box">
            <form onsubmit="register()">
                <h2>ĐĂNG KÝ</h2>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" id="email" required>
                    <label for="">Email</label>
                </div>
                
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <input type="tel" id="phone" required>
                    <label for="">Số điện thoại</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-regular fa-id-card"></i></span>
                    <input type="number" id="cccd" required>
                    <label for="">CCCD/CCCD</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="name" required>
                    <label for="">Họ và tên</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" id="password" required>
                    <label for="">Mật khẩu </label>
                </div>
                <button type="submit"><a href="">Đăng ký</a></button>
                
                <hr>
                <p>Đã có tài khoản? <a href="Login.html">Đăng nhập</a></p>
            </form>
        </div>
        <div class="copyright">&copy;Copyright by Phanh dep try and Manh xinh gai 2025</div>
    </div>

    <script src="loglog.js"></script>
</body>
</html>