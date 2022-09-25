<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 OOP PHP</title>
<style>
      
      body {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         background: #efefef;
        }
      .wrap {
        margin: 6% auto;
		background: rgba(110, 70, 60, 0.4);
		padding: 20px;
		width: 500px;
        height: 100px;
		border-radius: 10px;
		padding-bottom:200px;
		color: black;
		font-family: "segoe-UI","opem-sans",tahoma, arial;
      }

      h3 {
         text-align: center;
         font-weight: 600;
      }

      p {
         background: #eee;
         padding: 2px 10px;
         font-weight: 500;
         font-size: 16px;
         text-align: justify;
         border-radius: 20px;
      }
   </style>
</head>
<body>
   <?php

   interface Hewan
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements Hewan
   {
      public function Makan()
      {
         return "Monyet dapat berjalan<br/>";
      }

      public function Berjalan()
      {
         return "Monyet memakan pisang<br/>";
      }

      public function Bersuara()
      {
         return "Monyet dapat bersuara<br/>";
      }
      public function Sepeda()
      {
         return "Tapi Juga dapat naik sepeda apa<br/>";
      }
   }

   class Lainnya implements Hewan
   {
      public function Makan()
      {
         return "";
      }

      public function Berjalan()
      {
         return "";
      }

      public function Bersuara()
      {
         return "";
      }
      public function Sepeda()
      {
         return "Monyet juga dapat menaiki sebuah sepeda<br/>";
      }
   }

   ?>
   <div class="wrap">
      <h3>Tugas 2 || OOP PHP</h3>
      <p>
         <?php
         $Monyet = new Monyet;
         $Lainnya = new Lainnya;
         echo "<b>Kemampuan Monyet : </b><br/>";
         echo $Monyet->Makan();
         echo $Monyet->Berjalan();
         echo $Monyet->Bersuara();

         echo "<b>Kemampuan Lainnya Apabila Dilatih : </b><br/>";
         echo $Monyet->Sepeda();
         ?>
      </p>
   </div>
</body>
</html>