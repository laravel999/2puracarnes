<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiopollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiopollos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('thirds_id')->nullable();
            $table->foreign('thirds_id')->references('id')->on('thirds');

            $table->unsignedBigInteger('plantasacrificio_id')->nullable();
            $table->foreign('plantasacrificio_id')->references('id')->on('sacrificiopollos');
            
            $table->bigInteger('cantidad')->nullable(); 
            
            $table->date('fecha_beneficio');

            $table->string('factura');

            $table->unsignedBigInteger('clientpieles_id')->nullable();
            $table->foreign('clientpieles_id')->references('id')->on('thirds');

            $table->unsignedBigInteger('clientvisceras_id')->nullable();
            $table->foreign('clientvisceras_id')->references('id')->on('thirds');
                      
            $table->string('lote');
            
            $table->boolean('status')->parent_select()->default(true)->nullable();            
         

      
            $table->decimal('sacrificio', 18, 0)->nullable();

            $table->decimal('fomento', 18, 0)->nullable();

            $table->decimal('deguello', 18, 0)->nullable();

            $table->decimal('bascula', 18, 0)->nullable();

            $table->decimal('transporte', 18, 0)->nullable();        
                                        
                             

            $table->decimal('pesopie1', 18, 2)->nullable();
            
            $table->decimal('pesopie2', 18, 2)->nullable();

            $table->decimal('pesopie3', 18, 2)->nullable();

          

            $table->decimal('costoanimal1', 18, 0)->nullable();

            $table->decimal('costoanimal2', 18, 0)->nullable();
            
            $table->decimal('costoanimal3', 18, 0)->nullable();    
                    
           

            $table->decimal('canalfria', 18, 2)->nullable();           

            $table->bigInteger('menudenciaskg')->nullable();

            $table->decimal('menudenciascosto', 18, 0)->nullable();
            
            $table->decimal('visceras', 18, 2)->nullable();

            
            # Totales

            $table->decimal('costopie1', 18, 0)->nullable();

            $table->decimal('costopie2', 18, 0)->nullable();

            $table->decimal('costopie3', 18, 0)->nullable();
            
             

            $table->decimal('tsacrificio', 18, 0)->nullable(); 

            $table->decimal('tfomento', 18, 0)->nullable();
            
            $table->decimal('tdeguello', 18, 0)->nullable();

            $table->decimal('tbascula', 18, 0)->nullable();

            $table->decimal('ttransporte', 18, 0)->nullable();

            $table->decimal('tmenudencias', 18, 0)->nullable();

            $table->decimal('tvisceras', 18, 0)->nullable();

            $table->decimal('tcanalfria', 18, 0)->nullable();     
                   
            $table->decimal('valorfactura', 18, 0)->nullable();  

            $table->decimal('costokilo', 18, 0)->nullable();

            $table->decimal('costo', 18, 0)->nullable();

            $table->decimal('totalcostos', 18, 0)->nullable();


            # Rendimiento   
            
            
            $table->decimal('pesopie', 18, 2)->nullable(); 

            $table->decimal('rtcanalcaliente', 18, 2)->nullable(); 

            $table->decimal('rtcanalplanta', 18, 2)->nullable();

            $table->decimal('rtcanalfria', 18, 2)->nullable();             

            $table->decimal('rendcaliente', 18, 2)->nullable();       

            $table->decimal('rendplanta', 18, 2)->nullable(); 

            $table->decimal('rendfrio', 18, 2)->nullable();       

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiopollos');
    }
}
