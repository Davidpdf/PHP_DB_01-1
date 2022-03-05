<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/_config.php";

// Define o título DESTA página.
$page_title = "Faça contato";

// Opção ativa no menu
$page_menu = "contacts";

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

?>

<?php // Conteúdo ?>
<article>

    <h2>Faça contato</h2>
    <p>Preencha todos os campos do formulário abaixo para entrar em contato com a equipe do <strong><?php echo $site_name ?></strong>.</p>

    <form action="<?php $_SERVER['PHP_SELF'] ?>"></form>

</article>

<?php // Barra lateral ?>
<aside>

    <h3>Seções:</h3>

    <ul>
        <li><a href="/sections/front.php">Front-end</a></li>
        <li><a href="/sections/back.php">Back-end</a></li>
        <li><a href="/sections/full.php">Full-stack</a></li>
    </ul>

</aside>

<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_footer.php";

?>