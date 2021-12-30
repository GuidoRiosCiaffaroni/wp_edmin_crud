<?php
/******************************************************************************************/
// Archivo : frontend_delete.php
// Funcion : Kfp_Delete_form() 'Borrar los datos'
// Objetos : $wpdb->get_results($query)

/******************************************************************************************/

/*Inicio crear shortcode en la pagina de inicio */
add_shortcode('kfp_ShortCode_Delete_form', 'Kfp_Delete_form');
/*Fin crear shortcode enla pagina de inicio*/ 

/*Inicio funcion para crear shortcode en la pagina de inicio */



function Kfp_Delete_form() 
{

/*Variables globales*/
global $wpdb;                   // datos del sistema
global $wpbc_db_version;        // Version del base de datos - utilizado para las actualizaciones
global $sist_name_file;         // Nombre de la tabla de General del sistema 
global $sist_name_departament;  // Nombre de la tabla de Depart 
global $tabla_crud;             // nombre de la tabla de sistema
global $user_id;                // ID del usuario
global $status_user;            // Perfil del usuario 
global $user_dirname;
global $upload_dir;
global $dir_file;               // Nombre de archivo a subir
global $global_data;            // Almacenamiento de datos Globales
global $file_name;  
global $wp_session;             // Inicio sesion variables
global $global_data;

$tabla_crud = $wpdb->prefix . $sist_name_file; // objeto base de datos

$id      = sanitize_text_field($_GET['id']);
$key_id  = sanitize_text_field($_GET['key_id']);


$query = 'SELECT * FROM '.$tabla_crud.' WHERE id = '.$id;
$registros = $wpdb->get_results($query);

// nombre de los campos de la tabla
foreach ($registros as $registros) 
{
    $id = $registros->id;
    $user_id = $registros->user_id; 
    $key_id = $registros->key_id; 
    $nint = $registros->nint;
    $date = $registros->date;
    $dir_file_linux = $registros->dir_file_linux;
    $dir_file_win = $registros->dir_file_win;
    $dir_file = $registros->dir_file;
    $status_id = $registros->status_id;
    $create_at = $registros->create_at;  
}


    $wpdb->update( $tabla_crud, 
        // Datos que se remplazarán
        array( 
            'status_id' => '0'
            ),
            // Cuando el ID del campo es igual al número $key_id
            array( 'key_id' => $key_id )
        );


    $wpdb->insert(
            $tabla_crud,
            array(
                'user_id'           => $user_id,
                'key_id'            => $key_id,
                'nint'              => $nint,
                'date'              => $date,
                'dir_file_linux'    => $dir_file_linux,
                'dir_file_win'      => $dir_file_win,
                'dir_file'          => $dir_file,
                'status_id'         => 0,
            )
        );

        // header("Location: http://localhost/wordpress/insert/");

}

?>