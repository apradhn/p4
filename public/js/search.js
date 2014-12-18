// Performs an AJAX search for Item Name
$('#search-name').click(function() {
    $.ajax({
        type: 'POST',
        url: '/item/search-name',
        success: function(response) { 
            $('#results').html(response);
        },
        data: {
            format: 'html',
            query: $('input[name=query]').val(),
            _token: $('input[name=_token]').val(),
        },
    }); 
});

// Performs an AJAX search for Tags
$('#search-tag').click(function() {
    $.ajax({
        type: 'POST',
        url: '/item/search-tag',
        success: function(response) { 
            $('#results').html(response);
        },
        data: {
            format: 'html',
            query: $('input[name=query]').val(),
            _token: $('input[name=_token]').val(),
        },
    }); 
});

// Performs an AJAX search for Item Color
$('#search-color').click(function() {
    $.ajax({
        type: 'POST',
        url: '/item/search-color',
        success: function(response) { 
            $('#results').html(response);
        },
        data: {
            format: 'html',
            query: $('input[name=query]').val(),
            _token: $('input[name=_token]').val(),
        },
    }); 
});