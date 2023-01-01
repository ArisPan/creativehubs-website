/**
 * span-after-language.js
 * 
 * Mind you, this is a quick way to add a span element between
 * the language switcher and the rest of the menu items.
 * 
 * We know that the first non-language menu item is the third child
 * of #primary-menu <ul> element. So we add a newly created <span> element before it.
 * 
 * If the order of the nav menu changes (or we move the language switcher),
 * the following implementation might need adjusting.
 * 
 * A nicer way whould be to extend the WordPress Walker class like shown here:
 * https://code.tutsplus.com/tutorials/understanding-the-walker-class--wp-25401
 */

( function() {
    const primaryMenu = document.getElementById( 'primary-menu' );

	// Return early if primary menu doesn't exist.
	if ( ! primaryMenu ) {
		return;
	}
    // Get last language item
    var firstNoneLanguageMenuItem = primaryMenu.children[2];

    // Create the new span element.
    var spanElement = document.createElement('span');
    spanElement.setAttribute('id', 'nav-divider');

    // Insert the newly created span element before the first non language element.
    firstNoneLanguageMenuItem.parentNode.insertBefore(spanElement, firstNoneLanguageMenuItem);
}() );
