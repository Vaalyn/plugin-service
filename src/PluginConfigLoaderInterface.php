<?php

declare(strict_types = 1);

namespace Vaalyn\PluginService;

use Vaalyn\PluginService\Exception\PluginConfigNotFoundException;

interface PluginConfigLoaderInterface {
	/**
	 * @return array
	 *
	 * @throws PluginConfigNotFoundException
	 */
	public function loadPluginConfig(): array;
}
