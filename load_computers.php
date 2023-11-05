<?php
header('Content-Type: application/json');

$computers = [
  [
    "name" => "HP Laptop 2023",
    "description" => "Pantalla táctil HD de 15.6 pulgadas, AMD Ryzen 5 7530U (Beats i7-1165G7), 32 GB de RAM, SSD PCIe de 512 GB, cámara web, KB retroiluminada, HDMI, tipo C, Wi-Fi 6, Windows 11 Home, plata, accesorios KKE",
    "price" => "Q6000"
  ],
  [
    "name" => "HP Computadora portátil",
    "description" => "Pantalla HD de 15.6\", procesador Intel Core i3-1115G4, 32 GB de RAM, SSD de 1 TB, Wi-Fi, lector de tarjetas SD, HDMI, cámara web, Windows 11 Home, azul abeto, accesorios KKE",
    "price" => "Q4000"
  ],
  [
    "name" => "Acer Aspire 5 A515-56-347N",
    "description" => "Pantalla HD de 15.6\", procesador Intel Core i3-1115G4, 32 GB de RAM, SSD de 1 TB, Wi-Fi, lector de tarjetas SD, HDMI, cámara web, Windows 11 Home, azul abeto, accesorios KKE",
    "price" => "Q3500"
  ]
  // ... otros productos
];

echo json_encode($computers);
?>
