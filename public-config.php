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

addPlugin('Qvitter');

// Qvitter-settings
$config['site']['qvitter']['enabledbydefault'] = true;
$config['site']['qvitter']['defaultbackgroundcolor'] = '#f4f4f4';
$config['site']['qvitter']['defaultlinkcolor'] = '#0084B4';
$config['site']['qvitter']['timebetweenpolling'] = 5000;
// $config['site']['qvitter']['urlshortenerapiurl'] = 'http://qttr.at/yourls-api.php'; // if your site is on HTTPS, use url to shortener.php here
// $config['site']['qvitter']['urlshortenersignature'] = 'b6afeec983';
$config['site']['qvitter']['sitebackground'] = 'img/vagnsmossen.jpg';
$config['site']['qvitter']['favicon_path'] = Plugin::staticPath('Qvitter', '').'img/gnusocial-favicons/';
$config['site']['qvitter']['sprite'] = Plugin::staticPath('Qvitter', '').'img/sprite.png?v=40';
$config['site']['qvitter']['enablewelcometext'] = true;
// $config['site']['qvitter']['customwelcometext']['sv'] = '<h1>Välkommen till Quitter.se – en federerad<sup>1</sup> mikrobloggsallmänning!</h1><p>Etc etc...</p>';
// $config['site']['qvitter']['customwelcometext']['en'] = '<h1>Welcome to Quitter.se – a federated microblog common!</h1><p>Etc etc...</p>';
// $config['site']['qvitter']['customtermsofuse'] = 'Our custom terms of use';
$config['site']['qvitter']['blocked_ips'] = array();

// Recommended GNU social settings
$config['thumbnail']['maxsize'] = 3000; // recommended setting to get more high-res image previews
$config['profile']['delete'] = true; // twitter users are used to being able to remove their accounts
$config['profile']['changenick'] = true; // twitter users are used to being able to change their nicknames
$config['public']['localonly'] = true; // only local users in the public timeline (qvitter always has a timeline for the whole known network)
addPlugin('StoreRemoteMedia'); // makes remote images appear in the feed

