<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */



$table = 'page';
$field = 'pg_restricted';
$default_fd[$table][$field]['fd_order']     = 10;
$default_fd[$table][$field]['fd_name']      = 'Restricted Page';
$default_fd[$table][$field]['fd_type']      = 'yesno';
$default_fd[$table][$field]['fd_default']   = 0;
$default_fd[$table][$field]['fd_help']      = 'Retrict access to this page to those who have accepted the terms of entry';
$default_fd[$table][$field]['fd_mode']      = 'standard';
$default_fd[$table][$field]['fd_tabname']   = 'Scheduling';
