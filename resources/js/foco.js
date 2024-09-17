$(document).ready(function() {
    let swtch = localStorage.getItem('swtch') === '1' ? 1 : 0;
    updateBackground(swtch);

    $('#foco').on("click", function() {
        swtch = swtch === 0 ? 1 : 0;
        localStorage.setItem('swtch', swtch);
        updateBackground(swtch);
    });

    function updateBackground(state) {
        if (state == 0) {
            $('#foco').html('<span class="material-symbols-outlined">highlight</span>');
            $('.login-container').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.1)');
            $('#content').css('background-color', '#f4f4f4');
            $('#header').css('background-color','#f4f4f4');
            $('body').css('background-color', '#f4f4f4');
            $('.texto').css('color','black');
        } else {
            $('#foco').html('<span class="material-symbols-outlined" style="color: white">flashlight_on</span>');
            $('.login-container').css('box-shadow', '0 0 10px rgba(255, 255, 255, 0.788)');
            $('#content').css('background-color', '#1c2833');
            $('#header').css('background-color','#1c2833');
            $('body').css('background-color', '#1c2833');
            $('.texto').css('color','white');
        }
    }
});