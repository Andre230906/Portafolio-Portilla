function submitForm() {
    let formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value
    };

    alert("Datos a enviar: " + JSON.stringify(formData));

}