<?PHP
session_start();
function checkLogin() {
    if (!$_SESSION['user'] == "280d44ab1e9f79b5cce2dd4f58f5fe91f0fbacdac9f7447dffc318ceb79f2d02"){
        header('Location: login.php');
    }
}


?>