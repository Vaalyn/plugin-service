<?php

declare(strict_types = 1);

namespace Vaalyn\PluginService;

use Vaalyn\PluginService\Exception\PluginConfigValidationException;

interface PluginConfigValidatorInterface {
	/**
	 * @param array $config
	 *
	 * @return void
	 *
	 * @throws PluginConfigValidationException
	 */
	public function validate(array $config): void;
}
