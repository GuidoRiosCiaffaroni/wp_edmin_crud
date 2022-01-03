<?php
/******************************************************************************************/
// Archivo : frontend_update.php
// Funcion : Kfp_Update_form() 'funcion para listado de datos'
// Objetos : $wpdb->get_results($query)

/******************************************************************************************/

/*Inicio crear shortcode en la pagina de inicio */
add_shortcode('kfp_ShortCode_Update_form', 'Kfp_Update_form');
/*Fin crear shortcode enla pagina de inicio*/ 

/*Inicio funcion para crear shortcode en la pagina de inicio */



function Kfp_Update_form() 
{

security(); // Funcion de Seguridad 

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


$table_name_file = $wpdb->prefix . $sist_name_file;
$query = 'SELECT * FROM '.$table_name_file.' WHERE status_id = 1 ';
$registros = $wpdb->get_results($query);
$path_uploads = wp_get_upload_dir();
$path_plugins = plugins_url();




        // nombre de los campos de la tabla

        foreach ($registros as $registros) {
            $result .= 
            '
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    '.$registros->nint.'
                                                </td>
                                                <td>
                                                    '.$registros->date.'
                                                </td>
                                                <td>
                                                    <a href="'.$path_uploads['baseurl'].$registros->dir_file_linux.$registros->dir_file.'">Descarga</a>
                                                </td>
                                                <td class="center">
                                                    <a href="'.get_site_url().'">Detalle</a>
                                                </td>
                                                <td class="center">
                                                    <a href="'.get_site_url().'/index.php/delete/?id='.$registros->id.'&key_id='.$registros->key_id.'">Borrar</a>
                                                </td>
                                                <td class="center">
                                                    <a href="'.get_site_url().'/index.php/edit/?id='.$registros->id.'&key_id='.$registros->key_id.'">Actualizar</a>
                                                </td>

                                            </tr>
                                        </tbody>
            ';
        }

        $template = '


                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Rendering engine
                                                </th>
                                                <th>
                                                    Browser
                                                </th>
                                                <th>
                                                    Platform(s)
                                                </th>
                                                <th>
                                                    Engine version
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                            </tr>
                                        </thead>
                                        
{data}


                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Rendering engine
                                                </th>
                                                <th>
                                                    Browser
                                                </th>
                                                <th>
                                                    Platform(s)
                                                </th>
                                                <th>
                                                    Engine version
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                    ';

        return $content.str_replace('{data}', $result, $template);

        echo '</br>';
        









  }







// Ejecutamos nuestro funcion en WordPress
//add_action('wp', 'leer_wpdb');
?>

