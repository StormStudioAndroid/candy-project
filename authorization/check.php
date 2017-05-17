<?
// Скрипт проверки

// Соединямся с БД
$link=mysqli_connect("localhost", "mysql_user", "mysql_password", "testtable");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])
 or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR']) ))
    {
        
        print "Хм, что-то не получилось";
    }
    else
    {
        print "Привет, ".$userdata['user_login'].". Всё работает!";
        session_start();
        $_SESSION['site_manager'] = new SiteManager;
        $_SESSION['site_manager'].setAuthorization(true);
        $_SESSION['id'] = mysql_result($result,0,'id');
    }
}
else
{
    print "Включите куки";
}
?>