<?php  
/**
 * Mailbox example
 *
 * @package Dev_Theme
 * @author  team-name
 */

add_action( 'wp_ajax_examplemail', 'examplemail' );
add_action( 'wp_ajax_nopriv_examplemail', 'examplemail' ); 

function examplemail() {

    $to = explode( ", ", $_POST['to'] ); 
    $subject = 'Message from site ' . get_bloginfo( 'name' ); 
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>Name: ' . $_POST['name'] . '</p> 
                    <p>Phone: ' . $_POST['tel'] . '</p>                
                </body>
            </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: " . get_bloginfo( 'name' ) . " <no-reply@example.com> \r\n"; 
    wp_mail($to, $subject, $message, $headers); 
    wp_die();
}

?>