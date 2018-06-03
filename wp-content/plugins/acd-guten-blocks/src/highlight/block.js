import './style.scss';
import './editor.scss';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { InnerBlocks, registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { RichText, BlockControls, AlignmentToolbar, MediaUpload, InspectorControls } = wp.editor;
const { Button, TextControl, PanelBody } = wp.components;

registerBlockType( 'acd/highlight', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __( 'highlight' ), // Block title.
	description: __( 'A large image button with space underneath for a header, subheader and icon' ),
	icon: 'id', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	attributes: {
		header: {
			type: 'array',
			source: 'children',
			selector: 'h2'
		},
		subtitle: {
			type: 'array',
			source: 'children',
			selector: 'p'
		},
		alignment: {
			type: 'string',
			default: 'center'
		},
		mediaId: {
			type: 'number',
		},
		mediaUrl: {
			type: 'string',
			source: 'attribute',
			selector: 'img',
			attribute: 'src',
		},
		linkUrl: {
			type: 'url',
		}
	},
	keywords: [
		__( 'highlight' )
	],

	edit( { attributes, setAttributes, className, focus } ) {
		function onChangeHeader( newHeader ) {
            setAttributes( { header: newHeader } );
		}

		function onChangeSubtitle( newSubtitle ) {
            setAttributes( { subtitle: newSubtitle } );
		}
		
		function onSelectImage( media ) {
			return setAttributes( {
				mediaUrl: media.url,
				mediaId: media.id,
			} );
		};
		

		return [
			<BlockControls key='block-controls'>
				<AlignmentToolbar value={ attributes.alignment } />
			</BlockControls>,
			<InspectorControls key='inspector-controls'>
				<TextControl type='url' label={ __('Link url') } value={ attributes.linkUrl } onChange={ ( newURL) => { setAttributes( { linkUrl: newURL } ) } } />
			</InspectorControls>,
			<section key="highlight" className={ `highlight ${ className }` }>
				<MediaUpload
					onSelect={ onSelectImage }
					type="image"
					value={ attributes.mediaId }
					render={ ( { open } ) => (
						<Button onClick={ open }>
							<span class="image fit"><img src={ attributes.mediaUrl } alt="" />{ attributes.mediaId ? '' : '(Pick Image)' } </span>
						</Button>
					) }
				/>
				<header>
					<RichText
						tagName="h2"
						placeholder="Your header text"
						value={ attributes.header }
						onChange={ onChangeHeader }
					/>
					<RichText
						tagName="p"
						placeholder="Your subtitle text"
						value={ attributes.subtitle }
						onChange={ onChangeSubtitle }
					/>
				</header>
			</section>
		];
	},

	save( { attributes, className } ) {
		return (
			<div className="4u 12u(mobile) card corners">
				<section className="highlight">
					<a href={ attributes.linkUrl }>
						<span className="image fit"><img src={ attributes.mediaUrl } alt="" /></span>
						<header>
							<RichText.Content tagName="h2" className={ className } value={ attributes.header } />
							<RichText.Content tagName="p" className={ className } value={ attributes.subtitle } />
						</header>
					</a>
				</section>
			</div>
		);
	},
} );
