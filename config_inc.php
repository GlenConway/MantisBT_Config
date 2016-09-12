$g_severity_significant_threshold = HIGH;
$g_default_bug_severity = MEDIUM;

$g_severity_multipliers = array( LOW => 1,
								 MEDIUM => 2,
								 HIGH    => 3,
								 CRITICAL   => 4 );
$g_severity_enum_string = '20:low,35:medium,40:high,55:critical';

$g_priority_enum_string = '20:low,30:normal,40:high';

$g_status_enum_string = '10:open,65:worked_on,75:fixed_retest,80:deferred,90:closed';
$g_status_colors['worked_on'] = '#EA80FC';
$g_status_colors['open'] = '#82B1FF';
$g_status_colors['fixed_retest'] = '#FF8A80';
$g_status_colors['deferred'] = '#BDBDBD';
$g_status_colors['closed'] = '#EFEBE9';

$g_bug_report_page_fields = array(
		'category_id',
		'view_state',
		'handler',
		'priority',
		'severity',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'attachments',
		'due_date',
);
$g_bug_view_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'status',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'tags',
		'attachments',
		'due_date',
);

$g_bug_print_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'status',
		'resolution',
		'projection',
		'eta',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'tags',
		'attachments',
		'due_date',
);
$g_bug_update_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'status',
		'resolution',
		'projection',
		'eta',
		'fixed_in_version',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'attachments',
		'due_date',
);

$g_bug_assigned_status = OPEN;
$g_bug_reopen_status = OPEN;
$g_bug_feedback_status = OPEN;
