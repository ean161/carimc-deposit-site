window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

localStorage.setItem("isLogging", false);

async function login() {
    if (localStorage.getItem("isLogging") == true) {
        console.log("Cancelled cuz logging");
        return;
    }

    if ($(".username").val().length == 0) {
        notyf.error("Tài khoản không được trống");
        return;
    }

    localStorage.setItem("isLogging", true);

    $("#loginBtn").html("Chờ xử lý...");
    $("#loginBtn").attr("onclick", "");
    $("#search_form").attr("onsubmit", "");

    let loginRes = await send("/model/login.php", {
        username: $(".username").val()
    });

    $(".username").val("");
    $("#loginBtn").html("Đăng nhập");
    $("#loginBtn").attr("onclick", "login()");
    $("#search_form").attr("onsubmit", "login(); return false;");

    if (loginRes.status == 1) {
        window.location.href = "/view/pages/home.php";
    }

    localStorage.setItem("isLogging", false);
}