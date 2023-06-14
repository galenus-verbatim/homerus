<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'application',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '30b0414cfa62189ac33160ba47d82fbbb321f87d',
        'name' => 'galenus-verbatim/homerus',
        'dev' => true,
    ),
    'versions' => array(
        'galenus-verbatim/homerus' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'application',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '30b0414cfa62189ac33160ba47d82fbbb321f87d',
            'dev_requirement' => false,
        ),
        'galenus-verbatim/verbatim' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../galenus-verbatim/verbatim',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'fcdbd067eed5e251469740485368fd9c347b2b84',
            'dev_requirement' => false,
        ),
        'oeuvres/kit' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../oeuvres/kit',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => '369f0c3e902963fdbbaff8c61c3d01d0973c031c',
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'dev_requirement' => false,
        ),
    ),
);
