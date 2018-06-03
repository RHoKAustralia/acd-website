import './style.scss';
import './editor.scss';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { RichText, BlockControls, AlignmentToolbar } = wp.editor;

registerBlockType( 'acd/highlight', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __( 'acd-highlight' ), // Block title.
	description: __( 'A large image button with space underneath for a header, subheader and icon' ),
	icon: 'shield', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	attributes: {
		content: {
			type: 'array',
			source: 'children',
			selector: 'p'
		},
		alignment: {
			type: 'string',
			default: 'center'
		}
	},
	keywords: [
		__( 'highlight' )
	],

	edit( { attributes, setAttributes, className, focus } ) {
        function onChangeContent( newContent ) {
            setAttributes( { content: newContent } );
        }

		return (
			<div>
				{ !! focus && <BlockControls key='controls'><AlignmentToolbar value={ attributes.alignment } /></BlockControls> }
				<section className={ `highlight ${ className }` }>
					<span class="image fit"><img src="http://128.199.214.6/wp-content/themes/acd/images/pic02.jpg" alt="" /></span>
					<header>
						<h2>foo</h2>
						<RichText
							tagName="p"
							onChange={ onChangeContent }
							value={ attributes.content }
						/>
					</header>
				</section>
			</div>
		);
	},

	save( { attributes, className } ) {
		return (
			<section className="highlight { props.className }">
				<a href="#">
					<span class="image fit"><img src="http://128.199.214.6/wp-content/themes/acd/images/pic02.jpg" alt="" /></span>
					<header>
						<h2>zzz</h2>
						<RichText.Content tagName="p" className={ className } value={ attributes.content } />
					</header>
				</a>
			</section>
		);
	},
} );
