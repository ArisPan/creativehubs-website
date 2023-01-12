/**
 * catalog-filters.js
 * 
 * On click, adds/removes the active class to all filter blocks.
 * The active class is responsible for rotating the expand arrow image on their right.
 */

( function() {
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
