<?php
$dsn = "mysql:host=127.0.0.1;dbname=agapps";
$username = "adilio";
$password = "Adilio{}2019";

// Configuração do PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    // Conectar ao banco de dados
    $pdo = new PDO($dsn, $username, $password, $options);

    $arquivo = "db2.csv";
    $handle = fopen($arquivo, "r");
    $tamanhoPacote = 8192;
    $buff = fgets($handle, $tamanhoPacote);

//     if ($handle) {

//         $i = 0;
//         echo "INSERT IGNORE INTO products (itemId, itemName, price, sales, shopName, commissionRate, commission, productLink, offerLink, image) VALUES
//     ";
//         $dom = new \DOMDocument;
//         // Suprime os erros ao analisar o HTML
//         libxml_use_internal_errors(true);
//         while (!feof($handle)) {
//             $buffer = str_replace('"', '', fgets($handle, $tamanhoPacote));

            
//                 $buffer = explode(';', $buffer);
                

//                 // Carrega o HTML no objeto DOMDocument
//                 $dom->loadHTML(file_get_contents($buffer[7]));

//                 // Restaura a manipulação de erros do libxml
//                 libxml_clear_errors();

//                 // Cria um objeto DOMXPath para fazer consultas XPath
//                 $xpath = new DOMXPath($dom);
//                 //sleep(2);
//                 // Consulta XPath para obter o conteúdo da meta tag og:image
//                 $ogImage = $xpath->query('//meta[@property="og:image"]/@content');
                
//                 $thumb = '';
                
// // if ($ogImage->length > 0) {
//                 //         // Obtém o conteúdo da meta tag og:image
//                 //         $thumb = $ogImage->item(0)->nodeValue;
//                 //     }
//                 // var_dump($ogImage->item(0)->nodeValue);//die;
//                 // echo "{$ogImage->item(0)->nodeValue}<br>";

//                  echo '("' . trim($buffer[0]) . '", "' . trim($buffer[1]) . '", "' . trim($buffer[2]) . '", "' . trim($buffer[3]) . '", "' . trim($buffer[4]) . '", "' . trim($buffer[5]) . '", "' . trim($buffer[6]) . '", "' . trim($buffer[7]) . '", "' . trim($buffer[8]) . '", "' . trim($ogImage->item(0)->nodeValue) . '"),' . "\n";
//                 $i++;
            
//         }

//         fclose($handle);
//     }
    // Preparar e executar a query
    $query = "SELECT * FROM products";
    $stmt = $pdo->query($query);

    // Exibir os resultados
    while ($row = $stmt->fetch()) {

        // echo "Item Id: " . $row['itemId'] . "<br>";
        // echo "Item Name: " . $row['itemName'] . "<br>";
        // echo "Price: " . $row['price'] . "<br>";
        // echo "Sales: " . $row['sales'] . "<br>";
        // echo "Shop Name: " . $row['shopName'] . "<br>";
        // echo "Commission Rate: " . $row['commissionRate'] . "<br>";
        // echo "Commission: " . $row['commission'] . "<br>";
        // echo "Product Link: " . $row['productLink'] . "<br>";
        // echo "Offer Link: " . $row['offerLink'] . "<br>";
        // echo "Image: " . $row['image'] . "<br>";
        // echo "--------------------------------<br>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
// die;
?><!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="title" content="Lojinha do Adilio"/>
        <meta name="description" content="Preços baixos e produtos de qualidade."/>
        <meta name="keywords" content="Loja online,material escolar,material,escolar,loja,papelaria"/>
        <meta name="author" content="Adilio Gobira"/>
        <title>Material Escolar bom, com preços melhores ainda!</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Loja do Adílio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 d-none">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex d-none">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Material Escolar</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Uma lista recheada de preços que cabem no seu bolso</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

<?php

// $arquivo = "dba.csv";
$handle = fopen("dba.csv", "r");
$tamanhoPacote = 8192;
$buff = fgets($handle, $tamanhoPacote);




    $i = 0;
    while (($line = fgets($handle)) !== false) {
        $buffer = preg_replace_callback(
            '[\"([^\"]*)\"]',
            function ($matches) {
                // var_dump($matches);exit;
                return str_replace(',', '|', $matches[0]);
            },
            $line
        );

        $buffer = str_replace('"', '', $buffer);
        if ($buffer !== '') {
            $buffer = array_map(function($str){
                return str_replace('|', ",", $str);
            },explode(',', $buffer));

            var_dump($buffer);die;
        
            ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?=$buffer['3']?> vendidos</div>
                            <!-- Product image-->
                            <a target="_blank" href="<?=$buffer['8'];?>"><img class="card-img-top" src="<?=$buffer['9']?>" alt="Imagem do Produto <?=$buffer['1']?>" /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><a target="_blank" class="nav-link" href="<?=$buffer['8'];?>"><?=$buffer['1']?></a></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <?=$buffer['2'];?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" target="_blank" href="<?=$buffer['8']?>">Ver produto</a></div>
                            </div>
                        </div>
                    </div>
    <?php
// var_dump($buffer);die;
            $i++;
        }
    }

    fclose($handle);


?>



                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Loja o Adilio <?=date('Y')?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            const divToHide = $('div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"]');

                // Verifica se a div foi encontrada antes de tentar ocultá-la

                    // Oculta a div
                    divToHide.fadeOut(function(){
                        $(this).remove();
                    });


        </script>
    </body>
</html>
