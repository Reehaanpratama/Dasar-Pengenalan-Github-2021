<?php
$perusahaan = [
    'nama' => 'Rehan Pratama',
    'umur' => '17 Tahun',
    'alamat' => 'Cikutra',
    'hobby' => [
        'Sepedahan',
        'Dengerin Musik',
    ],
    'Media Sosial' => [
        'Instagram' => 'rehan666n',
        'Facebook' => 'Rehan Pratama'
    ]
    ];

    echo "<pre>";
    print_r($perusahaan);

    echo "<br>";
    echo "Program array multidimensi menampilkan satu data <br>";
    echo $perusahaan['hobby'][1]."<br>";
    echo $perusahaan['Media Sosial']['Instagram'];


    
