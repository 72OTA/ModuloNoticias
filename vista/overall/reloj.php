<?php
$diasemana=date('l');
$dia=substr($diasemana,0,3);
$numdia=date('jS');
$num=substr($numdia,0,2);
$nombremes=date('F');
$mes=substr($nombremes,0,3);
$ano=date('Y');
$hora=date('H');
$horax=($hora-'03');
$horas=strlen($horax);
if($horas=='1'){
    $datohora='0'.$horax;
}else{
    $datohora=$horax;
}
$minuto=date('i');
$segundos=date('s');

switch($datohora)
{
    case '-3':
        $datohora='21';
        break;
    case '-2':
        $datohora='22';
        break;
    case '-1':
        $datohora='23';
        break;
}
switch($dia)
{
    case 'Sun':
        $dia='Domingo';
        break;
    case 'Mon':
        $dia='Lunes';
        break;
    case 'Tue':
        $dia='Martes';
        break;
    case 'Wed':
        $dia='Miercoles';
        break;
    case 'Thu':
        $dia='Jueves';
        break;
    case 'Fri':
        $dia='Viernes';
        break;
    case 'Sat':
        $dia='Sabado';
        break;
}

switch($mes)
{
    case 'Jan':
        $mes='Enero';
        break;
    case 'Feb':
        $mes='Febrero';
        break;
    case 'Mar':
        $mes='Marzo';
        break;
    case 'Apr':
        $mes='Abril';
        break;
    case 'May':
        $mes='Mayo';
        break;
    case 'Jun':
        $mes='Junio';
        break;
    case 'Jul':
        $mes='Julio';
        break;
    case 'Aug':
        $mes='Agosto';
        break;
    case 'Sep':
        $mes='Septiembre';
        break;
    case 'Oct':
        $mes='Octubre';
        break;
    case 'Nov':
        $mes='Noviembre';
        break;
    case 'Dec':
        $mes='Diciembre';
        break;
}
?>
   <center>
    <body onload="actualizarhora()">
        <label type="text" id="tiempo"><?php echo $dia," ",$num," ",'de'," ",$mes," ",'del'," ",$ano,","," ",$datohora,":",$minuto,":",$segundos ?></label>
    </body>
    </center>