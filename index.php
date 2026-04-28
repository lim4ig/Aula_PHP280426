<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    // aqui criar o array de mulheres
    $arrayMulheres = [
        ['Ada Lovelace', 'ada-lovelace.webp', 'Considerada a primeira programadora da história, Ada Lovelace escreveu o primeiro algoritmo destinado a ser processado por uma máquina, a Máquina Analítica de Charles Babbage. Ela é reconhecida por sua visão pioneira sobre o potencial da computação.'],
        ['Dorothy Vaughan', 'dorothy-vaughan.webp', 'Dorothy Vaughan foi uma matemática e programadora que liderou o grupo de programadoras negras na NASA. Ela foi uma das primeiras a usar computadores eletrônicos e ajudou a desenvolver métodos para resolver problemas de física.'],
        ['Grace Hopper', 'grace-hopper.webp', 'Grace Hopper foi uma almirante da Marinha dos Estados Unidos e uma das primeiras programadoras de computadores. Ela desenvolveu o primeiro compilador e popularizou a ideia de linguagens de programação de alto nível, como COBOL.'],
        ['Margaret Hamilton', 'margaret-hamilton.webp', 'Margaret Hamilton foi uma cientista da computação e engenheira de software que liderou a equipe responsável pelo desenvolvimento do software de voo para as missões Apollo. Seu trabalho foi crucial para o sucesso das missões lunares.'],
        ['Marissa Mayer', 'marissa-mayer.webp', 'Marissa Mayer é uma engenheira de software e empresária que foi a primeira mulher a se tornar CEO do Yahoo!. Ela teve um papel fundamental no desenvolvimento de produtos como o Google Search e o Google Maps durante seu tempo na empresa.']
    ];
    ?>

    <div class="galeria">
        
        <?php /*cada item é o conjunto de informações de uma mulher*/  ?>
        <div class="item">
            <img src="<?php echo $arrayMulheres[0][1]; ?>">
            <h3><?php echo $arrayMulheres[0][0]; ?></h3>
            <p><?php echo $arrayMulheres[0][2]; ?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[1][1]; ?>">
            <h3><?php echo $arrayMulheres[1][0]; ?></h3>
            <p><?php echo $arrayMulheres[1][2]; ?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[2][1]; ?>">
            <h3><?php echo $arrayMulheres[2][0]; ?></h3>
            <p><?php echo $arrayMulheres[2][2]; ?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[3][1]; ?>">
            <h3><?php echo $arrayMulheres[3][0]; ?></h3>
            <p><?php echo $arrayMulheres[3][2]; ?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[4][1]; ?>">
            <h3><?php echo $arrayMulheres[4][0]; ?></h3>
            <p><?php echo $arrayMulheres[4][2]; ?></p>
        </div>
    </div>

    
</body>
</html> 