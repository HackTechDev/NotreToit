jQuery.gvalidation.errors = $.extend(jQuery.gvalidation.errors, {
	required : 'Cette information est obligatoire',
	alpha : 'This field accepts alphabetic characters only.',
	alphanum : 'This field accepts alphanumeric characters only.',
	digit : 'Please enter a valid integer.',
	nodigit : 'No digits are accepted.',
	number : 'Please enter a valid number.',
	email : 'Please enter a valid email.',
	image : 'This field should only contain image types',
	phone : 'Please enter a valid phone.',
	phone_inter : 'Please enter a valid international phone number.',
	url : 'Please enter a valid url.',
	group: 'Choisissez une sélection ',
	confirm: 'Please make sure that the value matches the %1 field value.',
	custom: 'The value entered is not valid.',
	
	digitmin: "The number must be at least %1",
	digitltd: "The value must be between %1 and %2",
	differs: "This value must be different of %1",
	length_str: "The length is incorrect, it must be between %1 and %2",
	length_fix: "The length is incorrect, it must be exactly %1 characters",
	lengthmax: "The length is incorrect, it must be at max %1",
	lengthmin: "The length is incorrect, it must be at least %1",
	words_min : "This field must concain at least %1 words, currently: %2 words",
	words_range : "This field must contain %1-%2 words, currently: %3 words",
	words_max : "This field must contain at max %1 words, currently: %2 words"
});
