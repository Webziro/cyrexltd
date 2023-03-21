<?php

	/*Security*/
	 const SECRETE_KEY =  'test123';

	/*Data Type*/
define('BOOLEAN', 	'1');
define('INTEGER', 	'2');
define('STRING', 	'3');

	/*Error Codes*/
	 const STATUSCODE = array (
		 "REQUEST_METHOD_NOT_VALID" =>		     100,
		 "REQUEST_CONTENTTYPE_NOT_VALID" =>      101,
		 "REQUEST_NOT_VALID" =>   			     102,
		 "VALIDATE_PARAMETER_REQUIRED" =>   	 103,
		 "VALIDATE_PARAMETER_DATATYPE" =>   	 104,
//		 "API_NAME_REQUIRED" =>   				 105,
		 "UNABLE_TO_CREATE" =>   				 106,
		 "API_DOST_NOT_EXIST" =>   				 107,
		 "INVALID_USER_PASS" =>   				 108,
		 "USER_NOT_ACTIVE" =>   				 109,
		 "USER_NOT_FOUND" =>                     105,
		 "SUCCESS_RESPONSE" =>   				 200,
		 /*Server Errors*/
		 "JWT_PROCESSING_ERROR" =>  			 300,
		 "ATHORIZATION_HEADER_NOT_FOUND" =>  	 301,
		 "ACCESS_TOKEN_ERRORS" =>  				 302
	 );
