( function( api ) {

	// Extends our custom "fse-fashion-store" section.
	api.sectionConstructor['fse-fashion-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );