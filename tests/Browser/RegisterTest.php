<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
           $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertSee('Register')
                    ->type('name','neha')
                    ->type('email','neha@gmail.com')
                    ->type('password','neha1234')
                    ->type('password_confirmation','neha1234')
                    ->press('Register')
                    ->assertPathIs('/home');


        });
    }
}
