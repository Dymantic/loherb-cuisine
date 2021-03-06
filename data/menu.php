<?php

return [
    'sections' => [
        ['name' => 'menu.sections.appetizers', 'url' => 'appetizers'],
        ['name' => 'menu.sections.mains', 'url' => 'mains'],
        ['name' => 'menu.sections.desserts', 'url' => 'desserts'],
        ['name' => 'menu.sections.drinks', 'url' => 'drinks'],
    ],

    'mains' => [
        'title' => 'menu.mains.title'
    ],

    'appetizers' => [
        'title' => 'menu.appetizers.title'
    ],

    'desserts' => [
        'title' => 'menu.desserts.title'
    ],

    'drinks' => [
        'title' => 'menu.drinks.title'
    ],

    'dine' => [
        'title'     => 'dine',
        'starters'  => [
            'title'   => 'menu.dine.starters.title',
            'courses' => [
                'menu.dine.starters.balsamic-salad',
                'menu.dine.starters.thousand-island-salad',
                'menu.dine.starters.sesame-salad',
            ]
        ],
        'options'   => [
            [
                'title'   => 'menu.dine.classic.title',
                'price'   => '580',
                'choices' => [
                    'menu.dine.classic.bolognese-penne',
                    'menu.dine.classic.vegetable-club',
                ]
            ],
            [
                'title'   => 'menu.dine.feast.title',
                'price'   => '680',
                'choices' => [
                    'menu.dine.feast.tandoori-chicken',
                    'menu.dine.feast.pineapple-pork',
                    'menu.dine.feast.fish-puttanesca',
                ]
            ],
            [
                'title'   => 'menu.dine.specialty.title',
                'price'   => '780',
                'choices' => [
                    'menu.dine.specialty.duck-beetroot',
                    'menu.dine.specialty.ribs-bbq-honey',
                ]
            ],
            [
                'title'   => 'menu.dine.premium.title',
                'price'   => '880',
                'choices' => [
                    'menu.dine.premium.seafood-club',
                    'menu.dine.premium.lamb-makauy',
                    'menu.dine.premium.beef-wellington',
                ]
            ],
            [
                'title'   => 'menu.dine.award.title',
                'price'   => '980',
                'choices' => [
                    'menu.dine.award.surf-and-turf',
                    'menu.dine.award.strip-steak',
                    'menu.dine.award.sous-vide-tomohawk',
                ]
            ]
        ],
        'soup' => [
            'title' => 'menu.dine.soup.title',
            'options' => [
//                'soup_of_day',
//                'bread',
            ]
        ],
        'dessert' => [
            'title' => 'menu.dine.dessert.title',
            'options' => [
                'jewelry-box',
                'kumquat-cheese',
            ]
        ],
        'beverages' => [
            'title'   => 'menu.dine.beverages.title',
            'options' => [
                'chia-apple-vinegar',
                'herbal-tea',
                'earl-grey',
                'long-black',
            ]
        ],

        'images' => [

            '/images/menu-images/dine/soup_of_day_two.png',
            '/images/menu-images/dine/tomahawk_pork_chop.png',
            '/images/menu-images/dine/vegetarian_appetizer.png',
            '/images/menu-images/dine/soup_of_day.png',
            '/images/menu-images/dine/scallop_devilled_eggs.png',
            '/images/menu-images/dine/wellington_pink.png',
            '/images/menu-images/dine/abalone_starter.png',
            '/images/menu-images/dine/salad_starter.png',
            '/images/menu-images/dine/dine_soup.png',
            '/images/menu-images/dine/dine_pork.png',
            '/images/menu-images/dine/dine_chicken.png',
            '/images/menu-images/dine/dine_salad.png',
            '/images/menu-images/dine/dine_starter.png',
            '/images/menu-images/dine/dine_1.png',
//            '/images/menu-images/dine/dine_2.png',
            '/images/menu-images/dine/dine_3.png',
//            '/images/menu-images/dine/lamb_dine.png',
//            '/images/menu-images/dine/flower_starter.png',
//            '/images/menu-images/dine/dine_5.png', removed as requested by Ursa

        ]
    ],

    'brunch' => [
        'title'    => 'Brunch & Teatime',
        'sections' => [
            [
                'title'   => 'menu.brunch.subs.title',
                'price'   => 230,
                'options' => [
                    'menu.brunch.subs.new-orleans-chicken',
                    'menu.brunch.subs.tuna-with-vegetables',
                    'menu.brunch.subs.pesto-mushroom',
                    'menu.brunch.subs.smoked-duck',
                    'menu.brunch.subs.hawaii-ham',
                ]
            ],
            [
                'title'   => 'menu.brunch.cakes.title',
                'price'   => 160,
                'options' => [
//                    'menu.brunch.cakes.matcha',
                    'menu.brunch.cakes.chocolate',
                    'menu.brunch.cakes.cheese',
                ]
            ],
            [
                'title'   => 'menu.brunch.waffles.title',
                'price'   => 270,
                'options' => [
                    'menu.brunch.waffles.honey-fruit',
                    'menu.brunch.waffles.chocolate',
                    'menu.brunch.waffles.matcha',
                ]
            ],
        ],

        'images' => [
            '/images/menu-images/brunch/tea_1.png',
            '/images/menu-images/brunch/tea_2.png',
            '/images/menu-images/brunch/tea_3.png',
//            '/images/menu-images/brunch/tea_4.png', removed as per Ursa
            '/images/menu-images/brunch/tea_5.png',
            '/images/menu-images/brunch/cannelle.png',
            '/images/menu-images/brunch/cheesecake.png',
        ]
    ],

    'beverages' => [
        'title'    => 'menu.beverages.title',
        'sections' => [
            'coffee' => [
                'title'   => 'menu.beverages.coffee.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.coffee.espresso',
                    'menu.beverages.coffee.double-long',
                    'menu.beverages.coffee.italian-latte',
//                    'menu.beverages.coffee.rose-latte',
                    'menu.beverages.coffee.burnt-cream-latte',
                    'menu.beverages.coffee.caramel-machiato',
                    'menu.beverages.coffee.mocha-smoothie',
                ]
            ],
            'tea' => [
                'title'   => 'menu.beverages.tea.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.tea.four-seasons-tea',
                    'menu.beverages.tea.apple-guava',
                    'menu.beverages.tea.iron-buddhism-tea',
//                    'menu.beverages.tea.kiwi-strawberry-tea',
                ]
            ],
            'juice' => [
                'title'   => 'menu.beverages.fruit-juice.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.fruit-juice.honey-lemon',
                    'menu.beverages.fruit-juice.orange',
                    'menu.beverages.fruit-juice.berry-yogurt',
                    'menu.beverages.fruit-juice.kiwi-pineapple',
                ]
            ],
            'aulait' => [
                'title'   => 'menu.beverages.au-lait.title',
                'price'   => 160,
                'options' => [
                    'menu.beverages.au-lait.caramel-au-lait',
                    'menu.beverages.au-lait.chocolate-au-lait',
                    'menu.beverages.au-lait.matcha-au-lait',
                    'menu.beverages.au-lait.earl-black',
                    'menu.beverages.au-lait.vanilla-milk-smoothie',
                ]
            ],
//            'soda' => [
//                'title'   => 'menu.beverages.soda.title',
//                'price'   => 160,
//                'options' => [
//                    'menu.beverages.soda.orange',
//                    'menu.beverages.soda.red-berry',
//                    'menu.beverages.soda.sicilia-coffee',
//                    'menu.beverages.soda.cola',
//                ]
//            ],

        ],
        'images'   => [

            '/images/menu-images/beverages/beverage_1.png',
            '/images/menu-images/beverages/beverage_2.png',
            '/images/menu-images/beverages/beverage_3.png',
            '/images/menu-images/beverages/beverage_4.png',
            '/images/menu-images/beverages/strawberry_drink.png',
        ]
    ],

    'alcohol' => [
        'title' => 'menu.alcohol.title',

        'sections' => [
            [
                'title'   => 'menu.alcohol.beer.title',
                'price'   => 160,
                'options' => [
                    'menu.alcohol.beer.golden-taiwan-beer'
                ]
            ],
            [
                'title'   => 'menu.alcohol.wine.title',
                'price'   => 800,
                'options' => [
                    'menu.alcohol.wine.signore-giuseppe',
                    'menu.alcohol.wine.dominga-chardonnay',
                    'menu.alcohol.wine.dominga-cabernet-sauvignon'
                ]
            ],
            [
                'title'   => 'menu.alcohol.spirits.title',
                'price'   => 1200,
                'options' => [
                    'menu.alcohol.spirits.glenfiddich-whiskey'
                ]
            ]
        ],
        'images'   => [
            '/images/menu-images/alcohol/alcohol_1.png',
            '/images/menu-images/alcohol/alcohol_2.png',
            '/images/menu-images/alcohol/alcohol_3.png',
        ]
    ]
];
