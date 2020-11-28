<?php

use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->truncate();
        DB::table('works')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'name' => 'ダイヤモンドヘッド株式会社',
                'date_from' => '2008-04-01',
                'date_to' => '2009-12-31',
                'job_type' => '正社員',
                'description' => '新卒として入社、新規立ち上げのメディア事業の開発に従事'
            ],
            [
                'name' => 'ルーセント・グローバル株式会社',
                'date_from' => '2010-02-01',
                'date_to' => '2010-06-30',
                'job_type' => '正社員',
                'description' => 'ECサイトの運営に従事後、ビープラッツ株式会社に出向'
            ],
            [
                'name' => 'ビープラッツ株式会社',
                'date_from' => '2010-07-01',
                'date_to' => '2012-02-29',
                'job_type' => '正社員',
                'description' => 'ルーセント・グローバル株式会社経由の出向より正社員登用、海外向けECサイトやライセンス管理システムの開発に従事'
            ],
            [
                'name' => '株式会社イクシス',
                'date_from' => '2012-03-01',
                'date_to' => '2015-06-30',
                'job_type' => '正社員',
                'description' => 'アフィリエイトサイトの他、自社運営の電子書籍配信サイトの開発に従事'
            ],
            [
                'name' => 'メディアインデックス株式会社',
                'date_from' => '2015-07-01',
                'date_to' => '2018-05-31',
                'job_type' => '正社員',
                'description' => '自社運営のメディアプラットフォームサイトの開発、運営に従事'
            ],
            [
                'name' => '株式会社エニセンス',
                'date_from' => '2018-06-01',
                'date_to' => '2018-10-30',
                'job_type' => '正社員',
                'description' => 'シェアリングエコノミーサイトの初期開発に従事'
            ],
            [
                'name' => 'Classi株式会社',
                'date_from' => '2018-11-01',
                'date_to' => '2020-09-30',
                'job_type' => '業務委託',
                'description' => '学校教育向けクラウドサービスの開発に従事'
            ],
            [
                'name' => '株式会社カオナビ',
                'date_from' => '2020-10-01',
                'date_to' => null,
                'job_type' => '業務委託',
                'description' => '人事開発システムの開発に従事'
            ],
            [
                'name' => '筑波大学',
                'date_from' => '2019-09-01',
                'date_to' => null,
                'job_type' => '受託開発',
                'description' => '大学の研究室のシミュレーション開発に従事'
            ],
        ];
    }
}
