<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'application',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => 'be4b74271a9e9608ac5c5d4ce0cd2b7ac97cdec9',
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
            'reference' => 'be4b74271a9e9608ac5c5d4ce0cd2b7ac97cdec9',
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
            'reference' => 'dfd0e4265e9d4da80c62d8ab4b71936989051e66',
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
