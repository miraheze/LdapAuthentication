<?php

namespace Miraheze\LdapAuthentication\Tests\Unit;

use Miraheze\LdapAuthentication\Hooks\HookRunner;
use MediaWiki\Tests\HookContainer\HookRunnerTestBase;

/**
 * @covers \Miraheze\LdapAuthentication\Hooks\HookRunner
 */
class HookRunnerTest extends HookRunnerTestBase {

	public static function provideHookRunners() {
		yield HookRunner::class => [ HookRunner::class ];
	}
}
