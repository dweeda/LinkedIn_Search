<?php
/**
 * This file contains the API keys needed to access the LinkedIn API via oAuth
 *
 * Before you can use this example, you'll need to replace the two values below with your own
 * keys. To do this, go to https://www.linkedin.com/secure/developer and register.
 * Then, copy the value under the heading 'API key' into LINKEDIN_API_KEY_PUBLIC and the
 * value from 'Secret key' into LINKEDIN_API_KEY_PRIVATE. 
 *
 */

define ('LINKEDIN_API_KEY_PUBLIC', '75bcmr3ir2hwmg');
define ('LINKEDIN_API_KEY_PRIVATE', 'qPV6avgOSgGFZxTB');

if (LINKEDIN_API_KEY_PUBLIC === '')
    die('You need to edit config.php to add your own API keys before you can use this example');

?>
