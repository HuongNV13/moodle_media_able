// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Able Player loader.
 *
 * @module     media_able/loader
 * @copyright  2024 Huong Nguyen <huongnv13@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      4.4
 */

// import * as jsCookie from './local/jscookie/js.cookie';
import AblePlayerInstances from './local/able/ableplayer';
// import Notification from 'core/notification';

export const init = () => {
    window.console.log('Loaded');
    window.console.log(AblePlayerInstances);
    // const modulePromises = [import('./local/jscookie/js.cookie')];
    // window.console.log(modulePromises);
    // modulePromises.push(import('./local/jscookie/js.cookie'));
    // Promise.all([modulePromises])
    //     .then(([ablePlayer]) => {
    //         window.console.log(ablePlayer);
    //         return;
    //     })
    //     .catch(Notification.exception);
};
