<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.6';

// Database
$Configuration['Database']['Name'] = 'forum';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = 'mukti123!';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Facebook'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'NITDGP LUG Forum';
$Configuration['Garden']['Cookie']['Salt'] = 'L41YR3FEXF';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Lct2v8SAAAAAMTd08XyVBGjzDs3xyusSm1gOrPw';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Lct2v8SAAAAAD1eWX5rnVdC2e6YAbNm1uzundT0';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'NITDGP LUG Forum';
$Configuration['Garden']['Email']['SupportAddress'] = 'forum@nitdgplug.org';
$Configuration['Garden']['Email']['UseSmtp'] = FALSE;
$Configuration['Garden']['Email']['SmtpHost'] = 'smtp.mailgun.org';
$Configuration['Garden']['Email']['SmtpUser'] = 'postmaster@forum.nitdgplug.org';
$Configuration['Garden']['Email']['SmtpPassword'] = 'ab2f718c8f38d8be93a918d5ca1fd30b ';
$Configuration['Garden']['Email']['SmtpPort'] = '465';
$Configuration['Garden']['Email']['SmtpSecurity'] = 'tls';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.6';
$Configuration['Garden']['RewriteUrls'] = FALSE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = FALSE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Sandstone';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_sandstone';
$Configuration['Garden']['InstallationID'] = '070A-31B81BF4-CC869975';
$Configuration['Garden']['InstallationSecret'] = '4d7c343bcace46e921c57167a85852ed439507d5';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.6';

// Last edited by promitbiswas (101.221.131.143)2014-12-30 21:17:59