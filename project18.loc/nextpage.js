
const filterBox = document.querySelectorAll('.product');

document.querySelector('.nav').addEventListener('click', (event)=>{
if(event.target.tagName != 'LI') return false;

let filterClass = event.target.dataset['f'];

filterBox.forEach(elem => {
    elem.classList.remove('hide')
    if(!elem.classList.contains(filterClass) && filterClass!='all'){
        elem.classList.add('hide');
    }
});
});              

/*const filterBtns = document.querySelectorAll('.filter-btn');
const filterBox = document.querySelectorAll('.product');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const filterClass = btn.getAttribute('data-f');
        filterBox.forEach(elem => {
            elem.classList.remove('hide')
            if(!elem.classList.contains(filterClass) && filterClass!='all'){
                elem.classList.add('hide');
            }
        });
    });
});
*/