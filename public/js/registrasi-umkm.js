let fileThumbnail = document.getElementById("fileThumbnail");
let fotoThumbnail = document.getElementById("fotoThumbnail");
let fileName = document.getElementById("fileName");

fileThumbnail.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(fileThumbnail.files[0]);
    console.log(fileThumbnail.files[0]);
    reader.onload = () => {
        fotoThumbnail.setAttribute("src", reader.result)
    }
}


const uploadBtn = document.getElementById('submitButton');
const fileInput = document.getElementById('fileThumbnail');

uploadBtn.addEventListener('click', function() {
    if (fileInput.files.length === 0) {
        alert('Silakan pilih foto thumbnail');
        return false;
    }
});

function limitTextarea(textarea, maxLength) {
    var text = textarea.value;
    var charCount = text.length;

    var submitButton = document.getElementById('submitButton');
    submitButton.disabled = charCount > maxLength;

    if (charCount > maxLength) {
        textarea.value = text.substring(0, maxLength);
        charCount = maxLength;
    }

}

function validateForm(event) {
    var textarea = document.getElementById('deskripsiUsaha');
    var maxLength = 255;
    if (textarea.value.length > maxLength) {
        event.preventDefault();
        alert('Deskripsi usaha harus maksimal 255 karakter.');
        return false;
    }
}