<?php
$menu = [
    [
        "nama" => "Beranda",
        "subMenu" => [
            [
                "nama" => "Olahraga",
                "subMenu" => [
                    [
                        "nama" => "bola",
                    ],
                    [
                        "nama" => "bulu tangkis"
                    ]
                ]
            ],
        ]
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Politik",
                "subMenu" => [
                    [
                        "nama" => "Partai Banteng",
                    ],
                    [
                        "nama" => "Partai PPP"
                    ]
                ]
            ],
        ]
    ],
    [
        "nama" => "Tentang",
        "subMenu" => [
            [
                "nama" => "Manca Negara",
                "subMenu" => [
                    [
                        "nama" => "Internasional",
                    ],
                    [
                        "nama" => "Nasional"
                    ]
                ]
            ],
        ]
    ]
];

foreach($menu as $key => $val)
{
    echo $val['nama'] . "<br>";
    echo "<ul>";
    foreach($val['subMenu'] as $menu)
    {
        echo "<li>" . $menu['nama'] . "</li>";
        echo "<ol>";
        foreach($menu['subMenu'] as $sub)
        {
            echo "<li>". $sub['nama'] . "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}

?>