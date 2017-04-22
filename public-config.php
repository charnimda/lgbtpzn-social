<?php
if (!defined('GNUSOCIAL')) { exit(1); }

$config['site']['name'] = 'LGBTPZN social';

$config['site']['server'] = 'social.pzn.lgbt';
$config['site']['path'] = ''; 

$config['site']['ssl'] = 'always'; 

$config['site']['fancy'] = true;

$config['db']['database'] = getenv('GNUSOCIAL_DSN');

$config['db']['type'] = 'mysql';

// Uncomment below for better performance. Just remember you must run
// php scripts/checkschema.php whenever your enabled plugins change!
//$config['db']['schemacheck'] = 'script';

$config['site']['profile'] = 'community';

