<?php
include '../config.php';

$id = $_POST['idfb'];
$sl = $_POST['sl'];
if (empty($id) || empty($sl)) {
    echo json_encode(array(
        'status' => 'error',
        'msg' => 'Vui Lòng Nhập Đầy Đủ Thông Tin'
    ));
} else if ($sl > 50) {
    echo json_encode(array(
        'status' => 'error',
        'msg' => 'Mua Tối Thiểu 50 Like !'
    ));
} else {
    // mua like
    // require_once('../Api/tds.php');

    $useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.51 Mobile Safari/537.36";
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $tk = date("Y-m-d");
    $ngay = date("H:i:s");
    $tong = "$tk+$ngay";
    // login
    $header = array(
        "Host:traodoisub.com",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "x-requested-with:XMLHttpRequest",
        "user-agent:$useragent",
        "origin:https://traodoisub.com",
        "referer:https://traodoisub.com/",
    );
    $data = 'username=t00wU0&password=Xd7L4';
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_COOKIEJAR, 'file.txt');
    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr);
    curl_close($mr);

    $dn = explode('success":', $mr2)[1];
    $dn = explode('}', $dn)[0];

    // xu
    $header = array(
        "Host:traodoisub.com",
        "x-requested-with:XMLHttpRequest",
        "user-agent:$useragent",
        "referer:https://traodoisub.com/mua/like/",
    );
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/user.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr);
    curl_close($mr);

    $xu = explode('xu":"', $mr2)[1];
    $xu = explode('"', $xu)[0];

    $header = array(
        "Host:traodoisub.com",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "x-requested-with:XMLHttpRequest",
        "user-agent:$useragent",
        "origin:https://traodoisub.com",
        "referer:https://traodoisub.com/mua/like/",
    );
    $data = 'maghinho=&id=' . $id . '&sl=' . $sl . '&is_album=not&speed=1&dateTime=' . $tong . '';
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/mua/like/themid.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr);
    curl_close($mr);
    if ($mr2) {
        echo json_encode(array(
            'status' => 'success',
            'msg' => 'Mua Thành Công'
        ));
        // $create = $huycode->query("INSERT INTO `mualikefb` SET 
        //     `idtang` = '$id',
        //     `sl` = '$sl'
        //     ");
    } else {
        echo json_encode(array(
            'status' => 'error',
            'msg' => 'Mua Thất Bại'
        ));
    }
}
