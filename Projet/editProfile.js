function show() {

    document.getElementById('input1').innerHTML = `
        <label for="password" class="form-label fw-semibold" style="color:rgb(32, 83, 117);">Ancien Mot de passe</label>
        <input type="password" class="form-control" id="password"  style="border-color:rgb(32, 83, 117);">`;

    document.getElementById('input2').innerHTML = `
        <label for="newPassword" class="form-label fw-semibold" style="color:rgb(32, 83, 117);">Nouveau mot de passe</label>
        <input type="password" class="form-control" id="newPassword" style="border-color:rgb(32, 83, 117);">
    `
    document.getElementById('input3').innerHTML = `
        <label for="confirmPassword" class="form-label fw-semibold" style="color:rgb(32, 83, 117);">Confirmer le mot de passe</label>
        <input type="password" class="form-control" id="confirmPassword" style="border-color:rgb(32, 83, 117);">
    `
}

function hide() {
    document.getElementById('input1').innerHTML = "";
    document.getElementById('input2').innerHTML = "";
    document.getElementById('input3').innerHTML = "";

}

function edit() {
    let inputs = document.getElementsByTagName('input');
    let buttons = document.getElementsByTagName("button");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].disabled = false;
    }
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].disabled = false;
    }
}