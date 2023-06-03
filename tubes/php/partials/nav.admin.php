<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user me-2"></i><?php echo $_SESSION['username'] ?>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="profil.php">Settings</a></li>
        <li><a class="dropdown-item" href="logout.admin.php">Logout</a></li>
    </ul>
</li>