<?php

if(!empty($_REQUEST['name'])){
     $name=$_REQUEST['name'];
     $tel=$_REQUEST['tel'];
     $comentario=$_REQUEST['comentario'];
     $email=$_POST['email'];
   
        // send email 
        $from = '';
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            $subject='Message From Frandeveloper Contact Form';
            $message="Name: ".$name." <br> Teléfono: ".$tel." <br> Email: ".$email." <br> Comentario: ".$comentario;
       if($success = mail($from , $subject, $message, $headers)){
        echo '<div id="hide"class="alert alert-success" role="alert">
                     Message has been sent.
             </div>';
       } else {
        echo '<div id="hide"class="alert alert-danger" role="alert">
            Message could not be sent. Please try again later.
        </div>';
        // http_response_code(404);
       }

}
?>
<script>
// hide mail response
setTimeout(function() {
    $('#hide').fadeOut('slow');
}, 3000);

  </script>