<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h2>Đăng Nhập Hệ Thống</h2>
        <?php if (isset($_SESSION['error'])) : ?>
            <p style="color:red">
                <?= $_SESSION['error'] ?>
            </p>
        <?php
            unset($_SESSION['error']);
        endif;
        ?>
        <form action="login.php" method="POST">
            <div class="row">
                <div class="col-12">
                    UserName : <input type="text" name="user_name" class="form-control" Required>
                </div>
                <div class="col-12">
                    Password : <input type="password" name="password" class="form-control" Required>
                </div>
                <div class="">
                    <input type="checkbox" name="remeber_me" id=""> Remember me ?
                </div>
                <div class="col-2">
                    <input type="submit" value="đăng nhập">
                </div>
            </div>
        </form>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>