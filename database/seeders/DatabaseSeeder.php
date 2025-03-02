<?php

namespace Database\Seeders;

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
        
        $this->call(DenominationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MeatcutSeeder::class);
        $this->call(UnitofmeasureSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(Type_identificationSeeder::class);
        $this->call(Type_regimen_ivaSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(AgreementSeeder::class);
        $this->call(ThirdSeeder::class);        
        $this->call(Precio_agreementSeeder::class);
        $this->call(SacrificioSeeder::class);
        $this->call(BeneficioreSeeder::class);
        $this->call(SacrificiocerdoSeeder::class);
        $this->call(SacrificiospolloSeeder::class);
        $this->call(BeneficiocerdoSeeder::class);          
        $this->call(DespostereSeeder::class);

    }
}
