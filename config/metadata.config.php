<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Comments',
    'version' => 'chiba.1',
    'provider' => array(
        'name' => 'NoviusOS',
    ),
    'namespace' => 'Nos\\Comments',
    'i18n_file' => 'noviusos_comments::metadata',
    'launchers' => array(
        'Nos\Comments::Comments' => array(
            'name'    => 'Comments', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/noviusos_comments/comment/appdesk', // url to load
                ),
            ),
        ),
    ),
);
