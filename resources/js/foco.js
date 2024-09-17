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
            $('.focoArrow').html('<span class="material-symbols-outlined" style="color: black">arrow_back</span>');
            $('#foco').html('<span class="material-symbols-outlined" style="color: black">highlight</span>');
            $('.login-container').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.5)');
            $('.CardFormulario').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.5)');
            $('.img').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.5)');
            $('.imgMenu').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.5)');
            $('#content').css('background-color', '#f4f4f4');
            $('#header').css('background-color','#f4f4f4');
            $('body').css('background-color', '#f4f4f4');
            $('.texto').css('color','black');
        } else {
            $('.focoArrow').html('<span class="material-symbols-outlined" style="color: white">arrow_back</span>');
            $('#foco').html('<span class="material-symbols-outlined" style="color: white">flashlight_on</span>');
            $('.CardFormulario').css('box-shadow', '0 0 10px rgba(255, 255, 255, 0.788)');
            $('.login-container').css('box-shadow', '0 0 10px rgba(255, 255, 255, 0.788)');
            $('.img').css('box-shadow', '0 0 10px rgba(255, 255, 255, 0.788)');
            $('.imgMenu').css('box-shadow', '0 0 10px rgba(255, 255, 255, 0.788)');
            $('#content').css('background-color', '#1c2833');
            $('#header').css('background-color','#1c2833');
            $('body').css('background-color', '#1c2833');
            $('.texto').css('color','white');
        }
    }
});