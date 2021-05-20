function colapsSidebar() {
    let elem = document.querySelector('.sidebar');
    if (elem.classList.contains('collapsed')) {
        elem.classList.remove('collapsed');
    } else {
        elem.classList.add('collapsed');
    }
}