<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cocktails = [
            "aviation" => [
                "name" => 'AVIATION',
                "description" => 'Aviation es un sofisticado cóctel clásico hecho a base de ginebra que destaca por su sabor dulce y ligeramente seco. Elegante y llamativo es ideal para darle un toque de glamour a tus brindis.',

                'video' => 'https://www.youtube.com/embed/zSnohyr4aWk',
                'foto_header' => 'cocktails/header/aviation.jpg',
                'foto_gallery' => 'cocktails/gallery/aviation.jpg',
                'foto_sheet' => 'cocktails/sheet/aviation.jpg',

                'ingredientes' => [
                    '6cl de Gin MG', '2,2cl de Zumo de Limón', '1,5cl de Licor Marrasquino', '0,75cl de Licor de Violeta'
                ],
                'recipe' => [
                    'Enfriamos una copa coupé introduciendo cubos de hielo y removiéndolos. La dejamos apartada con los hielos dentro.',
                    'En una coctelera añadimos, ayudándonos de un medidor, 6cl de Gin MG, 2,2cl de Zumo de Limón, 1,5cl de Licor Marraschino y hielo. La tapamos y agitamos.',
                    'Quitamos el hielo y el exceso de agua de la copa coupé que habíamos dejado enfriando con ayuda de un colador. Servimos la mezcla de la coctelera, sin el hielo.',
                    'Añadimos en la copa los 0,75cl de Licor de Violeta ayudándonos de una cucharilla para que se quede en el fondo.'
                ]
            ],
            "basil_smash" => [
                "name" => 'BASIL SMASH',
                "description" => 'El Basil Smash es un nuevo cóctel cuya combinación de ingredientes dan como resultado una bebida equilibrada, refrescante y muy aromática, perfecta para el verano.',

                'video' => 'https://www.youtube.com/embed/4N5JecCMFNs',
                'foto_header' => 'cocktails/header/basil_smash.jpg',
                'foto_gallery' => 'cocktails/gallery/basil_smash.jpg',
                'foto_sheet' => 'cocktails/sheet/basil_smash.jpg',

                'ingredientes' => [
                    '5cl de Gin MG', '2,5cl de Zumo de Limón', '1,5cl de Sirope de Azúcar', 'Hojas de Albahaca'
                ],
                'recipe' => [
                    'En una coctelera añadimos ayudándonos de un medidor, 2,5cl de Zumo de Limón, hojas de albahaca y machacamos la mezcla. Después, seguimos añadiendo 1,5cl de Sirope de Azúcar y, por último, 5cl de Gin MG y un cubo de hielo. La tapamos y agitamos.',
                    'En un vaso old fashioned añadimos hielo pilé hasta llenarlo y servimos la mezcla de la coctelera, sin el hielo.',
                    'Decoramos con hojas de albahaca.'
                ]
            ],
            "bijou" => [
                "name" => 'BIJOU',
                "description" => 'Bijou es un cóctel sofisticado que combina los colores del diamante (ginebra), el rubí (vermut rojo) y la esmeralda (chartreuse verde), dando como resultado un cóctel dulce con sabor amargo al final.',

                'video' => 'https://www.youtube.com/embed/j4VhnZJGtgU',
                'foto_header' => 'cocktails/header/bijou.jpg',
                'foto_gallery' => 'cocktails/gallery/bijou.jpg',
                'foto_sheet' => 'cocktails/sheet/bijou.jpg',

                'ingredientes' => [
                    '3cl de Gin MG', '3cl de Vermut Rojo', '3cl de Chartreuse Verde', '2 Dashes de Bittermens de Naranja', 'Twist de Naranja', '1 Cereza'
                ],
                'recipe' => [
                    'Enfriamos la copa echándole hielo pilé. La dejamos apartada con el hielo dentro.',
                    'En un vaso mezclador añadimos cubos de hielo y ayudándonos de un medidor, añadimos 3cl de Gin MG, 3cl de Vermut Rojo, 3cl de Chartreuse Verde y 2 Dashes de Bittermens de Naranja. Removemos.',
                    'Quitamos el hielo pilé y el exceso de agua de la copa que habíamos dejado enfriando con ayuda de un colador y servimos la mezcla del vaso mezclador, sin hielos.',
                    'Cortamos un twist de naranja y aromatizamos la copa con él.',
                    'Decoramos la copa con una cereza y un twist de naranja clavados en un palillo de cóctel.',
                ]
            ],
            "bramble" => [
                "name" => 'BRAMBLE',
                "description" => 'El cóctel clásico Bramble destaca por un sabor equilibrado con matices cítricos y dulces. Es perfecto para disfrutar en cualquier ocasión y, en especial, en primavera.',

                'video' => 'https://www.youtube.com/embed/AOpGV0drPmE',
                'foto_header' => 'cocktails/header/bramble.jpg',
                'foto_gallery' => 'cocktails/gallery/bramble.jpg',
                'foto_sheet' => 'cocktails/sheet/bramble.jpg',

                'ingredientes' => [
                    '4,5cl de Gin MG', '2,5cl de Zumo de Limón', '1,5cl de Sirope de Azúcar', '1cl de Crema de Mora', '2 Moras', 'Virutas de Limón'
                ],
                'recipe' => [
                    'Enfriamos el vaso bajo introduciendo hielo pilé. Lo dejamos apartado con el hielo dentro.',
                    'En una coctelera metemos hielo en cubos y ayudándonos de un medidor, añadimos 4,5cl de Gin MG, 2,5cl de Zumo de Limón, 1,5cl de Sirope de Azúcar. La tapamos y agitamos.',
                    'Quitamos el exceso de agua del vaso bajo que habíamos dejado enfriando con ayuda de un colador (si es necesario añadimos más hielo pilé al vaso) y servimos la mezcla de la coctelera, sin los hielos.',
                    'Decoramos con dos moras y virutas de limón.',
                ]
            ],
            "cover_club" => [
                "name" => 'CLOVER CLUB',
                "description" => 'Cover Club es un clásico completamente único, tanto por su textura como por su sabor. Un cóctel espumoso y con un atractivo y sugerente color, perfecto para los amantes de la frambuesa.',

                'video' => 'https://www.youtube.com/embed/hJ2TBQuP6sM',
                'foto_header' => 'cocktails/header/clover_club.jpg',
                'foto_gallery' => 'cocktails/gallery/clover_club.jpg',
                'foto_sheet' => 'cocktails/sheet/clover_club.jpg',

                'ingredientes' => [
                    '4,5cl de Gin MG', '1,5cl de Sirope de Frambuesa', '1,5cl de Zumo de Limón', '2,5cl de Clara de Huevo', '3 Frambuesas'
                ],
                'recipe' => [
                    'Enfriamos una copa introduciendo cubos de hielo y removiéndolos. La dejamos apartada con los hielos dentro.',
                    'En una coctelera añadimos, ayudándonos de un medidor, 4,5cl de Gin MG, 1,5cl de Sirope de Frambuesa, 1,5cl de Zumo de Limón, 2,5cl de Clara de Huevo y hielo. La tapamos y agitamos.',
                    'Quitamos el hielo y el exceso de agua de la copa que habíamos dejado enfriando con ayuda de un colador y servimos la mezcla de la coctelera, sin hielos.',
                    'Decoramos con una brocheta de tres frambuesas.',
                ]
            ],
            "corpse_reviver" => [
                "name" => 'CORPSE REVIVER Nº2',
                "description" => 'El combinado clásico cuyo potente sabor hará que se despierten todos tus sentidos. De ahí su nombre, Corpse Reviver, siendo el nº2 el que mejor ha resistido al paso de los años.',

                'video' => 'https://www.youtube.com/embed/orTH6YcdIOg',
                'foto_header' => 'cocktails/header/corpse_reviver.jpg',
                'foto_gallery' => 'cocktails/gallery/corpse_reviver.jpg',
                'foto_sheet' => 'cocktails/sheet/corpse_reviver.jpg',

                'ingredientes' => [
                    '2,5cl de Gin MG', '2,5cl de Zumo de Limón', '2,5cl de Cointreau', '2,5cl de Lillet Blanco', '1 Dash de Absenta', 'Twist de Limón'
                ],
                'recipe' => [
                    'Enfriamos la copa cóctel introduciendo cubos de hielo y removiéndolos. La dejamos apartada con los hielos dentro.',
                    'En una coctelera añadimos ayudándonos de un medidor, 2,5cl de Gin MG, 2,5cl de Zumo de Limón, 2,5cl de Cointreau, 2,5cl de Lillet Blanco y hielo en cubos. La tapamos y agitamos.',
                    'Quitamos el hielo y el exceso de agua de la copa cóctel que habíamos dejado enfriando con ayuda de un colador. Aromatizamos la copa con absenta y servimos la mezcla de la coctelera, sin el hielo.',
                    'Decoramos la copa cóctel con un twist de limón.',
                ]
            ],
            "dry_martini" => [
                "name" => 'DRY MARTINI',
                "description" => 'Dry Martini es uno de los cócteles más clásicos hechos con ginebra. Sencillo y refrescante. Sin duda, la mejor elección para un aperitivo.',

                'video' => 'https://www.youtube.com/embed/5vax22eXj8w',
                'foto_header' => 'cocktails/header/dry_martini.jpg',
                'foto_gallery' => 'cocktails/gallery/dry_martini.jpg',
                'foto_sheet' => 'cocktails/sheet/dry_martini.jpg',

                'ingredientes' => [
                    '6cl de Gin MG', '1,5cl de Vermut Seco', 'Twist de Limón', '2 Aceitunas Verdes'
                ],
                'recipe' => [
                    'Enfriamos la copa cóctel introduciendo dos cubos de hielo y removiéndolos. La dejamos apartada con los hielos dentro.',
                    'En un vaso mezclador añadimos más cubos de hielo y ayudándonos de un medidor, añadimos 6cl de Gin MG y 1,5cl de Vermut Seco. Removemos.',
                    'Quitamos los hielos y el exceso de agua de la copa cóctel que habíamos dejado enfriando, con ayuda de un colador y servimos el cóctel del vaso mezclador, sin hielos.',
                    'Cortamos un twist de limón y aromatizamos la copa cóctel con él, antes de echarlo dentro.',
                    'Decoramos la copa cóctel con una brocheta con dos aceitunas.'
                ]
            ],
            "french" => [
                "name" => 'FRENCH 75',
                "description" => 'El clásico cóctel French 75 destaca por tener un sabor cítrico y muy burbujeante que lo convierte en la mejor elección para los brindis más refrescantes.',

                'video' => 'https://www.youtube.com/embed/DcdwrmgyOfc',
                'foto_header' => 'cocktails/header/french.jpg',
                'foto_gallery' => 'cocktails/gallery/french.jpg',
                'foto_sheet' => 'cocktails/sheet/french.jpg',

                'ingredientes' => [
                    '4cl de Gin MG', '2cl de Zumo de Limón', '1cl de Sirope de Azúcar', 'Top de Champagne', 'Twist de Limón'
                ],
                'recipe' => [
                    'Enfriamos la copa flauta introduciendo hielo pilé. La dejamos apartada con el hielo dentro.',
                    'En una coctelera añadimos, ayudándonos de un medidor, 4cl de Gin MG, 2cl de Zumo de Limón, 1cl de Sirope de Azúcar y un cubo de hielo. La tapamos y agitamos.',
                    'Quitamos el hielo pilé y el exceso de agua de la copa flauta que habíamos dejado enfriando con ayuda de un colador y servimos la mezcla de la coctelera, sin el hielo.',
                    'Terminamos con un top de champagne hasta rellenar completamente la copa flauta y decoramos con un twist de limón.'
                ]
            ],
            "gimlet" => [
                "name" => 'GIMLET',
                "description" => 'El Gimlet es el cóctel clásico de ginebra perfecto para los amantes de los sabores secos y ácidos. Un combinado elegante que se presenta como una de las mejores opciones para el aperitivo.',

                'video' => 'https://www.youtube.com/embed/llv6oT2ldzg',
                'foto_header' => 'cocktails/header/gimlet.jpg',
                'foto_gallery' => 'cocktails/gallery/gimlet.jpg',
                'foto_sheet' => 'cocktails/sheet/gimlet.jpg',

                'ingredientes' => [
                    '4cl de Gin MG', '2cl de Cordial de Lima', 'Twist de Lima'
                ],
                'recipe' => [
                    'Enfriamos la copa coupé introduciendo un cubo de hielo y removiéndolo. La dejamos apartada con el hielo dentro.',
                    'En una coctelera introducimos dos cubos de hielo y ayudándonos de un medidor, añadimos 4cl de Gin MG y 2cl de Cordial de Lima. La tapamos y agitamos.',
                    'Quitamos el hielo y el exceso de agua de la copa coupé que habíamos dejado enfriando con ayuda de un colador y servimos la mezcla de la coctelera.',
                    'Decoramos con un Twist de Lima.'
                ]
            ],
            "gin_mule" => [
                "name" => 'GIN MULE',
                "description" => 'El Gin Mule es un cóctel clásico muy sencillo de preparar. Su sabor cítrico y especiado lo hacen muy refrescante. Y su presentación en vaso de cobre lo convierten en uno de los combinados más reconocibles.',

                'video' => 'https://www.youtube.com/embed/IuCkxX7_v3w',
                'foto_header' => 'cocktails/header/gin_mule.jpg',
                'foto_gallery' => 'cocktails/gallery/gin_mule.jpg',
                'foto_sheet' => 'cocktails/sheet/gin_mule.jpg',

                'ingredientes' => [
                    '5cl de Gin MG', '2,5cl de Zumo de Lima', 'Top Ginger Beer Le Tribute', '1 Gajo de Lima', '2 Láminas de Jengibre'
                ],
                'recipe' => [
                    'Directamente en un vaso (preferiblemente una copa de cobre) añadimos con ayuda de un medidor, 5cl de Gin MG, 2,5cl de Zumo de Lima, hielo pilé y rellenamos con un top de Ginger Beer Le Tribute.',
                    'Removemos la mezcla en el vaso.',
                    'Decoramos con un gajo de lima y dos láminas de jengibre.',
                ]
            ],
            "monkey_gland" => [
                "name" => 'MONKEY GLAND',
                "description" => 'El Mokey Gland es uno de los grandes desconocidos de la coctelería clásica. Su exquisito sabor con toques de naranja y su delicioso aroma lo hacen el combinado ideal para el invierno.',

                'video' => 'https://www.youtube.com/embed/TZjx6fBBrZY',
                'foto_header' => 'cocktails/header/monkey_gland.jpg',
                'foto_gallery' => 'cocktails/gallery/monkey_gland.jpg',
                'foto_sheet' => 'cocktails/sheet/monkey_gland.jpg',

                'ingredientes' => [
                    '4,5cl de Gin MG', '4,5cl de Zumo de Naranja', '0,5cl de Granadina', '1 Dash de Absenta', 'Twist de Naranja', '1 Cereza'
                ],
                'recipe' => [
                    'Enfriamos una copa cóctel introduciendo cubos de hielo y removiéndolos. La dejamos apartada con los hielos dentro.',
                    'En una coctelera añadimos ayudándonos de un medidor, 4,5cl de Gin MG, 4,5cl de Zumo de Naranja, 0,5cl de Granadina y hielo. La tapamos y agitamos.',
                    'Quitamos el hielo y el exceso de agua de la copa cóctel que habíamos dejado enfriando con ayuda de un colador. Aromatizamos la copa con absenta y servimos la mezcla de la coctelera, sin el hielo.',
                    'Decoramos la copa cóctel con una cereza y un twist de naranja.',
                ]
            ],
            "negroni" => [
                "name" => 'NEGRONI',
                "description" => 'Un verdadero clásico de la coctelería, el Negroni encuentra su origen en Florencia, pero es conocido en el mundo entero. Su sabor amargo lo convierte en el aperitivo perfecto.',

                'video' => 'https://www.youtube.com/embed/FH-YsxfWGek',
                'foto_header' => 'cocktails/header/negroni.jpg',
                'foto_gallery' => 'cocktails/gallery/negroni.jpg',
                'foto_sheet' => 'cocktails/sheet/negroni.jpg',

                'ingredientes' => [
                    '3cl de Gin MG', '3cl de Vermut Rojo', 'Twist de Naranja'
                ],
                'recipe' => [
                    'Enfriamos el vaso old fashioned removiendo dos cubos de hielo. Lo dejamos apartado con los hielos dentro.',
                    'En un vaso mezclador añadimos más cubos de hielo y ayudándonos de un medidor, añadimos 3cl de Gin MG y 1,5cl de Vermut Rojo. Removemos.',
                    'Quitamos los hielos y el exceso de agua del vaso old fashioned que habíamos dejado enfriando con ayuda de un colador y servimos el liquido del vaso mezclador, sin hielos.',
                    'Cortamos un twist de naranja y aromatizamos el vaso old fashioned con él antes de echarlo dentro.'
                ]
            ],
            "ramos_gin_fizz" => [
                "name" => 'RAMOS GIN FIZZ',
                "description" => 'Ramos Gin Fizz es un cóctel clásico de ginebra que te cautivará por su textura sedosa y su cremosidad. De sabor cítrico es el hermano pequeño de un sour, pero con burbujas.',

                'video' => 'https://www.youtube.com/embed/oYEN5_84m64',
                'foto_header' => 'cocktails/header/ramos_gin_fizz.jpg',
                'foto_gallery' => 'cocktails/gallery/ramos_gin_fizz.jpg',
                'foto_sheet' => 'cocktails/sheet/ramos_gin_fizz.jpg',

                'ingredientes' => [
                    '6cl de Gin MG', '1,5cl de Zumo de Limón', '1,5cl de Zumo de Lima', '2cl de Sirope de Azúcar', '2cl de Clara de Huevo', '3cl de Nata', '3 Dashes de Agua de Azahar', 'Top de Soda', 'Twist de Limón', '1 Cereza Marrasquino'
                ],
                'recipe' => [
                    'Enfriamos el vaso highball removiendo varios cubos de hielo. Lo dejamos apartado con los hielos dentro.',
                    'En una coctelera añadimos, ayudándonos de un medidor, 6cl de Gin MG, 1,5cl de Zumo de Limón, 1,5cl de Zumo de Lima, 2cl de Sirope de Azúcar, 2cl de Clara de Huevo, 3cl de Nata y 3 Dashes de Agua de Azahar. La tapamos y agitamos.',
                    'Quitamos el exceso de agua del vaso highball con ayuda de un colador conservando los cubos de hielo y servimos la mezcla de la coctelera.',
                    'Terminamos con un top de soda hasta rellenar completamente el vaso highball y decoramos con una cereza marrasquino y un twist de limón.'
                ]
            ],
            "red_snapper" => [
                "name" => 'RED SNAPPER',
                "description" => 'Red Snapper es un cóctel clásico conocido por sus propiedades reconstituyentes. La vuelta definitiva al Bloody Mary, ya que utiliza ginebra en vez de vodka, es la mejor elección para las mañanas de domingo.',

                'video' => 'https://www.youtube.com/embed/pwtktyEC6L0',
                'foto_header' => 'cocktails/header/red_snapper.jpg',
                'foto_gallery' => 'cocktails/gallery/red_snapper.jpg',
                'foto_sheet' => 'cocktails/sheet/red_snapper.jpg',

                'ingredientes' => [
                    '5cl de Gin MG', '10cl de Zumo de Tomate Cuckoo', '2cl de Zumo de Limón', '2 Dashes de Salsa Perrin’s', '2 Dashes de Tabasco', 'Sal y Pimienta', 'Albahaca', '1 Rodaja de Limón'
                ],
                'recipe' => [
                    'En una coctelera metemos un cubo de hielo y ayudándonos de un medidor, añadimos 5cl de Gin MG, 2cl de Zumo de Limón, 10cl de Zumo de Tomate, un pellizco de sal y pimienta, 2 Dashes de Salsa Perrin’s y 2 Dashes de Tabasco. La tapamos y agitamos.',
                    'En un vaso alto añadimos cubos de hielo hasta llenarlo y servimos el cóctel de la coctelera.',
                    'Decoramos con hojas de albahaca y una rodaja de limón.',
                ]
            ],
            "tom_collins" => [
                "name" => 'TOM COLLINS',
                "description" => 'Tom Collins es uno de los cócteles clásicos de ginebra más conocidos del mundo. Sencillo y con bajo contenido alcohólico, es perfecto para el verano.',

                'video' => 'https://www.youtube.com/embed/6E6ZPAs8fPI',
                'foto_header' => 'cocktails/header/tom_collins.jpg',
                'foto_gallery' => 'cocktails/gallery/tom_collins.jpg',
                'foto_sheet' => 'cocktails/sheet/tom_collins.jpg',

                'ingredientes' => [
                    '5cl de Gin MG', '2cl de Sirope de Azúcar', '2,2cl de Zumo de Limón', 'Top de Soda', '1 Rodaja de Limón', '1 Cereza'
                ],
                'recipe' => [
                    'Enfriamos el vaso tumbler removiendo dos cubos de hielo. Lo dejamos apartado con los hielos dentro.',
                    'En una coctelera añadimos ayudándonos de un medidor, 5cl de Gin MG, 2cl de Sirope de Azúcar y 2,2cl de Zumo de Limón. La tapamos y agitamos.',
                    'Quitamos el exceso de agua del vaso tumbler con ayuda de un colador conservando los cubos de hielo y servimos la mezcla de la coctelera.',
                    'Terminamos con un top de soda hasta rellenar completamente el vaso tumbler y decoramos con una rodaja de limón y una cereza.'
                ]
            ],
            "white_lady" => [
                "name" => 'WHITE LADY',
                "description" => 'Este cóctel clásico elaborado a base de ginebra pertenece a la familia de los sours. De sabor dulce y delicioso, es perfecto para consumirlo antes de las comidas.',

                'video' => 'https://www.youtube.com/embed/Rg_T5z8bkGg',
                'foto_header' => 'cocktails/header/white_lady.jpg',
                'foto_gallery' => 'cocktails/gallery/white_lady.jpg',
                'foto_sheet' => 'cocktails/sheet/white_lady.jpg',

                'ingredientes' => [
                    '5cl de Gin MG', '2,5cl de Cointreau', '2,5cl de Zumo de Limón', 'Twist de Limón'
                ],
                'recipe' => [
                    'Enfriamos la copa coupé introduciendo un cubo de hielo y removiéndolo. La dejamos apartada con el hielo dentro.',
                    'En una coctelera añadimos ayudándonos de un medidor, 5cl de Gin MG, 2,5cl de Cointreau, 2,5cl de Zumo de Limón y un cubo de hielo. La tapamos y agitamos.',
                    'Quitamos el cubo de hielo y el exceso de agua de la copa coupé que habíamos dejado enfriando con ayuda de un colador y servimos la mezcla de la coctelera, sin el hielo.',
                    'Cortamos un twist de limón y aromatizamos la copa con él.',
                    'Decoramos la copa con otro twist de limón.',
                ]
            ],

        ];

        $i=1;
        foreach ($cocktails as $index=>$cocktail){
            Log::info($cocktail['ingredientes']);


            $cocktailModel = Cocktail::create([
                'name' => $cocktail['name'],
                'description' => $cocktail['description'],

                'video' => $cocktail['video'],
                'foto_header' => $cocktail['foto_header'],
                'foto_gallery' => $cocktail['foto_gallery'],
                'foto_sheet' => $cocktail['foto_sheet'],
                'url' => $index,

                'order' => $i,
            ]);

            foreach ($cocktail['ingredientes'] as $ingrediente){
                Ingredient::create([
                    'ingredient' => $ingrediente,
                    'cocktail_id' => $cocktailModel->id
                ]);
            }

            foreach ($cocktail['recipe'] as $recipe){
                Recipe::create([
                    'recipe' => $recipe,
                    'cocktail_id' => $cocktailModel->id
                ]);
            }

            $i++;
        }



    }
}
