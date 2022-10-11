<?php

final class enumDBConnectivity
	{
		public function __construct() {
			#$dbname=getenv("DB_NAME");
			#$dbhost=env("DB_HOST");
			#$dbuser=env("DB_USERNAME");
			#$dbpass=env("DB_PASSWORD");
			define(self::szDATABASE,getenv("DB_NAME"));
			define(self::szHOST,getenv("DB_HOST"));
			define(self::szUSER_NAME,getenv("DB_USERNAME"));
			define(self::szPASSWORD ,getenv("DB_PASSWORD"));
		}
	
	}

    /* What we need
        to be able to call this


    */
    print(enumDBConnectivity::szDATABASE);
?>