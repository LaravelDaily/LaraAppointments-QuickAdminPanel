<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'clients' => [		'title' => 'Clients',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'employees' => [		'title' => 'Employees',		'created_at' => 'Time',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'phone' => 'Phone',			'email' => 'Email',		],	],
		'working-hours' => [		'title' => 'Working hours',		'created_at' => 'Time',		'fields' => [			'employee' => 'Employee',			'date' => 'Date',			'start-time' => 'Start time',			'finish-time' => 'Finish time',		],	],
		'appointments' => [		'title' => 'Appointments',		'created_at' => 'Time',		'fields' => [			'client' => 'Client',			'employee' => 'Employee',			'start-time' => 'Start time',			'finish-time' => 'Finish time',			'comments' => 'Comments',		],	],
	'qa_create' => 'Crear',
	'qa_save' => 'Guardar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Ver',
	'qa_update' => 'Actualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sin valores en la tabla',
	'custom_controller_index' => 'Índice del controlador personalizado (index).',
	'qa_logout' => 'Salir',
	'qa_add_new' => 'Agregar',
	'qa_are_you_sure' => 'Estás seguro?',
	'qa_back_to_list' => 'Regresar a la lista?',
	'qa_dashboard' => 'Tablero',
	'qa_delete' => 'Eliminar',
	'quickadmin_title' => 'Appointments',
];