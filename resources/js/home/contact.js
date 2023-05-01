/**
 * Script for contact form
 * Author: Narigane 3
 * Date: 2023-04-30
 */

/***********************
 * Variables
 /***********************/


let contactForm = document.getElementById('contact_form');

/***********************
 / * Functions
 /***********************/


// Validate email
function validateEmail(email) {
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}


// Set popup for success message or error message
function setPopup(message, title) {
    let popup = new bootstrap.Modal(document.getElementById('popup'));
    let popupMessage = document.getElementById('popup-message');
    let popupTitle = document.getElementById('popup-title');
    popupMessage.innerHTML = message;
    popup.show()
    popupTitle.innerHTML = title;

    setTimeout(function () {
        popup.hide();
    }, 10000);
}

/***********************
 * Events listeners (main functions)
 */
contactForm.addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData(contactForm);
    let url = contactForm.getAttribute('action');
    let method = contactForm.getAttribute('method');
    let data = {
        name: formData.get('name'),
        email: formData.get('email'),
    }

    // if data is empty, return
    if (data.name === '' || data.email === '') {
        setPopup('Merci de bien remplir les champs', 'Oups, une erreur s\'est produite');
        return;
    }

    // Check if email is valid
    if (!validateEmail(data.email)) {
        setPopup('Merci de rentrer une adresse email valide', 'Oups, une erreur s\'est produite');
        return;
    }

    // check if rgpd is checked
    if (!formData.get('rgpd')) {
        setPopup('Mais merci d\'accepter les termes de notre politique de confidentialité',
            'Oups, une erreur s\'est produite');
        return;
    }

    // Send data to server
    fetch(url, {
        method: method,
        body: formData
    }).then(response => {

        console.log("respons : " + response.json())

        let valueResponse = response.json();
        if (response.status === 200) {
            setPopup('Merci pour votre message, nous vous répondrons dans les plus brefs délais', 'Message envoyé');
        } else if (response.status === 500) {
            setPopup('Oups, une erreur s\'est produite', 'Oups, une erreur s\'est produite');
        } else if (response.status === 422) {
            setPopup('On se connaît déjà non ?', 'Oups, une erreur s\'est produite');
        }
    }).catch((error) => {
        setPopup('Oups, une erreur s\'est produite', 'Oups, une erreur s\'est produite');
        console.error('Error:', error)
    });

});

