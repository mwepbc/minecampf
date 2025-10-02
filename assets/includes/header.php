<header>
    <a href="index.php">
        <img src="assets/img/logo.png" alt="logo" />
    </a>
    <nav>
        <button id="exit">
            ВЫХОД
        </button>

        <button id="auth" onclick="window.location.href = 'auth.php'">
            ВХОД
        </button>

        <button id="reg" onclick="window.location.href = 'reg.php'">
            РЕГИСТРАЦИЯ
        </button>
    </nav>
</header>
<script src="assets/js/main.js"></script>
<script>
    let exit = document.querySelector('#exit');
    // let auth = document.querySelector('#auth');
    // let reg = document.querySelector('#reg');

    // let buttons = document.querySelectorAll('button');

    // если не существует юзерская кука, то он не авторизован,
    // значит появляются кнопки регистрации и входа
    if (getCookie('user') === undefined) {
        auth.style.display = 'flex';
        reg.style.display = 'flex';
    } else {
        exit.style.display = 'flex';
    }

    // при нажатии на кнопку выхода, удаляется кука юзера
    // и его перебрасывает на окно авторизации
    exit.addEventListener('click', () => {
        deleteCookie('user');
        window.location.href = 'auth.php';
    })
</script>