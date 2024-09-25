document.getElementById("menuToggle").addEventListener('click', toggleMenu);
function toggleMenu() {
    var menuItems = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
        menuItem.classList.toggle("hidden");
    }
}



function placeholderIsSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
}

$(document).ready(function(){
    placeholderSupport = placeholderIsSupported() ? 'placeholder' : 'no-placeholder';
    $('html').addClass(placeholderSupport);
});

$('.alert').alert()

function closeAlert(){
    document.getElementById('.alert').alert('close')
}