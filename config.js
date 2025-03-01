let connect = ''

function succesfullyLoged() {
    if (document.getElementById('validUser').value !== 'user') {
        return alert('Your Logged in!');
    }
}

function invalidUser() {
    if (document.getElementById('invalidUser').value !== 'user') {
        return alert('Your Connection FAiled!');
    }
}