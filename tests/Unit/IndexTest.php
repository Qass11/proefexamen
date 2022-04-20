<?php

namespace Tests\Unit;


use App\Models\Docent;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function database_has_docent()
    {

        $this->assertDatabaseHas('docent',[
            'email' => 'Qassim9@gmail.com'
        ]);
    }
}
