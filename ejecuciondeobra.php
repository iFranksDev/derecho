<?php
    require("fpdf/fpdf.php");
    $estado=$_POST['estado'];
    $fecha=$_POST['fecha'];
    $dia = date("d",strtotime($fecha));
    $mes = date("m",strtotime($fecha));
    $anio = date("Y",strtotime($fecha));
    $nombre_primer_parte=$_POST['nombre_primer_parte'];
    $dni_primer_parte=$_POST['dni_primer_parte'];
    $condicion_primer_parte=$_POST['condicion_primer_parte'];
    $mercantil_primer_parte=$_POST['mercantil_primer_parte'];
    $domicilio_mercantil_primer_parte=$_POST['domicilio_mercantil_primer_parte'];
    $nif_primer_parte=$_POST['nif_primer_parte'];
    $fecha_otorgacion_escrituras=$_POST['fecha_otorgacion_escrituras'];
    $dia_fecha_otorgacion_escrituras  = date("d",strtotime($fecha_otorgacion_escrituras));
    $mes_fecha_otorgacion_escrituras  = date("m",strtotime($fecha_otorgacion_escrituras));
    $anio_fecha_otorgacion_escrituras = date("Y",strtotime($fecha_otorgacion_escrituras));
    $estado_notario_escrituras=$_POST['estado_notario_escrituras'];
    $nombre_notario_escrituras=$_POST['nombre_notario_escrituras'];
    $domicilio_mercantil_primer_parte=$_POST['domicilio_mercantil_primer_parte'];
    $nombre_segunda_parte=$_POST['nombre_segunda_parte'];
    $domicilio_segunda_parte=$_POST['domicilio_segunda_parte'];
    $dni_segunda_parte=$_POST['dni_segunda_parte'];
    $descripcion_obra=$_POST['descripcion_obra'];
    $precio_obra=$_POST['precio_obra'];
    $conceptos_obra=$_POST['conceptos_obra'];
    $forma_pago_obra=$_POST['forma_pago_obra'];
    $plazo_obra=$_POST['plazo_obra'];
    $monto_penalizacion_por_dia=$_POST['monto_penalizacion_por_dia'];
    $empresa_penalizacion=$_POST['empresa_penalizacion'];
    $documentacion=$_POST['documentacion'];

    $PDF = new FPDF();
    $PDF->addPage();
    $PDF->setFont("Arial", 'B', 18);
    $PDF->multicell(0, 15, "Contrato de Ejecución de obra",0,"C",false);
    $PDF->setFont("Arial", '', 10);
    $PDF->multicell(0,10,"En $estado , a $dia del mes $mes de $anio" ,0,"R",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"REUNIDOS",0,"L",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"De una parte, D./Dña $nombre_primer_parte con DNI $dni_primer_parte quien interviene en su condición de $condicion_primer_parte y representante legal de la mercantil $mercantil_primer_parte domiciliada en $domicilio_mercantil_primer_parte, NIF $nif_primer_parte, según consta en la escritura de poder otorgada en su favor el $dia_fecha_otorgacion_escrituras-$mes_fecha_otorgacion_escrituras-$anio_fecha_otorgacion_escrituras ante Notario de $estado_notario_escrituras, D./Dña $nombre_notario_escrituras" ,0,"J",false);
    $PDF->multicell(0,4,"De otra parte, D./Dña $nombre_segunda_parte., con domicilio en $domicilio_segunda_parte, titular del DNI $dni_segunda_parte , actuando en su propio nombre y derecho." ,0,"J",false);
    $PDF->multicell(0,4,"Ambas partes, reconociéndose mutuamente la capacidad legal necesaria para otorgar el presente contrato," ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,7,"MANIFIESTAN",0,"L",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"Que ambas partes están interesadas en suscribir el presente contrato de ejecución de obra, que se regirá por las siguientes" ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,8,"CLÁUSULAS" ,0,"C",false);
    $PDF->multicell(0,6,"PRIMERA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"Constituye el objeto del presente contrato la ejecución, por parte de D./Dña $nombre_primer_parte, de la siguiente obra: $descripcion_obra." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"SEGUNDA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"La Empresa se obliga a pagar por la ejecución de la obra descrita en la cláusula anterior, la cantidad de $ $precio_obra MXN." ,0,"J",false);
    $PDF->multicell(0,4,"En el precio convenido se entienden incluidos todos los conceptos tales como: $conceptos_obra" ,0,"J",false);
    $PDF->multicell(0,4,"El precio pactado se entiende cerrado (o abierto), no (o sí) pudiendo sufrir revisiones por diferencias de coste de materiales, ni (o) por aumento del precio de la mano de obra (en caso de estimarse que el precio no es cerrado, determinar las circunstancias por las que puede sufrir variaciones)." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"TERCERA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"El precio se abonará de la siguiente forma: $forma_pago_obra" ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"CUARTA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"D/Dña $nombre_segunda_parte se compromete a realizar la obra, objeto del presente contrato, en el plazo de $plazo_obra, contados a partir de la firma del mismo." ,0,"J",false);
    $PDF->multicell(0,4,"Si, llegada la fecha prevista para la terminación de la obra, ésta no estuviera concluida, D/Dña $nombre_segunda_parte abonará a la Empresa $empresa_penalizacion, en concepto de cláusula penal, una indemnización que asciende a $monto_penalizacion_por_dia MXN por cada día que transcurra desde aquel en que debiera haberse finalizado la obra." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"QUINTA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"La  $empresa_penalizacion facilitará a D/Dña $nombre_primer_parte toda la documentación necesaria para la ejecución del trabajo, especialmente: $documentacion" ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"SEXTA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"D/Dña $nombre_segunda_parte manifiesta, expresamente, estar al corriente en el pago de sus obligaciones fiscales, con la Seguridad Social y con sus propios trabajadores, asumiendo la responsabilidad plena en relación a cuantas obligaciones se deriven de las relaciones laborales que mantenga con el personal encargado de ejecutar la obra contratada." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"SÉPTIMA.-",0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"D/Dña $nombre_segunda_parte garantiza durante el plazo de $plazo_obra la obra realizada, comprometiéndose a subsanar cualquier defecto que pueda surgir durante ese plazo." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"OCTAVA.-",0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"D/Dña $nombre_segunda_parte se compromete a ejecutar por sí misma la obra contratada, no pudiendo subcontratarla a terceros, sin previa autorización expresa de la Empresa." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"NOVENA.-" ,0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"D./Dña $nombre_segunda_parte será responsable de cualquier riesgo que, respecto a la obra objeto de este contrato, se produzca por negligencia inexcusable." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"DÉCIMA.-",0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"El presente contrato podrá rescindirse por cualquiera de las partes sin esperar a su vencimiento, por causa justificada, preavisando, por escrito, a la otra parte con un mes de antelación." ,0,"J",false);
    $PDF->multicell(0,4,"En el caso de que la extinción contractual traiga su causa de un incumplimiento del contrato, la parte que haya incumplido sus obligaciones correrá con todos los gastos que ello origine." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"UNDÉCIMA.-",0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"En todo lo no previsto en el presente contrato se estará a lo establecido en el Código Civil y demás normas de aplicación." ,0,"J",false);
    $PDF->setFont("Arial",'B', 10);
    $PDF->multicell(0,6,"DUODÉCIMA.-",0,"J",false);
    $PDF->setFont("Arial",'', 10);
    $PDF->multicell(0,4,"En relación con cualquier duda o conflicto que surja con motivo de la interpretación o cumplimiento de este contrato, las partes acuerdan someterse a la jurisdicción de los Juzgados y Tribunales, con renuncia al fuero que pudiera corresponderles (también puede pactarse una cláusula de sometimiento a arbitraje)." ,0,"J",false);
    $PDF->multicell(0,4,"Y, en prueba de conformidad, ambas partes extienden y suscriben, por duplicado ejemplar, el presente contrato, en el lugar y fecha referenciados en el encabezamiento." ,0,"J",false);
    $PDF->multicell(0,4,"" ,0,"J",false);
    $PDF->multicell(0,4,"" ,0,"J",false);
    $PDF->multicell(0,4,"" ,0,"J",false);
    $PDF->multicell(0,4,"" ,0,"J",false);
    $PDF->multicell(0,4,"" ,0,"J",false);
    $PDF->multicell(0,4,"" ,0,"J",false);
    $PDF->multicell(0,7,"___________________________               ___________________________" ,0,"C",false);
    $PDF->multicell(0,7,"$nombre_primer_parte                                             $nombre_segunda_parte" ,0,"C",false);
    $PDF->output();
?>