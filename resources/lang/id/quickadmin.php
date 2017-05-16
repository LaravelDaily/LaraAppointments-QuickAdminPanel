<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'clients' => [		'title' => 'Clients',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'employees' => [		'title' => 'Employees',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'working-hours' => [		'title' => 'Working hours',		'created_at' => 'Time',		'fields' => [			'employee' => 'Employee',			'date' => 'Date',			'start-time' => 'Start time',			'finish-time' => 'Finish time',		],	],
		'appointments' => [		'title' => 'Appointments',		'created_at' => 'Time',		'fields' => [			'client' => 'Client',			'employee' => 'Employee',			'start-time' => 'Start time',			'finish-time' => 'Finish time',			'comments' => 'Comments',		],	],
	'qa_create' => 'Buat',
	'qa_save' => 'Simpan',
	'qa_edit' => 'Edit',
	'qa_view' => 'Lihat',
	'qa_update' => 'Update',
	'qa_list' => 'Daftar',
	'qa_no_entries_in_table' => 'Tidak ada data di tabel',
	'custom_controller_index' => 'Controller index yang sesuai kebutuhan Anda.',
	'qa_logout' => 'Keluar',
	'qa_add_new' => 'Tambahkan yang baru',
	'qa_are_you_sure' => 'Anda yakin?',
	'qa_back_to_list' => 'Kembali ke daftar',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Hapus',
	'quickadmin_title' => 'Appointments',
];