// Sidebar

document.addEventListener('DOMContentLoaded', () => {

    document.getElementById('open-sidebar').addEventListener('click', () => {
        // add class active on #sidebar
        document.getElementById('sidebar').classList.add('active');
        
        // show sidebar overlay
        document.getElementById('sidebar-overlay').classList.remove('d-none');
    });
    
    document.getElementById('sidebar-overlay').addEventListener('click', function() {
        // add class active on #sidebar
        document.getElementById('sidebar').classList.remove('active');
        
        // show sidebar overlay
        this.classList.add('d-none');
    });

});


$("#choice").change(function () {
    if($(this).val() == "0") $(this).addClass("empty");
    else $(this).removeClass("empty")
});

$("#choice").change();