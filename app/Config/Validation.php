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

		public $employee = [
			//'user_id' => [
		  //        'label'  => 'Roles',
		  //         'rules'  => 'required',
		  //          'errors' => [
		  //              'required' => 'This field is required.'
		  //          ]
		  //      ],

				//'citizen_image' => [
        //        'rules' => 'uploaded[employee_image]',
				//				'mime_in[citizen_image,image/jpg,image/jpeg,image/png]',
        //        'max_size[employee_image,10000]',
				//				'label' => 'Employee Image'
        //    ],

        'employee_no' => [
            'label'  => 'Employee no',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Employee no. field is required.'
            ]
        ],

        'last_name' => [
            'label'  => 'Last Name',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Last Name field is required.'
            ]
        ],

        'first_name' => [
            'label'  => 'First Name',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'First Name field is required.'
            ]
        ],

				'middlename' => [
		            'label'  => 'Middle Name',
		            'rules'  => 'alpha_space',
		            'errors' => [
										''
		            ]
		        ],

		    'extension_name' => [
		            'label'  => 'Extension Name',
								'rules'  => 'alpha_space',
		            'errors' => [
										''
		            ]
		        ],

				'address' => [
						'label'  => 'Address',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Address field is required.'
						]
				],

				'email' => [
						'label'  => 'Email',
						'rules'  => 'required|valid_email',
						'errors' => [
								'required' => 'email field is required.'
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

				'date_employed' => [
						'label'  => 'Date Employed',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Date Employed field is required.'
						]
				],

				'employment_status' => [
						'label'  => 'Employment Status',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Employment Status field is required.'
						]
				],

				'is_faculty' => [
						'label'  => 'is faculty',
						'rules'  => 'required',
						'errors' => [
								'required' => 'is faculty field is required.'
						]
				],

    ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
