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
 * replace outer div's label with the chosen option,
 * update the #filters-option hidden input element's value attribute with <li>'s value
 * and contract their respective <ul>.
 */
( function() {
    // There are 3 .selected-option-label <div> elements.
    // Each selected-option-label element has a .selected-dropdown <ul> element.
    // Each .selected-dropdown element has a varying number of <li> elements.
    const selectedOptionLabel = document.getElementsByClassName( 'selected-option-label' );
    const selectedDropdown = document.getElementsByClassName( 'selected-dropdown' );
    const filterInput = document.getElementsByClassName( 'filter-input' );

    for (let i = 0; i < selectedDropdown.length; i++) {
        // Get all <li> elements for each selected-dropdown <ul> element (ie every option for each dropdown).
        var selectedDropdownItems = selectedDropdown[i].getElementsByTagName( 'li' );

        for (let y = 0; y < selectedDropdownItems.length; y++) {
            selectedDropdownItems[y].addEventListener("click", function() {
                // Since every .selected-option-label <div> element
                // is accompanied by a .selected-dropdown <ul> element,
                // the same value of 'i' index will correspond to each set of them.
                selectedOptionLabel[i].innerHTML = this.innerHTML;
 
                // Update the .filter-input hidden input elements' value attributes with <li>'s data-value.
                filterInput[i].value = this.getAttribute('data-value');

                // We make the (correct) assumption that in order to view and click the <li> elements,
                // .delected-dropdown <ul> elements are expanded. Thus including the 'active' class.
                selectedDropdown[i].classList.remove('active');
                selectedOptionLabel[i].classList.remove('active');  // To rotate the arrow sign.
            });
        }
    }
}() );

/**
 * Every <li> contains a data and class attribute. class holds the filter's category and data the specific filter option. 
 * So for example when <li>'s filter option is 'Arta', we know that the origin filter is included in the search results.
 * 
 * <div class="post-thumbnail"> (i.e. every artefact thumbnail container) 
 * holds origin, period and material values for their respective artefact.
 * 
 * We will be matching <li>'s value (filter option) with the values of the <div>s.'
 * We will be hiding the <div>s that their data attribute doesn't match the filter option.
 */
( function() {
    window.addEventListener( "DOMContentLoaded", function() {

        /**
         * results is a hash table which is a key / value data structure.
         * 
         * We have three filter categories and for each one we will be storing all the <div>s that match the filter option.
         * So results['origin'] holds all the <div>s whose data attribute match <li>'s data attribute..
         * In order to apply more than one filter, we will be performing an AND operation
         * between the different sets of <div>s. The <div>s that are included in all three sets will be visible.
         * All else will be hidden.
         * 
         * key: filter category
         * value: Set of jQuery objects containing DOM Elements.
         * * Set is the collection of choice to facilitate the AND operation via interesection.
         */
        const results = new Object();
        // To start with, all categories contain all <div> elements.
        results['origin'] = new Set( jQuery( '.artefacts-container' ).find( '.post-thumbnail' ) );
        results['period'] = new Set( jQuery( '.artefacts-container' ).find( '.post-thumbnail' ) );
        results['material'] = new Set( jQuery( '.artefacts-container' ).find( '.post-thumbnail' ) );

        var selectedOptionLabels = document.querySelectorAll( '.selected-dropdown li' );
        for (let i = 0; i < selectedOptionLabels.length; i++) {

            jQuery( selectedOptionLabels[i] ).on( 'click', function() {
                // filterClass is either origin, period or material
                var filterClass = this.getAttribute('class');
                // dataValue holds the specific option e.g. Dodoni, 700BC or Copper
                var dataValue = this.getAttribute('data-value');

                // Get all the <div>s whose data attribute match the <li> data attribute 
                results[filterClass] = new Set ( jQuery( '.artefacts-container' ).find( '.post-thumbnail' )
                    .filter ( function() {
                        return jQuery(this).data( filterClass ).indexOf( dataValue ) > -1;
                    })
                );

                // In case of 'Show all' get all the <div>s
                if ( dataValue == 'all' ) {
                    results[filterClass] = new Set( jQuery( '.artefacts-container' ).find( '.post-thumbnail' ) );
                }

                // AND operation between different filter options. It is performed in sets of two.
                var includeSet = intersection( results['origin'], results['period'], results['material'] );
                // We subtract the matching <div>s from the whole. What we are left with, we hide.
                var excludeSet = difference(new Set( jQuery( '.artefacts-container' ).find( '.post-thumbnail' ) ), includeSet);

                // Set to Array to match jQuery object structure
                var include = jQuery( Array.from( includeSet ) );
                var exclude = jQuery( Array.from( excludeSet) );

                // Fade-in every matching <div>
                for (const artefact of include) {
                    jQuery(artefact).fadeIn(200);
                }

                // Hide all visible <div>s that are included in the excluded set.
                var visible = jQuery( '.artefacts-container' ).find( '.post-thumbnail' ).filter( ':visible' );
                for (const artefact of exclude) {
                    visible.filter( artefact )
                    .fadeOut(0);
                }
            });
        }

        // var form = document.getElementById( 'filters-form' );
        // for (let i = 0; i < selectedOptionLabels.length; i++) {
        //     selectedOptionLabels[i].addEventListener("click", function() {
        //         form.submit();
        //     });
        // }
    });

    function intersection(setA, setB, setC) {
        const _intersection = new Set();
        const intermediate_intersection = new Set();
        for (const elem of setB) {
            if (setA.has(elem)) {
            intermediate_intersection.add(elem);
            }
        }

        for (const elem of setC) {
            if (intermediate_intersection.has(elem)) {
                _intersection.add(elem);
            }
        }
        return _intersection;
      }

      function difference(setA, setB) {
        const _difference = new Set(setA);
        for (const elem of setB) {
          _difference.delete(elem);
        }
        return _difference;
      }
}() );

/**
 * When the user starts typing in the search bar,
 * slide search submit button inside the canvas.
 * 
 * We can set a timeout for the submit button.
 * We hide it again 5 seconds after the user has stopped typing.
 */
( function() {
    const hiddenSearchSubmitButton = document.getElementsByClassName( 'hidden-input' );
    const searchInput = document.getElementsByClassName( 'search-input' );
    var timeout = null;
    searchInput[0].addEventListener( "keydown", function() {
        hiddenSearchSubmitButton[0].classList.add( 'active' );
        searchInput[0].classList.add( 'active' );

        // clearTimeout(timeout);
        // timeout = setTimeout( function() {
        //     hiddenSearchSubmitButton[0].classList.remove( 'active' );
        //     searchInput[0].classList.remove( 'active' );
        // }, 5000);
    });
}() );