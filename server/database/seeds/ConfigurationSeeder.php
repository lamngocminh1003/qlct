<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Container\BindingResolutionException;
class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configuration')->insert([
            array('del_flag'=>false, 'value'=> 'Đại Học Công Nghệ', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Học viện Công Nghệ Bưu Chính Viễn Thông', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Khoa Học Tự Nhiên', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Bách Khoa', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Công Nghệ Thông Tin', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Sư Phạm Kỹ Thuật', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Tôn Đức Thắng', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học FPT', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Học Viện Kỹ Thuật Quân Sự', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Công Nghiệp', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Học Viện Kỹ Thuật Mật Mã', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Giao Thông Vận Tải', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Nông Lâm', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Khoa Học Xã Hội & Nhân Văn', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Quốc Tế', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Mở', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Sài Gòn', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Ngoại Ngữ Tin Học', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Công Nghiệp Thực Phẩm', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Đại Học Tài Nguyên Môi Trường', 'description'=>'Description about University', 'type'=>'university', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 1, 'description'=>'Admin', 'type'=>'access_level', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 2, 'description'=>'Manager', 'type'=>'access_level', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 3, 'description'=>'Accountant', 'type'=>'access_level', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 4, 'description'=>'Member', 'type'=>'access_level', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Javascript', 'description'=>'Description about Javascript', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Python', 'description'=>'Description about Python', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Java', 'description'=>'Description about Java', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'C/C++', 'description'=>'Description about C/C++', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'PHP', 'description'=>'Description about PHP', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Laravel', 'description'=>'Description about Laravel', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'CakePHP', 'description'=>'Description about CakePHP', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'C#', 'description'=>'Description about C#', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'ASP.NET', 'description'=>'Description about ASP.NET', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Ruby', 'description'=>'Description about Ruby', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Phalcon', 'description'=>'Description about Phalcon', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'CodeIgniter', 'description'=>'Description about CodeIgniter', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Swift', 'description'=>'Description about Swift', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Android', 'description'=>'Description about Android', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Kotlin', 'description'=>'Description about Kotlin', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Go', 'description'=>'Description about Go Lang', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Perl', 'description'=>'Description about Perl', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'HTML', 'description'=>'Description about HTML', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'CSS', 'description'=>'Description about CSS', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'SQLite', 'description'=>'Description about SQLite', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'MySQL', 'description'=>'Description about MySQL', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'MongoDB', 'description'=>'Description about MongoDB', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'PostgreSQL', 'description'=>'Description about PostgreSQL', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Redis', 'description'=>'Description about Redis', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Docker', 'description'=>'Description about Docker', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Git', 'description'=>'Description about Git', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Linux', 'description'=>'Description about Linux', 'type'=>'skill', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Facebook', 'description'=>'Description about Facebook', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Twitter', 'description'=>'Description about Twitter', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Email', 'description'=>'Description about Email', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Phone', 'description'=>'Description about Phone', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Zalo', 'description'=>'Description about Zalo', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Linkedin', 'description'=>'Description about Linkedin', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Skype', 'description'=>'Description about Skype', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Slack', 'description'=>'Description about Slack', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Pinterest', 'description'=>'Description about Pinterest', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'WeChat', 'description'=>'Description about WeChat', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'WhatsApp', 'description'=>'Description about WhatsApp', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Viber', 'description'=>'Description about Viber', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Weibo', 'description'=>'Description about Weibo', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Baidu', 'description'=>'Description about Baidu', 'type'=>'contact', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Project Manager', 'description'=>'Description about PM', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'System Architect', 'description'=>'Description about SA', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'System Administrator', 'description'=>'Description about SA', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Team Leader', 'description'=>'Description about TL', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'BA', 'description'=>'Description about BA', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Technical', 'description'=>'Description about Technical', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Tester', 'description'=>'Description about Tester', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'QA', 'description'=>'Description about QA', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'QC', 'description'=>'Description about QC', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Data Analysis', 'description'=>'Description about DA', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Developer', 'description'=>'Description about Dev', 'type'=>'team_member_role', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'PHP Developer', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'IOS Developer', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Android Developer', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Web Developer', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Fresher PHP', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Marketing', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Accountant', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Project Manager', 'description'=>'Description about PM', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'System Architect', 'description'=>'Description about SA', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'System Administrator', 'description'=>'Description about SA', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'BA', 'description'=>'Description about BA', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Technical', 'description'=>'Description about Technical', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Tester', 'description'=>'Description about Tester', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'QA', 'description'=>'Description about QA', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'QC', 'description'=>'Description about QC', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Data Analysis', 'description'=>'Description about DA', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Junior Python', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'value'=> 'Full Stack Developer', 'description'=>'Description about Dev', 'type'=>'position', 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}
