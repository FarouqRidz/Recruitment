<?php

namespace Database\Seeders;

use App\Models\CtCompany;
use App\Models\CtDepartment;
use App\Models\CtDivision;
use App\Models\CtStatus;
use App\Models\CtItem;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'Administrator',
            'description' => 'A user who can manage users and access Admin panel.'
        ]);

        $company = CtCompany::create([
            'code' => 'PNMSSB',
            'name' => 'Puncak Niaga Management Services Sdn. Bhd.',
        ]);

        $division = CtDivision::create([
            'code' => 'HRAD',
            'name' => 'Human Resource & Administration Division',
            'company_id' => $company->id,
        ]);

        $department = CtDepartment::create([
            'code' => 'HRM',
            'name' => 'Human Resource Management',
            'division_id' => $division->id,
        ]);

        $adminUser = User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@fnb.com',
            'password' => Hash::make('admin123'),
            'department_id' => $department->id,
        ]);

        $adminUser->assignRole($adminRole);

        CtStatus::create([
            'code' => 'KIV',
            'name' => 'Keep In View'
        ]);

        CtStatus::create([
            'code' => 'REJ',
            'name' => 'Reject'
        ]);

        CtItem::create([
            'name' => 'Appearence',
            'description_low' => 'Untidy<br>Faulty Grooming',
            'description_medium' => 'Generally Neat<br>Well groomed',
            'description_high' => 'Meticulous in dressing',
        ]);

        CtItem::create([
            'name' => 'Academic / Professional qualifications',
            'description_low' => 'Slightly under qualified',
            'description_medium' => 'Qualified for the job',
            'description_high' => 'Very suitable for the job',
        ]);

        CtItem::create([
            'name' => 'Relevant work experience',
            'description_low' => 'Appears to have some knowledge & skills that could be useful to this type of job',
            'description_medium' => 'Has knowledge & skills that could be useful to this type of job',
            'description_high' => 'Well qualified in terms of knowledge & skills',
        ]);

        CtItem::create([
            'name' => 'Employment pattern',
            'description_low' => 'Shows a slightly erratic pattern',
            'description_medium' => 'Shows a stable & logical pattern',
            'description_high' => 'Shows an exceptional positive pattern',
        ]);

        CtItem::create([
            'name' => 'Job goals',
            'description_low' => 'Might be somewhat dissatisfied in this type of work',
            'description_medium' => 'Should be generously satisfied with this type of work',
            'description_high' => 'Would be very satisfied performing this type of work',
        ]);

        CtItem::create([
            'name' => 'Achievement pattern',
            'description_low' => 'Shows slight evidence of determination & accomplishment',
            'description_medium' => 'Shows determination & accomplishment in a number of ways',
            'description_high' => 'Seems to be highly determined individual who has accomplished many things',
        ]);

        CtItem::create([
            'name' => 'Initiative',
            'description_low' => 'Barely acceptable',
            'description_medium' => 'Favorable/acceptable level of enthusiasm, initiative & interest',
            'description_high' => 'High degree of enthusiasm, initiative & interest',
        ]);

        CtItem::create([
            'name' => 'Leadership',
            'description_low' => 'No leadership skills',
            'description_medium' => 'Moderate leadership skills',
            'description_high' => 'Very good leadership skills',
        ]);

        CtItem::create([
            'name' => 'Communication skills',
            'description_low' => 'Has poor communication skills',
            'description_medium' => 'Has good communication skills',
            'description_high' => 'Communicates exceptionally well',
        ]);

        CtItem::create([
            'name' => 'Work as a team',
            'description_low' => 'Seems to be self-centered and individualistic',
            'description_medium' => 'Seems to be able to work as a team',
            'description_high' => 'Seems to be very good team player',
        ]);

        CtItem::create([
            'name' => 'Safety Awareness',
            'description_low' => 'Poor Understanding',
            'description_medium' => 'Understand and able to practice',
            'description_high' => 'Excellent knowledge and able to guide team member',
        ]);


    }
}
