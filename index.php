<?php
	require 'db.php';
?>

<?php if( isset($_SESSION['logged_user'])) : ?>

	Авторизован! <br>
	Привет, <?php echo $_SESSION['logged_user']->login ?>
	<hr>
	<a href="/auth-redbean/logout.php">Выйти</a>

<?php else : ?>

<a href="login.php">Войти</a> <br>
<a href="signup.php">Регистрация</a>

<?php endif; ?>