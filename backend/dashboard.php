
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Bienvenue <?= htmlspecialchars($_SESSION['username']); ?> !</h1>
<a href="logout.php">Déconnexion</a>
