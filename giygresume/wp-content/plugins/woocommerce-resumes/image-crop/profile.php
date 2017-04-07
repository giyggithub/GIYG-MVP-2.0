<?php
/*********************************************************************
 Purpose            : update image.
 Parameters         : null
 Returns            : integer
 ***********************************************************************/

$post = isset($_POST) ? $_POST: array();

switch($post['image_action']) {
    case 'save' :
	   saveAvatarTmp();
	   break;
	default:
	   changeAvatar();
}
	
function changeAvatar() {
    $post = isset($_POST) ? $_POST: array();
    $max_width = "500"; 
    $userId = isset($post['hdn-profile-id']) ? intval($post['hdn-profile-id']) : 0;
    //$path = GIYG_WR_BASEPATH . 'image-crop/images/tmp';

    //$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
    //$accepted_formats = array( 'image/jpeg','image/gif','image/png' );
    $accepted_formats = array( 'image/jpeg', 'image/png' );
    $name = $_FILES['photoimg']['name'];
    $size = $_FILES['photoimg']['size'];
    //$actual_image_name = $name;
    if(strlen($name))
    {
        list($txt, $ext) = explode(".", $name);
        if(in_array( $_FILES['photoimg']['type'], $accepted_formats, true ))
        {
            if($size<((1024*1024)*20)) // Image size max 20 MB
            {                

                $actual_image_name = 'resume_' . $post['resume_id'] . '.' . $ext;
                //$filePath = $path .'/'.$actual_image_name;
                //$tmp = $_FILES['photoimg']['tmp_name'];

                if (!file_exists( GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post['resume_id'] )) {
                    mkdir(GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post['resume_id'], 0777, true);
                    chmod(GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post['resume_id'], 0777);      
                }

                $path = GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post['resume_id'];                     
                $filePath = trailingslashit( $path ) . $actual_image_name;
                $tmp = $_FILES['photoimg']['tmp_name'];
                
                if(move_uploaded_file($tmp, $filePath))
                {
                    $width = getWidth($filePath);
                    $height = getHeight($filePath);
                    //Scale the image if it is greater than the width set above
                    if ($width > $max_width){
                        $scale = $max_width/$width;
                        $uploaded = resizeImage($filePath,$width,$height,$scale);
                    }else{
                        $scale = 1;
                        $uploaded = resizeImage($filePath,$width,$height,$scale);
                    }
                    
                    $final_image = GIYG_WR_BASEURL . 'image-crop/images/resume_' . $post['resume_id'] . '/' . $actual_image_name;

                    require_once(ABSPATH . 'wp-admin/includes/media.php');
                    require_once(ABSPATH . 'wp-admin/includes/file.php');
                    require_once(ABSPATH . 'wp-admin/includes/image.php');  

                    $image = media_sideload_image($final_image, $post['resume_id']);
                    if ( is_wp_error( $image ) ) {
                        echo "failed";
                    } else {
                        $args = array(
                            'post_type' => 'attachment',
                            'posts_per_page' => 1,
                            'post_status' => 'any',
                            'post_parent' => $post['resume_id']
                        );

                        // reference new image to set as featured
                        $attachments = get_posts($args);

                        if($attachments){
                            foreach($attachments as $attachment){
                                set_post_thumbnail($post['resume_id'], $attachment->ID);
                                // only want one image
                                break;
                            }
                        }                       
                    }

                    echo "<img id='photo' file-name='".$actual_image_name."' class='' src='".$final_image.'?'.time()."' class='preview'/>";
                }
                else
                    echo "failed";
            }
            else
                echo "Image file size max 1 MB"; 
        }
        else
            echo "Invalid file format.."; 
    }
    else
        echo "Please select image..!";
    exit;        
}
/*********************************************************************
 Purpose            : update image.
 Parameters         : null
 Returns            : integer
 ***********************************************************************/
function saveAvatarTmp() {
    $post = isset($_POST) ? $_POST: array();
    if( !empty($post['image_name']) && !empty($post['id']) ) {

        $userId = isset($post['id']) ? intval($post['id']) : 0;
        //$path ='\\images\uploads\tmp';
        $t_width = 300; // Maximum thumbnail width
        $t_height = 300;    // Maximum thumbnail height
    		
        if(isset($_POST['t']) and $_POST['t'] == "ajax")
        {
            extract($_POST);

            list($txt, $ext) = explode(".", $post['image_name']);

            if (!file_exists( GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $resume_id . '/crop' )) {
                mkdir(GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $resume_id . '/crop', 0777, true); 
                chmod(GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $resume_id . '/crop', 0777);          
            }

            $srcimagePath = GIYG_WR_BASEPATH . 'image-crop/images/resume_' . $resume_id . '/' . $post['image_name'];
            $cropimagePath = GIYG_WR_BASEPATH . 'image-crop/images/resume_' . $resume_id . '/crop/' . $post['image_name'];

            $size=getimagesize($srcimagePath);

            $ratio = ($t_width/$w1); 
            $nw = ceil($w1 * $ratio);
            $nh = ceil($h1 * $ratio);
            $nimg = imagecreatetruecolor($nw,$nh);

            if( $size["mime"] == 'image/jpeg' )
                $im_src = imagecreatefromjpeg($srcimagePath);

            if( $size["mime"] == 'image/png' )
                $im_src = imagecreatefrompng($srcimagePath);

            if( $size["mime"] == 'image/gif' )
                $im_src = imagecreatefromgif($srcimagePath);

            imagecopyresampled($nimg,$im_src,0,0,$x1,$y1,$nw,$nh,$w1,$h1);

            if( $size["mime"] == 'image/jpeg' )
                imagejpeg($nimg,$cropimagePath,99);

            if( $size["mime"] == 'image/png' )
                imagepng($nimg,$cropimagePath,9);

            if( $size["mime"] == 'image/gif' )
                imagegif($nimg,$cropimagePath);            
            
        }
        $final_image = GIYG_WR_BASEURL . 'image-crop/images/resume_' . $resume_id . '/crop/' . $post['image_name'];

        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');  

        $image = media_sideload_image($final_image, $resume_id);
        if ( is_wp_error( $image ) ) {
            echo "failed";
        } else {
            $args = array(
                'post_type' => 'attachment',
                'posts_per_page' => 1,
                'post_status' => 'any',
                'post_parent' => $resume_id
            );

            // reference new image to set as featured
            $attachments = get_posts($args);

            if($attachments){
                foreach($attachments as $attachment){
                    set_post_thumbnail($resume_id, $attachment->ID);
                    // only want one image
                    break;
                }
            }
            echo $final_image.'?'.time();
            //echo "<img id='photo' class='' src='".$imagePath.'?'.time()."' class='preview'/>";
        }
    } else {
        echo "no_image";
    }
    
    exit(0);    
}
    
/*********************************************************************
 Purpose            : resize image.
 Parameters         : null
 Returns            : image
 ***********************************************************************/
function resizeImage($image,$width,$height,$scale) {

    $size=getimagesize($image);

    $newImageWidth = ceil($width * $scale);
    $newImageHeight = ceil($height * $scale);
    $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);

    if( $size["mime"] == 'image/jpeg' )
        $source = imagecreatefromjpeg($image);

    if( $size["mime"] == 'image/png' )
        $source = imagecreatefrompng($image);

    if( $size["mime"] == 'image/gif' )
        $source = imagecreatefromgif($image);
    
    imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);

    if( $size["mime"] == 'image/jpeg' )
        imagejpeg($newImage,$image,99);

    if( $size["mime"] == 'image/png' )
        imagepng($newImage,$image,9);

    if( $size["mime"] == 'image/gif' )
        imagegif($newImage,$image);

    chmod($image, 0777);
    return $image;
}
/*********************************************************************
 Purpose            : get image height.
 Parameters         : null
 Returns            : height
 ***********************************************************************/
function getHeight($image) {
    $sizes = getimagesize($image);
    $height = $sizes[1];
    return $height;
}
/*********************************************************************
 Purpose            : get image width.
 Parameters         : null
 Returns            : width
 ***********************************************************************/
function getWidth($image) {
    $sizes = getimagesize($image);
    $width = $sizes[0];
    return $width;
}
