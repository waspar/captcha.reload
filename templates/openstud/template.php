<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<script type="text/javascript">
$(function(){
	$('a.captcha-reload').each(function(){
		var $this			= $(this);
		var ready 			= $this.data("captcha-reload");
		if(ready) return true;
		$this.data("captcha-reload", true);

		var $form			= $this.closest('form');
		if(!$form.length) return false;
		var $img			= $form.find('.captcha img');
		var $input			= $form.find('input[name="captcha_sid"]:first');
		var captcha_path	= "/bitrix/tools/captcha.php?captcha_sid=";
		var captcha_url		= "<?=$this->GetFolder()?>/req.php";

		// ajax event
		$this.on('click', function(e){
			e.preventDefault();
			$.get(
				captcha_url,
				{mode : "captcha_sid"},
				function(data){
					$img.attr("src", captcha_path+data);
					$input.val(data);
				}
			);
		});

	});

	return true;
});
</script>
<a class="captcha-reload" href="">обновить картинку</a>

