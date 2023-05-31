<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <ul class="list-unstyled">
            <li <?php if($page == "Home"){echo 'class="active"';}?>><a href="index.php"> <i class="icon-home"></i>Home </a></li>
            <li <?php if($page == "Movies"){echo 'class="active"';}?>><a href="movies.php"> <i class="icon-writing-whiteboard"></i>Movies </a></li>
            <li <?php if($page == "Series"){echo 'class="active"';}?>><a href="series.php"> <i class="icon-writing-whiteboard"></i>Series </a></li>
            <li <?php if($page == "User"){echo 'class="active"';}?>><a href="user.php"> <i class="icon-user"></i>User </a></li>
        </ul>
    </nav>
    <!-- Sidebar Navigation end-->