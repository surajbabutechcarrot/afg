// Custom JavaScript for non-carousel functionality
document.addEventListener('DOMContentLoaded', function() {
    // Any custom functionality can be added here
    console.log('Custom JavaScript loaded');
    
    // Handle dropdown menus if needed
    const getDropDown = document.getElementsByClassName('main-nav');
    for (let div of getDropDown) {
        var selectLi = div.getElementsByTagName('li');
        for (let li of selectLi) {
            if (li.contains(li.querySelector('ul'))) {
                li.classList.add('submenu');
                li.innerHTML += "<i></i>";
            }
        }
    }

    const getDropDownClick = document.querySelectorAll('.main-nav i');
    getDropDownClick.forEach((item) => {
        item.addEventListener('click', e => {
            e.target.parentNode.classList.toggle('open');
        })
    });
});