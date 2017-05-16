<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'clients' => [		'title' => 'Clients',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'employees' => [		'title' => 'Employees',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'working-hours' => [		'title' => 'Working hours',		'created_at' => 'Time',		'fields' => [			'employee' => 'Employee',			'date' => 'Date',			'start-time' => 'Start time',			'finish-time' => 'Finish time',		],	],
		'appointments' => [		'title' => 'Appointments',		'created_at' => 'Time',		'fields' => [			'client' => 'Client',			'employee' => 'Employee',			'start-time' => 'Start time',			'finish-time' => 'Finish time',			'comments' => 'Comments',		],	],
	'qa_create' => 'Oluştur',
	'qa_save' => 'Kaydet',
	'qa_edit' => 'Düzenle',
	'qa_view' => 'Görüntüle',
	'qa_update' => 'Güncelle',
	'qa_list' => 'Listele',
	'qa_no_entries_in_table' => 'Tabloda kayıt bulunamadı',
	'custom_controller_index' => 'Özel denetçi dizini.',
	'qa_logout' => 'Çıkış yap',
	'qa_add_new' => 'Yeni ekle',
	'qa_are_you_sure' => 'Emin misiniz?',
	'qa_back_to_list' => 'Listeye dön',
	'qa_dashboard' => 'Kontrol Paneli',
	'qa_delete' => 'Sil',
	'quickadmin_title' => 'Appointments',
];