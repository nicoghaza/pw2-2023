<?php
 function dataNilai($uts, $uas, $tugas){
	$total = $uts + $uas + $tugas;
	$dt = $total/3;

	return $dt;


 }

	function kelulusan($dt){
		if ($dt >= 55){
            return 'Lulus';
		}else {
			return 'Tidak Lulus';
		}

	}
	
	function grade($dt) {
		if ($dt >= 100){
			return 'A';
		}elseif ($dt >= 84){
			return 'B';
		}elseif ($dt >= 69){
			return 'C';
		}elseif ($dt >= 55){
			return 'D';
		}elseif ($dt >=35){
			return 'E';
		}else{
			return 'I';
		}

	}
	
	function predikat($dt){
		switch (grade($dt)){
            case 'A' :
                return 'Sangat Memuaskan';
                break;
            case 'B' :
                return 'Memuaskan';
                break;
            case 'C' :
                return 'Cukup';
                break;
			case 'D' :
				return 'Kurang';
				break;
			case 'E' :
				return 'Sangat Kurang';
				break;
            default:
                return 'Tidak Ada';
                break;
        }
	}
?>