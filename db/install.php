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
 * Strings for component 'auth_elcentra', language 'en'.
 *
 * @package   auth_elcentra
 * @copyright 2013 onwards Elcentra
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_auth_elcentra_install() {
    global $CFG, $DB;
     
    //Google
    set_config("google_base_url", "https://accounts.google.com/o/oauth2/auth?", 'auth/elcentra');
    set_config("google_token_access_url", "https://accounts.google.com/o/oauth2/token", 'auth/elcentra');
    set_config("google_retrieval_url", "https://www.googleapis.com/oauth2/v1/userinfo?", 'auth/elcentra');
    set_config("google_scope", "https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile", 'auth/elcentra');
    set_config("googleclientid", "", 'auth/elcentra');
    set_config("googleclientsecret", "", 'auth/elcentra');
    
   
    
}
