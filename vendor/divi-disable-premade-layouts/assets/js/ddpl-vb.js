(function($,w){$(function(){

	/**********************************************************************************
		Divi - Disable Premade Layouts - Settings Panel Options
	**********************************************************************************/

	class ddplSettings
	{

		setProperties()
		{

			this.trigger = 'button[data-tip="Load From Library"]';

		} // end setProperties

	    constructor()
	    {

	        this.setProperties();

	        this.bindEvents();

		} // end constructor

	    bindEvents( self = this )
	    {

	        $( '#et-fb-app' ).on( 'mousedown', this.trigger, (e) =>
	        {

		      	let checkForPanel = setInterval( () =>
				{

					let panel  = $( '#et-fb-settings-column' ),
						loader = panel.find( 'div.et-fb-preloader' ),
						iframe = panel.find( 'iframe' );

					if ( iframe.length > 0 && ! loader.hasClass( 'et-fb-preloader__loading' ) )
					{

						clearInterval( checkForPanel );

						setTimeout( () =>
						{

							$( 'a.modules_library' )[0].click();

							iframe.addClass( 'show' );

						}, 100 );
					} // end if
				}, 10 ); // end setInterval
	        });
	    } // end bindEvents
	} // end class ddplSettings

	new ddplSettings;

});}(jQuery,window));
