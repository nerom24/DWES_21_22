<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class GesbankSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        DB::table('role_user')->truncate();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();

        DB::table('clientes')->truncate();
        DB::table('cuentas')->truncate();
        DB::table('movimientos')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');



    }
}
