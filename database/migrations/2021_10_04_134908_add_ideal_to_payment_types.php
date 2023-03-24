<?php

use App\Models\GatewayType;
use App\Models\PaymentType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_types', function (Blueprint $table) {
            $type = new PaymentType();

            $type->id = 37;
            $type->name = 'iDEAL';
            $type->gateway_type_id = GatewayType::IDEAL;

            $type->save();
        });
    }
};
