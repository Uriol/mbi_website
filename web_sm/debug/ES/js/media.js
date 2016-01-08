


$(function(){



	var clientid = '5c314c67157f4585ba3041281540c59b',
	//clientid = 'f38ad93f75b24f11a1912f3611f8e73b',
    userid = 2079865462, 
    num_photos = 2; 
    var url = 'https://api.instagram.com/v1/users/' + userid + '/media/recent';
 
	$.ajax({
		url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
		dataType: 'jsonp',
		type: 'GET',
		data: {client_id: clientid, count: num_photos},
		success: function(data){

			if (data.data != undefined) {
				// correct
				for( x in data.data ){
					//$('ul').append('<li><img src="'+data.data[x].images.standard_resolution.url+'"></li>'); 
				}
			} else {
				// incorrect
			}
	 		
		},
		error: function(data){

		}
	});
})



// access token: 2275169669.e7f647a.bbd8b99ad7804597911285245420268a
// client id: e7f647a5936e41d29c79bdd4cb177e8d
// https://api.instagram.com/v1/users/{user-id}/media/recent?callback=&client_id={client_id}


// Twitter api
// https://parall.ax/blog/view/3109/tutorial-retrieving-tweets-from-the-twitter-v1-1-api-using-oauth-php-javascript


// acces token : 2275169669.f38ad93.36f1c82462924654aa96a380cbc78bfe
// client id: f38ad93f75b24f11a1912f3611f8e73b


http://jsfiddle.net/aamir/4a87k/168/light/
var searchTerm = 'freekashmir',
    numOfTweets = 10,
    $ul = $('ul'),
    list='',
    url = 'http://aamirafridi.com/twitter/?q=' + searchTerm + '&count=' + numOfTweets;

$.get(url, function (data) {
    
    $.each(data.statuses, function () {
        // list += '<li>'+ this.text +'</li>';
        console.log(data)
    });
    // $ul.html(list);
});