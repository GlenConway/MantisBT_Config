<?php
if ( lang_get_current() === 'english' ) {
	$s_severity_enum_string = '20:Low,35:Medium,40:High,55:Critical';
	$s_priority_enum_string = ',20:Low,30:Normal,40:High';
	$s_status_enum_string = '10:Open,65:Being worked on,75:Fixed - Retest,80:Deferred,90:Closed';

	$s_deferred_bug_title = 'Defer Issue';
	$s_deferred_bug_button = 'Defer Issue';

	$s_fixed_retest_bug_title = 'Fix Issue';
	$s_fixed_retest_bug_button = 'Fix Issue';

	$s_open_bug_title = 'Open Issue';
	$s_open_bug_button = 'Open Issue';

	$s_worked_on_bug_title = 'Work On Issue';
	$s_worked_on_bug_button = 'Work On Issue';
}
?>
