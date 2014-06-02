<?php

/**
 * dibi - smart database abstraction layer (http://dibiphp.com)
 *
 * Copyright (c) 2005, 2012 David Grudl (http://davidgrudl.com)
 */


/**
 * Check PHP configuration.
 */
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	throw new Exception('dibi needs PHP 5.3.0 or newer.');
}


require_once __DIR__ . '/libs/interfaces.php';
require_once __DIR__ . '/libs/Dibi.php';
require_once __DIR__ . '/libs/DibiDateTime.php';
require_once __DIR__ . '/libs/DibiObject.php';
require_once __DIR__ . '/libs/DibiLiteral.php';
require_once __DIR__ . '/libs/DibiHashMap.php';
require_once __DIR__ . '/libs/DibiException.php';
require_once __DIR__ . '/libs/DibiConnection.php';
require_once __DIR__ . '/libs/DibiResult.php';
require_once __DIR__ . '/libs/DibiResultIterator.php';
require_once __DIR__ . '/libs/DibiRow.php';
require_once __DIR__ . '/libs/DibiTranslator.php';
require_once __DIR__ . '/libs/DibiDataSource.php';
require_once __DIR__ . '/libs/DibiFluent.php';
require_once __DIR__ . '/libs/DibiDatabaseInfo.php';
require_once __DIR__ . '/libs/DibiEvent.php';
require_once __DIR__ . '/libs/DibiFileLogger.php';
require_once __DIR__ . '/libs/DibiFirePhpLogger.php';
