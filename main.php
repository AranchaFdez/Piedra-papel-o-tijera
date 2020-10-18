<?php
define ('PIEDRA1',  "&#x1F91C;");
define ('PIEDRA2',  "&#x1F91B;");
define ('TIJERAS',  "&#x1F596;");
define ('PAPEL',    "&#x1F91A;" );

function mostrarfigura($num){
    $jugador=random_int(1,3);
    $figura=PIEDRA1;
    switch ($jugador){
        case 1:
            if($num==1){
                $figura= PIEDRA1;
                break;
            }elseif ($num==2){
                $figura= PIEDRA2;
                break;
            }else{
                $figura=  PIEDRA1;
                break;
            }
        case 2:
            $figura=  TIJERAS;
            break;
        case 3:
            $figura=   PAPEL;
            break;
    }
    return  $figura;
}
function generarGanador($player1,$player2){
    $ganador;
    if($player1===$player2 || $player1 == PIEDRA1 && $player2 == PIEDRA2){
        $ganador = "¡Empate!";
    }
    else {
        switch ($player1) {
            case PIEDRA1 :
                if($player2== TIJERAS){
                    $ganador="Ha ganado el Jugador 1";
                }else{
                    $ganador="Ha ganado el Jugador 2";
                }
            break;
            case PAPEL:
                if($player2== TIJERAS){
                    $ganador="Ha ganado el Jugador 2";
                } else{
                    $ganador="Ha ganado el Jugador 1";
                }
            break;
            case TIJERAS:
                if($player2== PIEDRA2){
                    $ganador="Ha ganado el Jugador 2";
                }else{
                    $ganador="Ha ganado el Jugador 1";
                }
            break;
        }
    }
    return $ganador;
}
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<meta http-equiv="refresh" content="7">
	<style>
	   body{text-align:center;padding-top:50px;}
	   #letra{font-size:25px;}
	   #icono{font-size:100;}
	</style>
	</head>
		<body >
		<h1> ¡Piedra , papel , tijera! </h1>
		<?php
		$num1=1;
		$num2=2;
	    $player1 =mostrarfigura($num1);
		$player2=mostrarfigura($num2);
		$gana=generarGanador($player1, $player2);
		echo '<b><font id="letra">Jugador 1   &nbsp;&nbsp;&nbsp;&nbsp  Jugador 2 <br/>';
		echo '<font id="icono" >'.$player1.'&nbsp'.$player2.'<br/>';
		echo '<font id="letra">'.$gana.'</b></font>';
		?>
		</body>
</html>