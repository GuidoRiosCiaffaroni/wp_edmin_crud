<?php

function security()
{
/*Validacion de usuario*/

        if (get_current_user_id() != NULL) 
        {

            echo "<p class='exito'><b>Usuario validado</b>. Puede ingresar los datos.<p></br>";
            $statususer = 1;
            $user = wp_get_current_user(); // getting & setting the current user 
            $roles = ( array ) $user->roles; // obtaining the role 
            //echo site_url();




        }
        else
        {

            echo "<p class='exito'><b>Usuario no validado</b>.<p>";
            $statususer = 0;
            //get_header( 'home' );
            //get_header(site_url());
            //header(site_url());
            //wp_redirect( site_url() );


        }
}

?>