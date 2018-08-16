$(document).ready(function() {
// Function for Preview Image.
$(function() {
$(":file").change(function() {
if (this.files && this.files[0]) {
var ab = new FileReader();
ab.onload = imageIsLoaded;
ab.readAsDataURL(this.files[0]);
} 
});
});
function imageIsLoaded(e) {
$('#message').css("display", "none");
$('#preview').css("display", "block");
$('#previewimg').attr('src', e.target.result);
};
// Function for Deleting Preview Image.
});