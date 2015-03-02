/*
Multiple Language Website Starter
Structure for a localized website
version: 1.0.0
author: Joel Laverdure
created: Feb 2015
*/

$(document).ready(function(e){
    
    var bootstrap_enabled = (typeof $().modal == 'function');
    
    // CACHE local copy of the current file name
    var file = SCRIPT_NAME;
    
    if( bootstrap_enabled ){
        console.log("jQuery & Bootstrap ready");
    }
    
    /* Bootstrap nav utility script, 
       finds the links to the current page 
       and gives an active class to the parent element 
    */
    $('a[href="'+file+'"]','#navbar-collapse').parent().addClass('active');
    
    /* Language switching utility script
       finds the links in the language list and
       prefixes the name of the current file name
       the new href now links to the same page in a 
       different language 
    */
    $('a','#lang-list').each(function(){
        var href = $(this).attr('href');
        if( href ){
            $(this).attr('href',file+href);
        }
    });
    
});

function foo(){
    
    console.log("foo called");
}