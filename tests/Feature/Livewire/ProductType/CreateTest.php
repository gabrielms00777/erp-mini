<?php

namespace Tests\Feature\Livewire\ProductType;

use App\Livewire\ProductType\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Create::class)
            ->assertStatus(200);
    }
}
