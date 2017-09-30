<?php

/**
 * This file is part of the "dibi" - smart database abstraction layer.
 * Copyright (c) 2005 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Dibi\Reflection;

use Dibi;


/**
 * Reflection metadata class for a foreign key.
 *
 * @property-read string $name
 * @property-read array $references
 */
class ForeignKey
{
	use Dibi\Strict;

	/** @var string */
	private $name;

	/** @var array of [local, foreign, onDelete, onUpdate] */
	private $references;


	public function __construct($name, array $references)
	{
		$this->name = $name;
		$this->references = $references;
	}


	public function getName(): string
	{
		return $this->name;
	}


	public function getReferences(): array
	{
		return $this->references;
	}
}
