<b>🚀 Lấy database về máy</b>

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

<b>🔑 Lưu ý khi dùng Git (cơ bản & teamwork)</b>
  1. Luôn pull trước khi code

    Trước khi bắt đầu một ngày làm việc:

      git pull origin main

    Điều này giúp bạn có code mới nhất từ GitHub, tránh conflict khi push.

  2. Commit rõ ràng, gọn gàng

    Dùng câu commit ngắn gọn, mô tả thay đổi:
  
     git commit -m "Thêm chức năng đăng nhập"
     git commit -m "update"

    Một commit nên chỉ tập trung vào một thay đổi (fix bug, thêm tính năng, chỉnh CSS…).

  3. Không commit file rác

    Thêm file .gitignore để bỏ qua file không cần thiết (VD: node_modules/, .env, vendor/, file tạm, file log…).

  4. Quản lý branch hợp lý

    Không nên code tất cả trên main.

    Dùng branch riêng cho từng task/tính năng:

    git checkout -b feature/login

    Sau khi xong thì merge vào main bằng Pull Request (nếu teamwork).

  5. Giải quyết conflict cẩn thận

    Nếu có conflict khi pull/merge, hãy mở file bị báo → sửa thủ công → commit lại.

    Luôn trao đổi với team nếu không chắc nên giữ đoạn code nào.

  6. Push thường xuyên, nhưng không quá nhỏ

    Không để code cả tuần mới push → dễ conflict.

    Push mỗi khi hoàn thành một tính năng nhỏ hoặc một phần việc.

  7. Kiểm tra trạng thái Git trước khi thao tác

    Luôn xem tình trạng bằng:

    git status

    Biết file nào đang sửa, đang chờ commit, file nào chưa add.

