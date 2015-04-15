<?php $file_path = '/var/www/html/seekahoo-api/';
$api_url ='http://50.62.164.79/seekahoo-api/';
$main_path = '/var/www/html/seekahoo_v3/';
function make_thumb($src, $dest) {
		$desired_width = 190;
		/* read the source image */
		$source_image = imagecreatefromjpeg($src);
		$width = imagesx($source_image);
		$height = imagesy($source_image);
		
		/* find the "desired height" of this thumbnail, relative to the desired width  */
		$desired_height = floor($height * ($desired_width / $width));
		
		/* create a new, "virtual" image */
		$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
		
		/* copy source image at a resized size */
		imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
		// Fix Orientation
		$exif = exif_read_data($src);
		//print_r($exif);exit;
            $orientation = @$exif['Orientation'];
    switch($orientation) {
        case 3:
            $virtual_image = imagerotate($virtual_image, 180, 0);
            break;
        case 6:
            $virtual_image = imagerotate($virtual_image, -90, 0);
            break;
        case 8:
            $virtual_image = imagerotate($virtual_image, 90, 0);
            break;
    }
		/* create the physical thumbnail image to its destination */
		imagejpeg($virtual_image, $dest, 90);
		
		return $dest;
	}

?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58312585-1', 'auto');
  ga('send', 'pageview');

</script>