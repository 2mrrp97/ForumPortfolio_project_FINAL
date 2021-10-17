var submitBtn = document.getElementById('submitBtn');
var username = document.getElementById('username');
var pass = document.getElementById('pass');
var blank_prompt = document.getElementById('blank_prompt');

submitBtn.addEventListener('mouseover', () => {
    if (username.value == "" || pass.value == "") {
        blank_prompt.classList.remove('invisible');
        submitBtn.disabled = true;
    }
});


document.querySelectorAll('.inputFields').forEach(elem => {
    elem.addEventListener('input', () => {
        if (username.value != "" && pass.value != "") {
            submitBtn.disabled = false;
            blank_prompt.classList.add('invisible');
        }
    });
});