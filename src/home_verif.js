let username = document.getElementById('register-username');
let ddn = document.getElementById('register-birthdate');
let mdp = document.getElementById('register-password');
let email = document.getElementById('register-email');
let form = document.querySelectorAll("form")[0];

form.addEventListener('submit', function(event) {
    let birthday = new Date(ddn.value);
    let now = new Date();
    let age = now.getFullYear() - birthday.getFullYear();


    if (age < 14) {
        alert("Vous devez avoir plus de 14 ans pour vous inscrire");
        event.preventDefault();  
    }

    if (username.value.trim() == "" || email.value.trim() == "" ) {
        alert("Vous devez remplir tous les champs pour vous inscrire");
        event.preventDefault();  
    } 
    if (username.value.trim().length > 50 || username.value.trim().length <= 3 ) {
        alert("Votre pseudo doit faire moins de 50 caractères et plus de 3 caractères.");
        event.preventDefault();  
    }
   let valMDP =  mdp.value;
    if (mdp.value.trim() == "" || valMDP.length < 6 ) {
        alert("Vous devez entrer un mot de passe correct et à 6 caractères ou plus.");
        event.preventDefault();  
    } else {
        let valEmail = email.value;

        if (!validateEmail(valEmail)) {
            alert("Veuillez entrer une adresse email valide.");
            event.preventDefault();
            return;
        }
       
        fetch(form.getAttribute('action'), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json' 
            },
            body: JSON.stringify({ email: valEmail })
        })
        .then(response => response.json())
        .then(data => { 
            console.log("Réponse du serveur:", data); 
            if (data.exists) {
                alert(data.message + valEmail + " existe déjà.");
                event.preventDefault(); 
            }
        })
        .catch(error => {
            console.error("Erreur lors de la vérification de l'email :", error);
        });
    }
});

// Fonction de validation de l'email
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
}