<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ 'id' => 1, 'name' => 'VEGETALES Y FRUTAS', 'parent' => 0, 'order' => 1 ]);
            Category::create([ 'id' => 2, 'name' => 'VEGETALES',      'parent' => 1, 'order' => 1 ]);
                Category::create([ 'id' => 6,  'name' => 'Vegetales frescos',       'parent' => 2, 'order' => 1 ]);
                Category::create([ 'id' => 7,  'name' => 'Vegetales freezados',     'parent' => 2, 'order' => 2 ]);
                Category::create([ 'id' => 8,  'name' => 'Vegetales enlatados',     'parent' => 2, 'order' => 3 ]);
                Category::create([ 'id' => 9,  'name' => 'Vegetales deshidratados', 'parent' => 2, 'order' => 4 ]);
                Category::create([ 'id' => 10, 'name' => 'Jugos de vegetales',      'parent' => 2, 'order' => 5 ]);
            Category::create([ 'id' => 3, 'name' => 'ALGAS',          'parent' => 1, 'order' => 2 ]);
            Category::create([ 'id' => 4, 'name' => 'HONGOS Y SETAS', 'parent' => 1, 'order' => 3 ]);
            Category::create([ 'id' => 5, 'name' => 'FRUTAS',         'parent' => 1, 'order' => 4 ]);
                Category::create([ 'id' => 11, 'name' => 'Frutas naturales',                 'parent' => 5, 'order' => 1 ]);
                Category::create([ 'id' => 12, 'name' => 'Frutas freezadas',                 'parent' => 5, 'order' => 2 ]);
                Category::create([ 'id' => 13, 'name' => 'Frutas enlatadas',                 'parent' => 5, 'order' => 3 ]);
                Category::create([ 'id' => 14, 'name' => 'Frutas deshidratadas y desecadas', 'parent' => 5, 'order' => 4 ]);
                Category::create([ 'id' => 15, 'name' => 'Jugos de fruta',                   'parent' => 5, 'order' => 5 ]);

        Category::create([ 'id' => 16,  'name' => 'CEREALES Y LEGUMBRES. DERIVADOS', 'parent' => 0, 'order' => 2 ]);
            Category::create([ 'id' => 17,  'name' => 'Cereales',              'parent' => 16,  'order' => 1 ]);
                Category::create([ 'id' => 20,  'name' => 'Granos y sus partes',             'parent' => 17,  'order' => 1 ]);
                Category::create([ 'id' => 21,  'name' => 'Harinas, almidones y premezclas', 'parent' => 17,  'order' => 2 ]);
            Category::create([ 'id' => 18,  'name' => 'Derivados de cereales', 'parent' => 16, 'order' => 2 ]);
                Category::create([ 'id' => 22,  'name' => 'Masas y tapas',                                              'parent' => 18, 'order' => 1 ]);
                Category::create([ 'id' => 23,  'name' => 'Pastas y fideos',                                            'parent' => 18, 'order' => 2 ]);
                Category::create([ 'id' => 24,  'name' => 'Panes y tostadas',                                           'parent' => 18, 'order' => 3 ]);
                    Category::create([ 'id' => 25,  'name' => 'Blancos',                   'parent' => 24,  'order' => 1 ]);
                    Category::create([ 'id' => 26,  'name' => 'Integrales o con semillas', 'parent' => 24,  'order' => 2 ]);
                Category::create([ 'id' => 27,  'name' => 'Galletitas de agua, de arroz y saladas, crackers',           'parent' => 18, 'order' => 4 ]);
                    Category::create([ 'id' => 28,  'name' => 'Blancos' ,                  'parent' => 27,  'order' => 1 ]);
                    Category::create([ 'id' => 29,  'name' => 'Integrales o con semillas', 'parent' => 27,  'order' => 2 ]);
                Category::create([ 'id' => 30,  'name' => 'Budines',                                                    'parent' => 18, 'order' => 5 ]);
                Category::create([ 'id' => 31,  'name' => 'Tortas y polvo para preparar tortas',                        'parent' => 18, 'order' => 6 ]);
                Category::create([ 'id' => 32,  'name' => 'Cereales en copos, inflados, granolas y barritas de cereal', 'parent' => 18, 'order' => 7 ]);
                    Category::create([ 'id' => 33,  'name' => 'Copos, inflados y otros cereales para el desayuno', 'parent' => 32, 'order' => 1 ]);
                    Category::create([ 'id' => 34,  'name' => 'Granolas',                                          'parent' => 32, 'order' => 2 ]);
                    Category::create([ 'id' => 35,  'name' => 'Barritas de cereal',                                'parent' => 32, 'order' => 3 ]);
            Category::create([ 'id' => 19,  'name' => 'LEGUMBRES Y DERIVADOS', 'parent' => 16,  'order' => 3 ]);
                Category::create([ 'id' => 36,  'name' => 'Granos',                 'parent' => 19,  'order' => 1 ]);
                Category::create([ 'id' => 37,  'name' => 'Harinas de legumbres',   'parent' => 19,  'order' => 2 ]);
                Category::create([ 'id' => 38,  'name' => 'Derivados de legumbres', 'parent' => 19,  'order' => 3 ]);

        Category::create([ 'id' => 39,  'name' => 'FRUTAS SECAS Y SEMILLAS', 'parent' => 0,   'order' => 3 ]);
            Category::create([ 'id' => 40,  'name' => 'Frutas secas',   'parent' => 39,  'order' => 1 ]);
            Category::create([ 'id' => 41,  'name' => 'Frutas oleosas', 'parent' => 39,  'order' => 2 ]);
            Category::create([ 'id' => 42,  'name' => 'Semillas',       'parent' => 39,  'order' => 3 ]);

        Category::create([ 'id' => 43, 'name' => 'LECHES, YOGURES Y QUESOS', 'parent' => 0, 'order' => 4 ]);
            Category::create([ 'id' => 44, 'name' => 'LECHES',   'parent' => 43, 'order' => 1 ]);
                Category::create([ 'id' => 47,  'name' => 'Fluidas',                    'parent' => 44,  'order' => 1 ]);
                    Category::create([ 'id' => 63,  'name' => 'Enteras',     'parent' => 47,  'order' => 1 ]);
                    Category::create([ 'id' => 64,  'name' => 'Descremadas', 'parent' => 47,  'order' => 2 ]);
                Category::create([ 'id' => 48,  'name' => 'En polvo',                   'parent' => 44,  'order' => 2 ]);
                    Category::create([ 'id' => 65,  'name' => 'Enteras',     'parent' => 48,  'order' => 1 ]);
                    Category::create([ 'id' => 66,  'name' => 'Descremadas', 'parent' => 48,  'order' => 2 ]);
                Category::create([ 'id' => 49,  'name' => 'Chocolatadas y saborizadas', 'parent' => 44,  'order' => 3 ]);
                Category::create([ 'id' => 50,  'name' => 'Fermentadas',                'parent' => 44,  'order' => 4 ]);
                Category::create([ 'id' => 51,  'name' => 'Condensada',                 'parent' => 44,  'order' => 5 ]);
                Category::create([ 'id' => 52,  'name' => 'Vegetales',                  'parent' => 44,  'order' => 6 ]);
            Category::create([ 'id' => 45,  'name' => 'YOGURES', 'parent' => 43,  'order' => 2 ]);
                Category::create([ 'id' => 53,  'name' => 'Yogures firmes',     'parent' => 45, 'order' => 1 ]);
                    Category::create([ 'id' => 67,  'name' => 'Enteros',     'parent' => 53, 'order' => 1 ]);
                    Category::create([ 'id' => 68,  'name' => 'Descremados', 'parent' => 53, 'order' => 2 ]);
                Category::create([ 'id' => 54,  'name' => 'Yogures con frutas', 'parent' => 45, 'order' => 2 ]);
                    Category::create([ 'id' => 69,  'name' => 'Enteros',     'parent' => 54, 'order' => 1 ]);
                    Category::create([ 'id' => 70,  'name' => 'Descremados', 'parent' => 54, 'order' => 2 ]);
                Category::create([ 'id' => 55,  'name' => 'Yogures con cereal', 'parent' => 45, 'order' => 3 ]);
                    Category::create([ 'id' => 71,  'name' => 'Enteros',     'parent' => 55, 'order' => 1 ]);
                    Category::create([ 'id' => 72,  'name' => 'Descremados', 'parent' => 55, 'order' => 2 ]);
                Category::create([ 'id' => 56,  'name' => 'Yogures bebibles',   'parent' => 45, 'order' => 4 ]);
                    Category::create([ 'id' => 73,  'name' => 'Enteros',     'parent' => 56, 'order' => 1 ]);
                    Category::create([ 'id' => 74,  'name' => 'Descremados', 'parent' => 56, 'order' => 2 ]);
                Category::create([ 'id' => 57,  'name' => 'Otros Yogures',      'parent' => 45, 'order' => 5 ]);
                    Category::create([ 'id' => 75,  'name' => 'Enteros',     'parent' => 57, 'order' => 1 ]);
                    Category::create([ 'id' => 76,  'name' => 'Descremados', 'parent' => 57, 'order' => 2 ]);
            Category::create([ 'id' => 46,  'name' => 'QUESOS', 'parent' => 43, 'order' => 3 ]);
                Category::create([ 'id' => 58,  'name' => 'Quesos untables y ricotta',    'parent' => 46, 'order' => 1 ]);
                    Category::create([ 'id' => 77,  'name' => 'Enteros',     'parent' => 58, 'order' => 1 ]);
                    Category::create([ 'id' => 78,  'name' => 'Descremados', 'parent' => 58, 'order' => 2 ]);
                Category::create([ 'id' => 59,  'name' => 'Quesos blandos',               'parent' => 46, 'order' => 2 ]);
                    Category::create([ 'id' => 79,  'name' => 'Enteros',     'parent' => 59, 'order' => 1 ]);
                    Category::create([ 'id' => 80,  'name' => 'Descremados', 'parent' => 59, 'order' => 2 ]);
                Category::create([ 'id' => 60,  'name' => 'Quesos semiduros',             'parent' => 46, 'order' => 3 ]);
                    Category::create([ 'id' => 81,  'name' => 'Enteros',     'parent' => 60, 'order' => 1 ]);
                    Category::create([ 'id' => 82,  'name' => 'Descremados', 'parent' => 60, 'order' => 2 ]);
                Category::create([ 'id' => 61,  'name' => 'Quesos duros y para rallar',   'parent' => 46, 'order' => 4 ]);
                Category::create([ 'id' => 62,  'name' => 'Todos los quesos descremados', 'parent' => 46, 'order' => 5 ]);

        Category::create([ 'id' => 83,  'name' => 'CARNES Y DERIVADOS. HUEVOS', 'parent' => 0, 'order' => 5 ]);
            Category::create([ 'id' => 84,  'name' => 'Carne vacuna',           'parent' => 83,  'order' => 1 ]);
                Category::create([ 'id' => 90,  'name' => 'Fresca',   'parent' => 84,  'order' => 1 ]);
                Category::create([ 'id' => 91,  'name' => 'Envasada', 'parent' => 84,  'order' => 2 ]);
            Category::create([ 'id' => 85,  'name' => 'Carne de ave',           'parent' => 83,  'order' => 2 ]);
                Category::create([ 'id' => 92,  'name' => 'Fresca',   'parent' => 85,  'order' => 1 ]);
                Category::create([ 'id' => 93,  'name' => 'Envasada', 'parent' => 85,  'order' => 2 ]);
            Category::create([ 'id' => 86,  'name' => 'Otras carnes',           'parent' => 83,  'order' => 3 ]);
            Category::create([ 'id' => 87,  'name' => 'Fiambres',               'parent' => 83,  'order' => 4 ]);
            Category::create([ 'id' => 88,  'name' => 'Embutidos y chacinados', 'parent' => 83,  'order' => 5 ]);
            Category::create([ 'id' => 89,  'name' => 'Huevos',                 'parent' => 83,  'order' => 6 ]);

        Category::create([ 'id' => 94,  'name' => 'PESCADOS Y MARISCOS', 'parent' => 0,   'order' => 6 ]);
            Category::create([ 'id' => 95,  'name' => 'Carne de pescado', 'parent' => 94, 'order' => 1 ]);
                Category::create([ 'id' => 98,  'name' => 'Fresca',   'parent' => 95, 'order' => 1 ]);
                Category::create([ 'id' => 99,  'name' => 'Envasada', 'parent' => 95, 'order' => 2 ]);
                Category::create([ 'id' => 100, 'name' => 'Enlatada', 'parent' => 95, 'order' => 3 ]);
            Category::create([ 'id' => 96,  'name' => 'Mariscos',         'parent' => 94, 'order' => 2 ]);
                Category::create([ 'id' => 101, 'name' => 'Frescos',   'parent' => 96, 'order' => 1 ]);
                Category::create([ 'id' => 102, 'name' => 'Envasados', 'parent' => 96, 'order' => 2 ]);
                Category::create([ 'id' => 103, 'name' => 'Enlatados', 'parent' => 96, 'order' => 3 ]);
            Category::create([ 'id' => 97,  'name' => 'Derivados',        'parent' => 94, 'order' => 3 ]);

        Category::create([ 'id' => 104, 'name' => 'ACEITES, GRASAS, MAYONESAS Y ADEREZOS', 'parent' => 0, 'order' => 7 ]);
            Category::create([ 'id' => 105, 'name' => 'Aceites',                    'parent' => 104, 'order' => 1 ]);
            Category::create([ 'id' => 107, 'name' => 'Grasas animales',            'parent' => 104, 'order' => 2 ]);
            Category::create([ 'id' => 108, 'name' => 'Crema',                      'parent' => 104, 'order' => 3 ]);
            Category::create([ 'id' => 109, 'name' => 'Mayonesas y otros aderezos', 'parent' => 104, 'order' => 4 ]);

        Category::create([ 'id' => 110, 'name' => 'CONDIMENTOS, ESPECIAS Y LEVADURAS', 'parent' => 0, 'order' => 8 ]);
            Category::create([ 'id' => 111, 'name' => 'Condimentos y sales', 'parent' => 110, 'order' => 1 ]);
            Category::create([ 'id' => 112, 'name' => 'Especias',            'parent' => 110, 'order' => 2 ]);
            Category::create([ 'id' => 113, 'name' => 'Levaduras',           'parent' => 110, 'order' => 3 ]);

        Category::create([ 'id' => 114, 'name' => 'AZÚCARES Y DULCES', 'parent' => 0, 'order' => 9 ]);
            Category::create([ 'id' => 115, 'name' => 'Miel, dulces, mermeladas y jaleas', 'parent' => 114, 'order' => 1 ]);
                Category::create([ 'id' => 120, 'name' => 'Comunes', 'parent' => 115, 'order' => 1 ]);
                Category::create([ 'id' => 121, 'name' => 'Light',   'parent' => 115, 'order' => 2 ]);
            Category::create([ 'id' => 116, 'name' => 'Golosinas',                         'parent' => 114, 'order' => 2 ]);
                Category::create([ 'id' => 122, 'name' => 'Comunes', 'parent' => 116, 'order' => 1 ]);
                Category::create([ 'id' => 123, 'name' => 'Light',   'parent' => 116, 'order' => 2 ]);
            Category::create([ 'id' => 117, 'name' => 'Cacao y Chocolates',                'parent' => 114, 'order' => 3 ]);
                Category::create([ 'id' => 124, 'name' => 'Polvos chocolatados', 'parent' => 117, 'order' => 1 ]);
                Category::create([ 'id' => 125, 'name' => 'Chocolates',          'parent' => 117, 'order' => 2 ]);
                Category::create([ 'id' => 126, 'name' => 'Light',               'parent' => 117, 'order' => 3 ]);
            Category::create([ 'id' => 118, 'name' => 'Helados, gelatinas, postres y polvos para prepararlos', 'parent' => 114, 'order' => 4 ]);
                Category::create([ 'id' => 127, 'name' => 'Helados artesanales',        'parent' => 118, 'order' => 1 ]);
                Category::create([ 'id' => 128, 'name' => 'Helados envasados',          'parent' => 118, 'order' => 2 ]);
                Category::create([ 'id' => 129, 'name' => 'Postres y flanes envasados', 'parent' => 118, 'order' => 3 ]);
                Category::create([ 'id' => 130, 'name' => 'Postres y flanes en polvo',  'parent' => 118, 'order' => 4 ]);
            Category::create([ 'id' => 119, 'name' => 'Edulcorantes',                      'parent' => 114, 'order' => 5 ]);
                Category::create([ 'id' => 131, 'name' => 'Edulcorantes líquidos',              'parent' => 119, 'order' => 1 ]);
                Category::create([ 'id' => 132, 'name' => 'Edulcorantes en polvo o granulados', 'parent' => 119, 'order' => 2 ]);
                Category::create([ 'id' => 133, 'name' => 'Edulcorantes en pastillas',          'parent' => 119, 'order' => 3 ]);

        Category::create([ 'id' => 134, 'name' => 'BEBIDAS FRÍAS Y CALIENTES', 'parent' => 0, 'order' => 10 ]);
            Category::create([ 'id' => 135, 'name' => 'Bebidas Frías', 'parent' => 134, 'order' => 1 ]);
                Category::create([ 'id' => 136, 'name' => 'Aguas',                'parent' => 135, 'order' => 1 ]);
                    Category::create([ 'id' => 137, 'name' => 'Sin gas',     'parent' => 136, 'order' => 1 ]);
                    Category::create([ 'id' => 138, 'name' => 'Con gas',     'parent' => 136, 'order' => 2 ]);
                    Category::create([ 'id' => 139, 'name' => 'Saborizadas', 'parent' => 136, 'order' => 3 ]);
                Category::create([ 'id' => 140, 'name' => 'Jugos',                'parent' => 135, 'order' => 2 ]);
                    Category::create([ 'id' => 141, 'name' => 'Naturales', 'parent' => 140, 'order' => 1 ]);
                    Category::create([ 'id' => 142, 'name' => 'Envasados', 'parent' => 140, 'order' => 2 ]);
                    Category::create([ 'id' => 143, 'name' => 'En polvo',  'parent' => 140, 'order' => 3 ]);
                Category::create([ 'id' => 144, 'name' => 'Gaseosas',             'parent' => 135, 'order' => 3 ]);
                    Category::create([ 'id' => 145, 'name' => 'Comunes',    'parent' => 144, 'order' => 1 ]);
                    Category::create([ 'id' => 146, 'name' => 'Dietíticas', 'parent' => 144, 'order' => 2 ]);
                Category::create([ 'id' => 147, 'name' => 'Bebidas energizantes', 'parent' => 135, 'order' => 4 ]);
                Category::create([ 'id' => 148, 'name' => 'Bebidas deportivas',   'parent' => 135, 'order' => 5 ]);
                Category::create([ 'id' => 149, 'name' => 'A base de hierbas',    'parent' => 135, 'order' => 6 ]);
                Category::create([ 'id' => 150, 'name' => 'Bebidas Alcoholicas',  'parent' => 135, 'order' => 7 ]);
                Category::create([ 'id' => 151, 'name' => 'Otras bebidas',        'parent' => 135, 'order' => 8 ]);
            Category::create([ 'id' => 152, 'name' => 'Bebidas Calientes', 'parent' => 134, 'order' => 2 ]);
                Category::create([ 'id' => 153, 'name' => 'Infusiones', 'parent' => 152, 'order' => 1 ]);
                    Category::create([ 'id' => 154, 'name' => 'Te',    'parent' => 153, 'order' => 1 ]);
                    Category::create([ 'id' => 155, 'name' => 'Café',  'parent' => 153, 'order' => 2 ]);
                    Category::create([ 'id' => 156, 'name' => 'Otros', 'parent' => 153, 'order' => 3 ]);
                Category::create([ 'id' => 157, 'name' => 'Caldos',     'parent' => 152, 'order' => 2 ]);
                Category::create([ 'id' => 158, 'name' => 'Sopas',      'parent' => 152, 'order' => 3 ]);

        Category::create([ 'id' => 159, 'name' => 'ENCURTIDOS Y COPETIN', 'parent' => 0, 'order' => 11 ]);
            Category::create([ 'id' => 160, 'name' => 'Aceitunas, pickles y otros encurtidos', 'parent' => 159, 'order' => 1 ]);
            Category::create([ 'id' => 161, 'name' => 'Productos de copetín',                  'parent' => 159, 'order' => 2 ]);

        Category::create([ 'id' => 162, 'name' => 'PLATOS PREPARADOS', 'parent' => 0, 'order' => 12 ]);
            Category::create([ 'id' => 163, 'name' => 'Típicos argentinos',      'parent' => 162, 'order' => 1 ]);
            Category::create([ 'id' => 164, 'name' => 'Otros países o regiones', 'parent' => 162, 'order' => 2 ]);

        Category::create([ 'id' => 165, 'name' => 'ALIMENTOS INFANTILES', 'parent' => 0, 'order' => 13 ]);
            Category::create([ 'id' => 166, 'name' => 'Colados y picados',                'parent' => 165, 'order' => 1 ]);
            Category::create([ 'id' => 167, 'name' => 'Cereales para preparar con leche', 'parent' => 165, 'order' => 2 ]);
            Category::create([ 'id' => 168, 'name' => 'Yogures y postres',                'parent' => 165, 'order' => 3 ]);

        Category::create([ 'id' => 169, 'name' => 'COMER AFUERA', 'parent' => 0, 'order' => 14 ]);
            Category::create([ 'id' => 170, 'name' => 'Restaurantes', 'parent' => 169, 'order' => 1 ]);
            Category::create([ 'id' => 171, 'name' => 'Fast Food',    'parent' => 169, 'order' => 2 ]);
            Category::create([ 'id' => 172, 'name' => 'Otros',        'parent' => 169, 'order' => 3 ]);

        Category::create([ 'id' => 173, 'name' => 'ALIMENTOS DIETOTERÁPICOS', 'parent' => 0, 'order' => 15 ]);
            Category::create([ 'id' => 174, 'name' => 'Anti reflujo',                   'parent' => 173, 'order' => 1 ]);
            Category::create([ 'id' => 175, 'name' => 'Para prematuros o BPN',          'parent' => 173, 'order' => 2 ]);
            Category::create([ 'id' => 176, 'name' => 'Con menor contenido de lactosa', 'parent' => 173, 'order' => 3 ]);
            Category::create([ 'id' => 177, 'name' => 'Alimentos libres de Lactosa',    'parent' => 173, 'order' => 4 ]);
            Category::create([ 'id' => 178, 'name' => 'Otros',                          'parent' => 173, 'order' => 5 ]);
            Category::create([ 'id' => 179, 'name' => 'Suplementos nutricionales',      'parent' => 173, 'order' => 6 ]);
                Category::create([ 'id' => 180, 'name' => 'Completos', 'parent' => 179, 'order' => 1 ]);
                    Category::create([ 'id' => 182, 'name' => 'Bebibles', 'parent' => 180, 'order' => 1 ]);
                    Category::create([ 'id' => 183, 'name' => 'En polvo', 'parent' => 180, 'order' => 2 ]);
                Category::create([ 'id' => 181, 'name' => 'Modulares', 'parent' => 179, 'order' => 2 ]);

        Category::create([ 'id' => 184, 'name' => 'ALIMENTOS PARA DIETAS ESPECIALES', 'parent' => 0, 'order' => 16 ]);
            Category::create([ 'id' => 185, 'name' => 'DIETA PARA CELÍACO',        'parent' => 184, 'order' => 1 ]);
            Category::create([ 'id' => 186, 'name' => 'DIETA HIPOSÓDICA',         'parent' => 184, 'order' => 2 ]);
            Category::create([ 'id' => 187, 'name' => 'DIETA PARA FENILCETONURIA', 'parent' => 184, 'order' => 3 ]);
            Category::create([ 'id' => 188, 'name' => 'Dieta baja en grasas',      'parent' => 184, 'order' => 4 ]);
            Category::create([ 'id' => 189, 'name' => 'Otros',                     'parent' => 184, 'order' => 5 ]);
    }
}
