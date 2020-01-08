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
		public $semester = [
        'name' => [
            'label'  => 'Semester Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Semester Name field is required.'
            ]
        ],
    ];

		public $building = [
				'building_code' => [
						'label'  => 'Building Code',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Building Code field is required.'
						]
				],
				'building_name' => [
						'label'  => 'Building Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Building Name field is required.'
						]
				],
				'description' => [
						'label'  => 'Description',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Description field is required.'
						]
				],
			];

		public $room =[
			'building_id' => [
				'label' => 'Building Code',
				'rules' => 'required',
				'errors' => [
					'required' => 'Building Code field is required'
				]
			],

			'room_name' => [
				'label' => 'Building Code',
				'rules' => 'required',
				'errors' => [
					'required' => 'Room Name field is required'
				]
			],

			'room_code' => [
				'label' => 'Room Code',
				'rules' => 'required',
				'errors' => [
					'required' => 'Room Code field is required'
				]
			],

			'description' => [
				'label' => 'Description',
				'rules' => 'required',
				'errors' => [
					'required' => 'Description fields is required'
				]
			]
    ];

		public $college = [
			'college_code' => [
					'label'  => 'College Code',
					'rules'  => 'required',
					'errors' => [
							'required' => 'College Code field is required.'
					]
			],

			'description' => [
					'label'  => 'Description',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Description field is required.'
					]
			],
			'other_notes' => [
					'label'  => 'Other Notes',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Other Notes field is required.'
					]
			],
		];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
