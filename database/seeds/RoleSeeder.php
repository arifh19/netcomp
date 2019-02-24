<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Kategori;
use App\Verify;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $reviewerRole = new Role();
        $reviewerRole->name = "reviewer";
        $reviewerRole->display_name = "Reviewer";
        $reviewerRole->save();

        // Create Member role
        $pesertaRole = new Role();
        $pesertaRole->name = "peserta";
        $pesertaRole->display_name = "Peserta";
        $pesertaRole->save();

        $kategori1 = new Kategori();
        $kategori1->nama = "Innovative Idea";
        $kategori1->save();

        $kategori2 = new Kategori();
        $kategori2->nama = "Networking";
        $kategori2->save();

        $verif = new Verify();
        $verif->keterangan = "Belum Terverifikasi";
        $verif->save();

        $verif1 = new Verify();
        $verif1->keterangan = "Sudah Terverifikasi";
        $verif1->save();

    }
}
