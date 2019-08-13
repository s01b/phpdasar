<?php

$smartphone = [
    [
        "brand"     => "Xiaomi",
        "type"      => "Redmi Note 7",
        "chipset"   => "Qualcomm SDM660 Snapdragon 660 (14 nm)",
        "internal"  => "128 GB, 4 GB RAM",
        "GPU"       => "Adreno 512",
        "OS"        => "Android 9.0 (Pie); MIUI 10",
        "gambar"    => "note7.png"
    ],
    [
        "brand"     => "Huawei",
        "type"      => "P30 Pro",
        "chipset"   => "HiSilicon Kirin 980 (7 nm)",
        "internal"  => "128 GB, 6 GB RAM",
        "GPU"       => "Mali-G76 MP10",
        "OS"        => "Android 9.0 (Pie); EMUI 9.1",
        "gambar"    => "p30pro.jpg"
    ],
    [
        "brand"     => "Apple",
        "type"      => "iPhone XS Max",
        "chipset"   => "Apple A12 Bionic (7 nm)",
        "internal"  => "64/256/512 GB, 4 GB RAM",
        "GPU"       => "Apple GPU (4-core graphics)",
        "OS"        => "iOS 12, upgradable to iOS 12.4",
        "gambar"    => "xsmax.png"
    ],
    [
        "brand"     => "Apple",
        "type"      => "iPhone 7 Plus",
        "chipset"   => "Apple A10 Fusion (16 nm)",
        "internal"  => "32/128/256 GB, 3 GB RAM",
        "GPU"       => "PowerVR Series7XT Plus (six-core graphics)",
        "OS"        => "iOS 10.0.1, upgradable to iOS 12.4",
        "gambar"    => "7plus.png"
    ],
    [
        "brand"     => "Samsung",
        "type"      => "Galaxy S10+",
        "chipset"   => "Exynos 9820 (8 nm)",
        "internal"  => "128/512 GB, 8 GB RAM",
        "GPU"       => "Mali-G76 MP12",
        "OS"        => "Android 9.0 (Pie); One UI",
        "gambar"    => "s10.jpg"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan menggunakan GET</title>
</head>

<body>
    <h1>Daftar Smartphone</h1>
    <ul>
        <?php foreach ($smartphone as $hp) : ?>
            <li>
                <a href="latihan2.php"><?= $hp["brand"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>