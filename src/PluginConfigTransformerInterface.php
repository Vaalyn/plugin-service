<?php

declare(strict_types = 1);

namespace Vaalyn\PluginService;

interface PluginConfigTransformerInterface {
	/**
	 * Transform configs to config classes if necessary
	 *
	 * @param array $config
	 *
	 * @return array
	 */
	public function transform(array $config): array;
}
