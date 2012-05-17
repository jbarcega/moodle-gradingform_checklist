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
 * Language file for the Checklist plugin
 *
 * @package    gradingform
 * @subpackage checklist
 * @author     Sam Chaffee
 * @copyright  2012 Moodlerooms, Inc.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Add group';
$string['checklist'] = 'Checklist';
$string['checklistmapping'] = 'Score to grade mapping rules';
$string['checklistmappingexplained'] = 'The minimum possible score for this checklist is <b>{$a->minscore} points</b> and it will be converted to the minimum grade available in this module (which is zero unless the scale is used).
    The maximum score <b>{$a->maxscore} points</b> will be converted to the maximum grade.<br />
    Intermediate scores will be converted respectively and rounded to the nearest available grade.<br />
    If a scale is used instead of a grade, the score will be converted to the scale elements as if they were consecutive integers.';
$string['checklistoptions'] = 'Checklist options';
$string['checkliststatus'] = 'Current checklist status';
$string['confirmdeletegroup'] = 'Are you sure you want to delete this group?';
$string['confirmdeleteitem'] = 'Are you sure you want to delete this item?';
$string['definechecklist'] = 'Define checklist';
$string['description'] = 'Description';
$string['gradingof'] = '{$a} grading';
$string['groupadditem'] = 'Add item';
$string['groupdelete'] = 'Delete group';
$string['groupempty'] = 'Click to edit group';
$string['groupmovedown'] = 'Move down';
$string['groupmoveup'] = 'Move up';
$string['itemdelete'] = 'Delete item';
$string['itemempty'] = 'Click to edit item';
$string['name'] = 'Name';
$string['pluginname'] = 'Checklist';
$string['restoredfromdraft'] = 'NOTE: The last attempt to grade this person was not saved properly so draft grades have been restored. If you want to cancel these changes use the \'Cancel\' button below.';
$string['save'] = 'Save';
$string['savechecklist'] = 'Save checklist and make it ready';
$string['savechecklistdraft'] = 'Save as draft';
$string['scorepostfix'] = '{$a} points';
$string['showitempointseval'] = 'Display points for each item during evaluation';
$string['showitempointstudent'] = 'Display points for each item to those being graded';
$string['enableitemremarks'] = 'Allow grader to add text remarks for each checklist group';
$string['enablegroupremarks'] = 'Allow grader to add text remarks for each checklist item';
$string['showremarksstudent'] = 'Show all remarks to those being graded';