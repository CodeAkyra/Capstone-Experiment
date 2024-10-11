
/** MODULE LINKS */

/** DROPDOWN BEHAVIOR */
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.module-grp');
    const content = document.querySelector('.main-content')

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const dropdown = button.nextElementSibling;
            if (dropdown && dropdown.classList.contains('dropdown')) {
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';

                buttons.forEach(btn => {
                    if (btn !== button) {
                        btn.classList.remove('active');
                        const otherDropdown = btn.nextElementSibling;
                        if (otherDropdown && otherDropdown.classList.contains('dropdown')) {
                            otherDropdown.style.display = 'none';
                        }
                    }
                });
                button.classList.toggle('active');
            }
        });
    });
});

/* Load Create Request for request-material.html

function loadCreateRequest() {
    fetch('production/Forms/create-request-material.html')
        .then(response => response.text())
        .then(html => {
            document.querySelector('.main-content').innerHTML = html;
        })
        .catch(err => console.error('Error loading content:', err));
}

function loadCancelRequestMaterial() {
    fetch('production/request-material.html')
        .then(response => response.text())
        .then(html => {
            document.querySelector('.main-content').innerHTML = html;
        })
        .catch(err => console.error('Error loading content:', err));
}

function loadEditRequetMaterialButton() {
    fetch('production/Forms/edit-request-material.html')
        .then(response => response.text())
        .then(html => {
            document.querySelector('.main-content').innerHTML = html;
        })
        .catch(err => console.error('Error loading content:', err));
}
        */