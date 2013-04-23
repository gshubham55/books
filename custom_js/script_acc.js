function acc(username)
	{
		$.ajax({
			type: "POST",
			url: "http://localhost/books/php/acc.php",
			data:{ name: username, }
			}).done(function( msg ){
				$("#whatYouWant").append(msg);
		})
}