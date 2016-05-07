<?php

	//Obtenido de
	//https://github.com/scottfoody/imageUpload/blob/master/imageUpload.php

    // *************************************************************************
    // **** Setup the variables for your script
    // **** These are the only things you need to change in this script
    // *************************************************************************
    // **** Make sure the path you add as the 'filePath' has been created,
    // **** and a subdirectory called 'thumbs' is created underneath it.
    // *************************************************************************
    
    $filePath = "images/"; //This is where your images will be uploaded to.
    $maxFileSize = "50485760"; //Maximum image size (in bytes)
    $thumbWidth = 150; //The width of your thumbnails (in pixels)
    $thumbHeight = 150; //The height of your thumbnals (in pixels)
    $max = "600"; //The maximum size for EITHER dimension for the fullsized image (in pixels)
    // *************************************************************************
    // *************************************************************************
    // *************************************************************************
    // **** You shouldn't need to edit anything below this line execpt for the
    // **** following lines:
    // 
    // Line 40: What to do the image is not a JPEG
    // Line 44: What to do if the upload is too big
    // *************************************************************************
    // *************************************************************************
    // *************************************************************************
	
	//Make sure all of the images are JPG, and of the right size
	for($i=0; $i<count($_FILES['upload']['name']); $i++) {
        
		//Get the temporanry file path
		$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
		//Make sure we have a filepath
		if ($tmpFilePath != ""){
			for($z=0; $z<count($_FILES['upload']['name']); $z++){
                
                //Check if the image is a JPEG, and if not, do something
				if(!($_FILES['upload']['type'][$z] == "image/jpeg")){
                   // >>>> Do something here if the image is not a JPEG 
				}
                
                if($_FILES['upload']['size'][$z] > $maxFileSize){
                    // >>>> Do something here if the image is too big
                }
			}
		}
	}
	//Upload the photos
	for($i=0; $i<count($_FILES['upload']['name']); $i++) {
		//Get the temp file path
		$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
		//Make sure we have a filepath
		if ($tmpFilePath != ""){
            
            //Time since Epoch to append to the file names
            $sinceEpoch = date('U');
			//Complete path
			//$newFilePath = $filePath . $sinceEpoch . $_FILES['upload']['name'][$i];
			$newFilePath = $filePath . $_FILES['upload']['name'][$i];
			

			/*Aqui llamamos a la utileria*/

			include("../utils/conexionDB8.php");
	
			$insertarImagen = "INSERT INTO imagenes (nombre) VALUES ('$newFilePath')";
	
			if(mysqli_query($dbcon, $insertarImagen)){
    	
		    	echo "Imagen Subio Correctamente";
		    	echo "<br/>";
		    	echo "<a href='listarArchivos.php'>Listar Imagenes</a>";

			} else{
		    	echo "Error en la consulta $insertarImagen ";
			}



			
			//Path for the thumbnails
			$newThumbPath = $filePath . "thumbs/" . $sinceEpoch . $_FILES['upload']['name'][$i];
			//Upload the full sized image
			move_uploaded_file($tmpFilePath, $newFilePath);
		}
        //Prepare thumbnail properties
		//Upload the thumbnails

		/*
		$thOriginalImage = ImageCreateFromJPEG($newFilePath); 
		$originalThumbWidth = ImageSx($thOriginalImage); // Original picture width is stored
		$originalThumbHeight = ImageSy($thOriginalImage); // Original picture height is stored
        
        //Aspect ratio check
        $originalAspect = $originalThumbWidth / $originalThumbHeight;
        $thumbAspect = $thumbWidth / $thumbHeight;
        if($originalAspect >= $thumbAspect){
            $newThumbHeight = $thumbHeight;
            $newThumbWidth = $originalThumbWidth / ($originalThumbHeight / $thumbHeight);
        } else {
            $newThumbWidth = $thumbWidth;
            $newThumbHeight = $originalThumbHeight / ($originalThumbWidth / $thumbWidth);
        }
        
        //Create the thumbnail
		$makeNewThumb = imagecreatetruecolor($thumbWidth,$thumbHeight);
        
        //Resize and crop the thumbnail
		imageCopyResampled($makeNewThumb,$thOriginalImage,0 - ($newThumbWidth - $thumbWidth) / 2,0 - ($newThumbHeight - $thumbHeight) / 2,0,0,$newThumbWidth,$newThumbHeight,$originalThumbWidth,$originalThumbHeight);
		ImageJpeg($makeNewThumb,$newThumbPath,75);	
        
        */


		//Get the original dimensions
		list($fullOriginalWidth, $fullOriginalHeight, $type, $attr) = getimagesize("$newFilePath");
        //If the image is larger that you have defined as a MAX size, resize it
		if($fullOriginalWidth > $max || $fullOriginalHeight > $max){
            
			//Find out if the picture is portrait or landscape and process accordingly
			if($fullOriginalWidth > $fullOriginalHeight){
                
				//Landscape image
				$aspectRatio = $max/$fullOriginalWidth;
				$fullNewWidth = round($aspectRatio*$fullOriginalWidth);
				$fullNewHeight = round($aspectRatio*$fullOriginalHeight);
                
			} else {
                
				//Portrait image
				$aspectRatio = $max/$fullOriginalHeight;
				$fullNewWidth = round($aspectRatio*$fullOriginalWidth);
				$fullNewHeight = round($aspectRatio*$fullOriginalHeight);
			}
			
			/*
			$fullOriginalImage = ImageCreateFromJPEG($newFilePath); 
			$fullOriginalWidth = ImageSx($fullOriginalImage); // Original picture width is stored
			$fullOriginalHeight = ImageSy($fullOriginalImage);  // Original picture height is stored
			$makeImage = imagecreatetruecolor($fullNewWidth,$fullNewHeight);                 
			imageCopyResampled($makeImage,$fullOriginalImage,0,0,0,0,$fullNewWidth,$fullNewHeight,$fullOriginalWidth,$fullOriginalHeight);
			ImageJpeg($makeImage,$newFilePath,80);
			*/

		}
	}
?>