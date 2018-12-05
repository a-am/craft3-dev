<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the default settings in `vendor/craftcms/cms/src/config/defaults/general.php`.
 */

return [
    // Base site URL
    'siteUrl' => "http://craft3.dev",

    // Environment-specific variables (see https://craftcms.com/docs/multi-environment-configs#environment-specific-variables)
    'aliases' => [],

    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 0,
    
    // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
    'enableCsrfProtection' => true,

    // Whether "index.php" should be visible in URLs (true, false, "auto")
    'omitScriptNameInUrls' => 'auto',

    'usePathInfo' => true,

    // Control Panel trigger word
    'cpTrigger' => 'admin',
    'useCompressedJs' => false,

    // Dev Mode (see https://craftcms.com/support/dev-mode)
    'devMode' => true,

    'securityKey' => 'nhvV7MJVYO8eDw63qmCSSHomH5IdELOl',
];
