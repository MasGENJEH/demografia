<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RealDataSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        
        $kartuKeluargaData = [];
        $pendudukData = [];
        
        $families = [
    [
        {
            "nama_lengkap": "TUJO PRAMONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1987-04-04",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SITI FATHONAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-04-29",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "FAIQ FATHUL KHOLIQ",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-10-12",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NADHIFA HASNA HANIFAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-05-02",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "OMAN ABDUL ROHMAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-07-12",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "TARSINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-02-15",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AALIFA CHANA DZENITA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2021-11-02",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RIAN NURDIANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2006-09-06",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MUH NURSHOLIKIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1977-04-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUBIROH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1976-03-11",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AFFIAH HANIN MUFIDAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-02-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "KAYLA NAFISA NURFAIZAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2007-12-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "HAMMAM ABDURRAHMAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2015-06-15",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "EDYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1976-10-09",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ELISNAWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-08-13",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NABILA LISDI KIRANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-05-06",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NADIRA KIRANA PUTRI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2022-09-30",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "BUDI SETIAWAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-05-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DESI ARISANDI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1984-12-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "IZAZ JAVIER SATYA PUTRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2012-09-21",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KEANE ABIGAIL SATYA PUTRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2015-04-24",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ATHA AULIAN SATYA PUTRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-07-08",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "DIDIK PURYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1983-01-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "WIDARMI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1994-04-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ARFAN SA DAN HAFIDZDOHULLAH R",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2009-09-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AFINA QONITA ALHAFIDZ R",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-07-04",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ALTHAF MUHAMMAD ARIFIN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-09-28",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SOBI\u0397\u0399\u039d",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1986-04-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ROAMININ",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1987-04-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ZALFA ALIA OKTAVIANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2007-10-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RAIZA ADYA AZZAHRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-06-13",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "IBRAHIM ZULFADLI ARRAAFF",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-06-25",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "DEDE TURSINO RESMANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1989-02-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "JOHAR SANGADAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1988-12-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KENZIE ATHA ALBARI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2013-09-24",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RYUKI AHZA TAAMIR ATAYA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-12-07",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "DIVYARA JENARA KENZA RUBY",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2023-11-25",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MUHAMMAD MAHMURI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1983-04-05",
            "pendidikan_terakhir": "SMK",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RIKA LUSIYANTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1984-06-13",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "TARMADI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1979-11-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NURHASANAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1989-06-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SYAFA DAFFA KHOSIYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-03-19",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "SYIFA DAFFA KHOSIYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-03-19",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ZHAFIRA NURUL HUSNA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-07-11",
            "pendidikan_terakhir": "PAUD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RIDWAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1965-05-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DYAH BINGARWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1973-03-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ALVIRA NURUL FADILAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-03-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "DANIA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1982-04-28",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PEDAGANG"
        },
        {
            "nama_lengkap": "DEDEH NURHAMIDAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-04-18",
            "pendidikan_terakhir": "SDF",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "LAYLA HALILATUL KARIMAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2011-04-10",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUHAMMAD ABDUL BAIS",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-04-05",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUHAMAD AFFAN RAFIK",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-08-11",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ABDUL SHOLICHIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1994-09-20",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ARISA TRISTIANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-02-01",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUH RAFAN SHOLIHIN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-05-10",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AMMAR ZAID SHOLIHIN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-03-17",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SUNARMAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1985-09-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUPRIHATIN",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1986-07-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NAURA RISKY ADISTIA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2011-12-28",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NAFIS SHIDQI WAFI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2008-08-11",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "EKA SUNANDAR",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1983-07-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DWI AYU PRIHANDINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1989-12-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ZULAYKA KHOIRUNNISA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2008-12-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ADELVYIA RANARA MARYAM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2019-04-16",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RINO ALI AKBAR",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-01-22",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PEDAGANG"
        },
        {
            "nama_lengkap": "NINA NOVIANTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-11-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "YASMIN SHIDDIYAH FAIRAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-05-04",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ADAM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2018-10-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ADIBA NAWA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-11-09",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUHAMMAD ALI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2024-10-22",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RAHMAT WAHYUDIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-08-11",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "PIPIT DWI LISMAYANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1988-06-17",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ANDRIAN RAHPIANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2012-06-27",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ALIYENDRA EIJI RAHPIANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2024-05-25",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ARIF DWI SURYONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-07-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SISKA PURWANINGRUM",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1994-10-11",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "MUHAMAT ABDUL AZIZ",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1985-12-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PEDAGANG"
        },
        {
            "nama_lengkap": "NOVITA FAUZIAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1989-01-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MAHIRA GHINA AZZAKYA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-01-20",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RADHIKA AZZAKI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-04-25",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RADITYA SULTON AZZAKI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2018-08-28",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "REINAN AZZAKI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-08-16",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SUTISNA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1982-06-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "MULYA SARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1985-12-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NABILA ELVIANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-04-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NAILA KAMILA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-05-13",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUHAMAD FADLAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-03-12",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "HENDI PRASETYO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1985-03-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SRI WINDASARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1985-10-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RAYSA ALANASALBILA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2011-03-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RAYHAN ADITYA ALFATI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-01-12",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RAFKA ARSHA FATHAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-12-28",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TONY MUJI RIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1981-02-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "MELISA BELINA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-12-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ANYSA AFRELIA NALA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-04-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ANYSHA ABILQISTY PUTRIAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-01-23",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "GILANG PRASETYO S",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1989-06-17",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "JUITA NINGSIH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1990-06-11",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KHAIFA AMEERA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2017-05-07",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "DEVANDRA EIGRAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-03-01",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "WILIS",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1977-04-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "GIYATMI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-02-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AQILA FAIZAH LISQIAZI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2007-06-29",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TEGUH HARTONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1998-04-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "FIRDA FATMA NURUL FALAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2003-03-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "BILQIS AINAYA CEISYA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2023-06-11",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "AGUS JALI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1987-08-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NUR FAUZIAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1989-11-22",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RAISA ANINDYA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-08-13",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "M. AGUS TANTOWI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1990-04-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SRI SETIAWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-08-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NILAM ATWIYATI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-05-16",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUHAMMAD NAAFI NAWAWI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-01-04",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "FIRMAN JAYADI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1982-09-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SETIO NINGRUM SUGIARTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1984-12-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ASSYIFA QOLBI ILMIRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-08-17",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ANNISA NUR KHOTIMAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-08-03",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AISYAH SALMA NUSAYBAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-05-31",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AHMAD BALHAQI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-03-22",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ANAYA ARSYI MAFAAZA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2024-10-15",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "INDA ZUHENDA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-10-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "AI SULASTRI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1991-11-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NATASYA NUR AIDA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-06-21",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUH ARYAN SHABANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-04-29",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "KRISRUH PURWOKO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1986-01-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ELIS SOLIHAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1991-07-04",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KANZIA ADREENA FALISHA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-01-11",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "NUR RIDO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-12-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUSI INTAN SARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-08-27",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RIZKI PRATAMA AL HAFITZ",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2015-12-29",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SUGENG RIYADI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1984-06-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PEDAGANG"
        },
        {
            "nama_lengkap": "NUR ARYANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1988-11-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SYIFA EMBUN SALSABILA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-05-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SUGENG WIJAYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1987-12-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ANGGRAHINI WULANDARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-10-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "XHERDAN SHAQIRI HABIBI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-03-05",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KIRANA AYUNINDYA QANITA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-11-30",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RAHMAT WAHYUDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1989-01-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "YULIA NUR RISTA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-07-13",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "SITI HASANAH",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1965-07-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MOHAMMAD SHOPAND",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-06-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "WULAN AYU MITRASARII",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-08-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "MEGA TRI KLARITA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2000-03-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "IRFAN NURHIDAYAT",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-04-06",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KIKI ELISHA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1991-04-26",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RAFANDRA ADHYASTHA E",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2017-10-16",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ALDIDA HASPRO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-03-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NUNIEK HERI ANGGRAENI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-07-04",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NADZA HASPRO ANINDYA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2017-03-25",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "CAKRA HASPRO DEVAN\u039aA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-10-12",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TUBAGUS ABDUL CHAMID",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1976-07-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NYAI NOSHINTA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1983-11-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "R. TALITHA WADHCHAH C",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2005-04-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "RATU TASYA ZALFA C",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-11-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SIHAR SIRAIT",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1981-07-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SARNITA SARINGO RINGO",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1983-02-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SHELA REVALIN M S",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2013-08-25",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "SACHI MALONA SIRAIT",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2017-09-13",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "AHMAD FAKHRI ABDURROSYID",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1995-06-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DITA INMAS DINIATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-04-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ELZICO PRADIFTA A",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-11-22",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "FIKY ARDIANSYAH ST",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1994-11-29",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RIA SEPTIAN DINI A MD",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1994-09-10",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KHEYRA ZHAFIRA A",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-02-27",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KHENZIO ZHIVARO ARDIANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2025-02-18",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "DWI HARTANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-04-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DESY ANDRIYANI P",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1987-04-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KHALISA ZALFA ELVINA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-04-21",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KHAIRY RAFIF ARSENIO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2018-08-23",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KHANZA AFSHEENA A",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2021-07-26",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SONNY HANGGARA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-02-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "TASMINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1995-03-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "HANANIA FATIMAH H",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2019-10-27",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUHAMMAD ABIDZAR H",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-01-08",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "EKO SUSILO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1982-10-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "TANTI PURNAMASARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1990-10-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RIZKY BARKAH SYAHDANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-04-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "FARREL EZRA ZAIDAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-08-03",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "NUGROHO SUSANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1983-06-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ROHAYATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1983-12-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ALIN ZAHRA DIVA NUGRAHA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2009-07-05",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AFIKA NAYLA NUGRAHA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-09-19",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "YULIAWATI SH",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1983-06-13",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ADITYA YUSUF MALIK",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2012-04-04",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "RISKY ADELIA R",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2024-06-03",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "KESEM",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1960-06-03",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DIAN NOVIANTI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-11-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "ANDRI NURFALAHUDIN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1997-12-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "PUJO WAHONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1985-04-22",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "INDRI HAPSARI APRILIA WIJANAWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1986-04-11",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ZHIAN HAYDAR SHODIQ",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2013-04-17",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NAURA ASTHMA SAUQIA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2019-01-06",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NARENDRA LINGGA JANITRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2023-10-12",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "KOSWARA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1970-12-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "WAWAT",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1975-01-20",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "IQBAL MAULANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1995-09-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "AQMAL FADULAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2003-08-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "MUTIA MAAULANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2009-01-16",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TRIO MULYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1981-06-20",
            "pendidikan_terakhir": "D4",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KUSUMA WIRASWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-07-31",
            "pendidikan_terakhir": "D4",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "YUMNA NARARYA S",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2009-11-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ZELIA YUSRINA H",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-04-25",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SUPRIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1982-10-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "CUCUN CUNAYAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1983-03-04",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ROFID NAYA HIBATULLAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2008-03-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "HASNA FITRIA AL RAHMA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2016-09-06",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "FAAR NUR AHMAD",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-03-24",
            "pendidikan_terakhir": "TK",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "AID AFFANDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1967-10-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DARYATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1967-04-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "PUTRI MUNANDAR",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1991-01-12",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "SITI SINTAWATI MUNANDAR",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2000-05-20",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "BEJO HARTONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1978-02-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RISTI KHASANAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1975-07-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KHARISMA MAYA N",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-05-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "KIARA APRILIA N",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-04-02",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ASEP DADAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-03-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KARTINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1978-03-01",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SAHIRA HALIMATUSS\u039fPIAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2001-08-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "NAJIZA AISYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-10-14",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "HAMIZAN HIDRIANA ZAUHARI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-04-27",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ERWIN SUSANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1981-05-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ROHAYAT",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1987-07-17",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NATHANIA SAFIRAI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-05-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "ERLITA PUTRI YULIANTIO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2011-06-25",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ALFARIZ NAUFAL SUSANTO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-06-23",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUH ALFATHAN SUSANTO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-01-24",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TAUFIQ RIZAL",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1990-09-23",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "MASRIFATUL HASANAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1990-10-17",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUH FIKRI SATYA WIBAWA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-03-18",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUH AZZAM FADILAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-05-02",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "EMERSON PRIYONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1978-04-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "MAESAROH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1978-08-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DELLA ZAHRA AULIA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2004-06-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "HABIBI AMAR AL HABSY",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-03-12",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TONI FEBRIAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1997-11-22",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "AINAYAH EVITA SARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-06-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUH IZZAR AL - GHIFARI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-03-12",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "GHAINA QAIREEN SHANUM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2022-06-24",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MUALIM",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1977-10-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DEWI RATNA SARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1984-11-11",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RIZKI FIRMANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2007-01-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RAHMAT MUKHLISIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-09-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "YENI SETIANA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1990-06-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "EMMET KELLY AL MA'RUF",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2013-03-06",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ANNA ALTHAFUNISA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2017-12-15",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ENDI SUHENDRA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-10-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RUKMINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1975-04-15",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "WIDI CANDRA EKA P",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-07-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "JUJUN AGUNG",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2007-07-01",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ADITYA PRAYATA TRIWARDANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2011-12-27",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "AGUS RUSMANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1951-03-06",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "H ENDAY HIDAYAT SE",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1967-01-01",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "HJ MIMIN AMINAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1968-06-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ROSITA YULIANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1995-07-14",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "YENI SETYANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2001-05-19",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "WARYONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1990-09-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DIAN NITA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1994-05-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "GADIS CITRA CANTIKA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2013-05-27",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RINTO JOKO WASONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-08-29",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RATNA DEWI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1988-07-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MYSA ALMEERAIO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2017-07-30",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SRI SURYANI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1974-08-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RHIDO DWI RAHARJO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-03-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DANANG LUCKY WIBOWO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2005-03-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SINTA RAGIL CAHYANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2009-12-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MOH. KOMARUDIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1990-05-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "CHOMSATUN UMI F",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-05-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "RATIFA HAPSARI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-12-29",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "LASMAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1968-04-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "SRI DARMIYANTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1974-06-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DINDA FADHILAH M.",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2002-05-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "SYIFA AULIA KARIMA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-11-17",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "RADI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-03-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RUTINAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-04-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DIAH PRATIWI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2002-09-29",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "SARTONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1979-06-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "INONG RINATA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1980-11-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AMANDA NASHIRI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-04-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "HANI NURUL JANNAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2008-12-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "YOGI LANTA CAMARA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-11-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DWI MEIRANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-05-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUHAMAD RAFAN ABRISAM AZHAR",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-07-06",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AFNAN FAHIM GAFA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2024-10-12",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SADIRAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1969-03-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SARTINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1969-11-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DEVYANA PUSPASARI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2002-06-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "DARA KUMALA SARII",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2010-06-23",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MILASARI AGUSTIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-08-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "AZKA ALDRIE NURDAFFA PRATAMA A",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2013-11-08",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SUPARTIJO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1968-08-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "SITI KHOTIJAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1972-01-07",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "CLARISA ROUDATUL JANAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2005-01-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "MUHAMIM",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1996-09-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RIYAS VIRATAMA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-02-10",
            "pendidikan_terakhir": "SKTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ELENORA YUKARI ISVARA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2023-02-05",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ELGAR NATA KAMIGUNA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2023-03-28",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "JEPRI ROMADHON",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1999-12-31",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ADELIA FEBRIANIN",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-02-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ABIZAR DAFFA RAMADHAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2023-04-03",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SARYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1970-03-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ETIK SURYANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1970-10-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DZAKIYAH DWI RAHMAVIAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2004-02-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "SUAINI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1967-02-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NANDA FADILAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-07-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "DEPRI DWI ANDELA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1994-01-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "LUSIANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-09-27",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KALEA ESME ANDELA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2024-10-14",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KALUNA ESME ANDELA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2024-10-14",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ACHMAD HUSEIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1962-06-13",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NANI MULYANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1969-03-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "YUSUP SUPRIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1966-04-27",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "YEYET ESYETIANTO",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1972-02-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MELY KHARISMA D",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2002-06-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "EKO SUGENG KUNCORO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1965-12-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NURYATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1967-09-07",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "YOSSI MEILA KUNCORO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-05-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        }
    ],
    [
        {
            "nama_lengkap": "MARSUDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1968-04-29",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "TOYIBAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1966-05-05",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "DADAN PERMANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-04-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RITA WULANSARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1992-03-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUH. OZIL ABDUL AZIS",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-09-29",
            "pendidikan_terakhir": "MAHASISWA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUH EZRA AULIAN BASIR",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2017-10-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUH AZLAN NUR IBRAHIM A",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-12-15",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SURATMAN EFRENDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1993-12-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "EVA HANDAYANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-07-05",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "TUYAH",
            "status_keluarga": "-",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1957-12-31",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "RHAMDHAN FAHLEVI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2001-11-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "AISAH MAHARANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2002-06-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "GHANI YUSUF AMMAR",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-05-18",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "R. ERI SUSANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1965-04-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SRI HARTATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1969-07-30",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ILMI ARINI ZAKIAHI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-08-25",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "INDAH AYU FAJRIYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-05-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "AZIZ RUBIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1998-01-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "WINDA RAMONA TARA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-07-31",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "CEISYA AZZIRA LENDRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2022-06-29",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ENTIS",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1996-11-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RONYANG",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-07-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "HUDORI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1975-10-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "AMBARWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1975-09-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "ADELA PUTRI GITA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-03-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "FARREL PUTRA TRI W. A.",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2007-08-06",
            "pendidikan_terakhir": "SMP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "HENDI OKTARI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1968-10-03",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "IMAS SUPRIATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1971-04-06",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MESSA HENDIANA J.",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-06-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "SUTRISNO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1976-09-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUNARSIH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1975-05-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DIMAS AI PANGESTU",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2009-05-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MUH ANGGA PRAYUDA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-09-20",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "FAJAR MUTIARDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1993-12-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ENOK SITI JAENAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-04-21",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUHAMMAD ABYAN N",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-01-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NABASTALA ATHALLAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-02-22",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "AGUS SUPRIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1987-04-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ADE NURHASANAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1985-10-10",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "FANYA LISTIYAH MAHRANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2024-06-22",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "CACA ENDANG SUPRIYADI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-05-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "LUSI ARDIYANTI MUTOHAROH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1991-05-22",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUH. RIFQI NADIM UKAIL",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2014-05-18",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AQILA FARIZA MUFIA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-01-02",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MIWARDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1965-06-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "MARYATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1971-05-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DIANA YUNI PITASARI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-06-04",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "ANTON TAUFIK HIDAYAT",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2001-06-18",
            "pendidikan_terakhir": "D4",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "SRIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1973-02-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "JAMIYAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1972-11-24",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "YULIA PARAMITHA K M",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-07-11",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "ARIEF ILHAM ABDURROHIM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2004-05-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "AHMAD NUZUL",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1967-12-29",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DEVI IRAWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1974-04-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SHABRINA PUTRI ANDI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2007-01-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "EKO SETIARSO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1963-06-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUMIYEM",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1967-03-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "PUSPITA NINGRUM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-10-10",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "DEDE KURNIA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1993-03-04",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "INDAH SITI FATONAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-12-04",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUHAMAD RAIHAN AL FATIH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-02-10",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ADELIA FARNNISA AZNI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2022-08-12",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "M. SUGIARTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1978-12-25",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "YULIAN",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-06-22",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SAHARANI PUTRI UTAMII",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2008-11-10",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AGHA, AI SYAFI ZYAFIF MUH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2016-08-13",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KATMI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1968-11-04",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "PURNAMA SANDI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-07-17",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "SUKARDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1972-12-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "A YENI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1980-06-09",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AZIS SUKARDI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2006-01-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "AGUNG",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2003-02-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "EKA CAHYATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2003-07-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        }
    ],
    [
        {
            "nama_lengkap": "TEDI ARIFIN SE",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-12-23",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "IKA INDARYANTI S KEP",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1995-04-18",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "JUMIDIN S SOS",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1963-01-01",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "R OVI ROSIDAH NOVIAR",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1965-11-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "AYU WIDIA ROSDIANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1995-04-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        }
    ],
    [
        {
            "nama_lengkap": "PURNOMO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1980-07-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "LIS PURWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1982-02-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "IQBAL ARKHAB GOFUR A.",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2010-06-05",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "GUS ARYA MUHAMMAD",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2022-06-04",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SANTHI YULIAWATI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1974-07-26",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KHESYANDRA CEACILIYANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2009-01-15",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KEVIN NOVALDI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-11-07",
            "pendidikan_terakhir": "-",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "ERICK SISWANTO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2003-05-25",
            "pendidikan_terakhir": "-",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "IMMANUEL BASTIANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2011-10-11",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "TRISNOWATI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1938-04-30",
            "pendidikan_terakhir": "-",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "ENGKOS KOSASIH",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1958-06-22",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "PENSIUNAN"
        },
        {
            "nama_lengkap": "CUCU RAHMIATI BA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1964-02-26",
            "pendidikan_terakhir": "S1",
            "pekerjaan": "PENSIUNAN"
        },
        {
            "nama_lengkap": "CIKA RAHMAWATI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-05-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "JOHAN LISTIAWAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-01-31",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "CATUR FITRIANA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-03-26",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "JIHAN PUTRI AISHA JANNAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-05-04",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "JIDAN GANDI SAPUTRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2023-10-02",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ABDULLAH TUGINO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1964-01-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ASFIYAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1965-05-25",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "AHMAD FADLI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-04-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "WIDI MUSRIFOH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1994-01-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KHANZA PUTRI AZZAHRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-08-05",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "FATHAN ATHALLAH AHMAD",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-01-22",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KHALISA HUMAIRA AZZAHRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2024-07-11",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "AGUS ISMANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1984-09-03",
            "pendidikan_terakhir": "BA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "LIES INDRIATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1984-01-27",
            "pendidikan_terakhir": "BA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "DZAKI PUTRA ADRIAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2010-08-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "NIZAM MALIK ADRIAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2017-02-27",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MAULANA EFENDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1981-04-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUSI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1990-10-04",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "TIARA ANDITIA PUTRI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2016-04-02",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "SANUKRI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1960-01-01",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "BHL"
        }
    ],
    [
        {
            "nama_lengkap": "ADI DESFANTIKA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1998-04-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "LIS WIDIYAWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-07-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "BERYL DEVANU MANTIKA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2025-01-29",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "N. SUMIATI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1971-03-07",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        }
    ],
    [
        {
            "nama_lengkap": "BUDI HERNOMO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1965-06-15",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "UMIRI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1966-11-01",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "LUQMAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1965-08-20",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "SURNAMAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1969-08-05",
            "pendidikan_terakhir": "-",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "NACA SURYANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1970-06-03",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SUMIATI NACA SURYANA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1967-05-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "WARDAH MUSFIRAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-11-22",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "SAMIYANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-08-27",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "MAMI SETYAWATI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1976-05-17",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SABRINA MEITHA NAJWATI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2002-05-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "M. NABIL FATHUROHMAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2008-03-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "KURNIAWAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-06-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "NUROHMAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1964-11-19",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "RENDY ASHKHABUL. R",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2003-10-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "REVA APRILIANA SABILA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2005-04-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "REVI APRILIANI SABILA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-04-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "SUYONO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1956-06-22",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "NARINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1969-10-20",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NETRI ROSIANA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2001-03-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "IKSAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1968-12-31",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "SITI MUSAROFAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1968-06-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "WAHYU NURHIKAM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1999-12-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "AUDINA AZZAH MANTIKA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2008-09-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "BAYU KRESNA S",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1999-03-02",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KARINA RECTA ANGGRAENI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-11-24",
            "pendidikan_terakhir": "D4",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "ARIF ARIWIBOWO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1988-09-28",
            "pendidikan_terakhir": "SMA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "REDYA DEWI FI, S. KEB.",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1988-01-02",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "AINAYYA FATHIYA. T.W",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2015-08-18",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "YATIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-01-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SITI SIAMAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1981-11-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "BAGUS ARVIANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2001-03-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "DANIS PUTRI AMANDA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2008-01-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MUH. MUSTOFA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-04-14",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SALAMAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1976-08-10",
            "pendidikan_terakhir": "SLTP",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "YAASIR ALLAM",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2006-08-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "MU'AMAR NASIK",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2015-04-26",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AHMAD FIKRI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2017-08-23",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "TRIO PRASTOMO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1985-10-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "NANA RIYANTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1990-04-26",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "CALYSTA KHANZA AZZAHRA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2014-02-02",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "DHAFIN ATHARIZ ALRESCA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2018-02-02",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MIMIN SURATMIN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1978-08-17",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "EVI NOVIANA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1977-01-01",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NAJWA NAURA RABBANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2005-11-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "REINDRA RAYYAA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2010-02-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "DZAKIRA SYAHLA RABBANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2016-10-20",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "AKHTAR GIANDRA ROBBANI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2020-05-17",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "CARMANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1971-11-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "MASROFAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1975-05-15",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AISYAH AZ ZAHRA FATINAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2018-01-10",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "MARIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1968-03-05",
            "pendidikan_terakhir": "D3",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "ESTI WIHARLINA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1973-11-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "FERDIAN WIHARMA. R.",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-08-02",
            "pendidikan_terakhir": "SARJANA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "FUNGQI ARIS TIARA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1990-09-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SISKA SEPTI FARDIANTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-09-29",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "GYANDRA LAURRELLYN N",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2023-08-09",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ASMI SUSANTI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1964-04-18",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "YOHANES AJI PRABOWO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1996-03-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DESSY NUR RAHMA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1998-12-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "NABIHA ZETTA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-05-31",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "KHAIR RAFFI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-11-22",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "M. SUWANDI",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1973-03-02",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "BHL"
        },
        {
            "nama_lengkap": "IDA AGUSTINA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1976-08-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "WAHYU EKO GUSTIAWAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1996-11-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RIZQA FATINAH GUSTIAWAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-04-24",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KHOERUNNISA TRI. G.",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2006-04-27",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "KASIATUN",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1954-06-18",
            "pendidikan_terakhir": "-",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KARYONO DWINANTO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1978-05-18",
            "pendidikan_terakhir": "-",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "KARNO SUHARTONO",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1994-12-25",
            "pendidikan_terakhir": "-",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "KARYO WIDODO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1983-07-07",
            "pendidikan_terakhir": "-",
            "pekerjaan": "TIDAK BEKERJA"
        },
        {
            "nama_lengkap": "EUIS",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1987-12-19",
            "pendidikan_terakhir": "-",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KALISA PUTRI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2020-02-14",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "FACHRI IBNU FALAH",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-11-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "ADE SETIAWAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1995-02-04",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "ELI SETIANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1995-07-11",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "SEA ALICE ABHYAKSA",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2021-11-09",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "BAGUS SADEWO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2000-08-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "TRIANA ARISIHANI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2001-04-08",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "LUSIYANTO",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1991-06-17",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RINA SARIYANTI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1991-08-27",
            "pendidikan_terakhir": "BA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "HANIF RAMADHAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2018-06-08",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ANWAR KAWAKIB",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1996-11-28",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "SITY AISYAH",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1996-06-01",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "KINANTI NURUL KAWAKIB",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2022-10-18",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "ANOM MUDJIADIN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2006-05-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "TIDAK BEKERJA"
        }
    ],
    [
        {
            "nama_lengkap": "INDRA LESMANA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-11-12",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "HILDA HAMIDA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1997-10-16",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUHAMAD AHNAF",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2019-07-31",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "BAHTIAR HIDAYAT",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1996-12-22",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "RISKA PERMATASARI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1999-03-10",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        }
    ],
    [
        {
            "nama_lengkap": "ROCHMAT HIDAYAT",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1992-07-03",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "IDA NURAIDA",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1994-07-09",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "MUH. HAFIZH ADZIKRI",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2017-03-06",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "HARUN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2021-05-19",
            "pendidikan_terakhir": "-",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "HERMAN",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "1990-03-23",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        },
        {
            "nama_lengkap": "DWI ERMA PRASETYARINI",
            "status_keluarga": "ISTRI",
            "status_perkawinan": "KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "1993-08-15",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "IBU RUMAH TANGGA"
        },
        {
            "nama_lengkap": "AISYAH SYIFA HERMANSYAH",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "PEREMPUAN",
            "tanggal_lahir": "2016-09-16",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        },
        {
            "nama_lengkap": "BARRA KHAYRU ATHARRAYHAN",
            "status_keluarga": "ANAK",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2018-10-04",
            "pendidikan_terakhir": "SD",
            "pekerjaan": "PELAJAR"
        }
    ],
    [
        {
            "nama_lengkap": "ALDI AFRIANTA RAHMATULLOH",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2003-04-05",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ],
    [
        {
            "nama_lengkap": "NABIL NIZAR PRATAMA",
            "status_keluarga": "KEPALA KELUARGA",
            "status_perkawinan": "BELUM KAWIN",
            "jenis_kelamin": "LAKI-LAKI",
            "tanggal_lahir": "2005-09-21",
            "pendidikan_terakhir": "SLTA",
            "pekerjaan": "KARYAWAN SWASTA"
        }
    ]
];

        $db = \Config\Database::connect();
        $builderKk = $db->table('kartu_keluarga');
        $builderPenduduk = $db->table('penduduk');

        foreach ($families as $fam) {
            $nomorKk = '32' . $faker->unique()->numerify('##############');
            
            $kartuKeluargaData[] = [
                'nomor_kk' => $nomorKk,
                'alamat' => $faker->streetAddress,
                'rt' => '049',
                'rw' => '014',
                'dusun' => 'CKM 9',
                'desa' => 'BENGLE',
                'pendapatan' => rand(1000000, 30000000),
                'skala_rumah' => rand(1, 5),
                'status_verifikasi_rt' => 'DISETUJUI',
                'status_verifikasi_rw' => 'DISETUJUI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            foreach ($fam as $person) {
                $nik = '32' . $faker->unique()->numerify('##############');
                
                $pendudukData[] = [
                    'nik' => $nik,
                    'nomor_kk' => $nomorKk,
                    'nama_lengkap' => $person['nama_lengkap'],
                    'jenis_kelamin' => $person['jenis_kelamin'],
                    'tanggal_lahir' => $person['tanggal_lahir'],
                    'status_keluarga' => $person['status_keluarga'],
                    'pendidikan_terakhir' => $person['pendidikan_terakhir'] === '-' ? 'TIDAK / BELUM SEKOLAH' : $person['pendidikan_terakhir'],
                    'pekerjaan' => $person['pekerjaan'],
                    'status_perkawinan' => $person['status_perkawinan'] === '-' ? 'BELUM KAWIN' : $person['status_perkawinan'],
                    'status_verifikasi_rt' => 'DISETUJUI',
                    'status_verifikasi_rw' => 'DISETUJUI',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            }
        }

        // Insert Kartu Keluarga
        $chunksKk = array_chunk($kartuKeluargaData, 100);
        foreach ($chunksKk as $chunk) {
            $builderKk->insertBatch($chunk);
        }

        // Insert Penduduk
        $chunksPenduduk = array_chunk($pendudukData, 100);
        foreach ($chunksPenduduk as $chunk) {
            $builderPenduduk->insertBatch($chunk);
        }
        
        echo "RealDataSeeder selesai: " . count($kartuKeluargaData) . " KK dan " . count($pendudukData) . " Penduduk berhasil di-seed.\n";
    }
}
