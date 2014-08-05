<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <mikec@jojocms.org>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

Jojo::addHook('foot', 'foot', 'jojo_restricted');

$_options[] = array(
    'id'          => 'restrict_scope',
    'category'    => 'Restricted',
    'label'       => 'Restriction',
    'description' => 'Restrict access globally across the whole site or locally by page',
    'type'        => 'radio',
    'default'     => 'global',
    'options'     => 'global,local',
    'plugin'      => 'jojo_restricted'
);

$_options[] = array(
    'id'          => 'restricted_button_agree',
    'category'    => 'Restricted',
    'label'       => 'Agree button',
    'description' => 'Text for the Agree button',
    'type'        => 'text',
    'default'     => 'Yes I am 18 or older',
    'options'     => '',
    'plugin'      => 'jojo_restricted'
);

$_options[] = array(
    'id'          => 'restricted_button_disagree',
    'category'    => 'Restricted',
    'label'       => 'Disagree button',
    'description' => 'Text for the Disgree button',
    'type'        => 'text',
    'default'     => 'No I am not yet 18',
    'options'     => '',
    'plugin'      => 'jojo_restricted'
);

$_options[] = array(
    'id'          => 'restricted_message',
    'category'    => 'Restricted',
    'label'       => 'Restriction message',
    'description' => 'Describe the conditional for entry',
    'type'        => 'textarea',
    'default'     => 'Under the sale and supply of alcohol act 2012, we must confirm that you are 18 or over before you can enter our website',
    'options'     => '',
    'plugin'      => 'jojo_restricted'
);

$_options[] = array(
    'id'          => 'restricted_timeout',
    'category'    => 'Restricted',
    'label'       => 'Access Time',
    'description' => 'How long until you need to be asked again (cookie expiry date) in seconds. Default is one year. Set to 0 for single session access.',
    'type'        => 'integer',
    'default'     => '31536000',
    'options'     => '',
    'plugin'      => 'jojo_restricted'
);

$_options[] = array(
    'id'          => 'restricted_exitlink',
    'category'    => 'Restricted',
    'label'       => 'Disagree Link',
    'description' => 'Website link for redirect on disagree',
    'type'        => 'text',
    'default'     => 'http://www.alcohol.org.nz/',
    'options'     => '',
    'plugin'      => 'jojo_restricted'
);
