<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class AddFieldsToPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table-> string("descrizione_pacchetto", 255);
            $table-> integer("prezzo_agenzia")->comment("il prezzo è obbligatorio");
            $table-> date("partenza")->nullable();
            $table-> date("ritorno")->nullable();
            $table-> integer("sconto")->nullable();
            $table-> integer("durata_viaggio")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table-> dropColumn("descrizione_pacchetto");
            $table-> dropColumn("prezzo_agenzia");
            $table-> dropColumn("partenza");
            $table-> dropColumn("ritorno");
            $table-> dropColumn("sconto");
            $table-> dropColumn("durata_viaggio");
        });
    }
}
