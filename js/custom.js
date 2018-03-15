$(document).ready(function(){

	$('#submit_answer').on('click',function(){
		var selected_val = $('[name="question-options"]:checked').val();
		api_call(selected_val)
	})

	$('#submit_answer_values').on('click',function(){

		var answer_object = {};
		var post = true;
		$('.answer li input').each(function(key,val){
			var value = parseInt(val.value);
			if(value)
				answer_object[val.id] = value;
			else{
				alert('all values are mandatory');
				post = false;
				return false;
			}
		})

		if(post)
			$.post({
				url: "/Controller/api/api_choice.php",
				data: {'answer_values': answer_object},
				type: 'POST',
			}).done(function(data) {
				if(data.status == 'successful')
					window.location.reload();
			});

	})

	$('#reset').on('click',function(){
		api_call('reset');
	})

	function api_call(value){
		$.ajax({
			url: "/Controller/api/api_choice.php?choice="+value,
		}).done(function(data) {
			if(data.status == 'successful')
				window.location.reload();
		});
	}
})