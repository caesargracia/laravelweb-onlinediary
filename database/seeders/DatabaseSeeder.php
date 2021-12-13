<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Caesar Gracia',
            'email'=> 'caesargracia22@gmail.com',
            'password' => bcrypt('12345678') 
        ]);
        User::create([
            'name' => 'Fiony Alveria',
            'email'=> 'fionyalveria@gmail.com',
            'password' => bcrypt('12345678') 
        ]);

        User::create([
            'name' => 'Andrew Lowell',
            'email'=> 'andrewlowell@gmail.com',
            'password' => bcrypt('12345678') 
        ]);

        User::create([
            'name' => 'Emma Watson',
            'email'=> 'emmawatson@gmail.com',
            'password' => bcrypt('12345678') 
        ]);

        Category::create([
            'name' => 'Programming',
            'slug'=> 'programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug'=> 'personal',
        ]);

        Category::create([
            'name' => 'Sports',
            'slug'=> 'sports',
        ]);

        Post::create([
            'title' => 'Web for Dummies',
            'slug' => 'web-for-dummies',
            'excerpt' => 'Programming is the process of creating a set of instructions that tell a computer how to perform a task. Programming can be done using a variety of computer programming languages, such as JavaScript, Python, and C++ Programming involves tasks such as analysis, generating',
            'body' => 'Programming is the process of creating a set of instructions that tell a computer how to perform a task. Programming can be done using a variety of computer programming languages, such as JavaScript, Python, and C++ Programming involves tasks such as analysis, generating algorithms, profiling algorithms accuracy and resource consumption, and the implementation of algorithms in a chosen programming language (commonly referred to as coding). The source code of a program is written in one or more languages that are intelligible to programmers, rather than machine code, which is directly executed by the central processing unit. The purpose of programming is to find a sequence of instructions that will automate the performance of a task (which can be as complex as an operating system) on a computer, often for solving a given problem. Proficient programming thus usually requires expertise in several different subjects, including knowledge of the application domain, specialized algorithms, and formal logic.',
            'category_id' =>1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'My Trip to Maldives',
            'slug' => 'my-trip-to-maldives',
            'excerpt' => 'Every year I make it my goal to travel to an exotic location and completely disconnect to fully reconnect with myself by immersing with the culture and further expanding my mind. In 2016 I picked the beautiful',
            'body' => 'Every year I make it my goal to travel to an exotic location and completely disconnect to fully reconnect with myself by immersing with the culture and further expanding my mind. In 2016 I picked the beautiful Maldive Islands to visit. I have been thinking about going to Maldives since 2012 and even talked about it on my social media several times as my dream destination. In August 2016 the trip manifested into my reality and the experience truly changed my life. Here are several of my posts speaking my experience into existence. Mind you, when I said I wanted to be there, it wasn’t a priority for me since I was traveling to other places across the world. The idea of going to Maldives was more of a “one day” talk. However, it was on my mental radar, which is so crucial when you want to have an experience manifest into your reality. My vibration was aligned with the belief that I will be there soon, so it manifested in due time with absolute ease. I can truly say that I have experienced my thoughts become my reality so many times, but I’ll leave the details of that for another post. ',
            'category_id' =>2,
            'user_id' =>2
        ]);

        Post::create([
            'title' => 'My Basketball Journey',
            'slug' => 'my-basketball-journey',
            'excerpt' => 'There have been several events that have affected my life. theres times that life will hit you hard that will make you fall over but you will need to get back up and continue what you started. This is',
            'body' => 'There have been several events that have affected my life. theres times that life will hit you hard that will make you fall over but you will need to get back up and continue what you started. This is how i viewed myself with my ambitious journey of basketball. I was around seven years old when I was bored at home and I turned on the TV and was skipping through the channels and I wanted to see what I was going to be able to watch. I stopped at the sports channel for whatever reason and I remember that it was a Spurs game in the NBA (National Basketball Association). I was in shock seeing people jump all around being able to run from the court coast to coast being chased down by others trying to get the ball through the basket. I saw this particular player at the time on the opposing team Ray Allen from the Boston Celtics. This man had such a dominant presence on the court just getting the ball and being able to shoot the ball in any given time in whatever position he was in either it was going to be contested or open he gets the ball its an automatic scoring machine. This got me very fascinated and i began to start watching basketball since that day.',
            'category_id' =>3,
            'user_id' =>3
        ]);

        Post::create([
            'title' => 'My University Life',
            'slug' => 'my-university-life',
            'excerpt' => 'I first became a student at Leeds Beckett when I was 18 years old (2011), studying Childhood Studies on Headingley campus. This was one of the best things I have ever done, meeting new',
            'body' => 'I first became a student at Leeds Beckett when I was 18 years old (2011), studying Childhood Studies on Headingley campus. This was one of the best things I have ever done, meeting new friends, making memories and getting my degree was a huge achievement, my graduation day in 2014 was one of my happiest ever! This is why, when I decided to have a career change and become a Speech and Language Therapist (SLT), I knew I wanted to come back to Leeds Beckett! This course is on city campus, and Leeds is such a wonderful city, which has loads to do, and is really easy to find your way around. I was excited to live in the city centre, and meet lots of new people on my course.',
            'category_id' =>2,
            'user_id' =>4
        ]);

    }
}
