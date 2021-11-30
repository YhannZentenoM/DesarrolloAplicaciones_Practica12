<?PHP 
    switch ($_REQUEST['cod']) {
        case '1':
            echo "<ol>
            <li>Comunicación Social</li>
            <li>Educación Inicial</li>
            <li>Educación Primaria</li>
            <li>Educación Secundaria</li>
            <li>Psicología</li>
            <li>Publicidad y Multimedia</li>
            <li>Teologia</li>
            <li>Trabajo Social</li>
            <li>Hoteleria y Turismo</li>
            </ol>";
            break;
        case '2':
            echo "<ol>
            <li>Administración de empresas</li>
            <li>Ciencia politica y gobierno</li>
            <li>Contabilidad</li>
            <li>Derecho</li>
            <li>Ingenieria comercial</li>            
            </ol>";
            break;
        case '3':
            echo "<ol>
            <li>Arquitectura</li>
            <li>Ingenieria Agronomica</li>
            <li>Ingenieria ambiental</li>
            <li>Ingenieria civil</li>
            <li>Ingenieria de insutria alimentaria</li>
            <li>Ingenieria de minas</li>
            <li>Ingenieria de sistemas</li>
            <li>Ingenieria electronica</li>
            <li>Ingenieria industrial</li>
            <li>Ingenieria mecanica</li>
            <li>Ingenieria mecanica electrica</li>
            <li>MEdicina veterinaria</li>
            </ol>";
            break;
        case '4':
            echo "<ol>
            <li>Enfermeria</li>
            <li>Farmacia y bioquimica</li>
            <li>Ingenieria biotecnologica</li>
            <li>Medicina humana</li>
            <li>Obstetricia</li>
            <li>Odontologia</li>
            </ol>";
            break;
    }
?>