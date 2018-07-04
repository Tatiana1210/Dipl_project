jQuery(function(){
	jQuery('#rating_3').rating({
		fx: 'float',
        image: '../img/stars.png',
        loader: '../img/ajax-loader.gif',
        minimal: 0.6,
		url: 'rating.php',
        callback: function(responce){

            this.vote_success.fadeOut(2000);
            if(responce.msg) alert(responce.msg);
        }
	});
})
