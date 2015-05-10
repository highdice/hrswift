<?php

class LookupTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('lookup')->truncate();

		 $data = array(
            array(
                'keyword'       => 'access_type',
                'description'   => 'Web',
            ),
            array(
                'keyword'       => 'access_type',
                'description'   => 'Mobile',
            ),
            array(
                'keyword'       => 'sex',
                'description'   => 'Male',
            ), 
            array(
                'keyword'       => 'sex',
                'description'   => 'Female',
            ),
            array(
                'keyword'       => 'marital_status',
                'description'   => 'Single',
            ),
            array(
                'keyword'       => 'marital_status',
                'description'   => 'Married',
            ),
            array(
                'keyword'       => 'marital_status',
                'description'   => 'Widowed',
            ),
            array(
                'keyword'       => 'marital_status',
                'description'   => 'Divorced',
            ),
            array(
                'keyword'       => 'activation_status', 
                'description'   => 'Activated',           
            ),
            array(
                'keyword'       => 'activation_status',
                'description'   => 'Deactivated', 
            ),
            array(
                'keyword'       => 'employment_status',
                'description'   => 'Worker', 
            ),
            array(
                'keyword'       => 'employment_status',
                'description'   => 'Employee', 
            ),
            array(
                'keyword'       => 'employment_status',
                'description'   => 'Self Employed', 
            ),
            array(
                'keyword'       => 'employment_status',
                'description'   => 'Contractor', 
            ),
            array(
                'keyword'       => 'employment_status',
                'description'   => 'Director', 
            ),
            array(
                'keyword'       => 'employment_status',
                'description'   => 'Office Holder', 
            ),
            array(
                'keyword'       => 'work_shift',
                'description'   => 'Day Shift', 
            ),
            array(
                'keyword'       => 'work_shift',
                'description'   => 'Evening Shift', 
            ),
            array(
                'keyword'       => 'work_shift',
                'description'   => 'Day Shift',
            ),
            array(
                'keyword'       => 'work_shift',
                'description'   => 'Graveyard Shift', 
            ),
            array(
                'keyword'       => 'work_shift',
                'description'   => 'Split Shift', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Information Technology', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Research and Development', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Human Resources', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Accounting', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Marketing', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Sales', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Legal', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Management', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Dispatch', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Facility', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Customer Service', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Medical Services', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Occupational Health and Safety', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Waste Management', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Finance', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Production', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Purchasing', 
            ),
            array(
                'keyword'       => 'department',
                'description'   => 'Logistics', 
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Father',                
            ),
            array(
                'keyword'       => 'relationship', 
                'description'   => 'Mother',
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Spouse',
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Sibling',             
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Grandparent',
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Aunt',
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Uncle',
            ),
            array(
                'keyword'       => 'relationship',
                'description'   => 'Nephew',
            ),
            array('keyword'=>'country', 'description'=>'Afghanistan'),
            array('keyword'=>'country', 'description'=>'Albania'),
            array('keyword'=>'country', 'description'=>'Algeria'),
            array('keyword'=>'country', 'description'=>'Andorra'),
            array('keyword'=>'country', 'description'=>'Angola'),
            array('keyword'=>'country', 'description'=>'Antigua and Barbuda'),
            array('keyword'=>'country', 'description'=>'Argentina'),
            array('keyword'=>'country', 'description'=>'Armenia'),
            array('keyword'=>'country', 'description'=>'Aruba'),
            array('keyword'=>'country', 'description'=>'Australia'),
            array('keyword'=>'country', 'description'=>'Austria'),
            array('keyword'=>'country', 'description'=>'Azerbaijan'),
            array('keyword'=>'country', 'description'=>'Bahamas'),
            array('keyword'=>'country', 'description'=>'Bahrain'),
            array('keyword'=>'country', 'description'=>'Bangladesh'),
            array('keyword'=>'country', 'description'=>'Barbados'),
            array('keyword'=>'country', 'description'=>'Belarus'),
            array('keyword'=>'country', 'description'=>'Belgium'),
            array('keyword'=>'country', 'description'=>'Belize'),
            array('keyword'=>'country', 'description'=>'Benin'),
            array('keyword'=>'country', 'description'=>'Bhutan'),
            array('keyword'=>'country', 'description'=>'Bolivia'),
            array('keyword'=>'country', 'description'=>'Bosnia and Herzegovina'),
            array('keyword'=>'country', 'description'=>'Botswana'),
            array('keyword'=>'country', 'description'=>'Brazil'),
            array('keyword'=>'country', 'description'=>'Brunei'),
            array('keyword'=>'country', 'description'=>'Bulgaria'),
            array('keyword'=>'country', 'description'=>'Burkina Faso'),
            array('keyword'=>'country', 'description'=>'Burma'),
            array('keyword'=>'country', 'description'=>'Burundi'),
            array('keyword'=>'country', 'description'=>'Cambodia'),
            array('keyword'=>'country', 'description'=>'Cameroon'),
            array('keyword'=>'country', 'description'=>'Canada'),
            array('keyword'=>'country', 'description'=>'Cape Verde'),
            array('keyword'=>'country', 'description'=>'Central African Republic'),
            array('keyword'=>'country', 'description'=>'Chad'),
            array('keyword'=>'country', 'description'=>'Chile'),
            array('keyword'=>'country', 'description'=>'China'),
            array('keyword'=>'country', 'description'=>'Colombia'),
            array('keyword'=>'country', 'description'=>'Comoros'),
            array('keyword'=>'country', 'description'=>'Congo'),
            array('keyword'=>'country', 'description'=>'Costa Rica'),
            array('keyword'=>'country', 'description'=>"Cote d'Ivoire"),
            array('keyword'=>'country', 'description'=>'Croatia'),
            array('keyword'=>'country', 'description'=>'Cuba'),
            array('keyword'=>'country', 'description'=>'Curacao'),
            array('keyword'=>'country', 'description'=>'Cyprus'),
            array('keyword'=>'country', 'description'=>'Czech Republic'),
            array('keyword'=>'country', 'description'=>'Denmark'),
            array('keyword'=>'country', 'description'=>'Djibouti'),
            array('keyword'=>'country', 'description'=>'Dominica'),
            array('keyword'=>'country', 'description'=>'Dominican Republic'),
            array('keyword'=>'country', 'description'=>'East Timor'),
            array('keyword'=>'country', 'description'=>'Ecuador'),
            array('keyword'=>'country', 'description'=>'Egypt'),
            array('keyword'=>'country', 'description'=>'El Salvador'),
            array('keyword'=>'country', 'description'=>'Equatorial Guinea'),
            array('keyword'=>'country', 'description'=>'Eritrea'),
            array('keyword'=>'country', 'description'=>'Estonia'),
            array('keyword'=>'country', 'description'=>'Ethiopia'),
            array('keyword'=>'country', 'description'=>'Fiji'),
            array('keyword'=>'country', 'description'=>'Finland'),
            array('keyword'=>'country', 'description'=>'France'),
            array('keyword'=>'country', 'description'=>'Gabon'),
            array('keyword'=>'country', 'description'=>'Gambia'),
            array('keyword'=>'country', 'description'=>'Georgia'),
            array('keyword'=>'country', 'description'=>'Germany'),
            array('keyword'=>'country', 'description'=>'Ghana'),
            array('keyword'=>'country', 'description'=>'Greece'),
            array('keyword'=>'country', 'description'=>'Grenada'),
            array('keyword'=>'country', 'description'=>'Guatemala'),
            array('keyword'=>'country', 'description'=>'Guinea'),
            array('keyword'=>'country', 'description'=>'Guinea-Bissau'),
            array('keyword'=>'country', 'description'=>'Guyana'),
            array('keyword'=>'country', 'description'=>'Haiti'),
            array('keyword'=>'country', 'description'=>'Holy See'),
            array('keyword'=>'country', 'description'=>'Honduras'),
            array('keyword'=>'country', 'description'=>'Hong Kong'),
            array('keyword'=>'country', 'description'=>'Hungary'),
            array('keyword'=>'country', 'description'=>'Iceland'),
            array('keyword'=>'country', 'description'=>'India'),
            array('keyword'=>'country', 'description'=>'Indonesia'),
            array('keyword'=>'country', 'description'=>'Iran'),
            array('keyword'=>'country', 'description'=>'Iraq'),
            array('keyword'=>'country', 'description'=>'Ireland'),
            array('keyword'=>'country', 'description'=>'Israel'),
            array('keyword'=>'country', 'description'=>'Italy'),
            array('keyword'=>'country', 'description'=>'Jamaica'),
            array('keyword'=>'country', 'description'=>'Japan'),
            array('keyword'=>'country', 'description'=>'Jordan'),
            array('keyword'=>'country', 'description'=>'Kazakhstan'),
            array('keyword'=>'country', 'description'=>'Kenya'),
            array('keyword'=>'country', 'description'=>'Kiribati'),
            array('keyword'=>'country', 'description'=>'Kosovo'),
            array('keyword'=>'country', 'description'=>'Kuwait'),
            array('keyword'=>'country', 'description'=>'Kyrgyzstan'),
            array('keyword'=>'country', 'description'=>'Laos'),
            array('keyword'=>'country', 'description'=>'Latvia'),
            array('keyword'=>'country', 'description'=>'Lebanon'),
            array('keyword'=>'country', 'description'=>'Lesotho'),
            array('keyword'=>'country', 'description'=>'Liberia'),
            array('keyword'=>'country', 'description'=>'Libya'),
            array('keyword'=>'country', 'description'=>'Liechtenstein'),
            array('keyword'=>'country', 'description'=>'Lithuania'),
            array('keyword'=>'country', 'description'=>'Luxembourg'),
            array('keyword'=>'country', 'description'=>'Macau'),
            array('keyword'=>'country', 'description'=>'Macedonia'),
            array('keyword'=>'country', 'description'=>'Madagascar'),
            array('keyword'=>'country', 'description'=>'Malawi'),
            array('keyword'=>'country', 'description'=>'Malaysia'),
            array('keyword'=>'country', 'description'=>'Maldives'),
            array('keyword'=>'country', 'description'=>'Mali'),
            array('keyword'=>'country', 'description'=>'Malta'),
            array('keyword'=>'country', 'description'=>'Marshall Islands'),
            array('keyword'=>'country', 'description'=>'Mauritania'),
            array('keyword'=>'country', 'description'=>'Mauritius'),
            array('keyword'=>'country', 'description'=>'Mexico'),
            array('keyword'=>'country', 'description'=>'Micronesia'),
            array('keyword'=>'country', 'description'=>'Moldova'),
            array('keyword'=>'country', 'description'=>'Monaco'),
            array('keyword'=>'country', 'description'=>'Mongolia'),
            array('keyword'=>'country', 'description'=>'Montenegro'),
            array('keyword'=>'country', 'description'=>'Morocco'),
            array('keyword'=>'country', 'description'=>'Mozambique'),
            array('keyword'=>'country', 'description'=>'Namibia'),
            array('keyword'=>'country', 'description'=>'Nauru'),
            array('keyword'=>'country', 'description'=>'Nepal'),
            array('keyword'=>'country', 'description'=>'Netherlands'),
            array('keyword'=>'country', 'description'=>'Netherlands Antilles'),
            array('keyword'=>'country', 'description'=>'New Zealand'),
            array('keyword'=>'country', 'description'=>'Nicaragua'),
            array('keyword'=>'country', 'description'=>'Niger'),
            array('keyword'=>'country', 'description'=>'Nigeria'),
            array('keyword'=>'country', 'description'=>'North Korea'),
            array('keyword'=>'country', 'description'=>'Norway'),
            array('keyword'=>'country', 'description'=>'Oman'),
            array('keyword'=>'country', 'description'=>'Pakistan'),
            array('keyword'=>'country', 'description'=>'Palau'),
            array('keyword'=>'country', 'description'=>'Palestinian Territories'),
            array('keyword'=>'country', 'description'=>'Panama'),
            array('keyword'=>'country', 'description'=>'Papua New Guinea'),
            array('keyword'=>'country', 'description'=>'Paraguay'),
            array('keyword'=>'country', 'description'=>'Peru'),
            array('keyword'=>'country', 'description'=>'Philippines'),
            array('keyword'=>'country', 'description'=>'Poland'),
            array('keyword'=>'country', 'description'=>'Portugal'),
            array('keyword'=>'country', 'description'=>'Qatar'),
            array('keyword'=>'country', 'description'=>'Romania'),
            array('keyword'=>'country', 'description'=>'Russia'),
            array('keyword'=>'country', 'description'=>'Rwanda'),
            array('keyword'=>'country', 'description'=>'Saint Kitts and Nevis'),
            array('keyword'=>'country', 'description'=>'Saint Lucia'),
            array('keyword'=>'country', 'description'=>'Saint Vincent and the Grenadines'),
            array('keyword'=>'country', 'description'=>'Samoa'),
            array('keyword'=>'country', 'description'=>'San Marino'),
            array('keyword'=>'country', 'description'=>'Sao Tome and Principe'),
            array('keyword'=>'country', 'description'=>'Saudi Arabia'),
            array('keyword'=>'country', 'description'=>'Senegal'),
            array('keyword'=>'country', 'description'=>'Serbia'),
            array('keyword'=>'country', 'description'=>'Seychelles'),
            array('keyword'=>'country', 'description'=>'Sierra Leone'),
            array('keyword'=>'country', 'description'=>'Singapore'),
            array('keyword'=>'country', 'description'=>'Sint Maarten'),
            array('keyword'=>'country', 'description'=>'Slovakia'),
            array('keyword'=>'country', 'description'=>'Slovenia'),
            array('keyword'=>'country', 'description'=>'Solomon Islands'),
            array('keyword'=>'country', 'description'=>'Somalia'),
            array('keyword'=>'country', 'description'=>'South Africa'),
            array('keyword'=>'country', 'description'=>'South Korea'),
            array('keyword'=>'country', 'description'=>'South Sudan'),
            array('keyword'=>'country', 'description'=>'Spain'),
            array('keyword'=>'country', 'description'=>'Sri Lanka'),
            array('keyword'=>'country', 'description'=>'Sudan'),
            array('keyword'=>'country', 'description'=>'Suriname'),
            array('keyword'=>'country', 'description'=>'Swaziland '),
            array('keyword'=>'country', 'description'=>'Sweden'),
            array('keyword'=>'country', 'description'=>'Switzerland'),
            array('keyword'=>'country', 'description'=>'Syria'),
            array('keyword'=>'country', 'description'=>'Taiwan'),
            array('keyword'=>'country', 'description'=>'Tajikistan'),
            array('keyword'=>'country', 'description'=>'Tanzania'),
            array('keyword'=>'country', 'description'=>'Thailand'),
            array('keyword'=>'country', 'description'=>'Timor-Leste'),
            array('keyword'=>'country', 'description'=>'Togo'),
            array('keyword'=>'country', 'description'=>'Tonga'),
            array('keyword'=>'country', 'description'=>'Trinidad and Tobago'),
            array('keyword'=>'country', 'description'=>'Tunisia'),
            array('keyword'=>'country', 'description'=>'Turkey'),
            array('keyword'=>'country', 'description'=>'Turkmenistan'),
            array('keyword'=>'country', 'description'=>'Tuvalu'),
            array('keyword'=>'country', 'description'=>'Uganda'),
            array('keyword'=>'country', 'description'=>'Ukraine'),
            array('keyword'=>'country', 'description'=>'United Arab Emirates'),
            array('keyword'=>'country', 'description'=>'United Kingdom'),
            array('keyword'=>'country', 'description'=>'Uruguay'),
            array('keyword'=>'country', 'description'=>'Uzbekistan'),
            array('keyword'=>'country', 'description'=>'Vanuatu'),
            array('keyword'=>'country', 'description'=>'Venezuela'),
            array('keyword'=>'country', 'description'=>'Vietnam'),
            array('keyword'=>'country', 'description'=>'Yemen'),
            array('keyword'=>'country', 'description'=>'Zambia'),
            array('keyword'=>'country', 'description'=>'Zimbabwe'),
        );
  
        Lookup::insert($data);	
	}

}