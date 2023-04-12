<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConfigurationSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(TeamMemberTableSeeder::class);
        $this->call(CandidateTableSeeder::class);
        $this->call(CandidateSkillTableSeeder::class);
        $this->call(CandidateContactTableSeeder::class);
        $this->call(InterviewTableSeeder::class);
        $this->call(InterviewerTableSeeder::class);
        $this->call(InterviewerCommentTableSeeder::class);
    }
}
