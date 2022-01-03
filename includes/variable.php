<?php
function variables()
{
global $wpdb;                   // Datos del sistema
global $wpbc_db_version;        // Version del base de datos - utilizado para las actualizaciones
global $sist_name_file;         // Nombre de la tabla de General del sistema 
global $sist_name_departament;  // Nombre de la tabla de Depart 
global $tabla_crud;             // Nombre de la tabla de sistema
global $user_id;                // ID del usuario
global $status_user;            // Perfil del usuario 
global $user_dirname;
global $upload_dir;
global $dir_file;               // Nombre de archivo a subir
global $global_data;            // Almacenamiento de datos Globales
global $file_name;  
global $wp_session;             // Inicio sesion variables
global $global_data;
/*
echo '*********************************************</br>'; 	
echo '* Variables Globales                        *</br>'; 	
echo '*********************************************</br>'; 	

echo '-> $wpdb : '.$wpdb.'</br>'; 										// Datos del sistema
echo '-> $wpbc_db_version : '.$wpbc_db_version.'</br>';      			// Version del base de datos - utilizado para las actualizaciones
echo '-> $sist_name_file : '.$sist_name_file.'</br>';        	 		// Nombre de la tabla de General del sistema 
echo '-> $sist_name_departament : '.$sist_name_departament.'</br>';  	// Nombre de la tabla de Depart 
echo '-> $tabla_crud : '.$tabla_crud.'</br>';             				// Nombre de la tabla de sistema
echo '-> $user_id : '.$user_id.'</br>';                					// ID del usuario
echo '-> $status_user : '.$status_user.'</br>';            				// Perfil del usuario 
echo '-> $user_dirname : '.$user_dirname.'</br>';
echo '-> $upload_dir : '.$upload_dir.'</br>';
echo '-> $dir_file : '.$dir_file.'</br>';               				// Nombre de archivo a subir
echo '-> $global_data : '.$global_data.'</br>';            				// Almacenamiento de datos Globales
echo '-> $file_name : '.$file_name.'</br>';  
echo '-> $wp_session : '.$wp_session.'</br>';             				// Inicio sesion variables
echo '-> $global_data : '.$global_data.'</br>';
*/

echo '</br>'; 
echo '*********************************************</br>'; 	
echo '* Variables de Sistema                      *</br>'; 	
echo '*********************************************</br>'; 	


echo '-> $wpbc_db_version : '.$wpbc_db_version.'</br>'; 
echo '-> $sist_name_file : '.$sist_name_file.'</br>';
echo '-> $sist_name_departament : '.$sist_name_departament.'</br>'; 

echo '</br>'; 
echo '*********************************************</br>'; 	
echo '* Variables de URL	                      *</br>'; 	
echo '*********************************************</br>'; 	

echo '-> get_site_url() : '.get_site_url().'</br>'; 
echo '-> get_header( \'home\' ) : '.get_header( 'home' ).'</br>';
echo '-> get_header(site_url()) : '.get_header(site_url()).'</br>';
echo '-> site_url() : '.site_url().'</br>';
//echo '-> header(site_url()) : '.header(site_url()).'</br>';
//echo '-> wp_redirect(site_url()) : '.wp_redirect(site_url()).'</br>';

}


?>