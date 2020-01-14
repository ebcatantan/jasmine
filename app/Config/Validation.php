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

		public $admissions = [
				'examinee_no' => [
						'label'  => 'examinee_no',
						'rules'  => 'required',
						'errors' => [
								'required' => 'This Field is Required.'
						]
				],

				'last_name' => [
						'label'  => 'last_name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'This Field is Required.'
						]
				],

				'middle_name' => [
						'label'  => 'middle_name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'This Field is Required.'
						]
					],
				// 'extension_name' => [
				// 		'label'  => 'extension_name',
				// 		'rules'  => 'required',
				// 		'errors' => [
				// 				'required' => 'Landing Page field is required.'
				// 		]
				// 	],
					'address' => [
							'label'  => 'address',
							'rules'  => 'required',
							'errors' => [
									'required' => 'This Field is Required.'
							]
						],
						'barangay' => [
								'label'  => 'barangay',
								'rules'  => 'required',
								'errors' => [
										'required' => 'This Field is Required.'
								]
							],
							'email' => [
									'label'  => 'email',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This Field is Required.'
									]
							],
							'contact_no' => [
									'label'  => 'contact_no',
									 'rules'  => 'required',
									'errors' => [
											'required' => 'This Field is Required'
									]
								],
								'birth_date' => [
										'label'  => 'birth_date',
											'rules'  => 'required',
										'errors' => [
													'required' => 'This Field is Required'
										]
									],
									'birth_place' => [
											'label'  => 'birth_place',
												'rules'  => 'required',
											'errors' => [
													'required' => 'This Field is Required'
											]
										],
										'gender' => [
												'label'  => 'gender',
												'rules'  => 'required',
												'errors' => [
														'required' => 'This Field is Required'
												]
											],
											'civil_status' => [
							            'label'  => 'civil_status',
							            'rules'  => 'required',
							            'errors' => [
							                'required' => 'This Field is Required'
							            ]
							          ],
												// 'maiden_name' => [
								        //     'label'  => 'maiden_name',
								        //     'rules'  => 'required',
								        //     'errors' => [
								        //         'required' => 'This Field is Required'
								        //     ]
								        //   ],
													'height' => [
									            'label'  => 'height',
									            'rules'  => 'required',
									            'errors' => [
									                'required' => 'Landing Page field is required.'
									            ]
									          ],
									        'weight' => [
									            'label'  => 'weight',
									              'rules'  => 'required',
									            'errors' => [
									                  'required' => 'Landing Page field is required.'
									            ]
									          ],
									        'religion' => [
									            'label'  => 'religion',
									            'rules'  => 'required',
									            'errors' => [
									                'required' => 'Landing Page field is required.'
									            ]
									          ],
									        'last_school_attended' => [
									            'label'  => 'last_school_attended',
									            'rules'  => 'required',
									            'errors' => [
									                'required' => 'Landing Page field is required.'
									            ]
									          ],
									        'last_school_address' => [
									            'label'  => 'last_school_address',
									            'rules'  => 'required',
									            'errors' => [
									                'required' => 'Landing Page field is required.'
									            ]
									          ],
    ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
