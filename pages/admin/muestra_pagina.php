<?php 

//-----------------------------------------------------------
//error_reporting(0);
//-----------------------------------------------------------

include("valida.php");


    class mostrar extends valida {

        //---------------------------------------------------------------
        public function mostrar_pagina($pagina){

            $valores_login = $this->valida_vals();

            if($valores_login == true){

                //muestra las paginas de administrador
                //-----------------------------------------------------------
                include "encabezado_admin.php";
				include "menu_admin.php";
				//include "menu_lateral.php";
                //-----------------------------------------------------------                

                //-----------------------------------------------------------
                //contenido
                include $pagina;
                //-----------------------------------------------------------
                include "footer_admin.php";
                include "scripts_cont.php";                

            }else{                
                 $this->mensaje_error();                 
            }
            
        }
        //-----------------------------------------      
    }

 ?>