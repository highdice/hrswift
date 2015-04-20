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
                'keyword'       => 'activation_status', 
                'description'   => 'Activated',           
            ),
            array(
                'keyword'       => 'activation_status', 
                'description'   => 'Deactivated',                
            )
        );
  
        DB::table('lookup')->insert($data);	
	}

}