<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GesbankSeeders::class);
        $this->call(RolesSeeders::class);
        $this->call(UsersSeeders::class);
        $this->call(ClientesSeeder::class);
        $this->call(CuentasSeeder::class);
        $this->call(MovimientosSeeder::class);
    }
}
