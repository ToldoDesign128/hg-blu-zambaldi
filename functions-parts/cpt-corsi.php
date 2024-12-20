<?php
/*Replace = corsi*/

function corsi()
{
    register_post_type(
        'corsi',
        array(
            'labels'                => array(
                'name'              => 'Corsi',
                'singular_name'     => 'Corso',
                'all_items'         => 'Tutte i Corsi',
                'add_new'           => 'Aggiungi un nuovo Corso',
                'add_new_item'      => 'Aggiungi un nuovo Corso',
                'edit_item'         => 'Modifica Corso',
                'new_item'          => 'Nuovo Corso',
                'view_item'         => 'Visualizza Corso',
                'search_items'      => 'Cerca',
                'not_found'         => 'Nessun elemento trovato',
                'not_found_in_trash'=> 'Nessun elemento nel cestino',
                'parent_item_colon' => '',
            ),
            'description'           => 'corsi',
            'public'                => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'show_ui'               => true,
            'query_var'             => true,
            'menu_position'         => 21,
            'menu_icon'             => 'dashicons-plus-alt',
            'rewrite'               => array(
                'slug'              => 'corsi',
                'with-front'        => false,
            ),
            'has_archive'           => false,
            'capability_type'       => 'post',
            'hierarchical'          => false,
            'show_in_rest'          => false, // Gutemberg disattivato
            'supports'              => array('title', 'thumbnail') // Aggiungi 'editor' se necessario
        )
    );
}
add_action('init', 'corsi');