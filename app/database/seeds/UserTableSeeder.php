<?php

class UserTableSeeder extends Seeder {
	public function run () {
		//Delete User Specific tables
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		DB::table('user')						->delete();
		DB::table('userActivationCode')			->delete();
		DB::table('userPermission')				->delete();
		DB::table('userPermissionGroup')		->delete();
		DB::table('user_userPermissionGroup')	->delete();
		DB::table('permission_permissionGroup') ->delete();
		
		DB::table('employee')					->delete();
		DB::table('employeeExpiration')			->delete();
		DB::table('employeeTitle')				->delete();
		DB::table('employee_employeeTitle')		->delete();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');

		//** Users **//
		
		// 1: Add root
		User::create(array(
			'username' => 'superadmin',
			'password' => Hash::make ('qwerty'),
			'email' => 'root@admin.com',
			'first_name' => 'Root',
			'last_name' => 'Admin'
		));
		// 2: Add Julius Ceasar
		User::create(array(
			'username' => 'caesar',
			'email' => 'julius.caesar@republic.gov',
			'password' => Hash::make ('qwerty'),
			'first_name' => 'Julius',
			'last_name' => 'Caesar'
		));
		// 3: Add Marcus Crassus
		User::create(array(
			'username' => 'crassus',
			'email' => 'marcus.crassus@crassus.com',
			'password' => Hash::make ('qwerty'),
			'first_name' => 'Marcus',
			'last_name' => 'Crassus'
		));		
		// 4: Add Pompeius magnus
		User::create(array(
			'username' => 'pompey',
			'email' => 'pompeius.magnus@spqr.mil',
			'password' => Hash::make ('qwerty'),
			'first_name' => 'Pompeius',
			'last_name' => 'Magnus'
		));
		
		$superadmin_id 	= User::where('username', 'superadmin')->firstOrFail()->id;
		$caesar_id 		= User::where('username', 'caesar')->firstOrFail()->id;
		$crassus_id 	= User::where('username', 'crassus')->firstOrFail()->id;
		$pompey_id 		= User::where('username', 'pompey')->firstOrFail()->id;
		
		//** Employees **//
		// 1: Add root
		$superadmin_employee = Employee::create(array(
			'account_id' => $superadmin_id,
			'locked' => 0
		));
		// 2: Add Julius Ceasar
		$caesar_employee = Employee::create(array(
			'account_id' => $caesar_id,
			'locked' => 0
		));
		// 3: Add Marcus Crassus
		$crassus_employee = Employee::create(array(
			'account_id' => $crassus_id,
			'locked' => 0
		));		
		// 4: Add Pompeius magnus
		$pompey_employee = Employee::create(array(
			'account_id' => $pompey_id,
			'locked' => 0
		));
		
		//** Create Employee Title **//
		$triumvir_title = EmployeeTitle::create(array(
			'name' => 'triumvir'	
		));
		
		//** Create Employee Expiration **//
		EmployeeExpiration::create(array(
			'employee_id' => $caesar_employee->id,
			'expires_at' => '03-15-2017'
		));
		
		//** Activation Codes ##//
		// TODO: Add Activation Code Info
		
		//** UserPermissions **//
		
		// 1: Add QC
		$QC = UserPermission::create(array(
			'name' => 'QC'	
		));		
		// 2: Add Admin
		$admin = UserPermission::create(array(
			'name' => 'Admin'	
		));
		
		//** UserPermissionGroups **//
		
		// 1: Add All_the_permissions
		$all_the_permissions = UserPermissionGroup::create(array(
			'name' => 'all_the_permissions'	
		));
		
		//** Bridge Tables **//				
		
		DB::table('permission_permissionGroup')->insert(array(
			array('permission_id' => $QC->id, 		'group_id' => $all_the_permissions->id),
			array('permission_id' => $admin->id, 	'group_id' => $all_the_permissions->id)
		));
		
		DB::table('user_userPermissionGroup')->insert(array(
			array('user_id' => $superadmin_id, 'group_id' => $all_the_permissions->id),
			array('user_id' => $caesar_id, 	'group_id' => $all_the_permissions->id),
			array('user_id' => $crassus_id, 	'group_id' => $all_the_permissions->id),
			array('user_id' => $pompey_id, 	'group_id' => $all_the_permissions->id)
		));
		
		DB::table('employee_employeeTitle')->insert(array(
			array('employee_id' => $caesar_employee->id, 	'title_id' => $triumvir_title->id),
			array('employee_id' => $crassus_employee->id, 	'title_id' => $triumvir_title->id),
			array('employee_id' => $pompey_employee->id, 	'title_id' => $triumvir_title->id)
		));
	}
}