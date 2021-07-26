<?php

$email = $_POST['email'];
$genero = $_POST['genero'];
$profesion = $_POST['profesion'];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.icommarketing.com/Contacts/SaveContact.json/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t\"ProfileKey\":\"NDY0MDYy0\",\n\t\"Contact\":\n\t{\n\t\t\"Email\":\"$email\",\n\t\t\"Genero\":\"$genero\",\n\t\t\"Profesion\" : \"$profesion\",\n\t\t\"cupon\": \"OH2020!\"\n\t}\n}",
  CURLOPT_HTTPHEADER => array(
    "authorization: MTM3NC0zNTI5LW9od2Vhcl91c3I1",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 9cfd456a-bb5c-44bc-f7d7-fea0a12d3748"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
?>
