<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('saltname');#称呼
            $table->tinyInteger('sex'); #性别
            $table->string('post');#职位
            $table->string('email');#邮箱
            $table->integer('com_id')->unsigned();#公司ID，外键；
            $table->foreign('com_id')->references('id')->on('companies')->onDelete('cascade'); #定义外键,并在公司删除时，自动删除联系人；
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
        Schema::dropIfExists('contacts');
    }
}
