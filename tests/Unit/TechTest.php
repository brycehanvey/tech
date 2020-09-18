Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore

@brycehanvey
Please verify your email address to access all of GitHub’s features.
An email containing verification instructions was sent to brycehanvey@gmail.com.
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


hsali
/
laravel-tdd-example
1
10
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
laravel-tdd-example/tests/Unit/StudentTest.php /
@hsali
hsali list students unit test and initial setup.
Latest commit 80529a9 on Dec 8, 2018
History
1 contributor
29 lines (24 sloc)  686 Bytes

<?php

namespace Tests\Unit;

use App\User;
use App\UserRepository;
use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_can_list_techs()
    {
        factory(\App\User::class,5)->create();

        $userRepo = new UserRepository(new User);
        $foundUsers = $userRepo->listUsers();

        $this->assertInstanceOf(Collection::class, $foundUsers);
        $this->assertCount(5, $foundUsers->all());
    }
}
