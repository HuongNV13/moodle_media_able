<?php
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
 * Main class for plugin 'media_able'
 *
 * @package    media_able
 * @copyright  2024 Huong Nguyen <huongnv13@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class media_able_plugin extends core_media_player_native {

    public function get_rank(): int {
        return 10;
    }

    public function embed($urls, $name, $width, $height, $options): string {
        $content = html_writer::start_tag('div', ['class' => 'mediaplugin mediaplugin_able d-block']);

        $content .= html_writer::start_tag('audio',
            [
                'width' => 480,
                'preload' => 'auto',
                'data-able-player' => '',
                'data-skin' => 2020,
            ]
        );
        $content .= html_writer::tag('source', '', ['src' => 'https://ableplayer.github.io/ableplayer/media/smallf.mp3', 'type' => 'audio/mpeg']);
        $content .= html_writer::tag('source', '', ['src' => 'https://ableplayer.github.io/ableplayer/media/smallf.ogg', 'type' => 'audio/ogg']);
        $content .= html_writer::end_tag('audio');

        $content .= html_writer::end_div();
        return $content;
    }

    public function setup($page) {
        if (during_initial_install() || is_major_upgrade_required()) {
            return;
        }
        $page->requires->js_call_amd('media_able/loader', 'init');
    }
}
