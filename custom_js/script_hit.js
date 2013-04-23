function hit(username)
	{
		$.ajax({
			type: "POST",
			url: "http://localhost/books/php/hit.php",
			data:{ name: username, }
			}).done(function( msg ){
				$("#whatOthersWant").append(msg);
		})
}