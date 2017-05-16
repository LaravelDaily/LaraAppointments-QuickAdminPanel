<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'clients' => [		'title' => 'Clients',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'employees' => [		'title' => 'Employees',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'working-hours' => [		'title' => 'Working hours',		'created_at' => 'Time',		'fields' => [			'employee' => 'Employee',			'date' => 'Date',			'start-time' => 'Start time',			'finish-time' => 'Finish time',		],	],
		'appointments' => [		'title' => 'Appointments',		'created_at' => 'Time',		'fields' => [			'client' => 'Client',			'employee' => 'Employee',			'start-time' => 'Start time',			'finish-time' => 'Finish time',			'comments' => 'Comments',		],	],
	'qa_create' => 'बनाइए (क्रिएट)',
	'qa_save' => 'सुरक्षित करे ',
	'qa_edit' => 'संपादित करे (एडिट)',
	'qa_view' => 'देखें',
	'qa_update' => 'सुधारे ',
	'qa_list' => 'सूची',
	'qa_no_entries_in_table' => 'टेबल मे एक भी एंट्री नही है ',
	'custom_controller_index' => 'विशेष(कस्टम) कंट्रोलर इंडेक्स ।',
	'qa_logout' => 'लोग आउट',
	'qa_add_new' => 'नया समाविष्ट करे',
	'qa_are_you_sure' => 'आप निस्चित है ?',
	'qa_back_to_list' => 'सूची पे वापस जाए',
	'qa_dashboard' => 'डॅशबोर्ड ',
	'qa_delete' => 'मिटाइए',
	'quickadmin_title' => 'Appointments',
];