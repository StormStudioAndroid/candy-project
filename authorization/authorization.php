<?
// Страница авторизации

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
         session_start();

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "userbd");



    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT id, password, name, FROM users WHERE name='".mysqli_real_escape_string($link,$_POST['name'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

//        if(!empty($_POST['not_attach_ip']))
//        {
//            // Если пользователя выбрал привязку к IP
//            // Переводим IP в строку
//            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
//        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET hash='".$hash." WHERE id='".$data['id']."'");

      
        // Переадресовываем браузер на страницу проверки нашего скрипта
        $_SESSION['site_manager'] = new SiteManager;
        $_SESSION['site_manager']->setHash($hash);
        $_SESSION['site_manager']->setUser($data['name'],$_POST['name']);
        $_SESSION['id'] = mysql_result($result,0,'id');
    }
    else
    {
        echo "Вы ввели неправильный логин/пароль";
    }


?>
