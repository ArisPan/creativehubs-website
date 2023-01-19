/**
 * hover-artefact.js
 * 
 * On desktop, in page 'Catalog', reveal the artefact's title when hovered.
 * 
 */

( function() {

    const postThumbnail = document.getElementsByClassName( 'post-thumbnail' );
    const titleTag = document.getElementsByClassName( 'title-tag' );

    for (let i = 0; i < postThumbnail.length; i++) {
        postThumbnail[i].addEventListener( "mouseover", function() {
            titleTag[i].classList.add('hovered');
        });

        postThumbnail[i].addEventListener( "mouseout", function() {
            titleTag[i].classList.remove('hovered');
        });
    }
}() );