<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MontadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('montadoras')->delete();

        \DB::table('montadoras')->insert(array (
            0 =>
                array (
                    'id' => 1, 'uuid' => Str::uuid(),
                    'montadora' => 'CHEVROLET',
                ),
            1 =>
                array (
                    'id' => 2, 'uuid' => Str::uuid(),
                    'montadora' => 'VOLKSWAGEN',
                ),
            2 =>
                array (
                    'id' => 3, 'uuid' => Str::uuid(),
                    'montadora' => 'FIAT',
                ),
            3 =>
                array (
                    'id' => 4, 'uuid' => Str::uuid(),
                    'montadora' => 'MERCEDES-BENZ',
                ),
            4 =>
                array (
                    'id' => 5, 'uuid' => Str::uuid(),
                    'montadora' => 'CITROEN',
                ),
            5 =>
                array (
                    'id' => 6, 'uuid' => Str::uuid(),
                    'montadora' => 'CHANA',
                ),
            6 =>
                array (
                    'id' => 7, 'uuid' => Str::uuid(),
                    'montadora' => 'HONDA',
                ),
            7 =>
                array (
                    'id' => 8, 'uuid' => Str::uuid(),
                    'montadora' => 'SUBARU',
                ),
            8 =>
                array (
                    'id' => 10, 'uuid' => Str::uuid(),
                    'montadora' => 'FERRARI',
                ),
            9 =>
                array (
                    'id' => 11, 'uuid' => Str::uuid(),
                    'montadora' => 'BUGATTI',
                ),
            10 =>
                array (
                    'id' => 12, 'uuid' => Str::uuid(),
                    'montadora' => 'LAMBORGHINI',
                ),
            11 =>
                array (
                    'id' => 13, 'uuid' => Str::uuid(),
                    'montadora' => 'FORD',
                ),
            12 =>
                array (
                    'id' => 14, 'uuid' => Str::uuid(),
                    'montadora' => 'HYUNDAI',
                ),
            13 =>
                array (
                    'id' => 15, 'uuid' => Str::uuid(),
                    'montadora' => 'JAC',
                ),
            14 =>
                array (
                    'id' => 16, 'uuid' => Str::uuid(),
                    'montadora' => 'KIA',
                ),
            15 =>
                array (
                    'id' => 17, 'uuid' => Str::uuid(),
                    'montadora' => 'GURGEL',
                ),
            16 =>
                array (
                    'id' => 18, 'uuid' => Str::uuid(),
                    'montadora' => 'DODGE',
                ),
            17 =>
                array (
                    'id' => 19, 'uuid' => Str::uuid(),
                    'montadora' => 'CHRYSLER',
                ),
            18 =>
                array (
                    'id' => 20, 'uuid' => Str::uuid(),
                    'montadora' => 'BENTLEY',
                ),
            19 =>
                array (
                    'id' => 21, 'uuid' => Str::uuid(),
                    'montadora' => 'SSANGYONG',
                ),
            20 =>
                array (
                    'id' => 22, 'uuid' => Str::uuid(),
                    'montadora' => 'PEUGEOT',
                ),
            21 =>
                array (
                    'id' => 23, 'uuid' => Str::uuid(),
                    'montadora' => 'TOYOTA',
                ),
            22 =>
                array (
                    'id' => 24, 'uuid' => Str::uuid(),
                    'montadora' => 'RENAULT',
                ),
            23 =>
                array (
                    'id' => 25, 'uuid' => Str::uuid(),
                    'montadora' => 'ACURA',
                ),
            24 =>
                array (
                    'id' => 26, 'uuid' => Str::uuid(),
                    'montadora' => 'ADAMO',
                ),
            25 =>
                array (
                    'id' => 27, 'uuid' => Str::uuid(),
                    'montadora' => 'AGRALE',
                ),
            26 =>
                array (
                    'id' => 28, 'uuid' => Str::uuid(),
                    'montadora' => 'ALFA ROMEO',
                ),
            27 =>
                array (
                    'id' => 29, 'uuid' => Str::uuid(),
                    'montadora' => 'AMERICAR',
                ),
            28 =>
                array (
                    'id' => 31, 'uuid' => Str::uuid(),
                    'montadora' => 'ASTON MARTIN',
                ),
            29 =>
                array (
                    'id' => 32, 'uuid' => Str::uuid(),
                    'montadora' => 'AUDI',
                ),
            30 =>
                array (
                    'id' => 34, 'uuid' => Str::uuid(),
                    'montadora' => 'BEACH',
                ),
            31 =>
                array (
                    'id' => 35, 'uuid' => Str::uuid(),
                    'montadora' => 'BIANCO',
                ),
            32 =>
                array (
                    'id' => 36, 'uuid' => Str::uuid(),
                    'montadora' => 'BMW',
                ),
            33 =>
                array (
                    'id' => 37, 'uuid' => Str::uuid(),
                    'montadora' => 'BORGWARD',
                ),
            34 =>
                array (
                    'id' => 38, 'uuid' => Str::uuid(),
                    'montadora' => 'BRILLIANCE',
                ),
            35 =>
                array (
                    'id' => 41, 'uuid' => Str::uuid(),
                    'montadora' => 'BUICK',
                ),
            36 =>
                array (
                    'id' => 42, 'uuid' => Str::uuid(),
                    'montadora' => 'CBT',
                ),
            37 =>
                array (
                    'id' => 43, 'uuid' => Str::uuid(),
                    'montadora' => 'NISSAN',
                ),
            38 =>
                array (
                    'id' => 44, 'uuid' => Str::uuid(),
                    'montadora' => 'CHAMONIX',
                ),
            39 =>
                array (
                    'id' => 46, 'uuid' => Str::uuid(),
                    'montadora' => 'CHEDA',
                ),
            40 =>
                array (
                    'id' => 47, 'uuid' => Str::uuid(),
                    'montadora' => 'CHERY',
                ),
            41 =>
                array (
                    'id' => 48, 'uuid' => Str::uuid(),
                    'montadora' => 'CORD',
                ),
            42 =>
                array (
                    'id' => 49, 'uuid' => Str::uuid(),
                    'montadora' => 'COYOTE',
                ),
            43 =>
                array (
                    'id' => 50, 'uuid' => Str::uuid(),
                    'montadora' => 'CROSS LANDER',
                ),
            44 =>
                array (
                    'id' => 51, 'uuid' => Str::uuid(),
                    'montadora' => 'DAEWOO',
                ),
            45 =>
                array (
                    'id' => 52, 'uuid' => Str::uuid(),
                    'montadora' => 'DAIHATSU',
                ),
            46 =>
                array (
                    'id' => 53, 'uuid' => Str::uuid(),
                    'montadora' => 'VOLVO',
                ),
            47 =>
                array (
                    'id' => 54, 'uuid' => Str::uuid(),
                    'montadora' => 'DE SOTO',
                ),
            48 =>
                array (
                    'id' => 55, 'uuid' => Str::uuid(),
                    'montadora' => 'DETOMAZO',
                ),
            49 =>
                array (
                    'id' => 56, 'uuid' => Str::uuid(),
                    'montadora' => 'DELOREAN',
                ),
            50 =>
                array (
                    'id' => 57, 'uuid' => Str::uuid(),
                    'montadora' => 'DKW-VEMAG',
                ),
            51 =>
                array (
                    'id' => 59, 'uuid' => Str::uuid(),
                    'montadora' => 'SUZUKI',
                ),
            52 =>
                array (
                    'id' => 60, 'uuid' => Str::uuid(),
                    'montadora' => 'EAGLE',
                ),
            53 =>
                array (
                    'id' => 61, 'uuid' => Str::uuid(),
                    'montadora' => 'EFFA',
                ),
            54 =>
                array (
                    'id' => 63, 'uuid' => Str::uuid(),
                    'montadora' => 'ENGESA',
                ),
            55 =>
                array (
                    'id' => 64, 'uuid' => Str::uuid(),
                    'montadora' => 'ENVEMO',
                ),
            56 =>
                array (
                    'id' => 65, 'uuid' => Str::uuid(),
                    'montadora' => 'FARUS',
                ),
            57 =>
                array (
                    'id' => 66, 'uuid' => Str::uuid(),
                    'montadora' => 'FERCAR',
                ),
            58 =>
                array (
                    'id' => 68, 'uuid' => Str::uuid(),
                    'montadora' => 'FNM',
                ),
            59 =>
                array (
                    'id' => 69, 'uuid' => Str::uuid(),
                    'montadora' => 'PONTIAC',
                ),
            60 =>
                array (
                    'id' => 70, 'uuid' => Str::uuid(),
                    'montadora' => 'PORSCHE',
                ),
            61 =>
                array (
                    'id' => 72, 'uuid' => Str::uuid(),
                    'montadora' => 'GEO',
                ),
            62 =>
                array (
                    'id' => 74, 'uuid' => Str::uuid(),
                    'montadora' => 'GRANCAR',
                ),
            63 =>
                array (
                    'id' => 75, 'uuid' => Str::uuid(),
                    'montadora' => 'GREAT WALL',
                ),
            64 =>
                array (
                    'id' => 76, 'uuid' => Str::uuid(),
                    'montadora' => 'HAFEI',
                ),
            65 =>
                array (
                    'id' => 78, 'uuid' => Str::uuid(),
                    'montadora' => 'HOFSTETTER',
                ),
            66 =>
                array (
                    'id' => 79, 'uuid' => Str::uuid(),
                    'montadora' => 'HUDSON',
                ),
            67 =>
                array (
                    'id' => 80, 'uuid' => Str::uuid(),
                    'montadora' => 'HUMMER',
                ),
            68 =>
                array (
                    'id' => 82, 'uuid' => Str::uuid(),
                    'montadora' => 'INFINITI',
                ),
            69 =>
                array (
                    'id' => 83, 'uuid' => Str::uuid(),
                    'montadora' => 'INTERNATIONAL',
                ),
            70 =>
                array (
                    'id' => 86, 'uuid' => Str::uuid(),
                    'montadora' => 'JAGUAR',
                ),
            71 =>
                array (
                    'id' => 87, 'uuid' => Str::uuid(),
                    'montadora' => 'JEEP',
                ),
            72 =>
                array (
                    'id' => 88, 'uuid' => Str::uuid(),
                    'montadora' => 'JINBEI',
                ),
            73 =>
                array (
                    'id' => 89, 'uuid' => Str::uuid(),
                    'montadora' => 'JPX',
                ),
            74 =>
                array (
                    'id' => 90, 'uuid' => Str::uuid(),
                    'montadora' => 'KAISER',
                ),
            75 =>
                array (
                    'id' => 91, 'uuid' => Str::uuid(),
                    'montadora' => 'KOENIGSEGG',
                ),
            76 =>
                array (
                    'id' => 92, 'uuid' => Str::uuid(),
                    'montadora' => 'LAUTOMOBILE',
                ),
            77 =>
                array (
                    'id' => 93, 'uuid' => Str::uuid(),
                    'montadora' => 'LAUTOCRAFT',
                ),
            78 =>
                array (
                    'id' => 94, 'uuid' => Str::uuid(),
                    'montadora' => 'LADA',
                ),
            79 =>
                array (
                    'id' => 95, 'uuid' => Str::uuid(),
                    'montadora' => 'LANCIA',
                ),
            80 =>
                array (
                    'id' => 96, 'uuid' => Str::uuid(),
                    'montadora' => 'LAND ROVER',
                ),
            81 =>
                array (
                    'id' => 97, 'uuid' => Str::uuid(),
                    'montadora' => 'LEXUS',
                ),
            82 =>
                array (
                    'id' => 98, 'uuid' => Str::uuid(),
                    'montadora' => 'LIFAN',
                ),
            83 =>
                array (
                    'id' => 99, 'uuid' => Str::uuid(),
                    'montadora' => 'LINCOLN',
                ),
            84 =>
                array (
                    'id' => 100, 'uuid' => Str::uuid(),
                    'montadora' => 'LOBINI',
                ),
            85 =>
                array (
                    'id' => 101, 'uuid' => Str::uuid(),
                    'montadora' => 'LOTUS',
                ),
            86 =>
                array (
                    'id' => 102, 'uuid' => Str::uuid(),
                    'montadora' => 'MAHINDRA',
                ),
            87 =>
                array (
                    'id' => 104, 'uuid' => Str::uuid(),
                    'montadora' => 'MASERATI',
                ),
            88 =>
                array (
                    'id' => 106, 'uuid' => Str::uuid(),
                    'montadora' => 'MATRA',
                ),
            89 =>
                array (
                    'id' => 107, 'uuid' => Str::uuid(),
                    'montadora' => 'MAYBACH',
                ),
            90 =>
                array (
                    'id' => 108, 'uuid' => Str::uuid(),
                    'montadora' => 'MAZDA',
                ),
            91 =>
                array (
                    'id' => 109, 'uuid' => Str::uuid(),
                    'montadora' => 'MENON',
                ),
            92 =>
                array (
                    'id' => 110, 'uuid' => Str::uuid(),
                    'montadora' => 'MERCURY',
                ),
            93 =>
                array (
                    'id' => 111, 'uuid' => Str::uuid(),
                    'montadora' => 'MITSUBISHI',
                ),
            94 =>
                array (
                    'id' => 112, 'uuid' => Str::uuid(),
                    'montadora' => 'MG',
                ),
            95 =>
                array (
                    'id' => 113, 'uuid' => Str::uuid(),
                    'montadora' => 'MINI',
                ),
            96 =>
                array (
                    'id' => 114, 'uuid' => Str::uuid(),
                    'montadora' => 'MIURA',
                ),
            97 =>
                array (
                    'id' => 115, 'uuid' => Str::uuid(),
                    'montadora' => 'MORRIS',
                ),
            98 =>
                array (
                    'id' => 116, 'uuid' => Str::uuid(),
                    'montadora' => 'MP LAFER',
                ),
            99 =>
                array (
                    'id' => 117, 'uuid' => Str::uuid(),
                    'montadora' => 'MPLM',
                ),
            100 =>
                array (
                    'id' => 118, 'uuid' => Str::uuid(),
                    'montadora' => 'NEWTRACK',
                ),
            101 =>
                array (
                    'id' => 119, 'uuid' => Str::uuid(),
                    'montadora' => 'NISSIN',
                ),
            102 =>
                array (
                    'id' => 120, 'uuid' => Str::uuid(),
                    'montadora' => 'OLDSMOBILE',
                ),
            103 =>
                array (
                    'id' => 121, 'uuid' => Str::uuid(),
                    'montadora' => 'PAG',
                ),
            104 =>
                array (
                    'id' => 122, 'uuid' => Str::uuid(),
                    'montadora' => 'PAGANI',
                ),
            105 =>
                array (
                    'id' => 123, 'uuid' => Str::uuid(),
                    'montadora' => 'PLYMOUTH',
                ),
            106 =>
                array (
                    'id' => 124, 'uuid' => Str::uuid(),
                    'montadora' => 'PUMA',
                ),
            107 =>
                array (
                    'id' => 125, 'uuid' => Str::uuid(),
                    'montadora' => 'RENO',
                ),
            108 =>
                array (
                    'id' => 126, 'uuid' => Str::uuid(),
                    'montadora' => 'REVA-I',
                ),
            109 =>
                array (
                    'id' => 127, 'uuid' => Str::uuid(),
                    'montadora' => 'ROLLS-ROYCE',
                ),
            110 =>
                array (
                    'id' => 129, 'uuid' => Str::uuid(),
                    'montadora' => 'ROMI',
                ),
            111 =>
                array (
                    'id' => 130, 'uuid' => Str::uuid(),
                    'montadora' => 'SEAT',
                ),
            112 =>
                array (
                    'id' => 131, 'uuid' => Str::uuid(),
                    'montadora' => 'UTILITARIOS AGRICOLAS',
                ),
            113 =>
                array (
                    'id' => 132, 'uuid' => Str::uuid(),
                    'montadora' => 'SHINERAY',
                ),
            114 =>
                array (
                    'id' => 137, 'uuid' => Str::uuid(),
                    'montadora' => 'SAAB',
                ),
            115 =>
                array (
                    'id' => 139, 'uuid' => Str::uuid(),
                    'montadora' => 'SHORT',
                ),
            116 =>
                array (
                    'id' => 141, 'uuid' => Str::uuid(),
                    'montadora' => 'SIMCA',
                ),
            117 =>
                array (
                    'id' => 142, 'uuid' => Str::uuid(),
                    'montadora' => 'SMART',
                ),
            118 =>
                array (
                    'id' => 143, 'uuid' => Str::uuid(),
                    'montadora' => 'SPYKER',
                ),
            119 =>
                array (
                    'id' => 144, 'uuid' => Str::uuid(),
                    'montadora' => 'STANDARD',
                ),
            120 =>
                array (
                    'id' => 145, 'uuid' => Str::uuid(),
                    'montadora' => 'STUDEBAKER',
                ),
            121 =>
                array (
                    'id' => 146, 'uuid' => Str::uuid(),
                    'montadora' => 'TAC',
                ),
            122 =>
                array (
                    'id' => 147, 'uuid' => Str::uuid(),
                    'montadora' => 'TANGER',
                ),
            123 =>
                array (
                    'id' => 148, 'uuid' => Str::uuid(),
                    'montadora' => 'TRIUMPH',
                ),
            124 =>
                array (
                    'id' => 149, 'uuid' => Str::uuid(),
                    'montadora' => 'TROLLER',
                ),
            125 =>
                array (
                    'id' => 150, 'uuid' => Str::uuid(),
                    'montadora' => 'UNIMOG',
                ),
            126 =>
                array (
                    'id' => 154, 'uuid' => Str::uuid(),
                    'montadora' => 'WIESMANN',
                ),
            127 =>
                array (
                    'id' => 155, 'uuid' => Str::uuid(),
                    'montadora' => 'CADILLAC',
                ),
            128 =>
                array (
                    'id' => 156, 'uuid' => Str::uuid(),
                    'montadora' => 'AM GEN',
                ),
            129 =>
                array (
                    'id' => 157, 'uuid' => Str::uuid(),
                    'montadora' => 'BUGGY',
                ),
            130 =>
                array (
                    'id' => 158, 'uuid' => Str::uuid(),
                    'montadora' => 'WILLYS OVERLAND',
                ),
            131 =>
                array (
                    'id' => 161, 'uuid' => Str::uuid(),
                    'montadora' => 'KASEA',
                ),
            132 =>
                array (
                    'id' => 162, 'uuid' => Str::uuid(),
                    'montadora' => 'SATURN',
                ),
            133 =>
                array (
                    'id' => 163, 'uuid' => Str::uuid(),
                    'montadora' => 'SWELL MINI',
                ),
            134 =>
                array (
                    'id' => 175, 'uuid' => Str::uuid(),
                    'montadora' => 'SKODA',
                ),
            135 =>
                array (
                    'id' => 239, 'uuid' => Str::uuid(),
                    'montadora' => 'KARMANN GHIA',
                ),
            136 =>
                array (
                    'id' => 254, 'uuid' => Str::uuid(),
                    'montadora' => 'KART',
                ),
            137 =>
                array (
                    'id' => 258, 'uuid' => Str::uuid(),
                    'montadora' => 'HANOMAG',
                ),
            138 =>
                array (
                    'id' => 261, 'uuid' => Str::uuid(),
                    'montadora' => 'OUTROS',
                ),
            139 =>
                array (
                    'id' => 265, 'uuid' => Str::uuid(),
                    'montadora' => 'HILLMAN',
                ),
            140 =>
                array (
                    'id' => 288, 'uuid' => Str::uuid(),
                    'montadora' => 'HRG',
                ),
            141 =>
                array (
                    'id' => 295, 'uuid' => Str::uuid(),
                    'montadora' => 'GAIOLA',
                ),
            142 =>
                array (
                    'id' => 338, 'uuid' => Str::uuid(),
                    'montadora' => 'TATA',
                ),
            143 =>
                array (
                    'id' => 341, 'uuid' => Str::uuid(),
                    'montadora' => 'DITALLY',
                ),
            144 =>
                array (
                    'id' => 345, 'uuid' => Str::uuid(),
                    'montadora' => 'RELY',
                ),
            145 =>
                array (
                    'id' => 346, 'uuid' => Str::uuid(),
                    'montadora' => 'MCLAREN',
                ),
            146 =>
                array (
                    'id' => 534, 'uuid' => Str::uuid(),
                    'montadora' => 'GEELY',
                ),
        ));

        DB::select("SELECT setval('montadoras_id_seq', 534, true)");
    }
}
