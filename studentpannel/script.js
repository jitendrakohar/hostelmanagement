var form = document.getElementById("my-form");
async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("my-form-status");
    fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
        status.innerHTML = "Thanks you for submission!";
        form.requestFullscreen();
    }).catch(error => {
        status.innerHTML = "oops! there is a problem in submission"
    });
}
form.addEventListener("submit", handleSubmit);