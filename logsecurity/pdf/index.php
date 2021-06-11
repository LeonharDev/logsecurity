<?php
    // autoload do composer
    require __DIR__.'/vendor/autoload.php';

    use Dompdf\Dompdf;
    use Dompdf\Options;

    // instância de options
    $options=new Options();
    $options->setChroot(__DIR__);
    // instância de dompdf
    $dompdf=new Dompdf($options);
    $dompdf->set_option('enable_remote', TRUE);
    $dompdf->set_option('enable_css_float', TRUE);
    $dompdf->set_option('enable_html5_parser', TRUE);

    // carrega o html para dentro da classe
    $dompdf->loadHtmlFile('http://localhost/projetos_indie/LogSecurity/backup.php');
    $dompdf->set_paper('A4', 'landscape');

    // renderizar o arquivo pdf
    $dompdf->render();

    // imprime o conteúdo do arquivo pdf na tela
    header('Content-type: application/pdf');
    echo $dompdf->output();


?>