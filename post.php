<?php
$name = $email = $phone = $text="";
$nameErr = $emailErr = $phoneErr = $textErr = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  if (empty($_POST["name"])||empty($_POST["email"])||empty($_POST["phone"])||empty($_POST["text"])) {
    $nameErr = "* Brak dandych do wyświetlenia";
  } else {
  showFormData();
  }

}
function showFormData() {
  $nameErr ="" ."Dziekujemy za wyslanie formularza". "<br>\n";
  $data= array('name' =>$_POST['name'] ,
  'email' =>$_POST['email'] ,'phone' =>$_POST['phone'] ,
  'text' =>$_POST['text'] );
  echo $nameErr;
  foreach( $data as $key => $value ) {
    echo $key.":".$value."<br>\n";
  }
}

?>
