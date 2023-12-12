<style>
    a {
        text-decoration: none;
        color: #000000;
    }

    .btn-wrapper input {
        background-color: #e55472;
        color: #fff;
        width: 152px;
        padding: 0 30px;
    }

    .btn-wrapper input:hover {
        background-color: #565656;
    }

    .register {
        display: flex;
        justify-content: end;
    }
</style>
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 style="margin-left: 25px;" class="ltn__page-title">Đăng Nhập</h1>
                    <ul style="display: flex;
                     justify-content: center; align-items: center; list-style: none; gap: 10px;">
                        <li><a href="index.php">Home</a></li>
                        <li style="margin-top: 21px;"><ion-icon name="chevron-forward-outline"></ion-icon></li>
                        <li>Đăng Nhập</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__login-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1>Đăng Nhập</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="index.php?act=Login" method="POST" class="ltn__form-box contact-form-box">
                        <input type="text" name="username" placeholder="Tên Đăng Nhập*">
                        <input id="pwd" type="password" name="password" placeholder="Mật khẩu*"  style="position: relative;">
                        <span style="position: absolute; right: 15px; top: 93px;">
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
                        <div class="register">
                            <a href="index.php?act=Register">Bạn có tài khoản chưa?</a>
                        </div>
                        <div class="btn-wrapper">
                            <input style="    padding: 15px;
    border: none;" type="submit" value="ĐĂNG NHẬP" name="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);


</script>