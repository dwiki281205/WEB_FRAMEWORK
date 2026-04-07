<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::table('students', function (Blueprint $table) {
        // ubah nama kolom 'nama' menjadi 'nama_lengkap'
        $table->renameColumn('nama','nama_lengkap');

        // tambahkan kolom 'email' setelah 'tgl_lahir'
        $table->string('email')->after('tgl_lahir');

        // hapus kolom 'ipk'
        $table->dropColumn('ipk');
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::table('students', function (Blueprint $table) {
        // kembalikan nama kolom 'nama_lengkap' menjadi 'nama'
        $table->renameColumn('nama_lengkap','nama');

        // hapus kolom 'email'
        $table->dropColumn('email');

        // tambahkan kembali kolom 'ipk' dengan tipe decimal(3,2)
        $table->decimal('ipk',3,2)->default(1.00);
    });
}
};