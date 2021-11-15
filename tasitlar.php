<?php
abstract class tasitlar{
    
    abstract public  function marka($marka);
    abstract public  function model($model);

   public function plakaNo($plakaNo)
   {
       return $plakaNo;
   }
   public function tekerlekSayisi($tekerlekSayisi)
   {
       return $tekerlekSayisi;
   }
   public function kanatAcikligi($kanatAcikligi)
   {
       return $kanatAcikligi;
   }
    
}
class araba Extends tasitlar{ 
    
 public  function marka($marka)
 {
     return $marka;
 }
 public  function model($model)
 {
     return $model;
 }
   
   
    
   }   
class motosiklet Extends tasitlar
{
    
    public function marka($marka){
        
        return $marka;
    }
    public function model($model){
        
        return $model;
    }

    
    
}
class ucak Extends tasitlar{
    
  public function marka($marka)
  {    
      return $marka;
  }
  public function model($model)
  {
      return $model;
  }
 }
   $araba=new araba(); 
   echo "Araba taşıtına ait özellikler şu şekildedir:"."<br>".
        "Marka: ".$araba->marka("Mercedes")."<br>".
        "Model: ".$araba->model("C180")."<br>".
        "Plaka No: ".$araba->plakaNo("06 ARAC 06")."<br>".
        "Tekerlek Sayısı: ".$araba->tekerlekSayisi("4")."<br><br>";
   
    $motosiklet=new motosiklet();
    echo "Motosiklet taşıtına ait özellikler şu şekildedir:"."<br>".
         "Marka: ".$motosiklet->marka("Honda")."<br>".
         "Model: ".$motosiklet->model("Forza 750")."<br>".
         "Plaka No: ".$motosiklet->plakaNo("06 MOTOR 06")."<br>".
         "Tekerlek Sayısı: ".$araba->tekerlekSayisi("2")."<br><br>";
    
    $ucak=new ucak();
    echo "Uçak taşıtına ait özellikler şu şekildedir:"."<br>".
         "Marka: ".$ucak->marka("Airbus")."<br>".
         "Model: ".$ucak->model("A380")."<br>".
         "Kanat Açıklığı: ".$ucak->kanatAcikligi("80m")."<br>";  
?>