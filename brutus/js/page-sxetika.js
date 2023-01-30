/**
 * page-sxetika.js
 * 
 * Scripts for buttons and content in About page.
 */

( function() {
    const summaryButton = document.getElementsByClassName( 'summary-button' )[0];
    const partnersButton = document.getElementsByClassName( 'partners-button' )[0];

    const summaryContent = document.getElementsByClassName( 'summary-content' )[0];
    const partnersContent = document.getElementsByClassName( 'partners-content' )[0];

    // Project summary shows by default.
    summaryButton.classList.add( 'active' );
    summaryContent.classList.add( 'active' );

    /**
     * On click, check if the other category/categories are active.
     * If they are, hide them and activate the chosen category.
     * 
     * Only one category's content shows at a time.
     */
    summaryButton.addEventListener( 'click', function() {
        if ( summaryButton.className.includes( 'active' ) ) {
            summaryButton.classList.remove( 'active' );
            summaryContent.classList.remove( 'active' );
        }
        else {
            if ( partnersButton.className.includes( 'active' ) ) {
                partnersButton.classList.remove( 'active' );
                partnersContent.classList.remove( 'active' );
            }
            summaryButton.classList.add( 'active' );
            summaryContent.classList.add( 'active' );
        }
    });

    partnersButton.addEventListener( 'click', function() {
        if ( partnersButton.className.includes( 'active' ) ) {
            partnersButton.classList.remove( 'active' );
            partnersContent.classList.remove( 'active' );
        }
        else {
            if ( summaryButton.className.includes( 'active' ) ) {
                summaryButton.classList.remove( 'active' );
                summaryContent.classList.remove( 'active' );
            }
            partnersButton.classList.add( 'active' );
            partnersContent.classList.add( 'active' );
        }
    });
}() );