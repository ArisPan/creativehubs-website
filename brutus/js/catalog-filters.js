/**
 * catalog-filters.js
 * 
 * On click, adds/removes the active class to all filter blocks.
 * The active class is responsible for rotating the expand arrow image on their right.
 */

( function() {
    const filtersResponsive = document.getElementsByClassName( 'filters-responsive' );
    filtersResponsive[0].addEventListener("click", function() {
        if ( filtersResponsive[0].className.includes('active') ) {
            filtersResponsive[0].classList.remove('active');
        }
        else { filtersResponsive[0].classList.add('active'); }
    });

    const selectedOptionLabel = document.getElementsByClassName( 'selected-option-label' );
    for (let i = 0; i < selectedOptionLabel.length; i++) {
        selectedOptionLabel[i].addEventListener("click", function() {
            if ( this.className.includes('active') ) {
                this.classList.remove('active');
            }
            else { this.classList.add('active'); }
        });
    }
}() );
