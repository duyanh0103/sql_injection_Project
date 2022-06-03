

$('#dangky').click(function () {

    $('#a-sign').css(
        "display", "none"
    )
    $('#b-sign').css(
        "display", "none"
    )
    $('#c-sign').css(
        "display", "block"
    )
    $("#titlePage").text("Đăng kí");
});

$('#quenmk').click(function () {

    $('#a-sign').css(
        "display", "none"
    )
    $('#b-sign').css(
        "display", "block"
    )
    $('#c-sign').css(
        "display", "none"
    )
    $("#titlePage").text("Phục hồi mật khẩu");
});
$('#huy').click(function () {

    $('#b-sign').css(
        "display", "none"
    )
    $('#c-sign').css(
        "display", "none"
    )
    $('#a-sign').css(
        "display", "block"
    )
    $("#titlePage").text("Đăng nhập");
});

$('#back').click(function () {

    $('#b-sign').css(
        "display", "none"
    )
    $('#c-sign').css(
        "display", "none"
    )
    $('#a-sign').css(
        "display", "block"
    )
    $("#titlePage").text("Đăng nhập");
});

$('#dangnhap').click(function (e) {
    
    const email = $('#username').val();
    const password = $('#password').val();
    const filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
        alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
        return false;
    }
    if (password === '') {
        alert('Hay nhap password');
        return false;
    }
    

});

$('#forgot').click(function (e) {
    const email = $('#emailForgot').val();
    const filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
        alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
        return false;
    }  
});


$('#register').click(function (e) {
    const email = $('#usernamer').val();
    const password = $('#passwordr').val();
    const firstname = $('#firstname').val();
    const lastname = $('#lastname').val();
    const filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
        alert('Input Email validate.\nExample@gmail.com');
        return false;
    }
    if (password === '') {
        alert('Input password');
        return false;
    }
    if (firstname === '') {
        alert('Input firstname');
        return false;
    } 
    if (lastname === '') {
        alert('Input lastname');
        return false;
    } 
});




$('#profileForm').click(function () {

    $('#a-profile').css(
        "display", "none"
    )
    $('#b-profile').css(
        "display", "block"
    )
    $('#c-profile').css(
        "display", "none"
    )
    $("#titleProfile").text("Chinh ho so");
});


$('#cardForm').click(function () {

    $('#a-profile').css(
        "display", "none"
    )
    $('#b-profile').css(
        "display", "none"
    )
    $('#c-profile').css(
        "display", "block"
    )
    $("#titleProfile").text("nap tien");
});

$('#backf').click(function () {

    $('#a-profile').css(
        "display", "block"
    )
    $('#b-profile').css(
        "display", "none"
    )
    $('#c-profile').css(
        "display", "none"
    )
    $("#titleProfile").text("Profile");
});

$('#huyf').click(function () {

    $('#a-profile').css(
        "display", "block"
    )
    $('#b-profile').css(
        "display", "none"
    )
    $('#c-profile').css(
        "display", "none"
    )
    $("#titleProfile").text("Profile");
});