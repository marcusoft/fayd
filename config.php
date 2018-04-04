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
?>
<!-- No config needed -->
<?php global $CFG; ?>
<title> <?php print_string('title','auth_elcentra');?> </title>
<div style="text-align: center"><?php print_string('pluginname', 'auth_elcentra'); ?></div>

<table cellspacing="0" cellpadding="5" border="0">
<tr>
<td align="" colspan="3">
<div class="box informationbox">
<div class="moreproviderlink">
	<span style="font-weight: bold;"><?php print_string("copytext", "auth_elcentra"); ?></span><br /><br />
	<span style="font-size: 10px">
	<?php $content = <<<HTML
 	<!-- Elcentra content starts -->
 	<center>
 	<div class="moreproviderlink">
 	<a href="<?php echo $CFG->wwwroot ?>/auth/elcentra/google_request.php"><img src="<?php echo $CFG->wwwroot ?>/auth/elcentra/img/google.png"></a> <br>
 	</div>
 	</center>
 	<!-- Elcentra content ends -->
HTML;
	echo nl2br(htmlspecialchars($content)); 
 	?>
 	</span>
</div>
</div>
</td>	
</tr>
<tr>
<td align="" colspan="3">
<div class="box informationbox">
<?php
	echo "<center><b>";
	print_string('googleclient_title','auth_elcentra');
	echo "</b></center><br>";
	print_string('googleclient_redirecturl','auth_elcentra');
	echo $CFG->wwwroot."/auth/elcentra/google_response.php";
	echo "<br>";
	print_string('googleclient_appurl','auth_elcentra');
?>
<a href="https://code.google.com/apis/console/" target="_blank">https://code.google.com/apis/console/</a>
</div>
</td>	
</tr>
<tr>
	<td align="right"><label for="googleclientid"><?php print_string('googleclientid_text', 'auth_elcentra') ?>: </label></td>
    <td>
        <input name="googleclientid" id="googleclientid" type="text" size="30" value="<?php echo $config->googleclientid ?>" />
        <?php

        if (isset($err['googleclientid'])) {
            echo $OUTPUT->error_text($err['googleclientid']);
        }

        ?>
    </td>
    <td>
        <?php

        print_string('googleclientid_description', 'auth_elcentra');

        ?>
    </td>
</tr>

<tr>
	<td align="right"><label for="googleclientsecret"><?php print_string('googleclientsecret_text', 'auth_elcentra') ?>: </label></td>
    <td>
        <input name="googleclientsecret" id="googleclientsecret" type="text" size="30" value="<?php echo $config->googleclientsecret ?>" />
        <?php

        if (isset($err['googleclientsecret'])) {
            echo $OUTPUT->error_text($err['googleclientsecret']);
        }

        ?>
    </td>
    <td>
        <?php

        print_string('googleclientsecret_description', 'auth_elcentra');

        ?>
    </td>
</tr>
<tr>
<td align="" colspan="3">
<div class="box informationbox">
<?php
	
        ?>
    </td>
    <td>
        <?php
            echo "<center><b>";
            print_string('add_code_mode_title','auth_elcentra');
            echo "</b></center><br>";
            print_string('add_code_mode_notes','auth_elcentra');
            ?>
        </div>
    </td>
</tr>
<tr>
    <td align="right"><label><?php print_string('add_code_mode_text', 'auth_elcentra') ?>: </label></td>
    <td>
        <label for="add_code_mode_auto"><?php echo print_string('add_code_mode_auto_text', 'auth_elcentra'); ?></label>: <input name="add_code_mode" id="add_code_mode_auto" type="radio" value="auto" <?php echo ($config->add_code_mode=="auto")?'checked="checked"':''; ?> />
        <label for="add_code_mode_manual"><?php echo print_string('add_code_mode_manual_text', 'auth_elcentra'); ?></label>: <input name="add_code_mode" id="add_code_mode_manual" type="radio" value="manual" <?php echo ($config->add_code_mode=="manual")?'checked="checked"':''; ?> />
        <?php

        if (isset($err['add_code_mode'])) {
            echo $OUTPUT->error_text($err['add_code_mode']);
        }

        ?>
    </td>
    <td>
        <?php

        print_string('add_code_mode_description', 'auth_elcentra');

        ?>
    </td>
</tr>
<?php

print_auth_lock_options($this->authtype, $user_fields, get_string('auth_fieldlocks_help', 'auth'), false, false);

?>
</table>
