<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="styles.css"> <!-- Thêm link CSS cho danh sách người dùng -->
</head>
<body>
    <header class="navbar sticky-top flex-md-nowrap p-0 border-bottom border-2">
        <a href="admin.html" class="navbar-brand px-3 me-0">MeoWisdom</a>
        <div class="avatar-box d-flex align-items-center">
            <span>Admin</span>
            <img src="../img/user-img.png" alt="" class="avatar">
        </div>
    </header>
    <div class="container-fluid">
        <div class="sidebar d-flex flex-column p-3 d-flex justify-content-between">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav__item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>Quản lý bài viết</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <span class="highlight-text">Danh sách User</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-users"></i>
                        <span>Danh sách chuyên gia</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-boxes-packing"></i>
                        <span>Danh sách admin</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar__logout">
                <hr>
                <a href="userlogin.php" class="nav-link">
                    Logout
                    <span><i class="fa-solid fa-right-from-bracket"></i></span>
                </a>
            </div>
        </div>
        <div class="content">
            <div class="user-list">
                <h2>User List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Mã Tài Khoản</th>
                            <th>Tên Người Dùng</th>
                            <th>Email</th>
                            <th>Số Điện Thoại</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Replace the dummy data with actual user data -->
                        <tr>
                            <td>1</td>
                            <td>metqua</td>
                            <td>@@@</td>
                            <td>111</td>
                            <td>qq</td>
                            <td>********</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>nn</td>
                            <td>qq</td>
                            <td>222</td>
                            <td>qu</td>
                            <td>********</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>cc</td>
                            <td>a</td>
                            <td>1</td>
                            <td>jr</td>
                            <td>********</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>J</td>
                            <td>j</td>
                            <td>987</td>
                            <td>ja</td>
                            <td>********</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>ith</td>
                            <td>ja</td>
                            <td>9</td>
                            <td>jww</td>
                            <td>********</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Jh</td>
                            <td>m</td>
                            <td>10</td>
                            <td>mith</td>
                            <td>********</td>
                        </tr>
                        <tr>
                  
                        <!-- Add more rows for additional users -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script></script>
</body>
</html>
