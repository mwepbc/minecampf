<header>
    <a href="index.php">
        <img src="assets/img/logo.png" alt="logo" />
    </a>
    <nav>
        <?php
        if (isset($_COOKIE['user_id'])) {
            echo '
                <a href="auth.php">
            <button>
                ВЫХОД
            </button>
        </a>
            ';

            setcookie("user_id", "", time() - 3600);
        } else {
            echo '<a href="auth.php">
            <button>
                ВХОД
            </button>
        </a>
        <a href="reg.php">
            <button>
                РЕГИСТРАЦИЯ
            </button>
        </a>';
        }
        ?>

    </nav>
</header>