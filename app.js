const progessBar = document.querySelector('.scrollbar');
const main = document.querySelector('main');

let totalHeight = main.scrollHeight - document.documentElement.clientHeight;

console.log(progessBar)
console.log(totalHeight)

window.addEventListener('scroll', () => {

    let progress  = (document.documentElement.scrollTop / totalHeight) * 100;
    if(progress >= 80){
        progessBar.style.width = "100%";
    }
    else{
    progessBar.style.width = `${progress}%`;
    }
})

const progessBarClick = document.querySelector('.clickScrollbar');

progessBarClick.addEventListener('click', (e) => {

    let newPageScroll = e.clientX / progessBarClick.offsetWidth * totalHeight;
    window.scrollTo({
        top: newPageScroll,
        behavior: 'smooth'
    })

})