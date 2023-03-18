<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'application',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => 'e89c664bcef4af1964a285953110580b34e6951d',
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
            'reference' => 'e89c664bcef4af1964a285953110580b34e6951d',
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
            'reference' => 'b5c1ec1814cf8cbe1e1f08a099db6e2003dfccd9',
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
            'reference' => '5fccd778c8b0b94311ad55786bd36c3dbfc77f54',
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
