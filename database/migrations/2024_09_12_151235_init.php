<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('forename');
            $table->string('surname');
            $table->string('apartment');
            $table->string('number');
            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->string('postcode');
            $table->timestamps();
        });

        Schema::create('address_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('address_id');
            $table->timestamps();
        });

        Schema::create('brand', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('logo_svg')->nullable();
            $table->timestamps();
        });

        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_lock', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });

        Schema::create('card', function (Blueprint $table) {
            $table->id();
            $table->string('card_holder');
            $table->string('card_number');
            $table->string('expiration');
            $table->string('cvv');
            $table->enum('type', ['AmEx', 'Cirrus', 'Discover', 'JCB', 'MasterCard', 'Maestro', 'RuPay', 'UnionPay', 'Verve', 'VISA']);
            $table->timestamps();
        });

        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('value');
            $table->timestamps();
        });

        Schema::create('cart_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id');
            $table->foreignId('product_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();
        });

        Schema::create('failed_job', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('favourites_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('favourites_id');
            $table->foreignId('product_id');
            $table->timestamps();
        });

        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('payment_method_id');
            $table->timestampTz('date');
            $table->enum('currency', ['AED', 'AUD', 'CAD', 'CHF', 'CNY', 'DKK', 'EUR', 'GBP', 'HKD', 'ILS', 'INR', 'JOD', 'JPY', 'KRW', 'KWD', 'MXN', 'NOK', 'NZD', 'OMR', 'PLN', 'QAR', 'SAR', 'SEK', 'TRY', 'TWD', 'USD', 'ZAR']);
            $table->timestamps();
        });

        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('product_id');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::create('order_promotion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('promotion_id');
            $table->timestamps();
        });

        Schema::create('password_reset_token', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('payment_method', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('card_id');
            $table->foreignId('paypal_account_id');
            $table->timestamps();
        });

        Schema::create('paypal_account', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_method_id');
            $table->timestamps();
        });

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->enum('volume', ['30ml', '40ml', '50ml', '60ml', '70ml', '75ml', '80ml', '90ml', '100ml', '118ml', '120ml', '125ml', '150ml', '160ml', '180ml', '200ml', '250ml', '500ml']);
            $table->string('size')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->boolean('availability'); // IF `quantity=0` THEN `availability=false`
            $table->foreignId('product_images_id');
            $table->foreignId('product_group_id');
            $table->foreignId('product_line_id');
            $table->timestamps();
        });

        Schema::create('product_group', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('brand_id');
            $table->foreignId('product_line_id');
            $table->enum('concentration', ['Eau Fraîche', 'Eau de Cologne', 'Eau de Toilette', 'Eau de Parfum', 'Parfum'])->nullable();
            $table->text('description')->default('Product description coming soon!');
            $table->enum('category', ['Aftershave Lotion', 'Body Spray', 'Body Wash', 'Diffuser', 'Fragrance', 'Giftset', 'Handsoap', 'Handwash', 'Scented Candle']);
            $table->integer('release_year')->nullable();
            $table->enum('gender', ['Men', 'Unisex', 'Women']);
            $table->integer('quantity')->nullable(); // Only a `product_group` of `category=Giftset`, utilises the `quantity` column.
            $table->boolean('availability'); // IF `quantity=0` THEN `availability=false`
            $table->string('thumbnail_image');
            $table->timestamps();
        });

        Schema::create('product_image', function (Blueprint $table) {
            $table->id();
            $table->string('image_main');
            $table->string('image_box')->nullable();
            $table->string('image_pres')->nullable();
            $table->string('image_ad_main')->nullable();
            $table->string('image_ad_notes')->nullable();
            $table->string('image_ad_line')->nullable();
            $table->timestamps();
        });

        Schema::create('product_line', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('promotion_id');
            $table->string('thumbnail_image');
            $table->timestamps();
        });

        Schema::create('product_promotion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('promotion', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['Coupon', 'Sale']);
            $table->string('title');
            $table->integer('discount');
            $table->timestamp('valid_from');
            $table->timestamp('valid_till');
            $table->boolean('active');
            $table->string('activation_code');
            $table->timestamps();
        });

        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_group_id');
            $table->timestamp('date');
            $table->string('content');
            $table->integer('rating');
            $table->timestamps();
        });

        Schema::create('session', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->string('username');
            $table->enum('role', ['GUEST', 'STANDARD', 'ADMIN'])->default('GUEST');
            $table->boolean('registered')->default(false);
            $table->timestamp('registration_date')->nullable();
            $table->boolean('subscribed')->default(false);
            $table->timestampTz('last_visited')->default(now());
            $table->integer('visits')->default(1);
            $table->timestamps();
        });

        Schema::create('viewed_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_group_id');
            $table->timestamp('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
        Schema::dropIfExists('address_user');
        Schema::dropIfExists('brand');
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_lock');
        Schema::dropIfExists('card');
        Schema::dropIfExists('cart');
        Schema::dropIfExists('cart_product');
        Schema::dropIfExists('failed_job');
        Schema::dropIfExists('favourites');
        Schema::dropIfExists('favourites_product');
        Schema::dropIfExists('job');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('order_promotion');
        Schema::dropIfExists('password_reset_token');
        Schema::dropIfExists('payment_method');
        Schema::dropIfExists('paypal_account');
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_group');
        Schema::dropIfExists('product_image');
        Schema::dropIfExists('product_line');
        Schema::dropIfExists('product_promotion');
        Schema::dropIfExists('promotion');
        Schema::dropIfExists('review');
        Schema::dropIfExists('session');
        Schema::dropIfExists('user');
        Schema::dropIfExists('viewed_products');
    }
};
