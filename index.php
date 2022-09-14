<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="https://www.toolvn.co/vnlike.jpg">
    <title>FOLLOW.APP HỆ THỐNG TĂNG LIKE THEO THÁNG VIP NHẤT HIỆN NAY.</title>
    <link rel="shortcut icon" type="image/png" href="/logo.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://vnlike.app/access/swet/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <style>
        .form-group {
            margin: 10px 0;
        }


        /* Style the buttons inside the tab */
        .tab a {
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of as on hover */
        .tab a:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab a.active {
            background-color: #ccc;
        }

        .tabcontent {
            display: none;
        }

        /* Style the tab content */
    </style>
</head>

<body>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Thông Báo</h3>
                    </div>

                    <div class="panel-body">
                        <div class="alert text-white bg-danger text-center" role="alert">
                            <p style="text-align: center;">Khách hàng oder xong vui lòng liên hệ&nbsp;<span style="font-weight: bolder;">Admin&nbsp;</span>để được duyệt đơn!</p>
                            <p style="text-align: center;">Đăng bài cách nhau 10p để được lên like.</p>
                        </div>
                        <!-- <div class="alert text-white bg-danger text-center" role="alert">
                            <p style="color: rgb(33, 37, 41); text-align: center; background-color: rgba(0, 0, 0, 0.05);"><span style="font-weight: bolder;">WEBSITE VNLIKE.APP</span></p>
                            <p style="color: rgb(33, 37, 41); text-align: center; background-color: rgba(0, 0, 0, 0.05);">Khai trương hoạt động chính thức ngày 12/08/2022.</p>
                        </div> -->
                        <div class="alert text-white bg-danger text-center" role="alert">
                            <p style="text-align: center; "><span style="background-color: rgb(247, 247, 247);">
                                    <font color="#0000ff">Phục vụ quý khách chính là niềm vinh hạnh của chúng tôi !</font>
                                </span></p>
                        </div>
                    </div>
                    <div class="panel-footer" style="text-align:center">
                        <h5>Liên Hệ - Hỗ Trợ</h4>
                            <a href="https://www.facebook.com/lqh.coder"><button type="submit" class="btn btn-primary">Facebook</button></a>
                            <a href="https://zalo.me/0901961341"><button type="submit" class="btn btn-danger">Zalo</button></a>
                            <a href="https://t.me/huycode03/"><button type="submit" class="btn btn-success">Telegram</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Hệ Thống Buff Like Follow Free</h3>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">QuocHuyIT</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a class="tablinks" onclick="huycoder(event, 'Like')">Like</a></li>
                                <li><a class="tablinks" onclick="huycoder(event, 'Follow')">Follow</a></li>
                                <!-- <li><a class="tablinks" onclick="huycoder(event, 'Comment')">Comment</a></li> -->
                            </ul>
                        </div>
                    </nav>

                    <div id="Like" class="tabcontent">
                        <div class="panel-body">
                            <div class="alert text-white bg-danger text-center" role="alert">
                                Chú ý : Nếu Like Lên Đơn Lâu Liên Hệ Admin Để Xử Lí!
                            </div>
                            <form method="POST" ajax-request="quochuyit" action="Api/ApiLike">
                                <div class="form-group">
                                    <label>ID tài khoản cần tăng Like</label>
                                    <input type="text" placeholder="ID trang cá nhân chạy Like" class="form-control" id="uid" name="idfb" onpaste="getUID('idfb');" />
                                </div>

                                <input type="hidden" id="sv1" name="server_order" onchange="if (!window.__cfRLUnblockHandlers) return false; bill();" value="sv1">
                                <div class="form-group">
                                    <label for="count">Số lượng</label>
                                    <input type="number" class="form-control" name="sl" placeholder="Nhập số lượng cần tăng" onkeyup="tinhtien();">
                                </div>

                                <div class="form-group">
                                    <label for="note">Ghi chú</label>
                                    <textarea class="form-control" name="note" placeholder="Khong Nhap Cung Duoc" id="note" rows="1"></textarea>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="active">Tổng thanh toán: <font color="red"><b id="ketqua">0</b></font> VNĐ</label>
                                </div> -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block" name="submit">Thanh Toán</button>
                                </div>
                            </form>
                        </div>

                        <!-- get lịch sử -->
                        <!-- <div class="panel-body px-3 py-1 bg-light">
                            <table class="table table-bordered table-striped fs--1">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">STT</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">ID</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">Trạng thái</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">Số lượng</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">Đã tăng</th>
                                       
                                    </tr>
                                </thead>
                                <?php
                                error_reporting(1);
                                require_once('../App/Api/tds.php');
                                // get lịch sử mua like
                                $header = array(
                                    "Host:traodoisub.com",
                                    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                                    "x-requested-with:XMLHttpRequest",
                                    "user-agent:$useragent",
                                    "origin:https://traodoisub.com",
                                    "referer:https://traodoisub.com/mua/like/",
                                );
                                $data = 'page=1&query=';
                                $mr = curl_init();
                                curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/mua/like/fetch.php');
                                curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                                curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                                curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                                curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                                $mr2 = curl_exec($mr);
                                curl_close($mr);
                                $json = json_decode($mr2, true);
                                $id = $json["data"][0]["idpost"];
                                $status = $json["data"][0]["status"];
                                $sl = $json["data"][0]["sl"];
                                $dt = $json["data"][0]["datang"];
                                $time = $json["data"][0]["date"];
                                ?>
                                <tbody class="list" id="table-purchase-body">
                                    <tr class="btn-reveal-trigger">
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($huycode, "SELECT * FROM `mualikefb`");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <td class="align-middle text-center white-space-nowrap"><?= $i; ?> <?php $i++; ?></td>
                                            <td class="align-middle text-center white-space-nowrap"><?= $row['idtang']; ?></td>
                                            <?php if ($status == '<span class="badge badge badge-soft-primary">Hoàn Thành</span>') { ?>
                                                <td class="align-middle text-center fs-0 white-space-nowrap"><span class="badge badge badge-success">Hoàn Thành</span></td>
                                            <?php } else { ?>
                                                <td class="align-middle text-center fs-0 white-space-nowrap"><span class="badge badge badge-warning">Đang Tăng</span></td>
                                            <?php } ?>
                                            <td class="align-middle text-center white-space-nowrap"><?= $sl; ?></td>
                                            <td class="align-middle text-center white-space-nowrap"><?= $dt; ?></td>
                                        
                                    </tr>

                                <?php } ?>
                                </tbody>
                            </table>
                        </div> -->
                    </div>

                    <div id="Follow" class="tabcontent">
                        <div class="panel-body">
                            <div class="alert text-white bg-danger text-center" role="alert">
                                Chú ý : Nếu Follow Lên Đơn Lâu Liên Hệ Admin Để Xử Lí!
                            </div>
                            <form method="POST" submit-ajax="quochuyit" action="Api/ApiSub">
                                <div class="form-group">
                                    <label>ID tài khoản cần tăng Follow</label>
                                    <input type="text" placeholder="ID trang cá nhân chạy Follow" class="form-control" id="uid" name="idfb" onpaste="getUID('idfb');" />
                                </div>

                                <input type="hidden" id="sv1" name="server_order" onchange="if (!window.__cfRLUnblockHandlers) return false; bill();" value="sv1">
                                <div class="form-group">
                                    <label for="count">Số lượng</label>
                                    <input type="number" class="form-control" name="sl" placeholder="Nhập số lượng cần tăng" onkeyup="tinhtien();">
                                </div>

                                <div class="form-group">
                                    <label for="note">Ghi chú</label>
                                    <textarea class="form-control" name="note" placeholder="Khong Nhap Cung Duoc" id="note" rows="1"></textarea>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="active">Tổng thanh toán: <font color="red"><b id="ketqua">0</b></font> VNĐ</label>
                                </div> -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block" name="submit">Thanh Toán</button>
                                </div>
                            </form>
                        </div>

                        <!-- get lịch sử -->
                        <!-- <div class="panel-body px-3 py-1 bg-light">
                            <table class="table table-bordered table-striped fs--1">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">STT</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">ID</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">Trạng thái</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">Số lượng</th>
                                        <th class="sort pr-1 align-middle white-space-nowrap text-center">Đã tăng</th>
                             
                                    </tr>
                                </thead>
                                <?php
                                error_reporting(1);
                                require_once('../App/Api/tds.php');
                                // get lịch sử mua follow
                                $header = array(
                                    "Host:traodoisub.com",
                                    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                                    "x-requested-with:XMLHttpRequest",
                                    "user-agent:$useragent",
                                    "origin:https://traodoisub.com",
                                    "referer:https://traodoisub.com/mua/follow/",
                                );
                                $data = 'page=1&query=';
                                $mr = curl_init();
                                curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/mua/follow/fetch.php');
                                curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                                curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                                curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                                curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                                $mr2 = curl_exec($mr);
                                curl_close($mr);
                                $json = json_decode($mr2, true);
                                $id = $json["data"][0]["idpost"];
                                $status = $json["data"][0]["status"];
                                $sl = $json["data"][0]["sl"];
                                $dt = $json["data"][0]["datang"];
                                $time = $json["data"][0]["date"];
                                ?>
                                <tbody class="list" id="table-purchase-body">
                                    <tr class="btn-reveal-trigger">
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($huycode, "SELECT * FROM `muafollow`");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <td class="align-middle text-center white-space-nowrap"><?= $i; ?> <?php $i++; ?></td>
                                            <td class="align-middle text-center white-space-nowrap"><?= $row['idtang']; ?></td>
                                            <?php if ($status == '<span class="badge badge badge-soft-primary">Hoàn Thành</span>') { ?>
                                                <td class="align-middle text-center fs-0 white-space-nowrap"><span class="badge badge badge-success">Hoàn Thành</span></td>
                                            <?php } else { ?>
                                                <td class="align-middle text-center fs-0 white-space-nowrap"><span class="badge badge badge-warning">Đang Tăng</span></td>
                                            <?php } ?>
                                            <td class="align-middle text-center white-space-nowrap"><?= $sl; ?></td>
                                            <td class="align-middle text-center white-space-nowrap"><?= $dt; ?></td>
                                         
                                    </tr>

                                <?php } ?>
                                </tbody>
                            </table>
                        </div> -->
                    </div>

                    <!-- <div id="Comment" class="tabcontent">

                    </div> -->

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Lấy ID Facebook Tại Đây </h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="">
                            <label for="">ID trang cá nhân :</label>
                            <input type="text" class="form-control" id="idcheck" name="idcheck" onpaste="getUID('idcheck');" placeholder="Nhập ID profile cần cài, có thể nhập url hệ thống tự lấy ID">
                            <!-- <div class="form-group">
                                <button type="sumbit" class="btn btn-success" name="kiemtra" id="kiemtra">Kiểm Tra</button>
                            </div> -->
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>toastr.info('INFO!');</script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./Js/quochuy.js"></script>
    <link rel="stylesheet" href="./Js/toastr.css" />
    <script src="./Js/toastr.min.js"></script>
    <script src="./Js/jquery.min.js"></script>
    <script>
        function huycoder(evt, item) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(item).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>


</body>

</html>