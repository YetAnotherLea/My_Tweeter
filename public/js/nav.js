
document.getElementById('user-profile').addEventListener('click', () => {
    if (
        document.getElementById('profile-menu').style.display == "none"
    ) {
            document.getElementById('profile-menu').style.display = "flex";
        } 
        else {
            document.getElementById('profile-menu').style.display = "none";
        }
})

const body = document.querySelector('body');

if (document.getElementById('profile-menu').style.display == "flex") {
    body.addEventListener('click', () => {
        document.getElementById('profile-menu').style.display = "none";
    })

}