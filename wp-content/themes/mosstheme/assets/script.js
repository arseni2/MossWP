//@param id: string (id модального окна)
let showModalWindow = (id) => {
    let modalWindow = document.querySelector(`#${id}`)
    modalWindow.style.display = 'flex'
    window.onclick = function(event) {
        if (event.target === modalWindow) {
            modalWindow.style.display = "none";
        }
    }
    let closeBtn = modalWindow.querySelector('.modal-window-header-close-btn')
    closeBtn.addEventListener('click', () => {
        modalWindow.style.display = "none";
    })
}

let openBurgerMenu = () => {
    let popup = document.querySelector('#popup')
    if(popup.style.right === '-100%' || popup.style.right === '') {
        popup.style.right = '0%'
    } else {
        popup.style.right = '-100%'
    }
}

let calcToKilo = () => {
    if(event.target.classList.contains('btn_filled_disabled')) {
        return
    }
    event.target.classList.toggle('btn_filled_disabled')
    let calcBody = document.querySelector('#calc_body')
    let btnOther = document.querySelector('#calcToMetr')
    btnOther.classList.toggle('btn_filled_disabled')
    calcBody.innerHTML = ''
    calcBody.innerHTML = '<input type="text" placeholder="Длина">\n' +
        '            <input type="text" placeholder="Кол-во">\n' +
        '            <select>\n' +
        '                <option>Зеленый</option>\n' +
        '                <option>Красный</option>\n' +
        '                <option>Синий</option>\n' +
        '            </select>'
}

let calcToMetrs = () => {
    if(event.target.classList.contains('btn_filled_disabled')) {
        return
    }
    event.target.classList.toggle('btn_filled_disabled')
    let btnOther = document.querySelector('#calcToKilo')
    btnOther.classList.toggle('btn_filled_disabled')
    let calcBody = document.querySelector('#calc_body')
    calcBody.innerHTML = ''
    calcBody.innerHTML = '<input type="text" placeholder="Длина">\n' +
        '            <input type="text" placeholder="Ширина">\n' +
        '            <input type="text" placeholder="Кол-во">\n' +
        '            <select>\n' +
        '                <option>Зеленый</option>\n' +
        '                <option>Красный</option>\n' +
        '                <option>Синий</option>\n' +
        '            </select>'
}

let accardionsTitles = document.querySelectorAll('.accordion_title')
accardionsTitles.forEach(function (item) {
    item.addEventListener('click', function () {
        let btn = item.querySelector('.elipse').children[0]
        let answer = item.parentNode.querySelector('.accordion_answer')
        if(answer.classList.toggle('open')) {
            btn.innerHTML = '-'
        } else {
            btn.innerHTML = '+'
        }
    })
})