(function($,w){$(function(){

	/**********************************************************************************
		Divi - Disable Premade Layouts - Settings Panel Options
	**********************************************************************************/

	class ddplSettings
	{

		setProperties()
		{

			this.trigger = $( 'a.et-pb-layout-buttons-load' );

		} // end setProperties

	    constructor()
	    {

	        this.setProperties();

	        this.bindEvents();

		} // end constructor

	    bindEvents( self = this )
	    {

	        $( '#normal-sortables' ).on( 'mousedown', this.trigger, () =>
	        {

		      	let checkForPanel = setInterval( () =>
				{

					let loader = $( '#et_pb_loading_animation' ),
						iframe = $( 'div.et_pb_modal_settings' ).find( 'iframe' );

					if ( iframe.length > 0 && 'none' == loader.css( 'display' ) )
					{

						clearInterval( checkForPanel );

						setTimeout( () =>
						{

							$( 'li.et-pb-saved-module' ).children( 'a' ).trigger( 'click' );

							iframe.addClass( 'show' );

						}, 100 );
					} // end if
				}, 10 ); // end setInterval
	        });
	    } // end bindEvents
	} // end class ddplSettings

	new ddplSettings;

});}(jQuery,window));
