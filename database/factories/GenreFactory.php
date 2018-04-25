<?php

use Faker\Generator as Faker;

$factory->define(App\Genre::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
    ];
});

$factory->state(App\Genre::class, 'fable', [
    'name' =>'басня',
    'description' =>'Стихотворное или прозаическое литературное произведение нравоучительного, сатирического характера.',
]);
$factory->state(App\Genre::class, 'ballad', [
    'name' =>'баллада',
    'description' =>'Рассказ, изложенный в поэтической форме, исторического, мифического или героического характера. ',
]);
$factory->state(App\Genre::class, 'epic', [
    'name' =>'былины',
    'description' =>'Это героико-патриотические песни-сказания, повествующие о подвигах богатырей и отражающие жизнь Древней Руси IX-XIII веков;',
]);
$factory->state(App\Genre::class, 'detective', [
    'name' =>'детектив',
    'description' =>'Это преимущественно литературный жанр, произведения которого описывают процесс исследования загадочного происшествия с целью выяснения его обстоятельств и раскрытия загадки.',
]);
$factory->state(App\Genre::class, 'comedy', [
    'name' =>'комедия',
    'description' =>'Вид драматургического произведения. Отображает все уродливое и нелепое, смешное и несуразное, высмеивает пороки общества.',
]);
$factory->state(App\Genre::class, 'melodrama', [
    'name' =>'мелодрама',
    'description' =>'Вид драмы, действующие лица которой резко делятся на положительных и отрицательных.',
]);
$factory->state(App\Genre::class, 'myth', [
    'name' =>'миф',
    'description' =>'Это повествование, передающее представления людей о мире, месте человека в нём, о происхождении всего сущего, о богах и героях.',
]);
$factory->state(App\Genre::class, 'feature article', [
    'name' =>'очерк',
    'description' =>'Самый достоверный вид повествовательной, эпической литературы, отображающий факты из реальной жизни.',
]);
$factory->state(App\Genre::class, 'science fiction', [
    'name' =>'научная фантастика ',
    'description' =>'Жанр в литературе, и других видах искусства, одна из разновидностей фантастики. Научная фантастика основывается на фантастических допущениях (вымысле) в области науки, включая различные виды наук, такие как: точные, естественные, и гуманитарные науки.',
]);
$factory->state(App\Genre::class, 'novella', [
    'name' =>'новелла',
    'description' =>'Это основной жанр малой повествовательной прозы, более краткая форма художественной прозы, нежели повесть или роман.',
]);
$factory->state(App\Genre::class, 'poem', [
    'name' =>'поэма',
    'description' =>'Вид лироэпического произведения; стихотворное сюжетное повествование.',
]);
$factory->state(App\Genre::class, 'fairy tale', [
    'name' =>'сказка',
    'description' =>'Это жанр литературного творчества, чаще всего в сказках присутствует волшебство и различные невероятные приключения.',
]);
$factory->state(App\Genre::class, 'novel', [
    'name' =>'роман',
    'description' =>'Большая форма; произведение, в событиях которого обычно принимает участие много действующих лиц, чьи судьбы переплетаются. Романы бывают философские, приключенческие, исторические, семейно-бытовые, социальные.',
]);
$factory->state(App\Genre::class, 'tragedy', [
    'name' =>'трагедия',
    'description' =>'Вид драматургического произведения, рассказывающего о несчастной судьбе главного героя, часто обреченного на смерть.',
]);
$factory->state(App\Genre::class, 'epic', [
    'name' =>'эпопея',
    'description' =>'Произведение или цикл произведений, изображающих значительную историческую эпоху либо большое историческое событие.',
]);
$factory->state(App\Genre::class, 'elegy', [
    'name' =>'элегия',
    'description' =>'Лирический жанр, который содержится в свободной стихотворной форме какую-либо жалобу, выражение печали, или эмоциональный результат философского раздумья над сложными проблемами жизни.',
]);
