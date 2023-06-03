<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="assets/img/user.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5"><?= $_SESSION['nama']; ?></h1>
                <p><?= $_SESSION['role']; ?></p>
            </div>
        </div>
        <ul class="list-unstyled">
            <li <?php if ($page == "Home") {
                    echo 'class="active"';
                } ?>><a href="index.php"> <i class="icon-home"></i>Home </a></li>
            <li <?php if ($page == "Movies") {
                    echo 'class="active"';
                } ?>><a href="movies.php"> <i class="icon-writing-whiteboard"></i>Movies </a></li>
            <li <?php if ($page == "Series") {
                    echo 'class="active"';
                } ?>><a href="series.php"> <i class="icon-writing-whiteboard"></i>Series </a></li>
            <li <?php if ($page == "Artist") {
                    echo 'class="active"';
                } ?>><a href="artis.php"> <i class="icon-user-outline"></i>Artist </a></li>
            <li <?php if ($page == "Genre") {
                    echo 'class="active"';
                } ?>><a href="genre.php"> <i class="icon-list"></i>Genre </a></li>
            <li <?php if ($page == "Review") {
                    echo 'class="active"';
                } ?>><a href="review.php"> <i class="icon-paper-and-pencil"></i>Review </a></li>
            <li <?php if ($page == "User") {
                    echo 'class="active"';
                } ?>><a href="user.php"> <i class="icon-user"></i>User </a></li>
        </ul>
    </nav>
    <!-- Sidebar Navigation end-->