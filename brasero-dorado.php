<?php 
    
    $tittle = 'Hola mundo';

    $datosNegocios = [
        'Nombre' => 'El brasero Rojo',
        'link' => 'brasero-dorado',
        'Descripcion' => 'Asadero de pollo',
        'Direccion' => 'Calle 183 # 9-64',
        'Direccionlink' => 'https://www.google.com/maps/place/Cl.+183+%239-64,+Bogot%C3%A1/@4.7602982,-74.0341577,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f858988bfa72d:0xa6dd97bd5189caab!8m2!3d4.7602982!4d-74.031969',
        'Horario' => 'Domingo a Domingo 1:00pm - 9:00pm',
        'Domicilios' => '3057534162',
    ];


    $combos = [
        [
        'id' => '1-pollo-asado',
        'nombre' => '1 pollo asado o frito',
        'descripcion' => '1 pollo asado o frito + 4 papas + 4 arepas + platano + Gaseosa 1.5lt',
        'precio' => '21000',
        'rutaImagen' => 'pollo-asado.jpg'
        ],

        [
        'id' => '1-pollo-broaster',
        'nombre' => '1 pollo Broaster',
        'descripcion' => '1 pollo Broaster + papa a la francesa + yuca frita + arepa + platano + Gaseosa 1.5lt',
        'precio' => '24500',
        'rutaImagen' => 'pollo-asado.jpg'
        ],

        [
            'id' => '2-pollo-asado',
            'nombre' => '2 pollos asados',
            'descripcion' => '2 pollo asado + papa a la francesa + yuca frita + arepa + platano + Gaseosa 1.5lt',
            'precio' => '40000',
            'rutaImagen' => 'pollo-asado.jpg'
            ],
    ];

     
   


    // var_dump ($combos);
    // echo $productos['Combos'];
// var_dump ($productos['Combos'], $productos['Bebidas'] );
// echo '$jobs[1]';
// echo $combos[0]['nombre'];
// echo "$productos[Combos][0]";



    
    



    $limitMonths = 200;
    
    $jobs = [
        [
        'tittle' => 'PHP dev',
        'description' => 'This is a awesome job!',
        'visible' => true,
        'months' => 12
        ],
        [
        'tittle' => 'Python dev',
        'description' => 'This is a awesome job!',
        'visible' => false,
        'months' => 346
        ],
        [
        'tittle' => 'Devops',
        'description' => 'This is a awesome job!',
        'visible' => true,
        'months' => 9
        ],
        [
        'tittle' => 'Node dev',
        'description' => 'This is a awesome job!',
        'visible' => true,
        'months' => 5
        ],
        [
        'tittle' => 'Front Dev',
        'description' => 'This is a awesome job!',
        'visible' => true,
        'months' => 16
        ]
    ];
    
    $paises = [
        'Venezuela' => [
            'Caracas', 'Maracaibo', 'San Cristóbal'
        ],
        'Venezuela' => [
            'Caracas', 'Maracaibo', 'San Cristóbal'
        ]
    ];

    
    
    
    
                                                
                                                
                                                    
   
                                                    
                                                
                                                
                            
                        

    
    
    require ('views/brasero-dorado.view.php');


?>