$(document).ready(function(){
	var $captcha_input   = $('input[name="captcha_sid"]', '#content');
	var $captcha_link    = $('.captcha_reload', '#content');

    if($captcha_link.length && $captcha_input.length){
		var $captcha_img   = $captcha_input.next();
        var captcha_path   = "/bitrix/tools/captcha.php?captcha_sid=";
		if($captcha_img.length){
			// click handler
			$captcha_link.click(function(){
				$.get(
					bxCaptchaPathExec,
					{mode : "captcha_sid"},
					function(data) {
						if(data){
							$captcha_img.attr("src", captcha_path + data);
							$captcha_input.val(data);
						}
					}
				);
			});
		}
    }                 
});