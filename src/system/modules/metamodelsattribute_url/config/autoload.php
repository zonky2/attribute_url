<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage AttributeUrl
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModels\Attribute\Url\Url'       => 'system/modules/metamodelsattribute_url/MetaModels/Attribute/Url/Url.php',
	'MetaModels\Helper\Url\Url'          => 'system/modules/metamodelsattribute_url/MetaModels/Helper/Url/Url.php',

	'MetaModelAttributeUrl'              => 'system/modules/metamodelsattribute_url/deprecated/MetaModelAttributeUrl.php',
	'MetaModelAttributeUrlHelper'        => 'system/modules/metamodelsattribute_url/deprecated/MetaModelAttributeUrlHelper.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_url'              => 'system/modules/metamodelsattribute_url/templates',
));
