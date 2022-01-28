export function modal() {
    let ourAdvantagesOpen = document.querySelector('.btn_read_more__cloth');
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
}
