const header = document.querySelector('header')
window.onscroll = () => {
    if (window.scrollY > 200) {
        header.classList.add('activeHeader')
    } else {
        header.classList.remove('activeHeader')
    }

}

const openNav = document.querySelector('#openNav')
const closeNav = document.querySelector('#closeNav')
const popupNav = document.querySelector('#popupNav')

openNav.addEventListener('click', () => {
    popupNav.classList.remove('!hidden')
    document.body.classList.add('!overflow-hidden')
})

closeNav.addEventListener('click', () => {
    popupNav.classList.add('!hidden')
    document.body.classList.remove('!overflow-hidden')
})


