<?php
/*Replace = defibrillatori*/

function defibrillatori()
{
    register_post_type(
        'defibrillatori',
        array(
            'labels'                => array(
                'name'              => 'Defibrillatori',
                'singular_name'     => 'Defibrillatore',
                'all_items'         => 'Tutti i Defibrillatori',
                'add_new'           => 'Aggiungi un nuovo Defibrillatore',
                'add_new_item'      => 'Aggiungi un nuovo Defibrillatore',
                'edit_item'         => 'Modifica Defibrillatore',
                'new_item'          => 'Nuovo Defibrillatore',
                'view_item'         => 'Visualizza Defibrillatore',
                'search_items'      => 'Cerca',
                'not_found'         => 'Nessun elemento trovato',
                'not_found_in_trash'=> 'Nessun elemento nel cestino',
                'parent_item_colon' => '',
            ),
            'description'           => 'defibrillatori',
            'public'                => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'show_ui'               => true,
            'query_var'             => true,
            'menu_position'         => 20,
            'menu_icon'             => 'dashicons-plus-alt',
            'rewrite'               => array(
                'slug'              => 'defibrillatori',
                'with-front'        => false,
            ),
            'has_archive'           => false,
            'taxonomies'            => array('post_tag', 'defibrillatori_tax'), // Aggiungi 'post_tag'
            'capability_type'       => 'post',
            'hierarchical'          => false,
            'show_in_rest'          => false, // Gutemberg disattivato
            'supports'              => array('title', 'thumbnail') // Aggiungi 'editor' se necessario
        )
    );
}
add_action('init', 'defibrillatori');

//aggiunta categorie
function defibrillatori_taxonomies()
{
    register_taxonomy(
        'defibrillatori_tax',
        'defibrillatori',
        array(
            'labels' => array(
                'name' => 'Categorie',
                'add_new_item' => 'Aggiungi nuova categoria',
                'new_item_name' => "Nuova categoria"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true
        )
    );
}
add_action('init', 'defibrillatori_taxonomies', 0);