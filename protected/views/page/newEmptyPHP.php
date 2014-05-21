<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
function dialogShare(caption,link,descriptions,image){
         FB.ui({
            method: 'feed',
            link: link,
            picture:image,
            caption: caption,
            redirect_uri:link,
            description: $(descriptions).val()
        }, function(response) {
        });   
    }