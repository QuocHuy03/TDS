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
        'msg' => 'Mua Tối Thiểu 50 Follow !'
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
        "referer:https://traodoisub.com/mua/follow/",
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
        "referer:https://traodoisub.com/mua/follow/",
    );
    $data = 'maghinho=&id=' . $id . '&sl=' . $sl . '&is_album=not&speed=1&dateTime=' . $tong . '';
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/mua/follow/themid.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr);
    curl_close($mr);
    if ($mr2 == "Mua thành công!") {
        $create = $huycode->query("INSERT INTO `muafollow` SET 
            `idtang` = '$id',
            `sl` = '$sl',
            ");
        echo json_encode(array(
            'status' => 'success',
            'msg' => 'Mua Thành Công'
        ));
    } else {
        echo json_encode(array(
            'status' => 'error',
            'msg' => 'Mua Thất Bại'
        ));
    }
}

















if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sl = $_POST['sl'];
    $tinhtien = 15 * $sl;
    if ($user['money'] < $tinhtien) { ?>
        <script type="text/javascript">
            cuteToast({
                type: "error",
                message: "Bạn Không Đủ Số Dư ",
                timer: 5000
            });
            setTimeout(function() {
                location.href = "/mua-follow"
            }, 5000);
        </script>
    <?php
    } else if ($sl < 20) { ?>
        <script type="text/javascript">
            cuteToast({
                type: "error",
                message: "Mua Tối Thiểu 50 Follow Trở Lên !",
                timer: 5000
            });
            setTimeout(function() {
                location.href = "/mua-follow"
            }, 5000);
        </script>
        <?php } else {
        require_once('../admin/tds.php');
        // mua follow
        $header = array(
            "Host:traodoisub.com",
            "content-type:application/x-www-form-urlencoded; charset=UTF-8",
            "x-requested-with:XMLHttpRequest",
            "user-agent:$useragent",
            "origin:https://traodoisub.com",
            "referer:https://traodoisub.com/mua/follow/",
        );
        $data = 'maghinho=&id=' . $id . '&sl=' . $sl . '&is_album=not&speed=1&dateTime=' . $tong . '';
        $mr = curl_init();
        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/mua/follow/themid.php');
        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
        curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
        $mr2 = curl_exec($mr);
        curl_close($mr);
        if ($mr2 == "1") {
        ?>
            <script type="text/javascript">
                cuteToast({
                    type: "error",
                    message: "Mua Thất Bại !",
                    timer: 5000
                });
            </script>
        <?php
        } else {

            $ketnoi->query("UPDATE `users` SET `money` = `money` - '$tinhtien' WHERE `username` = '$username'"); # trừ tiền

            $ketnoi->query("UPDATE `users` SET `tong_tru` = `tong_tru` + '$tinhtien' WHERE `username` = '$username'"); # cộng đã tiêu

            $create = $ketnoi->query("INSERT INTO `muafollow` SET 
        `idtang` = '$id',
        `sl` = '$sl',
        `username` = '$username',
        `time` = '$time' ");
        ?>
            <script type="text/javascript">
                cuteToast({
                    type: "success",
                    message: "Mua Thành Công",
                    timer: 5000
                });
            </script>
<?php
        }
    }
}
