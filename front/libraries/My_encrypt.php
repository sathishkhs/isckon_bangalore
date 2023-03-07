<?php
class MY_Encrypt {
    public function encrypt_key($string){
        // Storing a string into the variable which
        
        // Storingthe cipher method
        $length = "AES-128-CTR";
        $options = 0;
        
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';

        // Storing the encryption key
        $encryption_key = "TG58D32Hb";

        // Using openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($string, $length, $encryption_key, $options, $encryption_iv);

        $base = base64_encode($encryption);

        return $base;
    }

    public function decrypt_key($string){
       
        $s_string = base64_decode($string);
         // Storingthe cipher method
         $length = "AES-128-CTR";
         $options = 0;
       

         // Non-NULL Initialization Vector for decryption
        $decryption_iv  = '1234567891011121';

        // Storing the decryption key
        $decryption_key  = "TG58D32Hb";

        // Using openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt($s_string, $length, $decryption_key, $options, $decryption_iv);

        // Displaying the decrypted string
        return $decryption;
    }
}
?>