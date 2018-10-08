 <?php
  

function send_LINE($msg){
 $access_token = 'n9uSHRpaFBILO4NSAwBEnr2Hrnt1P5g+l7vZhfurSUEGVPs/6WpMAtoPA+UexNO6zfiDvwmKPBQDnN2W4m+SNWe4901EnSNI1eNjscXOHkwScvhxBtD3MTLjXXbYVQywIzRvzFK+JgOujRgxjm4laQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ua16caf73ee0fcb5f447dbb305f8a6035',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
