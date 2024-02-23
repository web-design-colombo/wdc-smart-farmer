// database/migrations/create_vegetables_table.php

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVegetablesTable extends Migration
{
    public function up()
    {
        Schema::create('vegetables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('spacing');
            $table->integer('depth');
            $table->decimal('cost_per_plant', 8, 2);
            $table->decimal('fertilizer_cost', 8, 2);
            $table->timestamps();
            $table->decimal('current_market_price', 8, 2)->nullable();
            $table->decimal('harvest_sale_price_per_kg', 8, 2)->nullable();
            $table->decimal('expected_yield_per_plant', 8, 2)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('vegetables');
        
    }
}
