<?php
function generateRandomPassword() {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@!-()#~`.$";
    for ($i = 1; $i <= 16; $i++) {
        $index = random_int(0, strlen($characters)-1);
        $password .= $characters[$index];
    }
    echo $password;
}
generateRandomPassword();
?>
