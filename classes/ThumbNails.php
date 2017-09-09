<?
/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Criação: 28/01/2015
*
*  Versao: 1.0
*
*  É proibido sob pena de Lei a utilização ou reprodução de parte ou de todo conteudo desse codigo sem a previa autorização da Intelligy Networks
*  Esse Site é concedido com licença de uso autorizada somente durante o periodo em que o cliente estiver com um contrato de hospedagem vigente
*  com a Intelligy Networks, Não podendo ser replicado, copiado, emprestado ou concedido. 
*/	
class ThumbNails {

	public static function getThumb4Product($catalogoURL, $catalogoPath, $id) {
		
		
		echo '<div class="thumbBox">';
			
				$random    = rand(1,999999999999);
				$file      = "$id".'_a_400x300.png';
				$fileUrl   = $catalogoURL . $file;
				$fileLocal = $catalogoPath . $file;
				if (! file_exists($fileLocal)) { 
					$file      = "nopicture.png";
					$fileUrl   = "./images/nopicture.png";
					$fileLocal = PATH_IMAGES . "/" . $file;
				}
				
				if (file_exists($fileLocal)) { 
				
				echo'<div class="box boxEffect2">';
				echo'	<div class="inner">';
				echo'		<img id="imgThumbPrincipal" src="'. $fileUrl .'"/>';
				echo'	</div>';
				echo'</div>';
				
				echo'<ul class="produtoThumb">';
					
						$file      = "$id".'_a_400x300.png';
						$fileUrl   = $catalogoURL .  $file;
						$fileLocal = $catalogoPath . $file;
						if (file_exists($fileLocal)) { echo '<li id="'. $fileUrl .'"><img height="50" src="'.$fileUrl. '?r=' . $random  .'"</li>'; }
						
						$file      = "$id".'_b_400x300.png';
						$fileUrl   = $catalogoURL .  $file;
						$fileLocal = $catalogoPath . $file;
						if (file_exists($fileLocal)) { echo '<li id="'. $fileUrl .'"><img height="50" src="'.$fileUrl. '?r=' . $random .'"</li>';	}
						
						$file      = "$id".'_c_400x300.png';
						$fileUrl   = $catalogoURL . "". $file;
						$fileLocal = $catalogoPath . "/". $file;
						if (file_exists($fileLocal)) { echo '<li id="'. $fileUrl .'"><img height="50" src="'.$fileUrl . '?r=' . $random .'"</li>';	}
						
						$file      = "$id".'_d_400x300.png';
						$fileUrl   = $catalogoURL . "/". $file;
						$fileLocal = $catalogoPath . "/". $file;
						if (file_exists($fileLocal)) { echo '<li id="'. $fileUrl .'"><img height="50" src="'.$fileUrl . '?r=' . $random  .'"</li>';	}

						
					
				echo '</ul>';
				
				}
				
			echo '</div> <!-- end of ThumbNail -->';
	}
	
}
?>