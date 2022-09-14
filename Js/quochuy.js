// -------------------------- Xử Lí Dữ Liệu ------------------------- //

$(document).ready(function () {
  $("form[ajax-request=quochuyit]").submit(function (e) {
    e.preventDefault();
    const form = $(this);
    const method = "POST";
    const url = form.attr("action");
    const data = form.serialize();
    // console.log(data);
    const button = $(this).find("button[type=submit]");
    // if (button.attr("name") == "order") {
    const id = $("#uid").val();
    Swal.fire({
      title: "Xác Nhận Đơn Hàng",
      text: "Tăng Follow Cho UID +" + id,
      icon: "warning",
      showCancelButton: true,
      // confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Tôi Đồng Ý",
      cancelButtonText: "Đóng",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          icon: "warning",
          title: "Đang Xử Lý",
          timer: 7000,
          timerProgressBar: true,
          showCancelButton: false,
          showConfirmButton: false,
          didOpen: () => {
            Swal.showLoading();
          },
        });
        response = curl(url, method, data);
        result = JSON.parse(response);
        alert(result.msg);
      }
    });
    // } else {
    // curl(url, method, data);
    // }
  });
});

function curl(url, method, data) {
  $.ajax({
    type: method,

    url: url,
    data: data,
    dataType: "json",
    success: function (data) {
      console.log(data);
      var toastMixin = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });
      toastMixin.fire({
        icon: data.status === true ? "success" : "error",
        text: data.msg
      });
      if (data.url) {
        setInterval(() => {
          window.location.replace(data.url);
        }, 2000);
      }
    },
  });
}
1;
// -------------------------- Get UID ------------------------- //

function getUID(elm) {
  $("#buy").prop("disabled", true);
  setTimeout(() => {
    let link = $("[name=" + elm + "]").val();

    $("[name=" + elm + "]")
      .prop("disabled", true)
      .val("Đang xử lý");
    $.ajax({
      type: "GET",
      url: "https://subgiare.vn/api/tool/get-uid-fb",
      data: {
        link,
      },
      dataType: "json",
      success: function (response) {
        if (response.status === true) {
          $("[name=" + elm + "]")
            .prop("disabled", false)
            .val(response.data);
        } else {
          $("[name=" + elm + "]")
            .prop("disabled", false)
            .val("không tìm thấy id từ url này");
        }
        $("#buy").prop("disabled", false);
      },
    });
  }, 100);
}

// --------------------------- Auth ------------------------- //
