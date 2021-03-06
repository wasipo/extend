
const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks


registerBlockType( 'cgb/block-single-block', {
    // Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
    title: __( 'single-block - CGB Block', 'CGB' ), // Block title.
    icon: 'shield', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
    category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
    keywords: [
        __( 'single-block — CGB Block' ),
        __( 'CGB Example' ),
        __( 'create-guten-block' ),
    ],

    // The "edit" property must be a valid function.
    edit: function( props ) {
        // Creates a <p class='wp-block-cgb-block-single-block'></p>.
        return 'test';
    },


//
//     <div className={ props.className }>
//     <p>— Hello from the backend.</p>
// <p>
// CGB BLOCK: <code>single-block</code> is a new Gutenberg block
// </p>
// <p>
// It was created via{ ' ' }
// <code>
// <a href="https://github.com/ahmadawais/create-guten-block">
//     create-guten-block
//     </a>
//     </code>.
//     </p>
//     </div>
//

    // The "save" property must be specified and must be a valid function.
    save: function( props ) {
        return 'test';
    },


    //     <div className={ props.className }>
//     <p>— Hello from the frontend.</p>
// <p>
// CGB BLOCK: <code>single-block</code> is a new Gutenberg block.
// </p>
// <p>
// It was created via{ ' ' }
// <code>
// <a href="https://github.com/ahmadawais/create-guten-block">
//     create-guten-block
//     </a>
//     </code>.
//     </p>
//     </div>
//


} );
