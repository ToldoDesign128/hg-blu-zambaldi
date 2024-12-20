<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    // Modifica l'output della voce di menu (li)
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Verifica se l'elemento è una voce di menu di primo livello con sotto-menu
        if ( in_array( 'menu-item-has-children', $item->classes ) ) {
            // Imposta l'URL del link a '#' (non cliccabile)
            $item->url = '#';
        }

        // Usa il metodo di default per gestire il resto delle voci
        parent::start_el( $output, $item, $depth, $args, $id );
    }

    // Modifica l'output del sotto-menu (ul)
    function start_lvl( &$output, $depth = 0, $args = null ) {
        // Modifica l'output del sotto-menu per avere uno stile specifico
        if ( $depth === 0 ) {
            $output .= '<ul class="sub-menu">';
        }
    }
}
?>