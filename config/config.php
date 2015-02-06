<?php
return array(
	'logs'=>array(
		'path'=>'logs/log',
		'type'=>'file'
	),
	'DB'=>array(
		'type'=>'mysqli',
        'tablePre'=>'self_',
		'read'=>array(
			array('host'=>'qdm114540527.my3w.com','user'=>'qdm114540527','passwd'=>'hi1314521china','name'=>'qdm114540527_db'),
		),

		'write'=>array(
			'host'=>'qdm114540527.my3w.com','user'=>'qdm114540527','passwd'=>'hi1314521china','name'=>'qdm114540527_db',
		),
	),
	'interceptor' => array('themeroute@onCreateController','layoutroute@onCreateView'),
	'langPath' => 'language',
	'viewPath' => 'views',
	'skinPath' => 'skin',
    'classes' => 'classes.*',
    'rewriteRule' =>'url',
	'theme' => array('pc' => 'default','mobile' => 'mobile'),
	'skin' => array('pc' => 'default','mobile' => 'default'),
	'timezone'	=> 'Etc/GMT-8',
	'upload' => 'upload',
	'dbbackup' => 'backup/database',
	'safe' => 'cookie',
	'safeLevel' => 'none',
	'lang' => 'zh_sc',
	'debug'=> false,
	'configExt'=> array('site_config'=>'config/site_config.php'),
	'encryptKey'=>'a8ecf9b9f59b85cf9472168e3dcabfbd',
);
?>