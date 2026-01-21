<?php

namespace Miraheze\LdapAuthentication\Hooks\Handlers;

class RegistrationCallback {

	public static function onRegistration(): void {
		// constants for search base
		define( 'GROUPDN', 0 );
		define( 'USERDN', 1 );
		define( 'DEFAULTDN', 2 );

		// constants for error reporting
		define( 'NONSENSITIVE', 1 );
		define( 'SENSITIVE', 2 );
		define( 'HIGHLYSENSITIVE', 3 );
	}
}
