<?php
   class Guardar 
   {
       public $ar;
       public $ID;
       public $Nom;
       public $ap;
       public $car;
       public $suel;
       public $imp;
       

        public function GuardarDatos()
        {
            $ID = $_REQUEST['ID'];
            $Nom = $_REQUEST['Nombre'];
            $ap = $_REQUEST['apellido'];
            $car = $_REQUEST['cargo'];
            $suel = $_REQUEST['sueldo']; 
            
            $ar = fopen("datos.txt", "a") or die("Problemas en la creacion");
            fputs($ar, "ID: ");
            fputs($ar, $ID);
            fputs($ar,"\n");
            fputs($ar, "Nombre: ");
            fputs($ar, $Nom);
            fputs($ar,"\n");
            fputs($ar, "Apellido: ");
            fputs($ar, $ap);
            fputs($ar,"\n");
            fputs($ar, "Cargo: ");
            fputs($ar, $car);
            fputs($ar,"\n");
            fputs($ar, "Sueldo: ");
            fputs($ar, $suel);
            fputs($ar,"\n");

            if ($suel >= 15000) {
                $imp = $suel * 0.05;
                fputs($ar, "Impuesto: ");
                fputs($ar, $imp); 
            }else{
                $imp = 0;
                fputs($ar, "Impuesto: ");
                fputs($ar, $imp); 
            }

            fputs($ar,"\n");
            fputs($ar, "<hr>");
            fputs($ar,"\n");
            
            fclose($ar);
        }
        
   }
   
?>