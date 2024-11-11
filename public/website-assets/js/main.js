window.addEventListener('load', function () {
    setTimeout(function () {
        document.getElementById('app-loader').style.display = 'none';
    }, 800); // Matches the CSS animation duration
});

$('#sidebarToggle').click(function () {
    $('#sidebar').addClass('active');
});

$('#sidebarClose').click(function () {
    $('#sidebar').removeClass('active');
});

