<b>1. Lấy database về máy</b>

Khi người khác clone project về:

- Họ mở phpMyAdmin trên máy của họ.

- Tạo một database trống, ví dụ my_database.

- Chọn database đó → Import → tải file my_database.sql trong thư mục database/.

<b>🛠 Quy trình làm việc với Git</b>

  1. Trước khi bắt đầu code

    git pull origin main

→ để chắc chắn code của bạn đang cập nhật mới nhất từ GitHub (tránh trùng, tránh conflict).

  2. Viết code, chỉnh sửa file

    Lưu và commit

    git add .
    git commit -m "Mô tả ngắn gọn thay đổi"


  3. Push lên GitHub

    git push origin main


📌 Nếu không làm bước pull trước khi code, khi đồng đội đã push code mới lên GitHub, bạn push sau sẽ bị báo lỗi non-fast-forward
