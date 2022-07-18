<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MontadorasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('montadoras')->delete();
        
        \DB::table('montadoras')->insert(array (
            0 => 
            array (
                'id' => 1,
                'montadora' => 'CHEVROLET',
            ),
            1 => 
            array (
                'id' => 2,
                'montadora' => 'VOLKSWAGEN',
            ),
            2 => 
            array (
                'id' => 3,
                'montadora' => 'FIAT',
            ),
            3 => 
            array (
                'id' => 4,
                'montadora' => 'MERCEDES-BENZ',
            ),
            4 => 
            array (
                'id' => 5,
                'montadora' => 'CITROEN',
            ),
            5 => 
            array (
                'id' => 6,
                'montadora' => 'CHANA',
            ),
            6 => 
            array (
                'id' => 7,
                'montadora' => 'HONDA',
            ),
            7 => 
            array (
                'id' => 8,
                'montadora' => 'SUBARU',
            ),
            8 => 
            array (
                'id' => 10,
                'montadora' => 'FERRARI',
            ),
            9 => 
            array (
                'id' => 11,
                'montadora' => 'BUGATTI',
            ),
            10 => 
            array (
                'id' => 12,
                'montadora' => 'LAMBORGHINI',
            ),
            11 => 
            array (
                'id' => 13,
                'montadora' => 'FORD',
            ),
            12 => 
            array (
                'id' => 14,
                'montadora' => 'HYUNDAI',
            ),
            13 => 
            array (
                'id' => 15,
                'montadora' => 'JAC',
            ),
            14 => 
            array (
                'id' => 16,
                'montadora' => 'KIA',
            ),
            15 => 
            array (
                'id' => 17,
                'montadora' => 'GURGEL',
            ),
            16 => 
            array (
                'id' => 18,
                'montadora' => 'DODGE',
            ),
            17 => 
            array (
                'id' => 19,
                'montadora' => 'CHRYSLER',
            ),
            18 => 
            array (
                'id' => 20,
                'montadora' => 'BENTLEY',
            ),
            19 => 
            array (
                'id' => 21,
                'montadora' => 'SSANGYONG',
            ),
            20 => 
            array (
                'id' => 22,
                'montadora' => 'PEUGEOT',
            ),
            21 => 
            array (
                'id' => 23,
                'montadora' => 'TOYOTA',
            ),
            22 => 
            array (
                'id' => 24,
                'montadora' => 'RENAULT',
            ),
            23 => 
            array (
                'id' => 25,
                'montadora' => 'ACURA',
            ),
            24 => 
            array (
                'id' => 26,
                'montadora' => 'ADAMO',
            ),
            25 => 
            array (
                'id' => 27,
                'montadora' => 'AGRALE',
            ),
            26 => 
            array (
                'id' => 28,
                'montadora' => 'ALFA ROMEO',
            ),
            27 => 
            array (
                'id' => 29,
                'montadora' => 'AMERICAR',
            ),
            28 => 
            array (
                'id' => 31,
                'montadora' => 'ASTON MARTIN',
            ),
            29 => 
            array (
                'id' => 32,
                'montadora' => 'AUDI',
            ),
            30 => 
            array (
                'id' => 34,
                'montadora' => 'BEACH',
            ),
            31 => 
            array (
                'id' => 35,
                'montadora' => 'BIANCO',
            ),
            32 => 
            array (
                'id' => 36,
                'montadora' => 'BMW',
            ),
            33 => 
            array (
                'id' => 37,
                'montadora' => 'BORGWARD',
            ),
            34 => 
            array (
                'id' => 38,
                'montadora' => 'BRILLIANCE',
            ),
            35 => 
            array (
                'id' => 41,
                'montadora' => 'BUICK',
            ),
            36 => 
            array (
                'id' => 42,
                'montadora' => 'CBT',
            ),
            37 => 
            array (
                'id' => 43,
                'montadora' => 'NISSAN',
            ),
            38 => 
            array (
                'id' => 44,
                'montadora' => 'CHAMONIX',
            ),
            39 => 
            array (
                'id' => 46,
                'montadora' => 'CHEDA',
            ),
            40 => 
            array (
                'id' => 47,
                'montadora' => 'CHERY',
            ),
            41 => 
            array (
                'id' => 48,
                'montadora' => 'CORD',
            ),
            42 => 
            array (
                'id' => 49,
                'montadora' => 'COYOTE',
            ),
            43 => 
            array (
                'id' => 50,
                'montadora' => 'CROSS LANDER',
            ),
            44 => 
            array (
                'id' => 51,
                'montadora' => 'DAEWOO',
            ),
            45 => 
            array (
                'id' => 52,
                'montadora' => 'DAIHATSU',
            ),
            46 => 
            array (
                'id' => 53,
                'montadora' => 'VOLVO',
            ),
            47 => 
            array (
                'id' => 54,
                'montadora' => 'DE SOTO',
            ),
            48 => 
            array (
                'id' => 55,
                'montadora' => 'DETOMAZO',
            ),
            49 => 
            array (
                'id' => 56,
                'montadora' => 'DELOREAN',
            ),
            50 => 
            array (
                'id' => 57,
                'montadora' => 'DKW-VEMAG',
            ),
            51 => 
            array (
                'id' => 59,
                'montadora' => 'SUZUKI',
            ),
            52 => 
            array (
                'id' => 60,
                'montadora' => 'EAGLE',
            ),
            53 => 
            array (
                'id' => 61,
                'montadora' => 'EFFA',
            ),
            54 => 
            array (
                'id' => 63,
                'montadora' => 'ENGESA',
            ),
            55 => 
            array (
                'id' => 64,
                'montadora' => 'ENVEMO',
            ),
            56 => 
            array (
                'id' => 65,
                'montadora' => 'FARUS',
            ),
            57 => 
            array (
                'id' => 66,
                'montadora' => 'FERCAR',
            ),
            58 => 
            array (
                'id' => 68,
                'montadora' => 'FNM',
            ),
            59 => 
            array (
                'id' => 69,
                'montadora' => 'PONTIAC',
            ),
            60 => 
            array (
                'id' => 70,
                'montadora' => 'PORSCHE',
            ),
            61 => 
            array (
                'id' => 72,
                'montadora' => 'GEO',
            ),
            62 => 
            array (
                'id' => 74,
                'montadora' => 'GRANCAR',
            ),
            63 => 
            array (
                'id' => 75,
                'montadora' => 'GREAT WALL',
            ),
            64 => 
            array (
                'id' => 76,
                'montadora' => 'HAFEI',
            ),
            65 => 
            array (
                'id' => 78,
                'montadora' => 'HOFSTETTER',
            ),
            66 => 
            array (
                'id' => 79,
                'montadora' => 'HUDSON',
            ),
            67 => 
            array (
                'id' => 80,
                'montadora' => 'HUMMER',
            ),
            68 => 
            array (
                'id' => 82,
                'montadora' => 'INFINITI',
            ),
            69 => 
            array (
                'id' => 83,
                'montadora' => 'INTERNATIONAL',
            ),
            70 => 
            array (
                'id' => 86,
                'montadora' => 'JAGUAR',
            ),
            71 => 
            array (
                'id' => 87,
                'montadora' => 'JEEP',
            ),
            72 => 
            array (
                'id' => 88,
                'montadora' => 'JINBEI',
            ),
            73 => 
            array (
                'id' => 89,
                'montadora' => 'JPX',
            ),
            74 => 
            array (
                'id' => 90,
                'montadora' => 'KAISER',
            ),
            75 => 
            array (
                'id' => 91,
                'montadora' => 'KOENIGSEGG',
            ),
            76 => 
            array (
                'id' => 92,
                'montadora' => 'LAUTOMOBILE',
            ),
            77 => 
            array (
                'id' => 93,
                'montadora' => 'LAUTOCRAFT',
            ),
            78 => 
            array (
                'id' => 94,
                'montadora' => 'LADA',
            ),
            79 => 
            array (
                'id' => 95,
                'montadora' => 'LANCIA',
            ),
            80 => 
            array (
                'id' => 96,
                'montadora' => 'LAND ROVER',
            ),
            81 => 
            array (
                'id' => 97,
                'montadora' => 'LEXUS',
            ),
            82 => 
            array (
                'id' => 98,
                'montadora' => 'LIFAN',
            ),
            83 => 
            array (
                'id' => 99,
                'montadora' => 'LINCOLN',
            ),
            84 => 
            array (
                'id' => 100,
                'montadora' => 'LOBINI',
            ),
            85 => 
            array (
                'id' => 101,
                'montadora' => 'LOTUS',
            ),
            86 => 
            array (
                'id' => 102,
                'montadora' => 'MAHINDRA',
            ),
            87 => 
            array (
                'id' => 104,
                'montadora' => 'MASERATI',
            ),
            88 => 
            array (
                'id' => 106,
                'montadora' => 'MATRA',
            ),
            89 => 
            array (
                'id' => 107,
                'montadora' => 'MAYBACH',
            ),
            90 => 
            array (
                'id' => 108,
                'montadora' => 'MAZDA',
            ),
            91 => 
            array (
                'id' => 109,
                'montadora' => 'MENON',
            ),
            92 => 
            array (
                'id' => 110,
                'montadora' => 'MERCURY',
            ),
            93 => 
            array (
                'id' => 111,
                'montadora' => 'MITSUBISHI',
            ),
            94 => 
            array (
                'id' => 112,
                'montadora' => 'MG',
            ),
            95 => 
            array (
                'id' => 113,
                'montadora' => 'MINI',
            ),
            96 => 
            array (
                'id' => 114,
                'montadora' => 'MIURA',
            ),
            97 => 
            array (
                'id' => 115,
                'montadora' => 'MORRIS',
            ),
            98 => 
            array (
                'id' => 116,
                'montadora' => 'MP LAFER',
            ),
            99 => 
            array (
                'id' => 117,
                'montadora' => 'MPLM',
            ),
            100 => 
            array (
                'id' => 118,
                'montadora' => 'NEWTRACK',
            ),
            101 => 
            array (
                'id' => 119,
                'montadora' => 'NISSIN',
            ),
            102 => 
            array (
                'id' => 120,
                'montadora' => 'OLDSMOBILE',
            ),
            103 => 
            array (
                'id' => 121,
                'montadora' => 'PAG',
            ),
            104 => 
            array (
                'id' => 122,
                'montadora' => 'PAGANI',
            ),
            105 => 
            array (
                'id' => 123,
                'montadora' => 'PLYMOUTH',
            ),
            106 => 
            array (
                'id' => 124,
                'montadora' => 'PUMA',
            ),
            107 => 
            array (
                'id' => 125,
                'montadora' => 'RENO',
            ),
            108 => 
            array (
                'id' => 126,
                'montadora' => 'REVA-I',
            ),
            109 => 
            array (
                'id' => 127,
                'montadora' => 'ROLLS-ROYCE',
            ),
            110 => 
            array (
                'id' => 129,
                'montadora' => 'ROMI',
            ),
            111 => 
            array (
                'id' => 130,
                'montadora' => 'SEAT',
            ),
            112 => 
            array (
                'id' => 131,
                'montadora' => 'UTILITARIOS AGRICOLAS',
            ),
            113 => 
            array (
                'id' => 132,
                'montadora' => 'SHINERAY',
            ),
            114 => 
            array (
                'id' => 137,
                'montadora' => 'SAAB',
            ),
            115 => 
            array (
                'id' => 139,
                'montadora' => 'SHORT',
            ),
            116 => 
            array (
                'id' => 141,
                'montadora' => 'SIMCA',
            ),
            117 => 
            array (
                'id' => 142,
                'montadora' => 'SMART',
            ),
            118 => 
            array (
                'id' => 143,
                'montadora' => 'SPYKER',
            ),
            119 => 
            array (
                'id' => 144,
                'montadora' => 'STANDARD',
            ),
            120 => 
            array (
                'id' => 145,
                'montadora' => 'STUDEBAKER',
            ),
            121 => 
            array (
                'id' => 146,
                'montadora' => 'TAC',
            ),
            122 => 
            array (
                'id' => 147,
                'montadora' => 'TANGER',
            ),
            123 => 
            array (
                'id' => 148,
                'montadora' => 'TRIUMPH',
            ),
            124 => 
            array (
                'id' => 149,
                'montadora' => 'TROLLER',
            ),
            125 => 
            array (
                'id' => 150,
                'montadora' => 'UNIMOG',
            ),
            126 => 
            array (
                'id' => 154,
                'montadora' => 'WIESMANN',
            ),
            127 => 
            array (
                'id' => 155,
                'montadora' => 'CADILLAC',
            ),
            128 => 
            array (
                'id' => 156,
                'montadora' => 'AM GEN',
            ),
            129 => 
            array (
                'id' => 157,
                'montadora' => 'BUGGY',
            ),
            130 => 
            array (
                'id' => 158,
                'montadora' => 'WILLYS OVERLAND',
            ),
            131 => 
            array (
                'id' => 161,
                'montadora' => 'KASEA',
            ),
            132 => 
            array (
                'id' => 162,
                'montadora' => 'SATURN',
            ),
            133 => 
            array (
                'id' => 163,
                'montadora' => 'SWELL MINI',
            ),
            134 => 
            array (
                'id' => 175,
                'montadora' => 'SKODA',
            ),
            135 => 
            array (
                'id' => 239,
                'montadora' => 'KARMANN GHIA',
            ),
            136 => 
            array (
                'id' => 254,
                'montadora' => 'KART',
            ),
            137 => 
            array (
                'id' => 258,
                'montadora' => 'HANOMAG',
            ),
            138 => 
            array (
                'id' => 261,
                'montadora' => 'OUTROS',
            ),
            139 => 
            array (
                'id' => 265,
                'montadora' => 'HILLMAN',
            ),
            140 => 
            array (
                'id' => 288,
                'montadora' => 'HRG',
            ),
            141 => 
            array (
                'id' => 295,
                'montadora' => 'GAIOLA',
            ),
            142 => 
            array (
                'id' => 338,
                'montadora' => 'TATA',
            ),
            143 => 
            array (
                'id' => 341,
                'montadora' => 'DITALLY',
            ),
            144 => 
            array (
                'id' => 345,
                'montadora' => 'RELY',
            ),
            145 => 
            array (
                'id' => 346,
                'montadora' => 'MCLAREN',
            ),
            146 => 
            array (
                'id' => 534,
                'montadora' => 'GEELY',
            ),
        ));
        
        
    }
}