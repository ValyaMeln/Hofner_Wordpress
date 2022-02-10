$(document).ready(function () {
    $('form:not(.review)').submit(function (e) {
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
                        $.fancybox.open({src: "#success", type: "inline", touch: false});
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