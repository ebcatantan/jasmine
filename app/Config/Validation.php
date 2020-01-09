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
				public $student = [
						'student_no' => [
								'label'  => 'Student No.',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Student No. field is required.'
								]
						],

						'last_name' => [
								'label'  => 'Last Name',
								'rules'  => 'required|alpha',
								'errors' => [
										'required' => 'Last Name field is required.',
										'alpha' => 'Last Name must not have numbers.'
								]
						],

						'first_name' => [
								'label'  => 'First Name',
								'rules'  => 'required|alpha',
								'errors' => [
										'required' => 'First Name field is required.',
										'alpha' => 'First Name must not have numbers.'
								]
						],

						'address' => [
								'label'  => 'Address',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Address field is required.'
								]
						],

						'barangay' => [
								'label'  => 'Barangay',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Barangay field is required.'
								]
						],

						'email' => [
								'label'  => 'Email',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Email field is required.'
								]
						],

						'contact_no' => [
								'label'  => 'Contact No.',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Contact No. field is required.'
								]
						],

						'birth_date' => [
								'label'  => 'Birth Date',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Birth Date field is required.'
								]
						],

						'birth_place' => [
								'label'  => 'Birth Place',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Birth Place field is required.'
								]
						],

						'gender' => [
								'label'  => 'Gender',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Gender field is required.'
								]
						],

						'civil_status' => [
								'label'  => 'Civil Status',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Civil Status field is required.'
								]
						],

						'maiden_name' => [
								'label'  => 'Maiden Name',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Maiden Name field is required.'
								]
						],

						'height' => [
								'label'  => 'Height',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Height field is required.'
								]
						],

						'weight' => [
								'label'  => 'Weight',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Weight field is required.'
								]
						],

						'religion' => [
								'label'  => 'Religion',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Religion field is required.'
								]
						],

						'year_profiled' => [
								'label'  => 'Year Profiled',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Year Profiled field is required.'
								]
						],

						'father_name' => [
								'label'  => 'Father\'s Name',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Father\'s Name field is required.'
								]
						],

						'father_occupation' => [
								'label'  => 'Father\'s Occupation',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Father\'s Occupation field is required.'
								]
						],

						'mother_name' => [
								'label'  => 'Mother\'s Name',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Mother\'s Name field is required.'
								]
						],

						'mother_occupation' => [
								'label'  => 'Mother\'s Occupation',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Mother\'s Name field is required.'
								]
						],

						'guardian' => [
								'label'  => 'Guardian',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Guardian field is required.'
								]
						],

						'relation_guardian' => [
								'label'  => 'Relationship to Guardian',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Relationship to Guardian field is required.'
								]
						],

						'guardian_contact_no' => [
								'label'  => 'Contact No. of Guardian',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Contact No. of Guardian field is required.'
								]
						],

						'voter_id' => [
								'label'  => 'Voter\'s ID',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Voter\'s ID field is required.'
								]
						],

						'person_to_notify' => [
								'label'  => 'Person to Notify in Case of Emergency',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Person to Notify in Case of Emergency field is required.'
								]
						],

						'emergency_no' => [
								'label'  => 'Emergency No.',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Emergency No. field is required.'
								]
						],

    ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
