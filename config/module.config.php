<?php

return array(
    'translator' => array(
        'translation_file_patterns' => array(
            'googleSiteVerification' => array(
                'type'          => 'phpArray',
                'base_dir'      => __DIR__ . '/../languages/googleSiteVerification',
                'pattern'       => '%s.php',
                'text_domain'   => 'googleSiteVerification',
            ),
        ),
    ),
    'modules' => array(
        'Grid\Core' => array(
            'settings' => array(
                'google' => array(
                    'textDomain'    => 'google',
                    'fieldsets'     => array(
                        'siteVerification' => 'google-site-verification',
                    ),
                ),
                'google-site-verification' => array(
                    'textDomain'    => 'google',
                    'elements'      => array(
                        'id'        => array(
                            'key'   => 'view_manager.head_defaults.headMeta.google-site-verification.content',
                            'type'  => 'ini',
                        ),
                    ),
                ),
            ),
            'navigation' => array(
                'settings' => array(
                    'pages' => array(
                        'service'   => array(
                            'label'         => 'admin.navTop.service',
                            'textDomain'    => 'admin',
                            'order'         => 7,
                            'uri'           => '#',
                            'parentOnly'    => true,
                            'pages'         => array(
                                'google'    => array(
                                    'label'         => 'admin.navTop.settings.google',
                                    'textDomain'    => 'admin',
                                    'order'         => 1,
                                    'route'         => 'Grid\Core\Settings\Index',
                                    'resource'      => 'settings.google',
                                    'privilege'     => 'edit',
                                    'params'        => array(
                                        'section'   => 'google',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'form' => array(
        'Grid\Core\Settings\Google' => array(
            'type'          => 'Grid\Core\Form\Settings',
            'attributes'    => array(
                'data-js-type' => 'js.form.fieldsetTabs',
            ),
            'fieldsets'     => array(
                'siteVerification' => array(
                    'spec'  => array(
                        'name'      => 'siteVerification',
                        'options'   => array(
                            'label'         => 'googleSiteVerification.form.settings.legend',
                            'description'   => 'googleSiteVerification.form.settings.description',
                        ),
                        'elements'  => array(
                            'id'    => array(
                                'spec'  => array(
                                    'type'  => 'Zork\Form\Element\Text',
                                    'name'  => 'id',
                                    'options'   => array(
                                        'label' => 'googleSiteVerification.form.settings.id',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'head_defaults' => array(
            'headMeta'  => array(
                'googleSiteVerification' => array(
                    'name'      => 'google-site-verification',
                    'content'   => '',
                ),
            ),
        ),
    ),
);