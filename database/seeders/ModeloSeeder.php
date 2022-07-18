<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('modelos')->delete();

        \DB::table('modelos')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'uuid' => Str::uuid(), 'montadora_id' => 25,
                    'modelo' => 'INTEGRA',
                ),
            1 =>
                array (
                    'id' => 2,
                    'uuid' => Str::uuid(), 'montadora_id' => 25,
                    'modelo' => 'LEGEND',
                ),
            2 =>
                array (
                    'id' => 3,
                    'uuid' => Str::uuid(), 'montadora_id' => 25,
                    'modelo' => 'NSX',
                ),
            3 =>
                array (
                    'id' => 4,
                    'uuid' => Str::uuid(), 'montadora_id' => 27,
                    'modelo' => 'MARRUA',
                ),
            4 =>
                array (
                    'id' => 5,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '145',
                ),
            5 =>
                array (
                    'id' => 6,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '147',
                ),
            6 =>
                array (
                    'id' => 7,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '155',
                ),
            7 =>
                array (
                    'id' => 8,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '156',
                ),
            8 =>
                array (
                    'id' => 9,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '164',
                ),
            9 =>
                array (
                    'id' => 10,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '166',
                ),
            10 =>
                array (
                    'id' => 11,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => '2300',
                ),
            11 =>
                array (
                    'id' => 12,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => 'SPIDER',
                ),
            12 =>
                array (
                    'id' => 13,
                    'uuid' => Str::uuid(), 'montadora_id' => 156,
                    'modelo' => 'HUMMER',
                ),
            13 =>
                array (
                    'id' => 14,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'AM-825',
                ),
            14 =>
                array (
                    'id' => 15,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'HI-TOPIC',
                ),
            15 =>
                array (
                    'id' => 16,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'ROCSTA',
                ),
            16 =>
                array (
                    'id' => 17,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'TOPIC',
                ),
            17 =>
                array (
                    'id' => 18,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'TOWNER',
                ),
            18 =>
                array (
                    'id' => 19,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => '100',
                ),
            19 =>
                array (
                    'id' => 20,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => '80',
                ),
            20 =>
                array (
                    'id' => 21,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A1',
                ),
            21 =>
                array (
                    'id' => 22,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A3',
                ),
            22 =>
                array (
                    'id' => 23,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A4 SEDAN',
                ),
            23 =>
                array (
                    'id' => 24,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A5 COUPE',
                ),
            24 =>
                array (
                    'id' => 25,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A6 SEDAN',
                ),
            25 =>
                array (
                    'id' => 26,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A7',
                ),
            26 =>
                array (
                    'id' => 27,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A8',
                ),
            27 =>
                array (
                    'id' => 30,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'Q3',
                ),
            28 =>
                array (
                    'id' => 31,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'Q5',
                ),
            29 =>
                array (
                    'id' => 32,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'Q7',
                ),
            30 =>
                array (
                    'id' => 33,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'R8',
                ),
            31 =>
                array (
                    'id' => 34,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'RS3',
                ),
            32 =>
                array (
                    'id' => 35,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'RS4',
                ),
            33 =>
                array (
                    'id' => 36,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'RS5',
                ),
            34 =>
                array (
                    'id' => 37,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'RS6',
                ),
            35 =>
                array (
                    'id' => 38,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S3',
                ),
            36 =>
                array (
                    'id' => 39,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S4 SEDAN',
                ),
            37 =>
                array (
                    'id' => 40,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S6 SEDAN',
                ),
            38 =>
                array (
                    'id' => 41,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S8',
                ),
            39 =>
                array (
                    'id' => 42,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'TT',
                ),
            40 =>
                array (
                    'id' => 43,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'TTS',
                ),
            41 =>
                array (
                    'id' => 86,
                    'uuid' => Str::uuid(), 'montadora_id' => 157,
                    'modelo' => 'BUGGY',
                ),
            42 =>
                array (
                    'id' => 87,
                    'uuid' => Str::uuid(), 'montadora_id' => 155,
                    'modelo' => 'DEVILLE',
                ),
            43 =>
                array (
                    'id' => 88,
                    'uuid' => Str::uuid(), 'montadora_id' => 155,
                    'modelo' => 'ELDORADO',
                ),
            44 =>
                array (
                    'id' => 89,
                    'uuid' => Str::uuid(), 'montadora_id' => 155,
                    'modelo' => 'SEVILLE',
                ),
            45 =>
                array (
                    'id' => 90,
                    'uuid' => Str::uuid(), 'montadora_id' => 42,
                    'modelo' => 'JAVALI',
                ),
            46 =>
                array (
                    'id' => 92,
                    'uuid' => Str::uuid(), 'montadora_id' => 6,
                    'modelo' => 'MINI STAR FAMILY',
                ),
            47 =>
                array (
                    'id' => 93,
                    'uuid' => Str::uuid(), 'montadora_id' => 6,
                    'modelo' => 'MINI STAR UTILITY',
                ),
            48 =>
                array (
                    'id' => 95,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'CIELO',
                ),
            49 =>
                array (
                    'id' => 96,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'FACE',
                ),
            50 =>
                array (
                    'id' => 97,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'QQ',
                ),
            51 =>
                array (
                    'id' => 98,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'S-18',
                ),
            52 =>
                array (
                    'id' => 99,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'TIGGO',
                ),
            53 =>
                array (
                    'id' => 100,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => '300C',
                ),
            54 =>
                array (
                    'id' => 101,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'CARAVAN',
                ),
            55 =>
                array (
                    'id' => 102,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'CIRRUS',
                ),
            56 =>
                array (
                    'id' => 103,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'GRAN CARAVAN',
                ),
            57 =>
                array (
                    'id' => 104,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'LE BARON',
                ),
            58 =>
                array (
                    'id' => 105,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'NEON',
                ),
            59 =>
                array (
                    'id' => 106,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'PT CRUISER',
                ),
            60 =>
                array (
                    'id' => 107,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'SEBRING',
                ),
            61 =>
                array (
                    'id' => 108,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'STRATUS',
                ),
            62 =>
                array (
                    'id' => 109,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'TOWN E COUNTRY',
                ),
            63 =>
                array (
                    'id' => 110,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'VISION',
                ),
            64 =>
                array (
                    'id' => 111,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'AIRCROSS',
                ),
            65 =>
                array (
                    'id' => 112,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'AX',
                ),
            66 =>
                array (
                    'id' => 113,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'BERLINGO',
                ),
            67 =>
                array (
                    'id' => 114,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'BX',
                ),
            68 =>
                array (
                    'id' => 115,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C3',
                ),
            69 =>
                array (
                    'id' => 116,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C4',
                ),
            70 =>
                array (
                    'id' => 117,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C5',
                ),
            71 =>
                array (
                    'id' => 118,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C6',
                ),
            72 =>
                array (
                    'id' => 119,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C8',
                ),
            73 =>
                array (
                    'id' => 120,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'DS3',
                ),
            74 =>
                array (
                    'id' => 121,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'EVASION',
                ),
            75 =>
                array (
                    'id' => 122,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'JUMPER',
                ),
            76 =>
                array (
                    'id' => 123,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XANTIA',
                ),
            77 =>
                array (
                    'id' => 124,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XM',
                ),
            78 =>
                array (
                    'id' => 125,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XSARA',
                ),
            79 =>
                array (
                    'id' => 126,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'ZX',
                ),
            80 =>
                array (
                    'id' => 127,
                    'uuid' => Str::uuid(), 'montadora_id' => 50,
                    'modelo' => 'CL-244',
                ),
            81 =>
                array (
                    'id' => 128,
                    'uuid' => Str::uuid(), 'montadora_id' => 50,
                    'modelo' => 'CL-330',
                ),
            82 =>
                array (
                    'id' => 129,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'ESPERO',
                ),
            83 =>
                array (
                    'id' => 130,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'LANOS',
                ),
            84 =>
                array (
                    'id' => 131,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'LEGANZA',
                ),
            85 =>
                array (
                    'id' => 132,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'NUBIRA',
                ),
            86 =>
                array (
                    'id' => 133,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'PRINCE',
                ),
            87 =>
                array (
                    'id' => 134,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'RACER',
                ),
            88 =>
                array (
                    'id' => 135,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'SUPER SALON',
                ),
            89 =>
                array (
                    'id' => 136,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'TICO',
                ),
            90 =>
                array (
                    'id' => 137,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'APPLAUSE',
                ),
            91 =>
                array (
                    'id' => 138,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'CHARADE',
                ),
            92 =>
                array (
                    'id' => 139,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'CUORE',
                ),
            93 =>
                array (
                    'id' => 140,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'FEROZA',
                ),
            94 =>
                array (
                    'id' => 141,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'GRAN MOVE',
                ),
            95 =>
                array (
                    'id' => 142,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'MOVE VAN',
                ),
            96 =>
                array (
                    'id' => 143,
                    'uuid' => Str::uuid(), 'montadora_id' => 52,
                    'modelo' => 'TERIOS',
                ),
            97 =>
                array (
                    'id' => 144,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'AVENGER',
                ),
            98 =>
                array (
                    'id' => 145,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'DAKOTA',
                ),
            99 =>
                array (
                    'id' => 146,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'JOURNEY',
                ),
            100 =>
                array (
                    'id' => 147,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'RAM',
                ),
            101 =>
                array (
                    'id' => 148,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'STEALTH',
                ),
            102 =>
                array (
                    'id' => 151,
                    'uuid' => Str::uuid(), 'montadora_id' => 61,
                    'modelo' => 'M-100',
                ),
            103 =>
                array (
                    'id' => 152,
                    'uuid' => Str::uuid(), 'montadora_id' => 61,
                    'modelo' => 'PLUTUS',
                ),
            104 =>
                array (
                    'id' => 153,
                    'uuid' => Str::uuid(), 'montadora_id' => 61,
                    'modelo' => 'START',
                ),
            105 =>
                array (
                    'id' => 155,
                    'uuid' => Str::uuid(), 'montadora_id' => 61,
                    'modelo' => 'ULC',
                ),
            106 =>
                array (
                    'id' => 158,
                    'uuid' => Str::uuid(), 'montadora_id' => 63,
                    'modelo' => 'ENGESA',
                ),
            107 =>
                array (
                    'id' => 159,
                    'uuid' => Str::uuid(), 'montadora_id' => 64,
                    'modelo' => 'CAMPER',
                ),
            108 =>
                array (
                    'id' => 160,
                    'uuid' => Str::uuid(), 'montadora_id' => 64,
                    'modelo' => 'MASTER',
                ),
            109 =>
                array (
                    'id' => 161,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '348',
                ),
            110 =>
                array (
                    'id' => 162,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '355',
                ),
            111 =>
                array (
                    'id' => 163,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '360',
                ),
            112 =>
                array (
                    'id' => 164,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '456',
                ),
            113 =>
                array (
                    'id' => 165,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '550',
                ),
            114 =>
                array (
                    'id' => 166,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '575M',
                ),
            115 =>
                array (
                    'id' => 167,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '612',
                ),
            116 =>
                array (
                    'id' => 168,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'CALIFORNIA',
                ),
            117 =>
                array (
                    'id' => 169,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F430',
                ),
            118 =>
                array (
                    'id' => 170,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F599',
                ),
            119 =>
                array (
                    'id' => 171,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => '147',
                ),
            120 =>
                array (
                    'id' => 174,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => '500',
                ),
            121 =>
                array (
                    'id' => 175,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'BRAVA',
                ),
            122 =>
                array (
                    'id' => 176,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'BRAVO',
                ),
            123 =>
                array (
                    'id' => 178,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'COUPE',
                ),
            124 =>
                array (
                    'id' => 179,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'DOBLO',
                ),
            125 =>
                array (
                    'id' => 180,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'DUCATO CARGO',
                ),
            126 =>
                array (
                    'id' => 181,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'DUNA',
                ),
            127 =>
                array (
                    'id' => 182,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'ELBA',
                ),
            128 =>
                array (
                    'id' => 183,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'FIORINO',
                ),
            129 =>
                array (
                    'id' => 184,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'FREEMONT',
                ),
            130 =>
                array (
                    'id' => 185,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'GRAND SIENA',
                ),
            131 =>
                array (
                    'id' => 186,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'IDEA',
                ),
            132 =>
                array (
                    'id' => 187,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'LINEA',
                ),
            133 =>
                array (
                    'id' => 188,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'MAREA',
                ),
            134 =>
                array (
                    'id' => 189,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'OGGI',
                ),
            135 =>
                array (
                    'id' => 190,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'PALIO',
                ),
            136 =>
                array (
                    'id' => 191,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'PANORAMA',
                ),
            137 =>
                array (
                    'id' => 192,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'PREMIO',
                ),
            138 =>
                array (
                    'id' => 193,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'PUNTO',
                ),
            139 =>
                array (
                    'id' => 194,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'SIENA',
                ),
            140 =>
                array (
                    'id' => 195,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'STILO',
                ),
            141 =>
                array (
                    'id' => 196,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'STRADA',
                ),
            142 =>
                array (
                    'id' => 197,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'TEMPRA',
                ),
            143 =>
                array (
                    'id' => 198,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'TIPO',
                ),
            144 =>
                array (
                    'id' => 199,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'UNO',
                ),
            145 =>
                array (
                    'id' => 201,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'AEROSTAR',
                ),
            146 =>
                array (
                    'id' => 202,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ASPIRE',
                ),
            147 =>
                array (
                    'id' => 203,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'BELINA',
                ),
            148 =>
                array (
                    'id' => 204,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'CLUB WAGON',
                ),
            149 =>
                array (
                    'id' => 205,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'CONTOUR',
                ),
            150 =>
                array (
                    'id' => 206,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'CORCEL II',
                ),
            151 =>
                array (
                    'id' => 207,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'COURIER',
                ),
            152 =>
                array (
                    'id' => 208,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'CROWN VICTORIA',
                ),
            153 =>
                array (
                    'id' => 209,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'DEL REY',
                ),
            154 =>
                array (
                    'id' => 210,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ECOSPORT',
                ),
            155 =>
                array (
                    'id' => 211,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'EDGE',
                ),
            156 =>
                array (
                    'id' => 212,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ESCORT',
                ),
            157 =>
                array (
                    'id' => 213,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'EXPEDITION',
                ),
            158 =>
                array (
                    'id' => 214,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'EXPLORER',
                ),
            159 =>
                array (
                    'id' => 215,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-100',
                ),
            160 =>
                array (
                    'id' => 216,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-1000',
                ),
            161 =>
                array (
                    'id' => 217,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-150',
                ),
            162 =>
                array (
                    'id' => 218,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-250',
                ),
            163 =>
                array (
                    'id' => 219,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FIESTA',
                ),
            164 =>
                array (
                    'id' => 220,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FOCUS',
                ),
            165 =>
                array (
                    'id' => 221,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FURGLAINE',
                ),
            166 =>
                array (
                    'id' => 222,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FUSION',
                ),
            167 =>
                array (
                    'id' => 223,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'IBIZA',
                ),
            168 =>
                array (
                    'id' => 224,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'KA',
                ),
            169 =>
                array (
                    'id' => 225,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'MONDEO',
                ),
            170 =>
                array (
                    'id' => 226,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'MUSTANG',
                ),
            171 =>
                array (
                    'id' => 227,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'PAMPA',
                ),
            172 =>
                array (
                    'id' => 228,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'PROBE',
                ),
            173 =>
                array (
                    'id' => 229,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'RANGER',
                ),
            174 =>
                array (
                    'id' => 230,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'VERSAILLES ROYALE',
                ),
            175 =>
                array (
                    'id' => 231,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'TAURUS',
                ),
            176 =>
                array (
                    'id' => 232,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'THUNDERBIRD',
                ),
            177 =>
                array (
                    'id' => 233,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'TRANSIT',
                ),
            178 =>
                array (
                    'id' => 234,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'VERONA',
                ),
            179 =>
                array (
                    'id' => 235,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'VERSAILLES',
                ),
            180 =>
                array (
                    'id' => 236,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'WINDSTAR',
                ),
            181 =>
                array (
                    'id' => 238,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'A-10',
                ),
            182 =>
                array (
                    'id' => 239,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'A-20',
                ),
            183 =>
                array (
                    'id' => 240,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'AGILE',
                ),
            184 =>
                array (
                    'id' => 241,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'ASTRA',
                ),
            185 =>
                array (
                    'id' => 242,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'BLAZER',
                ),
            186 =>
                array (
                    'id' => 243,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'BONANZA',
                ),
            187 =>
                array (
                    'id' => 245,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'C-10',
                ),
            188 =>
                array (
                    'id' => 246,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'C-20',
                ),
            189 =>
                array (
                    'id' => 247,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CALIBRA',
                ),
            190 =>
                array (
                    'id' => 248,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CAMARO',
                ),
            191 =>
                array (
                    'id' => 249,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CAPRICE',
                ),
            192 =>
                array (
                    'id' => 250,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CAPTIVA',
                ),
            193 =>
                array (
                    'id' => 251,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CARAVAN',
                ),
            194 =>
                array (
                    'id' => 252,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CAVALIER',
                ),
            195 =>
                array (
                    'id' => 253,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CELTA',
                ),
            196 =>
                array (
                    'id' => 255,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CHEVY',
                ),
            197 =>
                array (
                    'id' => 256,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CHEYNNE',
                ),
            198 =>
                array (
                    'id' => 258,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'COBALT',
                ),
            199 =>
                array (
                    'id' => 259,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CORSA',
                ),
            200 =>
                array (
                    'id' => 262,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CORVETTE',
                ),
            201 =>
                array (
                    'id' => 263,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CRUZE',
                ),
            202 =>
                array (
                    'id' => 264,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'D-10',
                ),
            203 =>
                array (
                    'id' => 265,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'D-20',
                ),
            204 =>
                array (
                    'id' => 266,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'IPANEMA',
                ),
            205 =>
                array (
                    'id' => 267,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'KADETT',
                ),
            206 =>
                array (
                    'id' => 268,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'LUMINA',
                ),
            207 =>
                array (
                    'id' => 269,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'MALIBU',
                ),
            208 =>
                array (
                    'id' => 271,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'MERIVA',
                ),
            209 =>
                array (
                    'id' => 272,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'MONTANA',
                ),
            210 =>
                array (
                    'id' => 274,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'OMEGA',
                ),
            211 =>
                array (
                    'id' => 275,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'OPALA',
                ),
            212 =>
                array (
                    'id' => 276,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'PRISMA',
                ),
            213 =>
                array (
                    'id' => 277,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'S10',
                ),
            214 =>
                array (
                    'id' => 280,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SILVERADO',
                ),
            215 =>
                array (
                    'id' => 281,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SONIC',
                ),
            216 =>
                array (
                    'id' => 282,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SONOMA',
                ),
            217 =>
                array (
                    'id' => 283,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SPACEVAN',
                ),
            218 =>
                array (
                    'id' => 284,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SS10',
                ),
            219 =>
                array (
                    'id' => 285,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SUBURBAN',
                ),
            220 =>
                array (
                    'id' => 287,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SYCLONE',
                ),
            221 =>
                array (
                    'id' => 288,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'TIGRA',
                ),
            222 =>
                array (
                    'id' => 289,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'TRACKER',
                ),
            223 =>
                array (
                    'id' => 290,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'TRAFIC',
                ),
            224 =>
                array (
                    'id' => 291,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'VECTRA',
                ),
            225 =>
                array (
                    'id' => 292,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'VERANEIO',
                ),
            226 =>
                array (
                    'id' => 293,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'ZAFIRA',
                ),
            227 =>
                array (
                    'id' => 294,
                    'uuid' => Str::uuid(), 'montadora_id' => 75,
                    'modelo' => 'HOVER',
                ),
            228 =>
                array (
                    'id' => 295,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'BR-800',
                ),
            229 =>
                array (
                    'id' => 296,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'CARAJAS',
                ),
            230 =>
                array (
                    'id' => 297,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'TOCANTINS',
                ),
            231 =>
                array (
                    'id' => 298,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'XAVANTE',
                ),
            232 =>
                array (
                    'id' => 299,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'VIP',
                ),
            233 =>
                array (
                    'id' => 300,
                    'uuid' => Str::uuid(), 'montadora_id' => 76,
                    'modelo' => 'TOWNER',
                ),
            234 =>
                array (
                    'id' => 301,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ACCORD',
                ),
            235 =>
                array (
                    'id' => 302,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'CITY',
                ),
            236 =>
                array (
                    'id' => 303,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'CIVIC',
                ),
            237 =>
                array (
                    'id' => 304,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'CR-V',
                ),
            238 =>
                array (
                    'id' => 305,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'FIT',
                ),
            239 =>
                array (
                    'id' => 306,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ODYSSEY',
                ),
            240 =>
                array (
                    'id' => 307,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'PASSPORT',
                ),
            241 =>
                array (
                    'id' => 308,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'PRELUDE',
                ),
            242 =>
                array (
                    'id' => 309,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'ACCENT',
                ),
            243 =>
                array (
                    'id' => 310,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'ATOS',
                ),
            244 =>
                array (
                    'id' => 311,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'AZERA',
                ),
            245 =>
                array (
                    'id' => 312,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'COUPE',
                ),
            246 =>
                array (
                    'id' => 314,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'ELANTRA',
                ),
            247 =>
                array (
                    'id' => 315,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'EXCEL',
                ),
            248 =>
                array (
                    'id' => 316,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'GALLOPER',
                ),
            249 =>
                array (
                    'id' => 317,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'GENESIS',
                ),
            250 =>
                array (
                    'id' => 318,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'H1',
                ),
            251 =>
                array (
                    'id' => 319,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'H100',
                ),
            252 =>
                array (
                    'id' => 321,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'I30',
                ),
            253 =>
                array (
                    'id' => 323,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'IX35',
                ),
            254 =>
                array (
                    'id' => 324,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'MATRIX',
                ),
            255 =>
                array (
                    'id' => 325,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'PORTER',
                ),
            256 =>
                array (
                    'id' => 326,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'SANTA FE',
                ),
            257 =>
                array (
                    'id' => 327,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'SCOUPE',
                ),
            258 =>
                array (
                    'id' => 328,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'SONATA',
                ),
            259 =>
                array (
                    'id' => 329,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'TERRACAN',
                ),
            260 =>
                array (
                    'id' => 330,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'TRAJET',
                ),
            261 =>
                array (
                    'id' => 331,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'TUCSON',
                ),
            262 =>
                array (
                    'id' => 332,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'VELOSTER',
                ),
            263 =>
                array (
                    'id' => 333,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'VERACRUZ',
                ),
            267 =>
                array (
                    'id' => 337,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'J3',
                ),
            268 =>
                array (
                    'id' => 338,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'J5',
                ),
            269 =>
                array (
                    'id' => 339,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'J6',
                ),
            270 =>
                array (
                    'id' => 340,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'DAIMLER',
                ),
            271 =>
                array (
                    'id' => 341,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'S-TYPE',
                ),
            272 =>
                array (
                    'id' => 342,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'X-TYPE',
                ),
            273 =>
                array (
                    'id' => 345,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MODELOS XJ',
                ),
            274 =>
                array (
                    'id' => 352,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MODELOS XK',
                ),
            275 =>
                array (
                    'id' => 354,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'CHEROKEE',
                ),
            276 =>
                array (
                    'id' => 355,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'COMMANDER',
                ),
            277 =>
                array (
                    'id' => 356,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'COMPASS',
                ),
            278 =>
                array (
                    'id' => 357,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'GRAND CHEROKEE',
                ),
            279 =>
                array (
                    'id' => 358,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'WRANGLER',
                ),
            280 =>
                array (
                    'id' => 359,
                    'uuid' => Str::uuid(), 'montadora_id' => 88,
                    'modelo' => 'TOPIC VAN',
                ),
            281 =>
                array (
                    'id' => 360,
                    'uuid' => Str::uuid(), 'montadora_id' => 89,
                    'modelo' => 'JIPE MONTEZ',
                ),
            282 =>
                array (
                    'id' => 361,
                    'uuid' => Str::uuid(), 'montadora_id' => 89,
                    'modelo' => 'PICAPE MONTEZ',
                ),
            283 =>
                array (
                    'id' => 362,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'BESTA',
                ),
            284 =>
                array (
                    'id' => 363,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'BONGO',
                ),
            285 =>
                array (
                    'id' => 364,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CADENZA',
                ),
            286 =>
                array (
                    'id' => 365,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CARENS',
                ),
            287 =>
                array (
                    'id' => 366,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CARNIVAL',
                ),
            288 =>
                array (
                    'id' => 367,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CERATO',
                ),
            289 =>
                array (
                    'id' => 368,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CERES',
                ),
            290 =>
                array (
                    'id' => 369,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CLARUS',
                ),
            291 =>
                array (
                    'id' => 370,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'MAGENTIS',
                ),
            292 =>
                array (
                    'id' => 371,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'MOHAVE',
                ),
            293 =>
                array (
                    'id' => 372,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'OPIRUS',
                ),
            294 =>
                array (
                    'id' => 373,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'OPTIMA',
                ),
            295 =>
                array (
                    'id' => 374,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'PICANTO',
                ),
            296 =>
                array (
                    'id' => 375,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'SEPHIA',
                ),
            297 =>
                array (
                    'id' => 376,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'SHUMA',
                ),
            298 =>
                array (
                    'id' => 377,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'SORENTO',
                ),
            299 =>
                array (
                    'id' => 378,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'SOUL',
                ),
            300 =>
                array (
                    'id' => 379,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'SPORTAGE',
                ),
            301 =>
                array (
                    'id' => 380,
                    'uuid' => Str::uuid(), 'montadora_id' => 94,
                    'modelo' => 'LAIKA',
                ),
            302 =>
                array (
                    'id' => 381,
                    'uuid' => Str::uuid(), 'montadora_id' => 94,
                    'modelo' => 'NIVA',
                ),
            303 =>
                array (
                    'id' => 382,
                    'uuid' => Str::uuid(), 'montadora_id' => 94,
                    'modelo' => 'SAMARA',
                ),
            304 =>
                array (
                    'id' => 383,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'GALLARDO',
                ),
            305 =>
                array (
                    'id' => 384,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'MURCIELAGO',
                ),
            306 =>
                array (
                    'id' => 385,
                    'uuid' => Str::uuid(), 'montadora_id' => 96,
                    'modelo' => 'DEFENDER',
                ),
            307 =>
                array (
                    'id' => 386,
                    'uuid' => Str::uuid(), 'montadora_id' => 96,
                    'modelo' => 'DISCOVERY',
                ),
            308 =>
                array (
                    'id' => 389,
                    'uuid' => Str::uuid(), 'montadora_id' => 96,
                    'modelo' => 'FREELANDER',
                ),
            309 =>
                array (
                    'id' => 391,
                    'uuid' => Str::uuid(), 'montadora_id' => 96,
                    'modelo' => 'NEW RANGE',
                ),
            310 =>
                array (
                    'id' => 392,
                    'uuid' => Str::uuid(), 'montadora_id' => 96,
                    'modelo' => 'RANGE ROVER',
                ),
            311 =>
                array (
                    'id' => 393,
                    'uuid' => Str::uuid(), 'montadora_id' => 97,
                    'modelo' => 'ES',
                ),
            312 =>
                array (
                    'id' => 396,
                    'uuid' => Str::uuid(), 'montadora_id' => 97,
                    'modelo' => 'GS',
                ),
            313 =>
                array (
                    'id' => 397,
                    'uuid' => Str::uuid(), 'montadora_id' => 97,
                    'modelo' => 'IS-300',
                ),
            314 =>
                array (
                    'id' => 398,
                    'uuid' => Str::uuid(), 'montadora_id' => 97,
                    'modelo' => 'LS',
                ),
            315 =>
                array (
                    'id' => 400,
                    'uuid' => Str::uuid(), 'montadora_id' => 97,
                    'modelo' => 'RX',
                ),
            316 =>
                array (
                    'id' => 402,
                    'uuid' => Str::uuid(), 'montadora_id' => 97,
                    'modelo' => 'SC',
                ),
            317 =>
                array (
                    'id' => 403,
                    'uuid' => Str::uuid(), 'montadora_id' => 98,
                    'modelo' => '320',
                ),
            318 =>
                array (
                    'id' => 404,
                    'uuid' => Str::uuid(), 'montadora_id' => 98,
                    'modelo' => '620',
                ),
            319 =>
                array (
                    'id' => 405,
                    'uuid' => Str::uuid(), 'montadora_id' => 100,
                    'modelo' => 'H1',
                ),
            320 =>
                array (
                    'id' => 406,
                    'uuid' => Str::uuid(), 'montadora_id' => 101,
                    'modelo' => 'ELAN',
                ),
            321 =>
                array (
                    'id' => 407,
                    'uuid' => Str::uuid(), 'montadora_id' => 101,
                    'modelo' => 'ESPRIT',
                ),
            322 =>
                array (
                    'id' => 408,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'SCORPIO',
                ),
            323 =>
                array (
                    'id' => 409,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => '222',
                ),
            324 =>
                array (
                    'id' => 410,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => '228',
                ),
            325 =>
                array (
                    'id' => 411,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => '3200',
                ),
            326 =>
                array (
                    'id' => 412,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => '430',
                ),
            327 =>
                array (
                    'id' => 413,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'COUPE',
                ),
            328 =>
                array (
                    'id' => 414,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'GHIBLI',
                ),
            329 =>
                array (
                    'id' => 415,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'GRANCABRIO',
                ),
            330 =>
                array (
                    'id' => 416,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'GRANSPORT',
                ),
            331 =>
                array (
                    'id' => 417,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'GRANTURISMO',
                ),
            332 =>
                array (
                    'id' => 418,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'QUATTROPORTE',
                ),
            333 =>
                array (
                    'id' => 419,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'SHAMAL',
                ),
            334 =>
                array (
                    'id' => 420,
                    'uuid' => Str::uuid(), 'montadora_id' => 104,
                    'modelo' => 'SPIDER',
                ),
            335 =>
                array (
                    'id' => 422,
                    'uuid' => Str::uuid(), 'montadora_id' => 106,
                    'modelo' => 'PICK-UP',
                ),
            336 =>
                array (
                    'id' => 423,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => '323',
                ),
            337 =>
                array (
                    'id' => 424,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => '626',
                ),
            338 =>
                array (
                    'id' => 425,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => '929',
                ),
            339 =>
                array (
                    'id' => 426,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'B-2500',
                ),
            340 =>
                array (
                    'id' => 427,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'B2200',
                ),
            341 =>
                array (
                    'id' => 428,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'MILLENIA',
                ),
            342 =>
                array (
                    'id' => 429,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'MPV',
                ),
            343 =>
                array (
                    'id' => 430,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'MX-3',
                ),
            344 =>
                array (
                    'id' => 431,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'MX-5',
                ),
            345 =>
                array (
                    'id' => 432,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'NAVAJO',
                ),
            346 =>
                array (
                    'id' => 433,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'PROTEGE',
                ),
            347 =>
                array (
                    'id' => 434,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'RX',
                ),
            348 =>
                array (
                    'id' => 467,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE A',
                ),
            349 =>
                array (
                    'id' => 468,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE B',
                ),
            350 =>
                array (
                    'id' => 469,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE R',
                ),
            351 =>
                array (
                    'id' => 498,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE GLK',
                ),
            352 =>
                array (
                    'id' => 531,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'SPRINTER',
                ),
            353 =>
                array (
                    'id' => 532,
                    'uuid' => Str::uuid(), 'montadora_id' => 110,
                    'modelo' => 'MYSTIQUE',
                ),
            354 =>
                array (
                    'id' => 533,
                    'uuid' => Str::uuid(), 'montadora_id' => 110,
                    'modelo' => 'SABLE',
                ),
            355 =>
                array (
                    'id' => 534,
                    'uuid' => Str::uuid(), 'montadora_id' => 112,
                    'modelo' => '550',
                ),
            356 =>
                array (
                    'id' => 535,
                    'uuid' => Str::uuid(), 'montadora_id' => 112,
                    'modelo' => 'MG6',
                ),
            357 =>
                array (
                    'id' => 536,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'COOPER',
                ),
            358 =>
                array (
                    'id' => 537,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'ONE',
                ),
            359 =>
                array (
                    'id' => 538,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => '3000',
                ),
            360 =>
                array (
                    'id' => 539,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'AIRTREK',
                ),
            361 =>
                array (
                    'id' => 540,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'ASX',
                ),
            362 =>
                array (
                    'id' => 541,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'COLT',
                ),
            363 =>
                array (
                    'id' => 542,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'DIAMANT',
                ),
            364 =>
                array (
                    'id' => 543,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'ECLIPSE',
                ),
            365 =>
                array (
                    'id' => 544,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'EXPO',
                ),
            366 =>
                array (
                    'id' => 545,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'GALANT',
                ),
            367 =>
                array (
                    'id' => 546,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'GRANDIS',
                ),
            368 =>
                array (
                    'id' => 547,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'L200',
                ),
            369 =>
                array (
                    'id' => 548,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'L300',
                ),
            370 =>
                array (
                    'id' => 549,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'LANCER',
                ),
            371 =>
                array (
                    'id' => 550,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'MIRAGE',
                ),
            372 =>
                array (
                    'id' => 551,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'MONTERO',
                ),
            373 =>
                array (
                    'id' => 552,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'OUTLANDER',
                ),
            374 =>
                array (
                    'id' => 553,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'PAJERO',
                ),
            375 =>
                array (
                    'id' => 554,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'SPACE WAGON',
                ),
            376 =>
                array (
                    'id' => 555,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'BG-TRUCK',
                ),
            377 =>
                array (
                    'id' => 556,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => '350Z',
                ),
            378 =>
                array (
                    'id' => 557,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'ALTIMA',
                ),
            379 =>
                array (
                    'id' => 558,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'AX',
                ),
            380 =>
                array (
                    'id' => 559,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'D-21',
                ),
            381 =>
                array (
                    'id' => 560,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'FRONTIER',
                ),
            382 =>
                array (
                    'id' => 562,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'KING-CAB',
                ),
            383 =>
                array (
                    'id' => 563,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'LIVINA',
                ),
            384 =>
                array (
                    'id' => 564,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'MARCH',
                ),
            385 =>
                array (
                    'id' => 565,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'MAXIMA',
                ),
            386 =>
                array (
                    'id' => 567,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'MURANO',
                ),
            387 =>
                array (
                    'id' => 568,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'NX',
                ),
            388 =>
                array (
                    'id' => 569,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'PATHFINDER',
                ),
            389 =>
                array (
                    'id' => 571,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'PRIMERA',
                ),
            390 =>
                array (
                    'id' => 572,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'QUEST',
                ),
            391 =>
                array (
                    'id' => 573,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'SENTRA',
                ),
            392 =>
                array (
                    'id' => 574,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'STANZA',
                ),
            393 =>
                array (
                    'id' => 575,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => '180SX',
                ),
            394 =>
                array (
                    'id' => 576,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'TERRANO',
                ),
            395 =>
                array (
                    'id' => 577,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'TIIDA',
                ),
            396 =>
                array (
                    'id' => 578,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'VERSA',
                ),
            397 =>
                array (
                    'id' => 579,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'X-TRAIL',
                ),
            398 =>
                array (
                    'id' => 580,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'XTERRA',
                ),
            399 =>
                array (
                    'id' => 581,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'ZX',
                ),
            400 =>
                array (
                    'id' => 582,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '106',
                ),
            401 =>
                array (
                    'id' => 583,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '205',
                ),
            402 =>
                array (
                    'id' => 584,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '206',
                ),
            403 =>
                array (
                    'id' => 585,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '207',
                ),
            404 =>
                array (
                    'id' => 586,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '3008',
                ),
            405 =>
                array (
                    'id' => 587,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '306',
                ),
            406 =>
                array (
                    'id' => 588,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '307',
                ),
            407 =>
                array (
                    'id' => 589,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '308',
                ),
            408 =>
                array (
                    'id' => 590,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '405',
                ),
            409 =>
                array (
                    'id' => 591,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '406',
                ),
            410 =>
                array (
                    'id' => 592,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '407',
                ),
            411 =>
                array (
                    'id' => 593,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '408',
                ),
            412 =>
                array (
                    'id' => 594,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '504',
                ),
            413 =>
                array (
                    'id' => 595,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '505',
                ),
            414 =>
                array (
                    'id' => 596,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '508',
                ),
            415 =>
                array (
                    'id' => 597,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '605',
                ),
            416 =>
                array (
                    'id' => 598,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '607',
                ),
            417 =>
                array (
                    'id' => 599,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '806',
                ),
            418 =>
                array (
                    'id' => 600,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '807',
                ),
            419 =>
                array (
                    'id' => 601,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => 'BOXER',
                ),
            420 =>
                array (
                    'id' => 602,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => 'HOGGAR',
                ),
            421 =>
                array (
                    'id' => 603,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => 'PARTNER',
                ),
            422 =>
                array (
                    'id' => 604,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => 'RCZ',
                ),
            423 =>
                array (
                    'id' => 605,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'GRAN VOYAGER',
                ),
            424 =>
                array (
                    'id' => 606,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'SUNDANCE',
                ),
            425 =>
                array (
                    'id' => 607,
                    'uuid' => Str::uuid(), 'montadora_id' => 69,
                    'modelo' => 'TRANS-AM',
                ),
            426 =>
                array (
                    'id' => 608,
                    'uuid' => Str::uuid(), 'montadora_id' => 69,
                    'modelo' => 'TRANS-SPORT',
                ),
            427 =>
                array (
                    'id' => 609,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => '911',
                ),
            428 =>
                array (
                    'id' => 612,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => 'BOXSTER',
                ),
            429 =>
                array (
                    'id' => 613,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => 'CAYENNE',
                ),
            430 =>
                array (
                    'id' => 614,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => 'CAYMAN',
                ),
            431 =>
                array (
                    'id' => 615,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => 'PANAMERA',
                ),
            432 =>
                array (
                    'id' => 617,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => '21 SEDAN',
                ),
            433 =>
                array (
                    'id' => 618,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'CLIO',
                ),
            434 =>
                array (
                    'id' => 619,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'DUSTER',
                ),
            435 =>
                array (
                    'id' => 620,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'EXPRESS',
                ),
            436 =>
                array (
                    'id' => 621,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'FLUENCE',
                ),
            437 =>
                array (
                    'id' => 622,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'KANGOO',
                ),
            438 =>
                array (
                    'id' => 623,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'LAGUNA',
                ),
            439 =>
                array (
                    'id' => 624,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'LOGAN',
                ),
            440 =>
                array (
                    'id' => 625,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'MASTER',
                ),
            441 =>
                array (
                    'id' => 626,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'MEGANE',
                ),
            442 =>
                array (
                    'id' => 627,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SAFRANE',
                ),
            443 =>
                array (
                    'id' => 628,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SANDERO',
                ),
            444 =>
                array (
                    'id' => 629,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SCENIC',
                ),
            445 =>
                array (
                    'id' => 630,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SYMBOL',
                ),
            446 =>
                array (
                    'id' => 631,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'TRAFIC',
                ),
            447 =>
                array (
                    'id' => 632,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'TWINGO',
                ),
            448 =>
                array (
                    'id' => 634,
                    'uuid' => Str::uuid(), 'montadora_id' => 137,
                    'modelo' => '9000',
                ),
            449 =>
                array (
                    'id' => 635,
                    'uuid' => Str::uuid(), 'montadora_id' => 162,
                    'modelo' => 'SL-2',
                ),
            450 =>
                array (
                    'id' => 636,
                    'uuid' => Str::uuid(), 'montadora_id' => 130,
                    'modelo' => 'CORDOBA',
                ),
            451 =>
                array (
                    'id' => 637,
                    'uuid' => Str::uuid(), 'montadora_id' => 130,
                    'modelo' => 'IBIZA',
                ),
            452 =>
                array (
                    'id' => 638,
                    'uuid' => Str::uuid(), 'montadora_id' => 130,
                    'modelo' => 'INCA',
                ),
            453 =>
                array (
                    'id' => 641,
                    'uuid' => Str::uuid(), 'montadora_id' => 142,
                    'modelo' => 'FORTWO',
                ),
            454 =>
                array (
                    'id' => 642,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'ACTYON SPORTS',
                ),
            455 =>
                array (
                    'id' => 643,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'CHAIRMAN',
                ),
            456 =>
                array (
                    'id' => 644,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'ISTANA',
                ),
            457 =>
                array (
                    'id' => 645,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'KORANDO',
                ),
            458 =>
                array (
                    'id' => 646,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'KYRON',
                ),
            459 =>
                array (
                    'id' => 647,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'MUSSO',
                ),
            460 =>
                array (
                    'id' => 648,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'REXTON',
                ),
            461 =>
                array (
                    'id' => 649,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'FORESTER',
                ),
            462 =>
                array (
                    'id' => 650,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'IMPREZA',
                ),
            463 =>
                array (
                    'id' => 651,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'LEGACY',
                ),
            464 =>
                array (
                    'id' => 652,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'OUTBACK',
                ),
            465 =>
                array (
                    'id' => 653,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'SVX',
                ),
            466 =>
                array (
                    'id' => 654,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'TRIBECA',
                ),
            467 =>
                array (
                    'id' => 655,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'VIVIO',
                ),
            468 =>
                array (
                    'id' => 656,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'BALENO',
                ),
            469 =>
                array (
                    'id' => 657,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'GRAND VITARA',
                ),
            470 =>
                array (
                    'id' => 658,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'IGNIS',
                ),
            471 =>
                array (
                    'id' => 660,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'JIMNY',
                ),
            472 =>
                array (
                    'id' => 662,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'SUPER CARRY',
                ),
            473 =>
                array (
                    'id' => 663,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'SWIFT',
                ),
            474 =>
                array (
                    'id' => 664,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'SX4',
                ),
            475 =>
                array (
                    'id' => 665,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'VITARA',
                ),
            476 =>
                array (
                    'id' => 666,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'WAGON R',
                ),
            477 =>
                array (
                    'id' => 667,
                    'uuid' => Str::uuid(), 'montadora_id' => 146,
                    'modelo' => 'STARK',
                ),
            478 =>
                array (
                    'id' => 668,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'AVALON',
                ),
            479 =>
                array (
                    'id' => 669,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'BANDEIRANTE',
                ),
            480 =>
                array (
                    'id' => 670,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'CAMRY',
                ),
            481 =>
                array (
                    'id' => 671,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'CELICA',
                ),
            482 =>
                array (
                    'id' => 672,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'COROLLA',
                ),
            483 =>
                array (
                    'id' => 673,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'CORONA',
                ),
            484 =>
                array (
                    'id' => 674,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'HILUX',
                ),
            485 =>
                array (
                    'id' => 675,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'LAND CRUISER',
                ),
            486 =>
                array (
                    'id' => 676,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'MR-2',
                ),
            487 =>
                array (
                    'id' => 677,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'PASEO',
                ),
            488 =>
                array (
                    'id' => 678,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'PREVIA',
                ),
            489 =>
                array (
                    'id' => 679,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'RAV4',
                ),
            490 =>
                array (
                    'id' => 680,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'SUPRA',
                ),
            491 =>
                array (
                    'id' => 682,
                    'uuid' => Str::uuid(), 'montadora_id' => 149,
                    'modelo' => 'PANTANAL',
                ),
            492 =>
                array (
                    'id' => 684,
                    'uuid' => Str::uuid(), 'montadora_id' => 149,
                    'modelo' => 'T-4',
                ),
            493 =>
                array (
                    'id' => 685,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '400 SERIES',
                ),
            494 =>
                array (
                    'id' => 687,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '850',
                ),
            495 =>
                array (
                    'id' => 688,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '900 SERIES',
                ),
            496 =>
                array (
                    'id' => 700,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'AMAROK',
                ),
            497 =>
                array (
                    'id' => 701,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'APOLLO',
                ),
            498 =>
                array (
                    'id' => 702,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'BORA',
                ),
            499 =>
                array (
                    'id' => 703,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'CARAVELLE',
                ),
        ));
        \DB::table('modelos')->insert(array (
            0 =>
                array (
                    'id' => 704,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'CORRADO',
                ),
            1 =>
                array (
                    'id' => 706,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'EOS',
                ),
            2 =>
                array (
                    'id' => 707,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'EUROVAN',
                ),
            3 =>
                array (
                    'id' => 708,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'FOX',
                ),
            4 =>
                array (
                    'id' => 709,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'FUSCA',
                ),
            5 =>
                array (
                    'id' => 710,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'GOL',
                ),
            6 =>
                array (
                    'id' => 711,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'GOLF',
                ),
            7 =>
                array (
                    'id' => 713,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'JETTA',
                ),
            8 =>
                array (
                    'id' => 714,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'KOMBI',
                ),
            9 =>
                array (
                    'id' => 715,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'LOGUS',
                ),
            10 =>
                array (
                    'id' => 717,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'PARATI',
                ),
            11 =>
                array (
                    'id' => 718,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'PASSAT',
                ),
            12 =>
                array (
                    'id' => 719,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'POINTER',
                ),
            13 =>
                array (
                    'id' => 720,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'POLO',
                ),
            14 =>
                array (
                    'id' => 722,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'SANTANA',
                ),
            15 =>
                array (
                    'id' => 723,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'SAVEIRO',
                ),
            16 =>
                array (
                    'id' => 725,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'SPACEFOX',
                ),
            17 =>
                array (
                    'id' => 726,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'TIGUAN',
                ),
            18 =>
                array (
                    'id' => 727,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'TOUAREG',
                ),
            19 =>
                array (
                    'id' => 729,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'VOYAGE',
                ),
            20 =>
                array (
                    'id' => 732,
                    'uuid' => Str::uuid(), 'montadora_id' => 25,
                    'modelo' => 'ZDX',
                ),
            21 =>
                array (
                    'id' => 737,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => '140',
                ),
            22 =>
                array (
                    'id' => 755,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'BRASILIA',
                ),
            23 =>
                array (
                    'id' => 756,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'BRASILVAN',
                ),
            24 =>
                array (
                    'id' => 775,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'CORCEL',
                ),
            25 =>
                array (
                    'id' => 803,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'PALIO WEEKEND',
                ),
            26 =>
                array (
                    'id' => 806,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FOCUS SEDAN',
                ),
            27 =>
                array (
                    'id' => 807,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FIESTA SEDAN',
                ),
            28 =>
                array (
                    'id' => 808,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FIESTA TRAIL',
                ),
            29 =>
                array (
                    'id' => 810,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '207 SW',
                ),
            30 =>
                array (
                    'id' => 811,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ESCORT SW',
                ),
            31 =>
                array (
                    'id' => 812,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '307 SEDAN',
                ),
            32 =>
                array (
                    'id' => 813,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '307 SW',
                ),
            33 =>
                array (
                    'id' => 815,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C4 PALLAS',
                ),
            34 =>
                array (
                    'id' => 816,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C4 PICASSO',
                ),
            35 =>
                array (
                    'id' => 817,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C4 VTR',
                ),
            36 =>
                array (
                    'id' => 818,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'CLIO SEDAN',
                ),
            37 =>
                array (
                    'id' => 819,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'COROLLA FIELDER',
                ),
            38 =>
                array (
                    'id' => 824,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'HILUX SW4',
                ),
            39 =>
                array (
                    'id' => 825,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'MEGANE GRAND TOUR',
                ),
            40 =>
                array (
                    'id' => 827,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SANDERO STEPWAY',
                ),
            41 =>
                array (
                    'id' => 829,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XSARA PICASSO',
                ),
            42 =>
                array (
                    'id' => 1360,
                    'uuid' => Str::uuid(), 'montadora_id' => 131,
                    'modelo' => 'COLHEITADEIRA',
                ),
            43 =>
                array (
                    'id' => 1361,
                    'uuid' => Str::uuid(), 'montadora_id' => 158,
                    'modelo' => 'PICKUP F75',
                ),
            44 =>
                array (
                    'id' => 1362,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'X12',
                ),
            45 =>
                array (
                    'id' => 1365,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'BEL AIR',
                ),
            46 =>
                array (
                    'id' => 1366,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'RX',
                ),
            47 =>
                array (
                    'id' => 1369,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'C-14',
                ),
            48 =>
                array (
                    'id' => 1370,
                    'uuid' => Str::uuid(), 'montadora_id' => 155,
                    'modelo' => 'SRX4',
                ),
            49 =>
                array (
                    'id' => 1372,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'C-15',
                ),
            50 =>
                array (
                    'id' => 1373,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'BRASIL',
                ),
            51 =>
                array (
                    'id' => 1377,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'POLARA',
                ),
            52 =>
                array (
                    'id' => 1380,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => '600',
                ),
            53 =>
                array (
                    'id' => 1382,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-01',
                ),
            54 =>
                array (
                    'id' => 1383,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FALCON',
                ),
            55 =>
                array (
                    'id' => 1384,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'GALAXIE',
                ),
            56 =>
                array (
                    'id' => 1386,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'MAVERICK',
                ),
            57 =>
                array (
                    'id' => 1387,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'MODELO A',
                ),
            58 =>
                array (
                    'id' => 1388,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'NEW FIESTA',
                ),
            59 =>
                array (
                    'id' => 1389,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA FX',
                ),
            60 =>
                array (
                    'id' => 1391,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GTS',
                ),
            61 =>
                array (
                    'id' => 1392,
                    'uuid' => Str::uuid(), 'montadora_id' => 80,
                    'modelo' => 'H3',
                ),
            62 =>
                array (
                    'id' => 1394,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'PRIME',
                ),
            63 =>
                array (
                    'id' => 1395,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'TIBURON',
                ),
            64 =>
                array (
                    'id' => 1397,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'JEEP',
                ),
            65 =>
                array (
                    'id' => 1398,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'CJ5',
                ),
            66 =>
                array (
                    'id' => 1399,
                    'uuid' => Str::uuid(), 'montadora_id' => 239,
                    'modelo' => 'TC',
                ),
            67 =>
                array (
                    'id' => 1404,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE CLC',
                ),
            68 =>
                array (
                    'id' => 1405,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE CLS',
                ),
            69 =>
                array (
                    'id' => 1408,
                    'uuid' => Str::uuid(), 'montadora_id' => 110,
                    'modelo' => 'MONTEREY',
                ),
            70 =>
                array (
                    'id' => 1411,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'TOPSPORT',
                ),
            71 =>
                array (
                    'id' => 1412,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'TARGA',
                ),
            72 =>
                array (
                    'id' => 1414,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'X8',
                ),
            73 =>
                array (
                    'id' => 1415,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => '370Z',
                ),
            74 =>
                array (
                    'id' => 1418,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GTB',
                ),
            75 =>
                array (
                    'id' => 1419,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GTC',
                ),
            76 =>
                array (
                    'id' => 1420,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GTE',
                ),
            77 =>
                array (
                    'id' => 1421,
                    'uuid' => Str::uuid(), 'montadora_id' => 115,
                    'modelo' => 'AUSTIN',
                ),
            78 =>
                array (
                    'id' => 1423,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => '7TL',
                ),
            79 =>
                array (
                    'id' => 1424,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => '19',
                ),
            80 =>
                array (
                    'id' => 1426,
                    'uuid' => Str::uuid(), 'montadora_id' => 175,
                    'modelo' => 'CONVERSÍVEL',
                ),
            81 =>
                array (
                    'id' => 1427,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'SUPERMINI',
                ),
            82 =>
                array (
                    'id' => 1428,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'TL',
                ),
            83 =>
                array (
                    'id' => 1429,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'TOPOLINO',
                ),
            84 =>
                array (
                    'id' => 1430,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'SR5',
                ),
            85 =>
                array (
                    'id' => 1431,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'VITZ',
                ),
            86 =>
                array (
                    'id' => 1432,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'VARIANT',
                ),
            87 =>
                array (
                    'id' => 1454,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'CANDANGO',
                ),
            88 =>
                array (
                    'id' => 1460,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'SP2',
                ),
            89 =>
                array (
                    'id' => 1466,
                    'uuid' => Str::uuid(), 'montadora_id' => 258,
                    'modelo' => 'RECORB',
                ),
            90 =>
                array (
                    'id' => 1467,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'POLAUTO',
                ),
            91 =>
                array (
                    'id' => 1508,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'GORDINI',
                ),
            92 =>
                array (
                    'id' => 1509,
                    'uuid' => Str::uuid(), 'montadora_id' => 265,
                    'modelo' => 'MINX',
                ),
            93 =>
                array (
                    'id' => 1971,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'ETIOS',
                ),
            94 =>
                array (
                    'id' => 1972,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'ONIX',
                ),
            95 =>
                array (
                    'id' => 1973,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'HB20',
                ),
            96 =>
                array (
                    'id' => 1975,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '330',
                ),
            97 =>
                array (
                    'id' => 1976,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '520',
                ),
            98 =>
                array (
                    'id' => 1978,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '730',
                ),
            99 =>
                array (
                    'id' => 1980,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'M1',
                ),
            100 =>
                array (
                    'id' => 1982,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'SERIE Z',
                ),
            101 =>
                array (
                    'id' => 1983,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE SLK',
                ),
            102 =>
                array (
                    'id' => 1984,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE C',
                ),
            103 =>
                array (
                    'id' => 1985,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE E',
                ),
            104 =>
                array (
                    'id' => 1986,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE CL',
                ),
            105 =>
                array (
                    'id' => 1987,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE CLK',
                ),
            106 =>
                array (
                    'id' => 1988,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE S',
                ),
            107 =>
                array (
                    'id' => 1989,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE SL',
                ),
            108 =>
                array (
                    'id' => 1990,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE SLS',
                ),
            109 =>
                array (
                    'id' => 1991,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE G',
                ),
            110 =>
                array (
                    'id' => 1992,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE GL',
                ),
            111 =>
                array (
                    'id' => 1993,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE M',
                ),
            112 =>
                array (
                    'id' => 2032,
                    'uuid' => Str::uuid(), 'montadora_id' => 288,
                    'modelo' => '1500',
                ),
            113 =>
                array (
                    'id' => 2061,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'EQUUS',
                ),
            114 =>
                array (
                    'id' => 2067,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => '350 GT',
                ),
            115 =>
                array (
                    'id' => 2068,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => '400 GT',
                ),
            116 =>
                array (
                    'id' => 2069,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'MIURA',
                ),
            117 =>
                array (
                    'id' => 2070,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'ISLERO',
                ),
            118 =>
                array (
                    'id' => 2071,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'ESPADA',
                ),
            119 =>
                array (
                    'id' => 2072,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'COUNTACH',
                ),
            120 =>
                array (
                    'id' => 2073,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'DIABLO',
                ),
            121 =>
                array (
                    'id' => 2074,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'ZAGATO',
                ),
            122 =>
                array (
                    'id' => 2075,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'ALAR',
                ),
            123 =>
                array (
                    'id' => 2076,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'LM002',
                ),
            124 =>
                array (
                    'id' => 2077,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'REVENTON',
                ),
            125 =>
                array (
                    'id' => 2078,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'ANKONIAN',
                ),
            126 =>
                array (
                    'id' => 2080,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'AVENTADOR',
                ),
            127 =>
                array (
                    'id' => 2081,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'SESTO ELEMENTO',
                ),
            128 =>
                array (
                    'id' => 2082,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'J3 TURIN',
                ),
            129 =>
                array (
                    'id' => 2083,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'J2',
                ),
            130 =>
                array (
                    'id' => 2084,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SANDERO GT',
                ),
            131 =>
                array (
                    'id' => 2087,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SPIN',
                ),
            132 =>
                array (
                    'id' => 2088,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'TRAILBLAZER',
                ),
            133 =>
                array (
                    'id' => 2097,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C3 PICASSO',
                ),
            134 =>
                array (
                    'id' => 2098,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'GRAND C4 PICASSO',
                ),
            135 =>
                array (
                    'id' => 2099,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'JUMPER MINIBUS',
                ),
            136 =>
                array (
                    'id' => 2100,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'JUMPER VETRATO',
                ),
            137 =>
                array (
                    'id' => 2101,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '207 SEDAN',
                ),
            138 =>
                array (
                    'id' => 2102,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '207 QUIKSILVER',
                ),
            139 =>
                array (
                    'id' => 2103,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '207 ESCAPADE',
                ),
            140 =>
                array (
                    'id' => 2104,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '308 CC',
                ),
            141 =>
                array (
                    'id' => 2105,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => 'BOXER PASSAGEIRO',
                ),
            142 =>
                array (
                    'id' => 2106,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'NEW FIESTA SEDAN',
                ),
            143 =>
                array (
                    'id' => 2108,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'TRANSIT PASSAGEIRO',
                ),
            144 =>
                array (
                    'id' => 2109,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'TRANSIT CHASSI',
                ),
            145 =>
                array (
                    'id' => 2110,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A4 AVANT',
                ),
            146 =>
                array (
                    'id' => 2111,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S4 AVANT',
                ),
            147 =>
                array (
                    'id' => 2112,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A5 SPORTBACK',
                ),
            148 =>
                array (
                    'id' => 2113,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A5 CABRIOLET',
                ),
            149 =>
                array (
                    'id' => 2114,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S5 COUPE',
                ),
            150 =>
                array (
                    'id' => 2115,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S5 SPORTBACK',
                ),
            151 =>
                array (
                    'id' => 2116,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S5 CABRIOLET',
                ),
            152 =>
                array (
                    'id' => 2117,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A6 AVANT',
                ),
            153 =>
                array (
                    'id' => 2118,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A6 ALLROAD',
                ),
            154 =>
                array (
                    'id' => 2119,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S6 AVANT',
                ),
            155 =>
                array (
                    'id' => 2120,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'S7',
                ),
            156 =>
                array (
                    'id' => 2121,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'TT ROADSTER',
                ),
            157 =>
                array (
                    'id' => 2122,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'TT RS',
                ),
            158 =>
                array (
                    'id' => 2123,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'TT RS ROADSTER',
                ),
            159 =>
                array (
                    'id' => 2124,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'TTS ROADSTER',
                ),
            160 =>
                array (
                    'id' => 2125,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'R8 SPYDER',
                ),
            161 =>
                array (
                    'id' => 2126,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'R8 GT',
                ),
            162 =>
                array (
                    'id' => 2127,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'R8 GT SPYDER',
                ),
            163 =>
                array (
                    'id' => 2129,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F12',
                ),
            164 =>
                array (
                    'id' => 2130,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '458 SPIDER',
                ),
            165 =>
                array (
                    'id' => 2131,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '458 ITALIA',
                ),
            166 =>
                array (
                    'id' => 2132,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'FF',
                ),
            167 =>
                array (
                    'id' => 2133,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '599',
                ),
            168 =>
                array (
                    'id' => 2134,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'SA',
                ),
            169 =>
                array (
                    'id' => 2135,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'CHALLENGE',
                ),
            170 =>
                array (
                    'id' => 2136,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'SUPERAMERICA',
                ),
            171 =>
                array (
                    'id' => 2137,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F430 SPIDER',
                ),
            172 =>
                array (
                    'id' => 2138,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '430',
                ),
            173 =>
                array (
                    'id' => 2139,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '612 SESSANTA',
                ),
            174 =>
                array (
                    'id' => 2140,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '599 GTB',
                ),
            175 =>
                array (
                    'id' => 2141,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'SCUDERIA SPIDER',
                ),
            176 =>
                array (
                    'id' => 2142,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '512',
                ),
            177 =>
                array (
                    'id' => 2143,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '456 GT',
                ),
            178 =>
                array (
                    'id' => 2144,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '348 GTS',
                ),
            179 =>
                array (
                    'id' => 2145,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '348 SPIDER',
                ),
            180 =>
                array (
                    'id' => 2146,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F355',
                ),
            181 =>
                array (
                    'id' => 2147,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F355 SPIDER',
                ),
            182 =>
                array (
                    'id' => 2148,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'F50',
                ),
            183 =>
                array (
                    'id' => 2149,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '355 SPIDER',
                ),
            184 =>
                array (
                    'id' => 2150,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '360 MODENA',
                ),
            185 =>
                array (
                    'id' => 2151,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'PAJERO FULL',
                ),
            186 =>
                array (
                    'id' => 2152,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'PAJERO DAKAR',
                ),
            187 =>
                array (
                    'id' => 2153,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'PAJERO TR4',
                ),
            188 =>
                array (
                    'id' => 2154,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'LANCER SPORTBACK',
                ),
            189 =>
                array (
                    'id' => 2155,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'LANCER EVOLUTION',
                ),
            190 =>
                array (
                    'id' => 2156,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'L200 TRITON SAVANA',
                ),
            191 =>
                array (
                    'id' => 2157,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'L200 TRITON',
                ),
            192 =>
                array (
                    'id' => 2159,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'LIVINA X-GEAR',
                ),
            193 =>
                array (
                    'id' => 2160,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => 'GRAND LIVINA',
                ),
            194 =>
                array (
                    'id' => 2161,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'NEW ACTYON SPORTS',
                ),
            195 =>
                array (
                    'id' => 2162,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'PRIUS',
                ),
            196 =>
                array (
                    'id' => 2163,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'SPORT',
                ),
            197 =>
                array (
                    'id' => 2164,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'MTS',
                ),
            198 =>
                array (
                    'id' => 2165,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'SPIDER',
                ),
            199 =>
                array (
                    'id' => 2166,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'KABRIO',
                ),
            200 =>
                array (
                    'id' => 2167,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'SAGA',
                ),
            201 =>
                array (
                    'id' => 2168,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'SAGA II',
                ),
            202 =>
                array (
                    'id' => 2169,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => '787',
                ),
            203 =>
                array (
                    'id' => 2170,
                    'uuid' => Str::uuid(), 'montadora_id' => 114,
                    'modelo' => 'X11',
                ),
            204 =>
                array (
                    'id' => 2171,
                    'uuid' => Str::uuid(), 'montadora_id' => 295,
                    'modelo' => 'GAIOLA',
                ),
            205 =>
                array (
                    'id' => 2175,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'NITRO',
                ),
            206 =>
                array (
                    'id' => 2176,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'CHALLENGER',
                ),
            207 =>
                array (
                    'id' => 2177,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'DART',
                ),
            208 =>
                array (
                    'id' => 2178,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'LE BARON',
                ),
            209 =>
                array (
                    'id' => 2179,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'CORDOBA',
                ),
            210 =>
                array (
                    'id' => 2180,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'CHARGER',
                ),
            211 =>
                array (
                    'id' => 2181,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'WINDSOR',
                ),
            212 =>
                array (
                    'id' => 2183,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'CROSSFIRE',
                ),
            213 =>
                array (
                    'id' => 2184,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => 'CORDOBA',
                ),
            214 =>
                array (
                    'id' => 2185,
                    'uuid' => Str::uuid(), 'montadora_id' => 155,
                    'modelo' => 'ESCALADE',
                ),
            215 =>
                array (
                    'id' => 2186,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'RIVIERA',
                ),
            216 =>
                array (
                    'id' => 2187,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'COUPE',
                ),
            217 =>
                array (
                    'id' => 2188,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'CENTURY',
                ),
            218 =>
                array (
                    'id' => 2189,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'APOLLO',
                ),
            219 =>
                array (
                    'id' => 2190,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'CENTURION',
                ),
            220 =>
                array (
                    'id' => 2191,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'EIGHT',
                ),
            221 =>
                array (
                    'id' => 2192,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'ELECTRA',
                ),
            222 =>
                array (
                    'id' => 2193,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'ESTATE WAGON',
                ),
            223 =>
                array (
                    'id' => 2194,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'GRAN SPORT',
                ),
            224 =>
                array (
                    'id' => 2195,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'GSX',
                ),
            225 =>
                array (
                    'id' => 2196,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'INVICTA',
                ),
            226 =>
                array (
                    'id' => 2197,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'LESABRE',
                ),
            227 =>
                array (
                    'id' => 2198,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'LIMITED',
                ),
            228 =>
                array (
                    'id' => 2199,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'PARK AVENUE',
                ),
            229 =>
                array (
                    'id' => 2200,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'RAINIER',
                ),
            230 =>
                array (
                    'id' => 2201,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'REATTA',
                ),
            231 =>
                array (
                    'id' => 2202,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'REGAL',
                ),
            232 =>
                array (
                    'id' => 2203,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'RENDEZVOUS',
                ),
            233 =>
                array (
                    'id' => 2204,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'ROADMASTER',
                ),
            234 =>
                array (
                    'id' => 2205,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'ROYAUM',
                ),
            235 =>
                array (
                    'id' => 2206,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'SKYHAWK',
                ),
            236 =>
                array (
                    'id' => 2207,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'SKYLARK',
                ),
            237 =>
                array (
                    'id' => 2208,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'SOMERSET',
                ),
            238 =>
                array (
                    'id' => 2209,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'SPECIAL',
                ),
            239 =>
                array (
                    'id' => 2210,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'SPORT WAGON',
                ),
            240 =>
                array (
                    'id' => 2211,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'SUPER',
                ),
            241 =>
                array (
                    'id' => 2212,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'TERRAZA',
                ),
            242 =>
                array (
                    'id' => 2213,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'WILDCAT',
                ),
            243 =>
                array (
                    'id' => 2214,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'LACROSSE',
                ),
            244 =>
                array (
                    'id' => 2215,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'ENCLAVE',
                ),
            245 =>
                array (
                    'id' => 2217,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'GL8',
                ),
            246 =>
                array (
                    'id' => 2218,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'HRV',
                ),
            247 =>
                array (
                    'id' => 2219,
                    'uuid' => Str::uuid(), 'montadora_id' => 41,
                    'modelo' => 'LUCERNE',
                ),
            248 =>
                array (
                    'id' => 2230,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'SIERRA',
                ),
            249 =>
                array (
                    'id' => 2231,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'BROUGHAM',
                ),
            250 =>
                array (
                    'id' => 2232,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'CHAIRMAN',
                ),
            251 =>
                array (
                    'id' => 2233,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'DAMAS',
                ),
            252 =>
                array (
                    'id' => 2234,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'GENTRA',
                ),
            253 =>
                array (
                    'id' => 2235,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'MAEPSY',
                ),
            254 =>
                array (
                    'id' => 2236,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'ISTANA',
                ),
            255 =>
                array (
                    'id' => 2237,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'KALOS',
                ),
            256 =>
                array (
                    'id' => 2238,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'KORANDO',
                ),
            257 =>
                array (
                    'id' => 2239,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'LACETTI',
                ),
            258 =>
                array (
                    'id' => 2240,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'LEMANS',
                ),
            259 =>
                array (
                    'id' => 2242,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'MATIZ',
                ),
            260 =>
                array (
                    'id' => 2243,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'MUSSO',
                ),
            261 =>
                array (
                    'id' => 2244,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'NEXIA',
                ),
            262 =>
                array (
                    'id' => 2245,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'REZZO',
                ),
            263 =>
                array (
                    'id' => 2246,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'ROYALE PRINCE',
                ),
            264 =>
                array (
                    'id' => 2247,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'ROYALE SALON',
                ),
            265 =>
                array (
                    'id' => 2248,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'STATESMAN',
                ),
            266 =>
                array (
                    'id' => 2249,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'TOSCA',
                ),
            267 =>
                array (
                    'id' => 2250,
                    'uuid' => Str::uuid(), 'montadora_id' => 51,
                    'modelo' => 'WINSTORM',
                ),
            268 =>
                array (
                    'id' => 2252,
                    'uuid' => Str::uuid(), 'montadora_id' => 158,
                    'modelo' => 'RURAL',
                ),
            269 =>
                array (
                    'id' => 2253,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'D100',
                ),
            270 =>
                array (
                    'id' => 2259,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => '170',
                ),
            271 =>
                array (
                    'id' => 2261,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'CUSTOM ROYAL',
                ),
            272 =>
                array (
                    'id' => 2262,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CLUB COUPE',
                ),
            273 =>
                array (
                    'id' => 2263,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'MAGNUM',
                ),
            274 =>
                array (
                    'id' => 2264,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'GMC 100',
                ),
            275 =>
                array (
                    'id' => 2265,
                    'uuid' => Str::uuid(), 'montadora_id' => 69,
                    'modelo' => 'SOLSTICE',
                ),
            276 =>
                array (
                    'id' => 2266,
                    'uuid' => Str::uuid(), 'montadora_id' => 158,
                    'modelo' => 'ITAMARATY',
                ),
            277 =>
                array (
                    'id' => 2267,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK V',
                ),
            278 =>
                array (
                    'id' => 2268,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GT',
                ),
            279 =>
                array (
                    'id' => 2269,
                    'uuid' => Str::uuid(), 'montadora_id' => 145,
                    'modelo' => 'CHAMPION',
                ),
            280 =>
                array (
                    'id' => 2270,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'BALILLA',
                ),
            281 =>
                array (
                    'id' => 2271,
                    'uuid' => Str::uuid(), 'montadora_id' => 158,
                    'modelo' => 'INTERLAGOS',
                ),
            282 =>
                array (
                    'id' => 2272,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'X15',
                ),
            283 =>
                array (
                    'id' => 2273,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-85',
                ),
            284 =>
                array (
                    'id' => 2274,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => 'SPEEDSTER 356',
                ),
            285 =>
                array (
                    'id' => 2275,
                    'uuid' => Str::uuid(), 'montadora_id' => 88,
                    'modelo' => 'TOPIC FURGAO',
                ),
            286 =>
                array (
                    'id' => 2276,
                    'uuid' => Str::uuid(), 'montadora_id' => 88,
                    'modelo' => 'TOPIC ESCOLAR',
                ),
            287 =>
                array (
                    'id' => 2279,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => '300D',
                ),
            288 =>
                array (
                    'id' => 2280,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE TE',
                ),
            289 =>
                array (
                    'id' => 2283,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'T-100',
                ),
            290 =>
                array (
                    'id' => 2294,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'MEGANE SEDAN',
                ),
            291 =>
                array (
                    'id' => 2295,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A4 CABRIOLET',
                ),
            292 =>
                array (
                    'id' => 2298,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA G',
                ),
            293 =>
                array (
                    'id' => 2299,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA G COUPE',
                ),
            294 =>
                array (
                    'id' => 2300,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA G CONVERSIVEL',
                ),
            295 =>
                array (
                    'id' => 2301,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA M',
                ),
            296 =>
                array (
                    'id' => 2302,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA EX',
                ),
            297 =>
                array (
                    'id' => 2303,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA JX',
                ),
            298 =>
                array (
                    'id' => 2304,
                    'uuid' => Str::uuid(), 'montadora_id' => 82,
                    'modelo' => 'LINHA QX',
                ),
            299 =>
                array (
                    'id' => 2305,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MODELOS XF',
                ),
            300 =>
                array (
                    'id' => 2306,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'F-TYPE',
                ),
            301 =>
                array (
                    'id' => 2307,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK VII',
                ),
            302 =>
                array (
                    'id' => 2308,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK VIII',
                ),
            303 =>
                array (
                    'id' => 2309,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK IX',
                ),
            304 =>
                array (
                    'id' => 2310,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK X',
                ),
            305 =>
                array (
                    'id' => 2311,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'E-TYPE',
                ),
            306 =>
                array (
                    'id' => 2312,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'C-TYPE',
                ),
            307 =>
                array (
                    'id' => 2313,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'D-TYPE',
                ),
            308 =>
                array (
                    'id' => 2314,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK I',
                ),
            309 =>
                array (
                    'id' => 2315,
                    'uuid' => Str::uuid(), 'montadora_id' => 86,
                    'modelo' => 'MARK II',
                ),
            310 =>
                array (
                    'id' => 2346,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GT4R',
                ),
            311 =>
                array (
                    'id' => 2347,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'SPYDER',
                ),
            312 =>
                array (
                    'id' => 2348,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'GTI',
                ),
            313 =>
                array (
                    'id' => 2349,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'AM1',
                ),
            314 =>
                array (
                    'id' => 2350,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'AM2',
                ),
            315 =>
                array (
                    'id' => 2351,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'AM3',
                ),
            316 =>
                array (
                    'id' => 2352,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'AM4',
                ),
            317 =>
                array (
                    'id' => 2353,
                    'uuid' => Str::uuid(), 'montadora_id' => 124,
                    'modelo' => 'AMV',
                ),
            318 =>
                array (
                    'id' => 2377,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ACTY',
                ),
            319 =>
                array (
                    'id' => 2378,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'AIRWAVE',
                ),
            320 =>
                array (
                    'id' => 2379,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ASCOT',
                ),
            321 =>
                array (
                    'id' => 2380,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'BALLADE',
                ),
            322 =>
                array (
                    'id' => 2381,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'BEAT',
                ),
            323 =>
                array (
                    'id' => 2382,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'CR-X',
                ),
            324 =>
                array (
                    'id' => 2383,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'CONCERTO',
                ),
            325 =>
                array (
                    'id' => 2384,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'CR-Z',
                ),
            326 =>
                array (
                    'id' => 2385,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'DOMANI',
                ),
            327 =>
                array (
                    'id' => 2386,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'EDIX',
                ),
            328 =>
                array (
                    'id' => 2387,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ELEMENT',
                ),
            329 =>
                array (
                    'id' => 2388,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'EV PLUS',
                ),
            330 =>
                array (
                    'id' => 2389,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'FCX',
                ),
            331 =>
                array (
                    'id' => 2390,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'FR-V',
                ),
            332 =>
                array (
                    'id' => 2392,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'HR-V',
                ),
            333 =>
                array (
                    'id' => 2393,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'HSC',
                ),
            334 =>
                array (
                    'id' => 2394,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'INSIGHT',
                ),
            335 =>
                array (
                    'id' => 2396,
                    'uuid' => Str::uuid(), 'montadora_id' => 25,
                    'modelo' => 'TL',
                ),
            336 =>
                array (
                    'id' => 2397,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'LIFE DUNK',
                ),
            337 =>
                array (
                    'id' => 2398,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'LOGO',
                ),
            338 =>
                array (
                    'id' => 2399,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'MOBILIO',
                ),
            339 =>
                array (
                    'id' => 2400,
                    'uuid' => Str::uuid(), 'montadora_id' => 25,
                    'modelo' => 'MDX',
                ),
            340 =>
                array (
                    'id' => 2401,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ORTHIA',
                ),
            341 =>
                array (
                    'id' => 2402,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'PARTNER VAN',
                ),
            342 =>
                array (
                    'id' => 2403,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'PILOT',
                ),
            343 =>
                array (
                    'id' => 2404,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'RIDGELINE',
                ),
            344 =>
                array (
                    'id' => 2405,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'S2000',
                ),
            345 =>
                array (
                    'id' => 2406,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'S600',
                ),
            346 =>
                array (
                    'id' => 2407,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'S500',
                ),
            347 =>
                array (
                    'id' => 2408,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'S800',
                ),
            348 =>
                array (
                    'id' => 2409,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'STEPWGN',
                ),
            349 =>
                array (
                    'id' => 2410,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'STREAM',
                ),
            350 =>
                array (
                    'id' => 2411,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'THATS',
                ),
            351 =>
                array (
                    'id' => 2412,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'VAMOZ',
                ),
            352 =>
                array (
                    'id' => 2413,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'Z',
                ),
            353 =>
                array (
                    'id' => 2414,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'ZEST',
                ),
            354 =>
                array (
                    'id' => 2441,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'AERIO',
                ),
            355 =>
                array (
                    'id' => 2442,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'ALTO',
                ),
            356 =>
                array (
                    'id' => 2443,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'APV',
                ),
            357 =>
                array (
                    'id' => 2444,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'KEI',
                ),
            358 =>
                array (
                    'id' => 2445,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'LAPIN',
                ),
            359 =>
                array (
                    'id' => 2446,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'MR WAGON',
                ),
            360 =>
                array (
                    'id' => 2447,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'XL-7',
                ),
            361 =>
                array (
                    'id' => 2448,
                    'uuid' => Str::uuid(), 'montadora_id' => 59,
                    'modelo' => 'VERONA',
                ),
            362 =>
                array (
                    'id' => 2477,
                    'uuid' => Str::uuid(), 'montadora_id' => 158,
                    'modelo' => 'JEEP CJ',
                ),
            363 =>
                array (
                    'id' => 2479,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '306 CABRIOLET',
                ),
            364 =>
                array (
                    'id' => 2484,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'BELCAR',
                ),
            365 =>
                array (
                    'id' => 2485,
                    'uuid' => Str::uuid(), 'montadora_id' => 90,
                    'modelo' => 'M715',
                ),
            366 =>
                array (
                    'id' => 2492,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '407 SW',
                ),
            367 =>
                array (
                    'id' => 2493,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '307 CC',
                ),
            368 =>
                array (
                    'id' => 2499,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'STYLELINE',
                ),
            369 =>
                array (
                    'id' => 2500,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ANGLIA',
                ),
            370 =>
                array (
                    'id' => 2508,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'GT2',
                ),
            371 =>
                array (
                    'id' => 2509,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'YUKON',
                ),
            372 =>
                array (
                    'id' => 2510,
                    'uuid' => Str::uuid(), 'montadora_id' => 54,
                    'modelo' => 'SPORTSMAN',
                ),
            373 =>
                array (
                    'id' => 2514,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => '21 NEVADA',
                ),
            374 =>
                array (
                    'id' => 2515,
                    'uuid' => Str::uuid(), 'montadora_id' => 11,
                    'modelo' => 'VEYRON',
                ),
            375 =>
                array (
                    'id' => 2516,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => 'ENZO',
                ),
            376 =>
                array (
                    'id' => 2517,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '306 SW',
                ),
            377 =>
                array (
                    'id' => 2528,
                    'uuid' => Str::uuid(), 'montadora_id' => 28,
                    'modelo' => 'TI 80',
                ),
            378 =>
                array (
                    'id' => 2532,
                    'uuid' => Str::uuid(), 'montadora_id' => 70,
                    'modelo' => 'SPYDER 550',
                ),
            379 =>
                array (
                    'id' => 2533,
                    'uuid' => Str::uuid(), 'montadora_id' => 10,
                    'modelo' => '380 GTB',
                ),
            380 =>
                array (
                    'id' => 2534,
                    'uuid' => Str::uuid(), 'montadora_id' => 149,
                    'modelo' => 'T-5',
                ),
            381 =>
                array (
                    'id' => 2536,
                    'uuid' => Str::uuid(), 'montadora_id' => 18,
                    'modelo' => 'KINGSWAY',
                ),
            382 =>
                array (
                    'id' => 2537,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SSR',
                ),
            383 =>
                array (
                    'id' => 2540,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'IMPALA',
                ),
            384 =>
                array (
                    'id' => 2541,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '208',
                ),
            385 =>
                array (
                    'id' => 2542,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'GRAND BLAZER',
                ),
            386 =>
                array (
                    'id' => 2555,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '100 SERIES',
                ),
            387 =>
                array (
                    'id' => 2558,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '200 SERIES',
                ),
            388 =>
                array (
                    'id' => 2559,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '300 SERIES',
                ),
            389 =>
                array (
                    'id' => 2561,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '66',
                ),
            390 =>
                array (
                    'id' => 2562,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '700 SERIES',
                ),
            391 =>
                array (
                    'id' => 2563,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'AMAZON',
                ),
            392 =>
                array (
                    'id' => 2564,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'C303',
                ),
            393 =>
                array (
                    'id' => 2566,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'DUETT',
                ),
            394 =>
                array (
                    'id' => 2567,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'L3314',
                ),
            395 =>
                array (
                    'id' => 2568,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'OV 4',
                ),
            396 =>
                array (
                    'id' => 2569,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'P1800',
                ),
            397 =>
                array (
                    'id' => 2570,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'SUGGA',
                ),
            398 =>
                array (
                    'id' => 2571,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'TT',
                ),
            399 =>
                array (
                    'id' => 2572,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'ONCE',
                ),
            400 =>
                array (
                    'id' => 2573,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'DE LUXE',
                ),
            401 =>
                array (
                    'id' => 2574,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'CUSTOM',
                ),
            402 =>
                array (
                    'id' => 2575,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'T-BUCKET',
                ),
            403 =>
                array (
                    'id' => 2576,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'G15',
                ),
            404 =>
                array (
                    'id' => 2588,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'PAJERO FULL 3D',
                ),
            405 =>
                array (
                    'id' => 2589,
                    'uuid' => Str::uuid(), 'montadora_id' => 111,
                    'modelo' => 'PAJERO SPORT',
                ),
            406 =>
                array (
                    'id' => 2590,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '120 CABRIO',
                ),
            407 =>
                array (
                    'id' => 2591,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '320 TOURING',
                ),
            408 =>
                array (
                    'id' => 2592,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '330 CABRIO',
                ),
            409 =>
                array (
                    'id' => 2593,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'SERIE 5 TOURING',
                ),
            410 =>
                array (
                    'id' => 2594,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'SERIE 6 CABRIO',
                ),
            411 =>
                array (
                    'id' => 2595,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'SERIE M CONVERSIVEL',
                ),
            412 =>
                array (
                    'id' => 2596,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'M5 TOURING',
                ),
            413 =>
                array (
                    'id' => 2597,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'SERIE Z ROADSTER',
                ),
            414 =>
                array (
                    'id' => 2599,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'KA SPORT',
                ),
            415 =>
                array (
                    'id' => 2600,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'CC',
                ),
            416 =>
                array (
                    'id' => 2605,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'CERATO KOUP',
                ),
            417 =>
                array (
                    'id' => 2607,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'ASTRO',
                ),
            418 =>
                array (
                    'id' => 2608,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'COROLLA XRS',
                ),
            419 =>
                array (
                    'id' => 2609,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'ETIOS SEDAN',
                ),
            420 =>
                array (
                    'id' => 2611,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FREESTYLE',
                ),
            421 =>
                array (
                    'id' => 2612,
                    'uuid' => Str::uuid(), 'montadora_id' => 110,
                    'modelo' => 'COUGAR',
                ),
            422 =>
                array (
                    'id' => 2615,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'XUV 500',
                ),
            423 =>
                array (
                    'id' => 2618,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'XYLO',
                ),
            424 =>
                array (
                    'id' => 2619,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'BOLERO',
                ),
            425 =>
                array (
                    'id' => 2620,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'THAR',
                ),
            426 =>
                array (
                    'id' => 2621,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'AXE',
                ),
            427 =>
                array (
                    'id' => 2622,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'LEGEND',
                ),
            428 =>
                array (
                    'id' => 2623,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'CJ3',
                ),
            429 =>
                array (
                    'id' => 2624,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'ARMADA',
                ),
            430 =>
                array (
                    'id' => 2625,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'CHASSI',
                ),
            431 =>
                array (
                    'id' => 2626,
                    'uuid' => Str::uuid(), 'montadora_id' => 102,
                    'modelo' => 'SCORPIO PICK-UP',
                ),
            432 =>
                array (
                    'id' => 2627,
                    'uuid' => Str::uuid(), 'montadora_id' => 6,
                    'modelo' => 'STAR TRUCK',
                ),
            433 =>
                array (
                    'id' => 2628,
                    'uuid' => Str::uuid(), 'montadora_id' => 6,
                    'modelo' => 'STAR',
                ),
            434 =>
                array (
                    'id' => 2629,
                    'uuid' => Str::uuid(), 'montadora_id' => 6,
                    'modelo' => 'STAR VAN CARGO',
                ),
            435 =>
                array (
                    'id' => 2630,
                    'uuid' => Str::uuid(), 'montadora_id' => 6,
                    'modelo' => 'STAR VAN PASSAGEIROS',
                ),
            436 =>
                array (
                    'id' => 2632,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => 'ALVORADA',
                ),
            437 =>
                array (
                    'id' => 2633,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => 'CHAMBORD',
                ),
            438 =>
                array (
                    'id' => 2637,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => 'PROFISSIONAL',
                ),
            439 =>
                array (
                    'id' => 2639,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => 'VEDETTE',
                ),
            440 =>
                array (
                    'id' => 2640,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => 'ARONDE',
                ),
            441 =>
                array (
                    'id' => 2641,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => '1200S',
                ),
            442 =>
                array (
                    'id' => 2642,
                    'uuid' => Str::uuid(), 'montadora_id' => 141,
                    'modelo' => '1000',
                ),
            443 =>
                array (
                    'id' => 2645,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'HB20X',
                ),
            444 =>
                array (
                    'id' => 2646,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'HB20S',
                ),
            445 =>
                array (
                    'id' => 2648,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'MONZA',
                ),
            446 =>
                array (
                    'id' => 2649,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CHEVETTE',
                ),
            447 =>
                array (
                    'id' => 2650,
                    'uuid' => Str::uuid(), 'montadora_id' => 98,
                    'modelo' => 'X60',
                ),
            448 =>
                array (
                    'id' => 2651,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'TRAX',
                ),
            449 =>
                array (
                    'id' => 2652,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '118',
                ),
            450 =>
                array (
                    'id' => 2653,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '120',
                ),
            451 =>
                array (
                    'id' => 2654,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '130',
                ),
            452 =>
                array (
                    'id' => 2655,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'BAVARIA',
                ),
            453 =>
                array (
                    'id' => 2656,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'C-2800',
                ),
            454 =>
                array (
                    'id' => 2657,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '318',
                ),
            455 =>
                array (
                    'id' => 2658,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '320',
                ),
            456 =>
                array (
                    'id' => 2659,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '318 CABRIO',
                ),
            457 =>
                array (
                    'id' => 2660,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '325 CABRIO',
                ),
            458 =>
                array (
                    'id' => 2661,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '530',
                ),
            459 =>
                array (
                    'id' => 2662,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '540',
                ),
            460 =>
                array (
                    'id' => 2663,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '550',
                ),
            461 =>
                array (
                    'id' => 2664,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '740',
                ),
            462 =>
                array (
                    'id' => 2665,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '750',
                ),
            463 =>
                array (
                    'id' => 2666,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '760',
                ),
            464 =>
                array (
                    'id' => 2675,
                    'uuid' => Str::uuid(), 'montadora_id' => 341,
                    'modelo' => 'MATRIX 4X4',
                ),
            465 =>
                array (
                    'id' => 2694,
                    'uuid' => Str::uuid(), 'montadora_id' => 132,
                    'modelo' => 'A7',
                ),
            466 =>
                array (
                    'id' => 2695,
                    'uuid' => Str::uuid(), 'montadora_id' => 132,
                    'modelo' => 'A9',
                ),
            467 =>
                array (
                    'id' => 2696,
                    'uuid' => Str::uuid(), 'montadora_id' => 132,
                    'modelo' => 'A9 CARGO',
                ),
            468 =>
                array (
                    'id' => 2697,
                    'uuid' => Str::uuid(), 'montadora_id' => 132,
                    'modelo' => 'T20',
                ),
            469 =>
                array (
                    'id' => 2698,
                    'uuid' => Str::uuid(), 'montadora_id' => 132,
                    'modelo' => 'T20 BAU',
                ),
            470 =>
                array (
                    'id' => 2699,
                    'uuid' => Str::uuid(), 'montadora_id' => 132,
                    'modelo' => 'T22',
                ),
            471 =>
                array (
                    'id' => 2704,
                    'uuid' => Str::uuid(), 'montadora_id' => 64,
                    'modelo' => 'SUPER 90 COUPE',
                ),
            472 =>
                array (
                    'id' => 2705,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'X20',
                ),
            473 =>
                array (
                    'id' => 2706,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'ITAIPU',
                ),
            474 =>
                array (
                    'id' => 2707,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'G800',
                ),
            475 =>
                array (
                    'id' => 2708,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'XEF',
                ),
            476 =>
                array (
                    'id' => 2709,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'MOTOMACHINE',
                ),
            477 =>
                array (
                    'id' => 2710,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'BUGATO',
                ),
            478 =>
                array (
                    'id' => 2711,
                    'uuid' => Str::uuid(), 'montadora_id' => 17,
                    'modelo' => 'QT',
                ),
            479 =>
                array (
                    'id' => 2716,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'CAICARA',
                ),
            480 =>
                array (
                    'id' => 2717,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'CARCARA',
                ),
            481 =>
                array (
                    'id' => 2718,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'FISSORE',
                ),
            482 =>
                array (
                    'id' => 2719,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'MALZONI',
                ),
            483 =>
                array (
                    'id' => 2720,
                    'uuid' => Str::uuid(), 'montadora_id' => 57,
                    'modelo' => 'VEMAGUET',
                ),
            484 =>
                array (
                    'id' => 2727,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C4 LOUNGE',
                ),
            485 =>
                array (
                    'id' => 2728,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'CX-7',
                ),
            486 =>
                array (
                    'id' => 2729,
                    'uuid' => Str::uuid(), 'montadora_id' => 147,
                    'modelo' => 'TR',
                ),
            487 =>
                array (
                    'id' => 2730,
                    'uuid' => Str::uuid(), 'montadora_id' => 147,
                    'modelo' => 'LUCENA',
                ),
            488 =>
                array (
                    'id' => 2731,
                    'uuid' => Str::uuid(), 'montadora_id' => 147,
                    'modelo' => 'SEVETSE',
                ),
            489 =>
                array (
                    'id' => 2732,
                    'uuid' => Str::uuid(), 'montadora_id' => 147,
                    'modelo' => 'RAGGE',
                ),
            490 =>
                array (
                    'id' => 2733,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'C70',
                ),
            491 =>
                array (
                    'id' => 2734,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'C30',
                ),
            492 =>
                array (
                    'id' => 2735,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => '544',
                ),
            493 =>
                array (
                    'id' => 2736,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'S40',
                ),
            494 =>
                array (
                    'id' => 2737,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'S60',
                ),
            495 =>
                array (
                    'id' => 2738,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'S70',
                ),
            496 =>
                array (
                    'id' => 2739,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'S80',
                ),
            497 =>
                array (
                    'id' => 2740,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'V40',
                ),
            498 =>
                array (
                    'id' => 2741,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'V50',
                ),
            499 =>
                array (
                    'id' => 2742,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'V60',
                ),
        ));
        \DB::table('modelos')->insert(array (
            0 =>
                array (
                    'id' => 2743,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'V70',
                ),
            1 =>
                array (
                    'id' => 2744,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'S90',
                ),
            2 =>
                array (
                    'id' => 2745,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'XC60',
                ),
            3 =>
                array (
                    'id' => 2746,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'XC70',
                ),
            4 =>
                array (
                    'id' => 2747,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'XC90',
                ),
            5 =>
                array (
                    'id' => 2748,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'P1900',
                ),
            6 =>
                array (
                    'id' => 2749,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'PV36',
                ),
            7 =>
                array (
                    'id' => 2750,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'PV444',
                ),
            8 =>
                array (
                    'id' => 2751,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'PV544',
                ),
            9 =>
                array (
                    'id' => 2752,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'PV51',
                ),
            10 =>
                array (
                    'id' => 2753,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'PV654',
                ),
            11 =>
                array (
                    'id' => 2754,
                    'uuid' => Str::uuid(), 'montadora_id' => 53,
                    'modelo' => 'C50',
                ),
            12 =>
                array (
                    'id' => 2755,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => '190',
                ),
            13 =>
                array (
                    'id' => 2756,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE CLA',
                ),
            14 =>
                array (
                    'id' => 2757,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE V',
                ),
            15 =>
                array (
                    'id' => 2758,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'VANEO',
                ),
            16 =>
                array (
                    'id' => 2759,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CITAN',
                ),
            17 =>
                array (
                    'id' => 2760,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'VARIO',
                ),
            18 =>
                array (
                    'id' => 2761,
                    'uuid' => Str::uuid(), 'montadora_id' => 4,
                    'modelo' => 'CLASSE S CLASSICO',
                ),
            19 =>
                array (
                    'id' => 2809,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'J3S',
                ),
            20 =>
                array (
                    'id' => 2810,
                    'uuid' => Str::uuid(), 'montadora_id' => 345,
                    'modelo' => 'PICK-UP',
                ),
            21 =>
                array (
                    'id' => 2811,
                    'uuid' => Str::uuid(), 'montadora_id' => 345,
                    'modelo' => 'VAN',
                ),
            22 =>
                array (
                    'id' => 2823,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C3 SOLARIS',
                ),
            23 =>
                array (
                    'id' => 2824,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C3 XTR',
                ),
            24 =>
                array (
                    'id' => 2825,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C4 SOLARIS',
                ),
            25 =>
                array (
                    'id' => 2826,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C5 BREAK/TOURER',
                ),
            26 =>
                array (
                    'id' => 2827,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XSARA BREAK',
                ),
            27 =>
                array (
                    'id' => 2828,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XSARA VTS',
                ),
            28 =>
                array (
                    'id' => 2829,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XANTIA BREAK',
                ),
            29 =>
                array (
                    'id' => 2830,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'XM BREAK',
                ),
            30 =>
                array (
                    'id' => 2831,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C15',
                ),
            31 =>
                array (
                    'id' => 2832,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'NEMO',
                ),
            32 =>
                array (
                    'id' => 2833,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'VISA',
                ),
            33 =>
                array (
                    'id' => 2834,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C1',
                ),
            34 =>
                array (
                    'id' => 2835,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C2',
                ),
            35 =>
                array (
                    'id' => 2836,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C3 PLURIEL',
                ),
            36 =>
                array (
                    'id' => 2837,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'DS4',
                ),
            37 =>
                array (
                    'id' => 2838,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'DS5',
                ),
            38 =>
                array (
                    'id' => 2839,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'JUMPY',
                ),
            39 =>
                array (
                    'id' => 2840,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C-CROSSER',
                ),
            40 =>
                array (
                    'id' => 2841,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C35',
                ),
            41 =>
                array (
                    'id' => 2842,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'C25',
                ),
            42 =>
                array (
                    'id' => 2843,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'CX',
                ),
            43 =>
                array (
                    'id' => 2844,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'CX BREAK',
                ),
            44 =>
                array (
                    'id' => 2845,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'AXEL',
                ),
            45 =>
                array (
                    'id' => 2846,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'DYANE',
                ),
            46 =>
                array (
                    'id' => 2847,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'GS/GSA',
                ),
            47 =>
                array (
                    'id' => 2848,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'GS/GSA BREAK',
                ),
            48 =>
                array (
                    'id' => 2849,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'MEHARI',
                ),
            49 =>
                array (
                    'id' => 2850,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'SAXO',
                ),
            50 =>
                array (
                    'id' => 2851,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'SM',
                ),
            51 =>
                array (
                    'id' => 2852,
                    'uuid' => Str::uuid(), 'montadora_id' => 5,
                    'modelo' => 'ELYSEE',
                ),
            52 =>
                array (
                    'id' => 2853,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'MASTER MINIBUS',
                ),
            53 =>
                array (
                    'id' => 2854,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'CELER',
                ),
            54 =>
                array (
                    'id' => 2855,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'CELER SEDAN',
                ),
            55 =>
                array (
                    'id' => 2856,
                    'uuid' => Str::uuid(), 'montadora_id' => 47,
                    'modelo' => 'CIELO SEDAN',
                ),
            56 =>
                array (
                    'id' => 2857,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A1 SPORTBACK',
                ),
            57 =>
                array (
                    'id' => 2858,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A1 QUATTRO',
                ),
            58 =>
                array (
                    'id' => 2859,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A3 SPORTBACK',
                ),
            59 =>
                array (
                    'id' => 2860,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'RS4 AVANT',
                ),
            60 =>
                array (
                    'id' => 2861,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'A8L W12',
                ),
            61 =>
                array (
                    'id' => 2862,
                    'uuid' => Str::uuid(), 'montadora_id' => 32,
                    'modelo' => 'R8 V10',
                ),
            62 =>
                array (
                    'id' => 2863,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'RANGER CD',
                ),
            63 =>
                array (
                    'id' => 2864,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'T140',
                ),
            64 =>
                array (
                    'id' => 2865,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'X1',
                ),
            65 =>
                array (
                    'id' => 2866,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'X3',
                ),
            66 =>
                array (
                    'id' => 2867,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'X5',
                ),
            67 =>
                array (
                    'id' => 2868,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'X6',
                ),
            68 =>
                array (
                    'id' => 2869,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '840',
                ),
            69 =>
                array (
                    'id' => 2870,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '850',
                ),
            70 =>
                array (
                    'id' => 2871,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '645',
                ),
            71 =>
                array (
                    'id' => 2872,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => '650',
                ),
            72 =>
                array (
                    'id' => 2874,
                    'uuid' => Str::uuid(), 'montadora_id' => 7,
                    'modelo' => 'FIT TWIST',
                ),
            73 =>
                array (
                    'id' => 2876,
                    'uuid' => Str::uuid(), 'montadora_id' => 346,
                    'modelo' => 'MP4',
                ),
            74 =>
                array (
                    'id' => 2877,
                    'uuid' => Str::uuid(), 'montadora_id' => 346,
                    'modelo' => 'F1',
                ),
            75 =>
                array (
                    'id' => 2878,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'MONDEO SW',
                ),
            76 =>
                array (
                    'id' => 2879,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ESCORT SEDAN',
                ),
            77 =>
                array (
                    'id' => 2880,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ESCORT CONVERSIVEL',
                ),
            78 =>
                array (
                    'id' => 2881,
                    'uuid' => Str::uuid(), 'montadora_id' => 108,
                    'modelo' => 'MX-6',
                ),
            79 =>
                array (
                    'id' => 2884,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CORISCO',
                ),
            80 =>
                array (
                    'id' => 2885,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CHEVELLE',
                ),
            81 =>
                array (
                    'id' => 2886,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'EXCURSION',
                ),
            82 =>
                array (
                    'id' => 2887,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'TOURAN',
                ),
            83 =>
                array (
                    'id' => 2890,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'F-10000',
                ),
            84 =>
                array (
                    'id' => 2891,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => 'HOGGAR ESCAPADE',
                ),
            85 =>
                array (
                    'id' => 2901,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'PHAETON',
                ),
            86 =>
                array (
                    'id' => 2913,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'TRANSPORTER',
                ),
            87 =>
                array (
                    'id' => 2914,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'GRAND BESTA',
                ),
            88 =>
                array (
                    'id' => 2915,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => '200SX',
                ),
            89 =>
                array (
                    'id' => 2916,
                    'uuid' => Str::uuid(), 'montadora_id' => 43,
                    'modelo' => '240SX',
                ),
            90 =>
                array (
                    'id' => 2921,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => '300M',
                ),
            91 =>
                array (
                    'id' => 2922,
                    'uuid' => Str::uuid(), 'montadora_id' => 19,
                    'modelo' => '300C TOURING',
                ),
            92 =>
                array (
                    'id' => 2928,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'TORINO',
                ),
            93 =>
                array (
                    'id' => 2931,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'VENTURE',
                ),
            94 =>
                array (
                    'id' => 2932,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'FLEETLINE',
                ),
            95 =>
                array (
                    'id' => 2933,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'FLEETMASTER',
                ),
            96 =>
                array (
                    'id' => 2934,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'DELUXE',
                ),
            97 =>
                array (
                    'id' => 2936,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'ESCORT XR3',
                ),
            98 =>
                array (
                    'id' => 2937,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'MASTER',
                ),
            99 =>
                array (
                    'id' => 2938,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'TORONADO',
                ),
            100 =>
                array (
                    'id' => 2939,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'SIX',
                ),
            101 =>
                array (
                    'id' => 2940,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'EIGHT',
                ),
            102 =>
                array (
                    'id' => 2941,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'DELUXE',
                ),
            103 =>
                array (
                    'id' => 2942,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'SERIES 60',
                ),
            104 =>
                array (
                    'id' => 2943,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'SERIES 70',
                ),
            105 =>
                array (
                    'id' => 2944,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'SERIES 80',
                ),
            106 =>
                array (
                    'id' => 2945,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'SERIES 90',
                ),
            107 =>
                array (
                    'id' => 2946,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'STARFIRE',
                ),
            108 =>
                array (
                    'id' => 2947,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => '442',
                ),
            109 =>
                array (
                    'id' => 2948,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'CUTLASS',
                ),
            110 =>
                array (
                    'id' => 2949,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'CUTLASS SUPREME',
                ),
            111 =>
                array (
                    'id' => 2950,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'CUTLASS SALON',
                ),
            112 =>
                array (
                    'id' => 2951,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'CUTLASS CALAIS',
                ),
            113 =>
                array (
                    'id' => 2952,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'CUTLASS CIERA',
                ),
            114 =>
                array (
                    'id' => 2953,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'CUSTOM CRUISER',
                ),
            115 =>
                array (
                    'id' => 2954,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'VISTA CRUISER',
                ),
            116 =>
                array (
                    'id' => 2955,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'F-85',
                ),
            117 =>
                array (
                    'id' => 2957,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'FIRENZA',
                ),
            118 =>
                array (
                    'id' => 2958,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'ACHIEVA',
                ),
            119 =>
                array (
                    'id' => 2959,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'ALERO',
                ),
            120 =>
                array (
                    'id' => 2960,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'AURORA',
                ),
            121 =>
                array (
                    'id' => 2961,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'BRAVADA',
                ),
            122 =>
                array (
                    'id' => 2962,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'INTRIGUE',
                ),
            123 =>
                array (
                    'id' => 2963,
                    'uuid' => Str::uuid(), 'montadora_id' => 120,
                    'modelo' => 'SILHOUETTE',
                ),
            124 =>
                array (
                    'id' => 2972,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'SUPERBIRD',
                ),
            125 =>
                array (
                    'id' => 2973,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'FURY',
                ),
            126 =>
                array (
                    'id' => 2974,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'SPECIAL',
                ),
            127 =>
                array (
                    'id' => 2975,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'PROWLER',
                ),
            128 =>
                array (
                    'id' => 2976,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'TRAIL DUSTER',
                ),
            129 =>
                array (
                    'id' => 2977,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'VOYAGER',
                ),
            130 =>
                array (
                    'id' => 2978,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'SCAMP',
                ),
            131 =>
                array (
                    'id' => 2979,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'ARROW',
                ),
            132 =>
                array (
                    'id' => 2980,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'PT50',
                ),
            133 =>
                array (
                    'id' => 2981,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'PT57',
                ),
            134 =>
                array (
                    'id' => 2982,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'PT81',
                ),
            135 =>
                array (
                    'id' => 2983,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'PT105',
                ),
            136 =>
                array (
                    'id' => 2984,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'PT125',
                ),
            137 =>
                array (
                    'id' => 2985,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'EXPRESS',
                ),
            138 =>
                array (
                    'id' => 2986,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'VOYAGER EXPRESSO',
                ),
            139 =>
                array (
                    'id' => 2987,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'NEON',
                ),
            140 =>
                array (
                    'id' => 2988,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'LASER',
                ),
            141 =>
                array (
                    'id' => 2989,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'CARAVELLE',
                ),
            142 =>
                array (
                    'id' => 2990,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'STATION WAGON',
                ),
            143 =>
                array (
                    'id' => 2991,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'MODEL Q',
                ),
            144 =>
                array (
                    'id' => 2992,
                    'uuid' => Str::uuid(), 'montadora_id' => 123,
                    'modelo' => 'MODEL P6',
                ),
            145 =>
                array (
                    'id' => 2993,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'DB9 COUPE',
                ),
            146 =>
                array (
                    'id' => 2994,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'DB9 VOLANTE',
                ),
            147 =>
                array (
                    'id' => 2995,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'VIRAGE COUPE',
                ),
            148 =>
                array (
                    'id' => 2996,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'RAPIDE S',
                ),
            149 =>
                array (
                    'id' => 2997,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'V12 VANTAGE',
                ),
            150 =>
                array (
                    'id' => 2998,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'V8 VANTAGE COUPE',
                ),
            151 =>
                array (
                    'id' => 2999,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'V8 VANTAGE ROADSTER',
                ),
            152 =>
                array (
                    'id' => 3000,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'V8 VANTAGE S COUPE',
                ),
            153 =>
                array (
                    'id' => 3001,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'V8 VANTAGE S ROADSTER',
                ),
            154 =>
                array (
                    'id' => 3002,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'VANQUISH COUPE',
                ),
            155 =>
                array (
                    'id' => 3003,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'VANQUISH VOLANTE',
                ),
            156 =>
                array (
                    'id' => 3004,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'V12 ZAGATO',
                ),
            157 =>
                array (
                    'id' => 3005,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'DB5',
                ),
            158 =>
                array (
                    'id' => 3007,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'DBS',
                ),
            159 =>
                array (
                    'id' => 3008,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'DBS VOLANTE',
                ),
            160 =>
                array (
                    'id' => 3009,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'CYGNET',
                ),
            161 =>
                array (
                    'id' => 3010,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'ONE-77',
                ),
            162 =>
                array (
                    'id' => 3011,
                    'uuid' => Str::uuid(), 'montadora_id' => 31,
                    'modelo' => 'DBR9',
                ),
            163 =>
                array (
                    'id' => 3013,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'M3',
                ),
            164 =>
                array (
                    'id' => 3014,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'M5',
                ),
            165 =>
                array (
                    'id' => 3015,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'M6',
                ),
            166 =>
                array (
                    'id' => 3016,
                    'uuid' => Str::uuid(), 'montadora_id' => 36,
                    'modelo' => 'X6 M',
                ),
            167 =>
                array (
                    'id' => 3017,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'CABRIO',
                ),
            168 =>
                array (
                    'id' => 3018,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'COUPE',
                ),
            169 =>
                array (
                    'id' => 3019,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'ROADSTER',
                ),
            170 =>
                array (
                    'id' => 3020,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'COUNTRYMAN',
                ),
            171 =>
                array (
                    'id' => 3021,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'PACEMAN',
                ),
            172 =>
                array (
                    'id' => 3022,
                    'uuid' => Str::uuid(), 'montadora_id' => 113,
                    'modelo' => 'JOHN COOPER WORKS',
                ),
            173 =>
                array (
                    'id' => 3023,
                    'uuid' => Str::uuid(), 'montadora_id' => 122,
                    'modelo' => 'ZONDA',
                ),
            174 =>
                array (
                    'id' => 3024,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'NEW XV',
                ),
            175 =>
                array (
                    'id' => 3025,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'IMPREZA WRX HATCH',
                ),
            176 =>
                array (
                    'id' => 3026,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'IMPREZA WRX STI HATCH',
                ),
            177 =>
                array (
                    'id' => 3027,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'IMPREZA WRX STI SEDAN',
                ),
            178 =>
                array (
                    'id' => 3028,
                    'uuid' => Str::uuid(), 'montadora_id' => 8,
                    'modelo' => 'IMPREZA WRX SEDAN',
                ),
            179 =>
                array (
                    'id' => 3030,
                    'uuid' => Str::uuid(), 'montadora_id' => 23,
                    'modelo' => 'ETIOS CROSS',
                ),
            180 =>
                array (
                    'id' => 3031,
                    'uuid' => Str::uuid(), 'montadora_id' => 12,
                    'modelo' => 'HURACAN',
                ),
            181 =>
                array (
                    'id' => 3032,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'UP',
                ),
            183 =>
                array (
                    'id' => 4964,
                    'uuid' => Str::uuid(), 'montadora_id' => 142,
                    'modelo' => 'FORTWO CABRIO',
                ),
            184 =>
                array (
                    'id' => 4969,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'GT',
                ),
            185 =>
                array (
                    'id' => 4970,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'GTL',
                ),
            186 =>
                array (
                    'id' => 4971,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'GTM',
                ),
            187 =>
                array (
                    'id' => 4972,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'C2',
                ),
            188 =>
                array (
                    'id' => 4973,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'CRX',
                ),
            189 =>
                array (
                    'id' => 4974,
                    'uuid' => Str::uuid(), 'montadora_id' => 26,
                    'modelo' => 'AC 2000',
                ),
            190 =>
                array (
                    'id' => 4975,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'AVIATOR',
                ),
            191 =>
                array (
                    'id' => 4976,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'BLACKWOOD',
                ),
            192 =>
                array (
                    'id' => 4977,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'CAPRI',
                ),
            193 =>
                array (
                    'id' => 4978,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'CONTINENTAL',
                ),
            194 =>
                array (
                    'id' => 4979,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'LS',
                ),
            195 =>
                array (
                    'id' => 4980,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'MARK',
                ),
            196 =>
                array (
                    'id' => 4981,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'MARK LT',
                ),
            197 =>
                array (
                    'id' => 4982,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'MKR',
                ),
            198 =>
                array (
                    'id' => 4983,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'MKS',
                ),
            199 =>
                array (
                    'id' => 4984,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'MKX',
                ),
            200 =>
                array (
                    'id' => 4985,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'MKZ',
                ),
            201 =>
                array (
                    'id' => 4986,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'NAVIGATOR',
                ),
            202 =>
                array (
                    'id' => 4987,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'PREMIERE',
                ),
            203 =>
                array (
                    'id' => 4988,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'TOWN CAR',
                ),
            204 =>
                array (
                    'id' => 4989,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'VERSAILLES',
                ),
            205 =>
                array (
                    'id' => 4990,
                    'uuid' => Str::uuid(), 'montadora_id' => 99,
                    'modelo' => 'ZEPHYR',
                ),
            206 =>
                array (
                    'id' => 4991,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'CLASSIC',
                ),
            207 =>
                array (
                    'id' => 4992,
                    'uuid' => Str::uuid(), 'montadora_id' => 21,
                    'modelo' => 'ACTYON',
                ),
            208 =>
                array (
                    'id' => 5003,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'MARAJO',
                ),
            209 =>
                array (
                    'id' => 5004,
                    'uuid' => Str::uuid(), 'montadora_id' => 1,
                    'modelo' => 'SUPREMA',
                ),
            210 =>
                array (
                    'id' => 5005,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'NEW BEETLE',
                ),
            211 =>
                array (
                    'id' => 5006,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'QUANTUM',
                ),
            212 =>
                array (
                    'id' => 5007,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'CROSSFOX',
                ),
            213 =>
                array (
                    'id' => 5008,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'MILLE',
                ),
            214 =>
                array (
                    'id' => 5009,
                    'uuid' => Str::uuid(), 'montadora_id' => 534,
                    'modelo' => 'GC2',
                ),
            215 =>
                array (
                    'id' => 5010,
                    'uuid' => Str::uuid(), 'montadora_id' => 534,
                    'modelo' => 'EC7',
                ),
            216 =>
                array (
                    'id' => 5011,
                    'uuid' => Str::uuid(), 'montadora_id' => 98,
                    'modelo' => '530',
                ),
            217 =>
                array (
                    'id' => 5012,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'MOBI',
                ),
            218 =>
                array (
                    'id' => 5013,
                    'uuid' => Str::uuid(), 'montadora_id' => 3,
                    'modelo' => 'TORO',
                ),
            219 =>
                array (
                    'id' => 5014,
                    'uuid' => Str::uuid(), 'montadora_id' => 87,
                    'modelo' => 'RENEGADE',
                ),
            220 =>
                array (
                    'id' => 5015,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'DUSTER OROCH',
                ),
            221 =>
                array (
                    'id' => 5016,
                    'uuid' => Str::uuid(), 'montadora_id' => 24,
                    'modelo' => 'SANDERO RS',
                ),
            222 =>
                array (
                    'id' => 5017,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'HB20R',
                ),
            223 =>
                array (
                    'id' => 5018,
                    'uuid' => Str::uuid(), 'montadora_id' => 14,
                    'modelo' => 'GRAND SANTA FE',
                ),
            224 =>
                array (
                    'id' => 5019,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'GOLF VARIANT',
                ),
            225 =>
                array (
                    'id' => 5020,
                    'uuid' => Str::uuid(), 'montadora_id' => 2,
                    'modelo' => 'SPACE CROSS',
                ),
            226 =>
                array (
                    'id' => 5021,
                    'uuid' => Str::uuid(), 'montadora_id' => 22,
                    'modelo' => '2008',
                ),
            227 =>
                array (
                    'id' => 5022,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'QUORIS',
                ),
            228 =>
                array (
                    'id' => 5023,
                    'uuid' => Str::uuid(), 'montadora_id' => 16,
                    'modelo' => 'GRAND CARNIVAL',
                ),
            229 =>
                array (
                    'id' => 5024,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'T8',
                ),
            230 =>
                array (
                    'id' => 5025,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'T6',
                ),
            231 =>
                array (
                    'id' => 5026,
                    'uuid' => Str::uuid(), 'montadora_id' => 15,
                    'modelo' => 'T5',
                ),
            232 =>
                array (
                    'id' => 5027,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'KA SEDAN',
                ),
            233 =>
                array (
                    'id' => 5028,
                    'uuid' => Str::uuid(), 'montadora_id' => 13,
                    'modelo' => 'FOCUS FASTBACK',
                ),
        ));

        DB::select("SELECT setval('modelos_id_seq', 5028, true)");

    }
}
