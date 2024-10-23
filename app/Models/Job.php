<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function tag(string $name){    //this function used in my application in pest testing .. attach a tag into the job calling the method
        $tag=Tag::firstOrCreate(['name'=>$name]);
        $this->tags()->attach($tag);

    }
}
