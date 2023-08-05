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


// Ajax update message lu //
function updateContactStatut(link) {
    var id_contact = link.getAttribute("data-id_contact");

    // Envoyer une requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "./../../controller/editStatutContactController.php?id_contact=" + id_contact, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Statut mis à jour !");

            window.location.reload(); 
        }
    };
    xhr.send();
}


// add hh