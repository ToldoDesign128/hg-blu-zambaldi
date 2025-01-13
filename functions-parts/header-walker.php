<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    // Modifica l'output della voce di menu (li)
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Verifica se l'elemento è una voce di menu di primo livello con sotto-menu
        if ( in_array( 'menu-item-has-children', $item->classes ) ) {
            // Imposta l'URL del link a '#' (non cliccabile)
            $item->url = '#';

            // Aggiungi l'icona SVG dopo il testo
            $item->title .= ' <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
  <path d="M3.5 3.23847e-07L3.5 6.085L0.705 3.29L-1.74846e-07 4L4 8L8 4L7.295 3.295L4.5 6.085L4.5 2.80136e-07L3.5 3.23847e-07Z" fill="#3C3C3C"/>
</svg>';
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