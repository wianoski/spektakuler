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
        $this->call('HrDosenSeeder');
        $this->call('HrFakultasSeeder');
        $this->call('AsramaGedungSeeder');
        $this->call('PpmEventsSeeder');
        $this->call('PpmPapersSeeder');
        $this->call('PpmSubwritersSeeder');
        $this->call('PpmStaffsSeeder');
        $this->call('PpmEvaluatorsSeeder');
        $this->call('PpmReviewsSeeder');
    }
}
