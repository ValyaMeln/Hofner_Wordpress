// import {modal} from "./modal";
//
// modal();

// ourAdvantages__btn_read_more btn_read_more btn_read_more__cloth
let ourAdvantagesOpen = document.querySelector('.btn_read_more__cloth');
// let ourAdvantagesOpen = document.querySelectorAll('.btn_read_more__cloth');
console.log(ourAdvantagesOpen );
let ourAdvantagesPopup = document.querySelector('.modal__ourAdvantages__btn_read_more');
let ourAdvantagesClose = document.querySelector('.modal__close');

let burgerMenuOpenBtn = document.getElementById('open_burger_menu_btn');
let headerMenuPopup = document.querySelector('.header__menu_popup_content');
let burgerMenuCloseBtn = document.getElementById('close_burger_menu_btn');


ourAdvantagesOpen.addEventListener("click", function (event) {
    event.preventDefault();
    ourAdvantagesPopup.classList.add("modal-content-show");
});

burgerMenuOpenBtn.addEventListener("click", openBnt);

function openBnt(event) {
    event.preventDefault();
    headerMenuPopup.classList.add("modal-content-show");
}

ourAdvantagesClose.addEventListener("click", function (event) {
    event.preventDefault();
    ourAdvantagesPopup.classList.remove('modal-content-show');

});
burgerMenuCloseBtn.addEventListener("click", function (event) {
    event.preventDefault();
    headerMenuPopup.classList.remove('modal-content-show');

});

window.addEventListener("keydown", function (event) {
    if (event.keyCode === 27) {
        if (ourAdvantagesPopup.classList.contains("modal-content-show")) {
            ourAdvantagesPopup.classList.remove("modal-content-show");
        }
    }
})

window.addEventListener("keydown", function (event) {
    if (event.keyCode === 27) {
        if (headerMenuPopup.classList.contains("modal-content-show")) {
            headerMenuPopup.classList.remove("modal-content-show");
        }
    }
})

$(document).ready(function () {
    $("form:not(.review)").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var data = $(form).serialize();
        if (data) {
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                data: "action=formSend&" + data,
                type: "POST",
                success: function success(response) {
                    console.log(response);
                    if (response.status === false) {
                        $("span.error").remove();
                        for (var i in response.error) {
                            $(form).find("[name=\"" + i + "\"]").addClass("error");
                            $("<span class=\"error\">" + response.error[i].text + "</span>").insertAfter($(form).find("[name=\"" + i + "\"]"))
                        }
                    } else {
                        $.fancybox.close();
                        form[0].reset();
                        $(form).find("input, textarea").removeClass("error");
                        $(form).find("input, textarea").removeClass("filled");
                        $.fancybox.open({
                            src: "#success",
                            type: "inline",
                            touch: false});
                        setTimeout(function () {
                            $.fancybox.close()
                        }, 3000)
                    }
                }
            })
        }
    });
    $("form.review").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var data = $(form).serialize();
        if (data) {
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                data: "action=addReview&" + data,
                type: "POST",
                success: function success(response) {
                    console.log(response);
                    if (response.status === false) {
                        $("span.error").remove();
                        for (var i in response.error) {
                            $(form).find("[name=\"" + i + "\"]").addClass("error");
                            $("<span class=\"error\">" + response.error[i].text + "</span>").insertAfter($(form).find("[name=\"" + i + "\"]"))
                        }
                    } else {
                        $.fancybox.close();
                        form[0].reset();
                        $(form).find("input, textarea").removeClass("error");
                        $(form).find("input, textarea").removeClass("filled");
                        $.fancybox.open({src: "#success", type: "inline", touch: false});
                        setTimeout(function () {
                            $.fancybox.close()
                        }, 3000)
                    }
                }
            })
        }
    })
});