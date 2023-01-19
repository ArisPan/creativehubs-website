/**
 * catalog-filters.js
 * 
 * Scripts for filter's bar in page 'Catalog'.
 */

/**
 * On click, adds/removes the active class to all filter blocks.
 * The active class is responsible for rotating the expand arrow image on their right.
 */
( function() {
    // Manages the extra 'Filters' block on mobile.
    const filtersResponsive = document.getElementsByClassName( 'filters-responsive' );
    const filtersContainer = document.getElementsByClassName( 'filters-container' );
    filtersResponsive[0].addEventListener("click", function() {
        if ( filtersResponsive[0].className.includes('active') ) {
            filtersResponsive[0].classList.remove('active');
        }
        else { filtersResponsive[0].classList.add('active'); }

        if ( filtersContainer[0].className.includes('active') ) {
            filtersContainer[0].classList.remove('active');
        }
        else { filtersContainer[0].classList.add('active'); }
    });

    const selectedOptionLabel = document.getElementsByClassName( 'selected-option-label' );
    const selectedDropdown = document.getElementsByClassName( 'selected-dropdown' );
    for (let i = 0; i < selectedOptionLabel.length; i++) {
        selectedOptionLabel[i].addEventListener("click", function() {
            if ( selectedOptionLabel[i].className.includes('active') ) {
                selectedOptionLabel[i].classList.remove('active');
            }
            else { selectedOptionLabel[i].classList.add('active'); }

            if ( selectedDropdown[i].className.includes('active') ) {
                selectedDropdown[i].classList.remove('active');
            }
            else { selectedDropdown[i].classList.add('active'); }
        });
    }
}() );

/**
 * When clicking a filter option (ie Arta from Origin dropdown),
 * replace outer div's label with the chosen option and contract their respective <ul>.
 */
( function() {
    // There are 3 .selected-option-label <div> elements.
    // Each selected-option-label element has a .selected-dropdown <ul> element.
    // Each .selected-dropdown element has a varying number of <li> elements.
    const selectedOptionLabel = document.getElementsByClassName( 'selected-option-label' );
    const selectedDropdown = document.getElementsByClassName( 'selected-dropdown' );

    for (let i = 0; i < selectedDropdown.length; i++) {
        // Get all <li> elements for each selected-dropdown <ul> element (ie every option for each dropdown).
        var selectedDropdownItems = selectedDropdown[i].getElementsByTagName( 'li' );

        for (let y = 0; y < selectedDropdownItems.length; y++) {
            selectedDropdownItems[y].addEventListener("click", function() {
                // Since every .selected-option-label <div> element
                // is accompanied by a .selected-dropdown <ul> element,
                // the same value of 'i' index will correspond to each set of them.
                selectedOptionLabel[i].innerHTML = this.innerHTML;

                // We make the (correct) assumption that in order to view and click the <li> elements,
                // .delected-dropdown <ul> elements are expanded. Thus including the 'active' class.
                selectedDropdown[i].classList.remove('active');
                selectedOptionLabel[i].classList.remove('active');  // To rotate the arrow sign.
            });
        }
    }
}() );

/**
 * On scroll, fix filters bar on window's top.
 */
( function() {
    const filters = document.getElementsByClassName( 'filters' );
    const offsetPosition = filters[0].offsetTop;
    window.onscroll = function() {
        if ( window.pageYOffset > offsetPosition ) {
            filters[0].classList.add( 'filters-fixed' );
        }
        else { filters[0].classList.remove( 'filters-fixed' ); }
    };
}() );
