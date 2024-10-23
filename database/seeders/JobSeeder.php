<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags=Tag::factory(3)->create();
        Job::factory(20)->hasattached($tags)->create(new Sequence([
            'featured'=>false,
            'schedule'=>'full time'
        ],[
            'featured'=>true,
            'schedule'=>'part time'
        ]));  //each job will have 3 tags and the sequence to make 10 jobs with the first sequence and this will be used as featured and the other 10 will be not
    }
}
