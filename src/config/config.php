<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Query Parameter Prefix
	|--------------------------------------------------------------------------
	|
	| Defines the prefix used for the predefined query parameters such as:
	| fields, sort or with
	|
	*/

	'prefix' => '_',

	/*
	|--------------------------------------------------------------------------
	| Envelope
	|--------------------------------------------------------------------------
	|
	| Define whether to use an envelope for meta data or not. By default the 
	| meta data will be in the response header not in the body.
	|
	*/

	'envelope' => false,


	/*
	|--------------------------------------------------------------------------
	| Fulltext Search
	|--------------------------------------------------------------------------
	|
	| The type of fulltext search, either "default" or "native".
	| Native fulltext search for InnoDB tables is only supported by MySQL versions >= 5.6. 
	|
	*/

	'fulltext' => 'default', 

	/*
	|--------------------------------------------------------------------------
	| Fulltext Search Score Column
	|--------------------------------------------------------------------------
	|
	| The name of the column containing the fulltext search score in native
	| fulltext search mode.
	|
	*/

	'fulltext_score_column' => '_score',

	/*
	|--------------------------------------------------------------------------
	| Errors
	|--------------------------------------------------------------------------
	|
	| These arrays define the default error messages and the corresponding http
	| status codes. 
	|
	*/

	'errors' => array(
		'ResourceNotFound' 				=> array('http_code' => 404, 'message' => 'The requested resource could not be found but may be available again in the future.'),
		'InternalError' 				=> array('http_code' => 500, 'message' => 'Internal server error'),
		'Unauthorized'    				=> array('http_code' => 401, 'message' => 'Authentication is required and has failed or has not yet been provided'),
		'Forbidden'						=> array('http_code' => 403, 'message' => 'You don\'t have enough permissions to access this resource'),
		'ToManyRequests'				=> array('http_code' => 429, 'message' => 'You have sent too many requests in a specific timespan'),
		'InvalidInput' 					=> array('http_code' => 400, 'message' => 'The submited data is not valid'),
		'InvalidQueryParameter' 		=> array('http_code' => 400, 'message' => 'Invalid parameter'),
		'UnknownResourceField' 			=> array('http_code' => 400, 'message' => 'Unknown field ":field"'),
		'UnknownResourceRelation' 		=> array('http_code' => 400, 'message' => 'Unknown relation ":relation"')
 	),

	/*
	|--------------------------------------------------------------------------
	| Predefined Errors
	|--------------------------------------------------------------------------
	|
	| Link the errors the api handler uses internaly with the the respective 
	| error above.
	|
	*/

	'internal_errors' => array(
		'UnknownResourceField' 	 => 'UnknownResourceField',
		'UnknownResourceRelation'  => 'UnknownResourceRelation',
		'UnsupportedQueryParameter'  => 'UnsupportedQueryParameter',
		'InvalidQueryParameter' => 'InvalidQueryParameter'
	)

);