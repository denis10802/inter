$(document).ready(function(){
	$("form").submit(function() { // Событие отправки с формы
		var form_data = $(this).serialize(); // Собираем данные из полей
		$.ajax({
			type: "POST", // Метод отправки
			url: "wp-content/themes/gbz-inter/sendform.php", // Путь к PHP обработчику sendform.php
			data: form_data,
			success: function() {
				$('.popup_thanks').addClass('active');

			}
		});
		event.preventDefault();
	});
	$('.close-thanks').click(function () {
		$('.popup_thanks').removeClass('active');
	});

});



$('.telephone').mask('+7 (999) 999-99-99');
