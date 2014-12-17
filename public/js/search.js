// Getting JSON data as a result letting JS decide where to put the data on the page

$('#search-json').click(function() {
	$.ajax({
		type: 'POST', 
		url: '/item/search',
		success: function(response) {

			// Clear the results from the last query
			$('#results').html('');

			// Parse through the response
			$.each(response, function( index, value ) {
				var name = response[index]['name'];
				
			})
		}
	})
})