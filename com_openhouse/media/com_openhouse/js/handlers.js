window.addEvent('domready', function() {
	// add to cart
	$$('.add_to_cart').each(function(cart) {
		if (cart.hasClass('disabled')) {
			return;
		}
		
		var child, dotter, request, id;
		id = cart.get('data-id');
		token = cart.get('data-token');
		child = cart.getChildren()[0];
		child.setStyle('width', child.getStyle('width'));
		
		dotter = new Dotter(cart.getChildren()[0], {
			delay: 1000,
			dot: '.',
			message: 'Adding'
		});
		
		cart.addEvent('click', function(event) {
			event.stop();
			dotter.start();
			
			request = new Request.JSON({
				url: 'index.php?option=com_openhouse&view=waypoint',
				method: 'post',
				data: 'action=save&ordering=1&openhouse_house_id='+ id +'&_token='+ token,

				onSuccess: function(json, text) {
					console.log(json);
					console.log(text);
					dotter.stop();
					child.set('html', 'Added');
					cart.removeEvents('click');
					cart.addClass('disabled');
				},
				onError: function(text, error) {
					dotter.stop();
					child.set('html', 'Error');
				}
			});
			request.send();
		});
	});
});


window.addEvent('domready', function() {
	$$('remove_from_cart').each(function(cart) {
		if (cart.hasClass('disabled')) {
			return;
		}
		
		var child, dotter, request, id;
		
		
		
	});
});