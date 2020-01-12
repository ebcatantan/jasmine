<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $nodes = [
        'title' => [
            'label'  => 'Node Title',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node title field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Node Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node desciption field is required.'
            ]
        ],

    ];

    public $role = [
        'role_name' => [
            'label'  => 'Role Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Role Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role desciption field is required.'
            ]
        ],

        'function_id' => [
            'label'  => 'Landing Page',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Landing Page field is required.'
            ]
        ],

    ];

	public $user = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password field is required.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],
        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

    public $user_edit = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],

        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];
		public $section = [
				'curriculum_id' => [
						'label'  => 'Curriculum',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Curriculum field is required.'
						]
				],
				'course_id' => [
						'label'  => 'Course',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Course field is required.'
						]
				],
				'academic_year_instance_id' => [
						'label'  => 'Academic Year Instance',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Academic Year Instance field is required.'
						]
				],
				'section_code' => [
						'label'  => 'Section Code',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Section Code field is required.'
						]
				],
				'section_name' => [
						'label'  => 'Section Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Section Name field is required.'
						]
				],
				'shift' => [
						'label'  => 'Shift',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Shift field is required.'
						]
				],
				'max_no_student' => [
						'label'  => 'Max no. of Student',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Max no. of Student field is required.'
						]
				],
				'section_status' => [
						'label'  => 'Section Status',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Section Status field is required.'
						]
				]
		];

		// public $section = [
		// 		'curriculum_id' => [
		// 				'label'  => 'Curriculum',
		// 				'rules'  => 'required',
		// 				'errors' => [
		// 						'required' => 'Curriculum field is required.'
		// 				]
		// 		]
		// ];
		// public $section = [
		// 		'course_id' => [
		// 				'label'  => 'Course',
		// 				'rules'  => 'required',
		// 				'errors' => [
		// 						'required' => 'Course field is required.'
		// 				]
		// 		]
		// ];
		// public $section = [
		// 		'academic_year_instance_id' => [
		// 				'label'  => 'Academic Year Instance',
		// 				'rules'  => 'required',
		// 				'errors' => [
		// 						'required' => 'Academic Year Instance field is required.'
		// 				]
		// 		]
		// ];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
