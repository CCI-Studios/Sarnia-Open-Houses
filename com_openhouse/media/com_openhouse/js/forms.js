window.addEvent('domready', function() {
	inputs = $$('input[data-prefix], input[data-suffix]');
	
	strip = function (string, s1, s2) {
		return string.substr(s1.length, string.length - s1.length - s2.length);
	}
	
	inputs.each(function (input) {
		var prefix, suffix;
		prefix = input.get('data-prefix');
		suffix = input.get('data-suffix');

		if (prefix == null)
			prefix = '';
		if (suffix == null)
			suffix = '';
		
		if (input.value)
			input.value = prefix + input.value + suffix;
		
		input.addEvents({
			blur: function() {
				if (input.value)
					input.value = prefix + input.value + suffix;
			},
			focus: function() {
				input.value = strip(input.value, prefix, suffix);
			}
		});
		
		input.getParent('form').addEvent('submit', function() {
			input.value = strip(input.value, prefix, suffix);
		});
	});
});
